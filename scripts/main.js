$(document).ready( function(){
	main_init();
	function main_init() {
	$("#results").hide();
	$(".up").hide();
	$("#values").hide();
	$("#sorted").hide();	
	$("#zdiv, #zdiv *").css("opacity", "0");
	var repeat = false;
	
	$("#main").css({
		width: '350px',
		height: '210px'
	});
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
		expand();		
	});
	
	$("#zsubmit").click( function() {
		z = parseFloat($("#z_input").val());
		get_zvalue(z);
	});


	$("#ztoggle").click( function() {
		zslider();
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
						$("#zdiv").removeClass('out');
						zslider();
					});
				});
			});
		}
	)};
	
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
	
	$("#clear").click( function(){
		$("#dataset").val("Enter values separated by carraige return");
		$("#z_input").val("Enter data point");
		$("#z_value").val("");
		if ( $("#zdiv").hasClass("out") ) 
			zslider();
		$("#results").fadeOut( function() {	
			$("#values").fadeOut( function() {
				$("#sorted").fadeOut( function(){
					$("#main").animate({
							width: '350'
						}, 500, function() {});			
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
	$(".down").click( function() {
		var info_down = $(this).attr("icon");
		$('#'+info_down).fadeIn();
	});
	
	$(".up").click( function() {
		var info_up = $(this).attr("info");
		$('#'+info_up).fadeOut();
	});
	
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
	
	function get_range(dataset) {
		var min = parseFloat(dataset[0]);
		var max = parseFloat(dataset[0]);
		for ( var r = 0; r < dataset.length; r++ ) {
			min = ( parseFloat(dataset[r]) < min ) ? parseFloat(dataset[r]) : min;
			max = ( parseFloat(dataset[r]) > max ) ? parseFloat(dataset[r]) : max;
		}
		var range = max - min;
		$('#range').val(range);
	}
	
	function get_variance(dataset) {
		var ele_sum = 0.0;
		var ele_sum2 = 0.0;
		for ( var v = 0 ; v < dataset.length ; v++ ) {
			ele_sum2 += Math.pow((parseFloat(dataset[v])),2);
			ele_sum += parseFloat(dataset[v]);
		}
		$("#sum").val(ele_sum);
		$("#sum2").val(ele_sum2);
		var variance =  ( ele_sum2 - Math.pow(ele_sum, 2) / dataset.length ) / ( dataset.length - 1);
		$("#variance").val(variance);
	}
	
	function get_deviation(dataset) {
		var deviation = Math.sqrt($("#variance").val());
		$("#deviation").val(deviation);
	}
	
	function get_upper(dataset) {
		var upper = .75 * (dataset.length + 1);
		$("#u_quart_loc").val(upper);
		upper = Math.ceil(upper);
		$("#u_quart_val").val(dataset[upper-1]);
	}
	
	function get_lower(dataset) {
		var lower = .25 * (dataset.length + 1);
		$("#l_quart_loc").val(lower);
		lower = Math.ceil(lower);
		$("#l_quart_val").val(dataset[lower-1]);
	}
	
	function get_mid(dataset) {
		var mid = $("#median").val();
		$("#m_quart_val").val(mid);
	}
	
	function get_inter() {
		var inter = $("#u_quart_val").val() - $("#l_quart_val").val();
		$("#inter").val(inter);
	}
	
	function get_zvalue(z) {
		var zmean = $('#mean').val();
		var zdeviation = $('#deviation').val();
		var zscore = ( z - zmean ) / zdeviation;
		$("#z_value").val(zscore);
	}
}
});
