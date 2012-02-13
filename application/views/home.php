<!-- Special content divs -->
<div id="info_box" class="box togcheck" style="position: absolute; top: 600px; left: 100px; width: 318px;">
	<h2></h2>
	<div id="info_content" style="font-weight: normal; color: white;"></div>
</div>
<br /><br />
<div class="hero-unit">
	<h1>Welcome to <span class="green">Stat:on</span></h1>
</div>

<div id="zbox" style="position: absolute; top: 407px; left: 258px; z-index: 0; display: inline-block;">
	<div id="zdiv" class="span3 box">
		<h2 id="ztoggle" style="cursor: pointer; width: 86px;">Z Value</h2>
		<div>
			<input type="text" id="z_input" value="Enter data point" />
		</div>
		<div class="btn_margin">
			<button id="zsubmit" class="btn info">Submit</button>
			<button id="zclear" class="btn">Clear</button>	
		</div>
	</div>
</div>

<!-- Standard content divs -->
<div id="main" class="row box">
	<div class="span6">
		<h2>Input Data Set</h2>
<textarea id="dataset">Enter values separated by carraige return</textarea>
		<div class="btn_margin">
			<button id="submit" class="btn info">Submit</button>
			<button id="clear" class="btn">Clear</button>	
		</div>
	</div>
	<div id="sorted" class="span6" style="margin-left: 50px;">
		<h2>Sorted Data Set</h2>
<textarea id="sorted_data">
</textarea>
	</div>
	<div id="values" class="span4" style="margin-left: 45px;">
		<h2>Helpful Values</h2>
		<div>
			<label style="width: 20px;">Sum: </label>
			<input type="text" id="sum" value="" style="margin-left: 20px;"/>
		</div>
		<div>
			<label style="width: 20px;">Sum&sup2;: </label>
			<input type="text" id="sum2" value="" style="margin-left: 20px;"/>
		</div>
	</div>
