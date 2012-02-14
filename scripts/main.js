$(document).ready( function(){
	main_init();
	function main_init() {
	/****************************
	*		STATS INIT
	*****************************/
	$("#results").hide();
	$(".up").hide();
	$("#values").hide();
	$("#sorted").hide();
	$("#info_box").hide();	
	$("#quartiles").hide();
//	$("#zdiv, #zdiv *").css("opacity", "0");
	$("#zdiv").hide();
	$("#main").css({
		width: '350px',
		height: '210px'
	});
	var repeat = false;
	var current_info = "";
	var last_info = "";
	
	/*****************************
	*		PROBABILITY INIT
	******************************/
	$("#simple_event_info").hide();
	$("#sample_space_info").hide();
	$("#probability_info").hide();
	$("#compound_events_info").hide();
	$("#conditional_info").hide();
	$("#additive_rule_info").hide();
	$("#independent_info").hide();
	$("#permutation_rule_info").hide();
	$("#partitions_rule_info").hide();
	$("#combinations_rule_info").hide();
	$("#examples_info").hide();
	
	/*****************************
	*		GET RESULTS
	******************************/
	var dataset = new Array();
	var data;
	var length;
	var odd = 0;
	var i = 0;
	var z = 0;
	var zdiv_width = 160;
	
	$("#submit").click( function() {
		dataset = get_array();
		dataset = sort_array(dataset);
		length = dataset.length;
		odd = ( ( length % 2 ) == 0 ) ? 0 : 1;
		get_size();
		get_mean(dataset, length);
		get_median(dataset, odd);
		get_mode(dataset, length);
		get_range(dataset);
		get_variance(dataset);
		get_deviation(dataset);
		get_upper(dataset);
		get_lower(dataset);
		get_mid(dataset);
		get_inter();
		get_upper_inner();
		get_lower_inner();
		get_upper_outer();
		get_lower_outer();
		expand();		
	});
	
	$("#zsubmit").click( function() {
		z = parseFloat($("#z_input").val());
		get_zvalue(z);
	});


	$("#ztoggle").click( function() {
		zslider();
	});
	
	$(".down").click( function() {
		var element = $(this).attr('icon');
		current_info = $(this).attr('icon');
		var content = $("#"+element).html();
//		var tog_result = $("#info_box").slideToggle();
		if ( $("#info_box").hasClass('tog_off') ) {
			$("#info_box").fadeIn();
			$("#info_box").removeClass('tog_off');
			last_info = current_info;			
		} else {
			if ( current_info != last_info ) {
				$("#info_box").fadeOut( function() {
					$("#info_content").html(content);
					$("#info_box").fadeIn();
					last_info = current_info;					
				});
			} else {
				$("#info_box").fadeOut();
				$("#info_box").addClass('tog_check');
				last_info = "";
			}
		}
	});
	
	// probably what would work better is to add an image, and toggle on the image click
	// replace the image orientation when the box is slid out, or slid in.
	// this way the div can contain all of the elements, not have two seperate elements 
	// trying to space off each other animating 
	function zslider() {
	  if ( $("#zdiv").hasClass('out') ) {
	  	$("#zdiv, #zdiv *").animate({
	  		opacity: 0,
		}, 500, function() {
			$("#zdiv").removeClass("out");
			$("#zbox").animate({
				left: "-20"
			}, 500, function() {});	
		});
	  } else {
	  	$("#zbox").animate({
	  		left: "-225"
	  	}, 500, function() {
			$("#zdiv").addClass('out');					
	  		$("#zdiv, #zdiv *").animate({
	  			opacity: 1
	  		}, 500, function() {});
	  	});
	  }
	}
	
	function expand() {
		$("#main").animate({
			width: '1000'
		}, 500, function() {
			$("#sorted_data").val(dataset.join(", "));
			$("#sorted").fadeIn( function(){
				$("#values").fadeIn( function() {
					$("#results").fadeIn( function() {
						$("#zdiv").fadeIn( function() {
							$("#quartiles").fadeIn();							
						})
					});
				});
			});
		}
	)};
	
	
//$("#zdiv").removeClass('out');
//zslider();
	
	function get_array() {
		dataset = new Array();
		data = $("#dataset").val();
		data = $.trim(data);
		dataset = data.split("\n");
		return dataset;
	}
	
	function sort_array(dataset) {
		dataset = dataset.sort( function(a,b) { return a-b; });
		return dataset;
	}
		
	$("#dataset").focus( function(){
		var set = "";
		if ( (set = $(this).val()) == "Enter values separated by carraige return")
			$(this).val("");
	});
	
	$("#z_input").focus( function() {
		var zset = "";
		if ( (zset = $(this).val()) == "Enter data point" )
			$(this).val("")
		
	});
	
	$(".show_info").click( function() {
		var element = $(this).attr('icon');
		current_info = $(this).attr('icon');
		$("#"+element).slideToggle();
	});
	
	$("#clear").click( function(){
		$("#dataset").val("Enter values separated by carraige return");
		$("#z_input").val("Enter data point");
//		$("#z_value").val("");
//		if ( $("#zdiv").hasClass("out") ) 
//			zslider();
		$("#quartiles").fadeOut( function() {
			$("#info_box").fadeOut( function() {
				$("#results").fadeOut( function() {
					$("#zdiv").fadeOut( function() {
						$("#values").fadeOut( function() {
							$("#sorted").fadeOut( function(){
								$("#main").animate({
									width: '350'
								}, 500, function() {});			
							});
						});	
					});	
				});	
			});
		});
	});

	$("#zclear").click( function() {
		$("#z_input").val("Enter data point");
		$("#z_value").val("");
	})
	/*****************************
	*		RESULT FUNCTIONS
	******************************/
	/*
	$(".down").click( function() {
		var info_down = $(this).attr("icon");
		$('#'+info_down).fadeIn();
	});
	
	$(".up").click( function() {
		var info_up = $(this).attr("info");
		$('#'+info_up).fadeOut();
	});
	*/
	function get_size() {
		$('#size').val(length);
	}
	
	function get_mean(dataset) {
		var j = 0;
		var mean = 0.0;
		var sum2 = 0.0;
		while ( j < length ) {
			mean += parseFloat(dataset[j++]);
		}
		mean /= length;
		$('#mean').val(mean);
	}
	
	function get_median(dataset, odd) {
		var location;
		var median1, median2;
		if ( odd == 1 ) {
			location = ( length + 1 ) / 2;
			median_value = parseFloat(dataset[location-1]);
		} else {
			location = ( length ) / 2;
			median1 = parseFloat(dataset[location-1]);
			median2 = parseFloat(dataset[location]);
			median_value = ( median1 + median2 ) / 2;
		}
		$('#median').val(median_value);
	}
	
	function get_mode(dataset, length) {
		if(dataset.length == 0)
			return null;
		var multflag = false;
		var modeMap = {};
		var modeArr = {};
		var maxEl = dataset[0], maxCount = 1;
		for(var k = 0; k < dataset.length; k++) {
			var el = dataset[k];
			if(modeMap[el] == null)
				modeMap[el] = 1;
			else
				modeMap[el]++;  
			if(modeMap[el] >= maxCount) {
				if(modeMap[el] == maxCount) {
					modeArr[k] = el;
					multflag = true;
				} else {
				maxEl = el;
				maxCount = modeMap[el];
				multflag = false;
				}
			}
		}
		if ( multflag != true )
			$('#mode').val(maxEl);
	}
	
	var min = 0;
	var max = 0;
	var ele_sum = 0.0;
	var ele_sum2 = 0.0;
	var deviation = 0.0;
	var upper = 0;
	var lower = 0;
	var mid = 0;
	var inter = 0;
	var zmean = 0;
	var zdeviation = 0;
	var zscore = 0;
	var upper_inner = 0.0;
	var lower_inner = 0.0;
	var upper_outer = 0.0;
	var lower_outer = 0.0;
				
	function get_range(dataset) {
		min = parseFloat(dataset[0]);
		max = parseFloat(dataset[0]);
		for ( var r = 0; r < dataset.length; r++ ) {
			min = ( parseFloat(dataset[r]) < min ) ? parseFloat(dataset[r]) : min;
			max = ( parseFloat(dataset[r]) > max ) ? parseFloat(dataset[r]) : max;
		}
		range = max - min;
		$('#range').val(range);
	}
	
	function get_variance(dataset) {
		ele_sum = 0.0;
		ele_sum2 = 0.0;
		for ( var v = 0 ; v < dataset.length ; v++ ) {
			ele_sum2 += Math.pow((parseFloat(dataset[v])),2);
			ele_sum += parseFloat(dataset[v]);
		}
		$("#sum").val(ele_sum);
		$("#sum2").val(ele_sum2);
		variance =  ( ele_sum2 - Math.pow(ele_sum, 2) / dataset.length ) / ( dataset.length - 1);
		$("#variance").val(variance);
	}
	
	function get_deviation(dataset) {
		deviation = Math.sqrt($("#variance").val());
		$("#deviation").val(deviation);
	}
	
	function get_upper(dataset) {
		upper = .75 * (dataset.length + 1);
		$("#u_quart_loc").val(upper);
		upper = Math.ceil(upper);
		$("#u_quart_val").val(parseFloat(dataset[upper-1]));
	}
	
	function get_lower(dataset) {
		lower = .25 * (dataset.length + 1);
		$("#l_quart_loc").val(lower);
		lower = Math.ceil(lower);
		$("#l_quart_val").val(parseFloat(dataset[lower-1]));
	}
	
	function get_mid(dataset) {
		mid = $("#median").val();
		$("#m_quart_val").val(mid);
	}
	
	function get_inter() {
		inter = parseFloat($("#u_quart_val").val()) - parseFloat($("#l_quart_val").val());
		$("#inter").val(parseFloat(inter));
	}
	
	function get_zvalue(z) {
		zmean = $('#mean').val();
		zdeviation = $('#deviation').val();
		zscore = ( z - zmean ) / zdeviation;
		$("#z_value").val(zscore);
	}
	
	function get_upper_inner() {
		upper_inner = parseFloat($("#u_quart_val").val()) + 1.5 * parseFloat($("#inter").val());
		$("#u_inner_fence").val(upper_inner);
	}
	
	function get_lower_inner() {
		lower_inner = parseFloat($("#l_quart_val").val()) - 1.5 * parseFloat($("#inter").val());
		$("#l_inner_fence").val(lower_inner);
	}
	
	function get_upper_outer() {
		upper_outer = parseFloat($("#u_quart_val").val()) + 3 * parseFloat($("#inter").val());
		$("#u_outer_fence").val(upper_outer);
	}
	
	function get_lower_outer() {
		lower_outer = parseFloat($("#l_quart_val").val()) - 3 * parseFloat($("#inter").val());
		$("#l_outer_fence").val(lower_outer);
	}
}
});