</div>
<div class="row box" id="results" style="width: 680px; margin: 30px 0 30px 300px;">	
	<h2>Results</h2>
	<div class="span6" style="position: relative;">	
		<div>
			<label>Sample size: </label>
			<input type="text" id="size" val="" />
			<div class="info inline down" icon="size_info">
				<img src="/css/images/toggle.png"  class="toggle" />
				<div class="up" id="size_info" info="size_info" style="margin: 5px 40px; color: white;">
					<h2>Sample Size [ n ]</h2>
					<p class="inline">This represents the number of elements in the data set. A quick and easy test to ensure you have entered in the correct number of data points is to compare this value to the expected data set size</p>
				</div>				
			</div>
		</div>
		<div>
			<label>Mean y&#772:</label>
			<input type="text" id="mean" val="" />
			<div class="info inline down" icon="mean_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="mean_info" info="mean_info" style="margin: 5px 40px; color: white;">
			<h2>Mean [ y&#772 ]</h2>
			<p class="inline">Sum of the observation values divided by the sample size or the number of observations:</p><br /><br />
			<img src="/css/images/formulas/mean.png" height="135" width="155" style="margin-left: 80px;"/>
		</div>
		<div>
			<label>Median m: </label>
			<input type="text" id="median" val="" />
			<div class="info inline down" icon="median_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="median_info" info="median_info" style="margin: 5px 40px; color: white;">
			<h2>Median [ m ]</h2>
			<p class="inline">The mid-point of a data set when the set of observations is placed in ascending order.<br /><br />
			<em>Note: The median does not have to be a point in the data set.</em></p><br /><br />
			<p class="inline">If the number of observations (n) is odd, then the median (m) is the center value at location (n+1)/2<br /><br />
			If (m) is even, then the median is the mean of the two middle values</p>
		</div>
		<div>
			<label>Mode: </label>
			<input type="text" id="mode" val="" />
			<div class="info inline down" icon="mode_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="mode_info" info="mode_info" style="margin: 5px 40px; color: white;">
			<h2>Mode</h2>
			<p class="inline">The value in a data set which occurs with the greatest frequency, the peak point of the relative frequency distribution<br /><br />
			<em>Note: A data set may have more than one mode or a mode may not exist.</em></p>
		</div>
	</div>
	<div class="span6">
		<div>
			<label>Range: </label>
			<input type="text" id="range" val="" />
			<div class="info inline down" icon="range_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="range_info" info="range_info" style="margin: 5px 40px; color: white;">
			<h2>Range</h2>
			<p class="inline">The difference between the largest and the smallest measurement in a data set.</p>
		</div>
		<div>
			<label>Variance S&sup2;:</label>
			<input type="text" id="variance" val="" />
			<div class="info inline down" icon="variance_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="variance_info" info="variance_info" style="margin: 5px 40px; color: white;">
			<h2>Variance [ S&sup2; ]</h2>
			<p class="inline">The variation of a data set in terms of the amounts by which the observations deviate from the mean</p>
			<img src="/css/images/formulas/variance.png" height="170" width="275" style="margin-left: 15px;" />
		</div>
		<div class="margin">
			<label>Standard Deviation: </label>
			<input type="text" id="deviation" val="" />
			<div class="info inline down" icon="deviation_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>	
		</div>
		<div class="up" id="deviation_info" info="deviation_info" style="margin: 5px 40px; color: white;">
			<h2>Standard Deviation</h2>
			<p class="inline">Standard deviation is the positive square root of the variance.  The variability in standard deviation is simpler to interpret compared to the variance because the units of the standard deviation are the same as the units of the data.</p><br />
			<p class="inline"><br />For a mound shaped distribution: <br />
				<ul>
					<li style="color: yellow;">Approx. 68.3% of observations will lie within y&#772 &#8723; <em>s</em> for samples and &mu; &#8723; &sigma;  for populations.</li>
					<li style="color: yellow;">Approx. 95.45% of observations will lie within y&#772 &#8723; <em>s</em> for samples and &mu; &#8723; 2&sigma;  for populations.</li>
					<li style="color: yellow;">Approx. 99.73% of observations will lie within y&#772 &#8723; <em>s</em> for samples and &mu; &#8723; 3&sigma;  for populations.</li>
				</ul>
			</p>
		</div>
		<div class="margin">
			<label>Z Value: </label>
			<input type="text" id="z_value" val="" />
			<div class="info inline down" icon="z_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>	
		</div>
		<div class="up" id="z_info" info="z_info" style="margin: 5px 40px; color: white;">
			<h2>Z Value</h2>
			<p class="inline">The location of an observation relative to the mean (i.e., the distance of the observation above or below the mean) measured in units of standard deviation.</p><br /><br />
			<p class="inline">If Z is a negative value, then the  observation is below the mean while if Z is a positive value, then the observation is above the mean.</p><br /><br />
			<p class="inline">Rule of Thumb: If the absolute value of the z-score is greater than 3, the observation is probably an outlier.</p>
			<img src="/css/images/formulas/zvalue.png" height="115" width="175" style="margin-left: 60px;"/>
		</div>
	</div>	
</div>
<div class="row box" id="quartiles" style="width: 680px; margin: 0 0 30px 300px;">
	<h2>Quartiles</h2>
	<div class="span6">
		<div class="margin">
			<label>Upper Quartile Loc: </label>
			<input type="text" id="u_quart_loc" val="" />
			<div class="info inline down" icon="u_quart_loc_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>	
			<div class="up" id="u_quart_loc_info" info="u_quart_loc_info" style="margin: 5px 40px; color: white;">
				<h2>Upper Quartile Location</h2>
				<p>This value represents the index number of the data set whose value is the Upper Quartile Value<br /><br />
				Q<sub>U</sub> = &frac34; * ( n + 1 )</p>
			</div>
			
		</div>
		<div class="margin">
			<label>Upper Quartile Value: </label>
			<input type="text" id="u_quart_val" value="" />
			<div class="info inline down" icon="upper_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>	
		</div>
		<div class="up" id="upper_info" info="upper_info" style="margin: 5px 40px; color: white;">
			<h2>Upper Quartile [ Q<sub>U</sub> ]</h2>
			<p class="inline">Provides location of 75th percentile.<br /><br />dataset[ Q<sub>U</sub> ]</p>
		</div>
		<div class="margin">
			<label>Mid Quartile Value: </label>
			<input type="text" id="m_quart_val" value="" />
			<div class="info inline down" icon="mid_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>	
		</div>
		<div class="up" id="mid_info" info="mid_info" style="margin: 5px 40px; color: white;">
			<h2>Mid Quartile [ Q<sub>M</sub> ]</h2>
			<p class="inline">The numerical value midway between Q<sub>U</sub> and Q<sub>L</sub><br /><br />Q<sub>M</sub> = the median</p>
		</div>
		<div class="margin">
			<label>Lower Quartile Loc: </label>
			<input type="text" id="l_quart_loc" value="" />
			<div class="info inline down" icon="l_quart_loc_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>	
			<div class="up" id="l_quart_loc_info" info="l_quart_loc_info" style="margin: 5px 40px; color: white;">
				<h2>Lower Quartile Location</h2>
				<p>This value represents the index number of the data set whose value is the Lower Quartile Value<br /><br />
				Q<sub>L</sub> = &frac14; * ( n + 1 )</p>
			</div>
		</div>
		<div class="margin">
			<label>Lower Quartile Value: </label>
			<input type="text" id="l_quart_val" value="" />
			<div class="info inline down" icon="lower_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>	
		</div>
		<div class="up" id="lower_info" info="lower_info" style="margin: 5px 40px; color: white;">
			<h2>Lower Quartile Value [ Q<sub>L</sub> ]</h2>
			<p class="inline">Provides location of 25th percentile.<br /><br />dataset[ Q<sub>L</sub> ]</p>
		</div>
	</div>
	<div class="span6">
		<div class="margin">
			<label>Upper Inner Fence: </label>
			<input type="text" id="u_inner_fence" value="test" />
			<div class="info inline down" icon="u_inner_fence_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="u_inner_fence_info" style="margin: 5px 40px; color: white;">
			<h2>Upper Inner Fence</h2>
			<p class="inline">UIF = Q<sub>U</sub> + 1.5 (inner quartile range)</p>
		</div>
		<div class="margin">
			<label>Lower Inner Fence: </label>
			<input type="text" id="l_inner_fence" value="" />
			<div class="info inline down" icon="l_inner_fence_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="l_inner_fence_info" style="margin: 5px 40px; color: white;">
			<h2>Lower Inner Fence</h2>
			<p class="inline">LIF = Q<sub>L</sub> - 1.5 (inner quartile range)</p>
		</div>
		<div class="margin">
			<label>Inter Quartile Range: </label>
			<input type="text" id="inter" value="" />
			<div class="info inline down" icon="inter_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>	
			<div class="up" id="inter_info" info="inter_info" style="margin: 5px 40px; color: white;">
				<h2>Inner Quartile Range</h2>
				<p class="inline">IQR = Q<sub>U</sub> - Q<sub>L</sub></p>
			</div>
		</div>
		<div class="margin">
			<label>Upper Outer Fence: </label>
			<input type="text" id="u_outer_fence" value="" />
			<div class="info inline down" icon="u_outer_fence_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="u_outer_fence_info" style="margin: 5px 40px; color: white;">
			<h2>Upper Outer Fence</h2>
			<p class="inline">UOF = Q<sub>U</sub> + 3 (inner quartile range)</p>
		</div>
		<div class="margin">
			<label>Lower Outer Fence: </label>
			<input type="text" id="l_outer_fence" value="" />
			<div class="info inline down" icon="l_outer_fence_info">
				<img src="/css/images/toggle.png" class="toggle" />
			</div>
		</div>
		<div class="up" id="l_outer_fence_info" style="margin: 5px 40px; color: white;">
			<h2>Lower Outer Fence</h2>
			<p class="inline">LOF = Q<sub>L</sub> - 3 (inner quartile range)</p>
		</div>
	</div>
</div>

