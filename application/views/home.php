<br /><br />
<div class="hero-unit">
<h1>Welcome to <span class="green">Stat:on</span></h1>
</div>

<div id="main" class="row box">
	<div class="span6">
		<h2>Input Data Set</h2>
<textarea id="dataset">Enter your data set</textarea>
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
<br />
<br />
<div class="row box" id="results" style="width: 680px; float: right; margin-bottom: 30px;">	
	<div class="span6" style="position: relative;">
		<h2>Results</h2>	
		<div id="zbox" style="position: relative; top: 0px; left: -20px; z-index: 0; display: inline-block;">
			<h2 id="ztoggle" class="vertical" style="position: absolute; cursor: pointer; left: -64px; top: 35px; width: 86px; color: #83B81F;">Z Value</h2>					
			<div id="zdiv" class="span3 box">
				<div>
					<input type="text" id="z_input" value="Enter data point" />
				</div>
				<div class="btn_margin">
					<button id="zsubmit" class="btn info">Submit</button>
					<button id="zclear" class="btn">Clear</button>	
				</div>
			</div>
		</div>
		<div style="position: absolute; top: 46px;">
			<div>
				<label>Sample size: </label>
				<input type="text" id="size" val="" />
				<div class="info inline down" icon="size_info">
					&nbsp;&nbsp;&or;
				</div>
			</div>
			<div class="up" id="size_info" info="size_info" style="margin: 5px 40px; color: white;">
				<p class="inline">This represents the number of elements in the data set. A quick and easy test to ensure you have entered in the correct number of data points is to compare this value to the expected data set size</p>
				<div class="info inline" info="size_info">
					&nbsp;&nbsp;&and;
				</div>
			</div>
			<div>
				<label>Mean y&#772:</label>
				<input type="text" id="mean" val="" />
				<div class="info inline down" icon="mean_info">
					&nbsp;&nbsp;&or;
				</div>
			</div>
			<div class="up" id="mean_info" info="mean_info" style="margin: 5px 40px; color: white;">
				<p class="inline">Sum of the observation values divided by the sample size or the number of observations:</p>
				<div class="info inline" info="mean_info">
					&nbsp;&nbsp;&and;
				</div>
				<br />
				<img src="/css/images/formulas/mean.png" height="150" width="200" />
			</div>
			<div>
				<label>Median m: </label>
				<input type="text" id="median" val="" />
				<div class="info inline down" icon="median_info">
					&nbsp;&nbsp;&or;
				</div>
			</div>
			<div class="up" id="median_info" info="median_info" style="margin: 5px 40px; color: white;">
				<p class="inline">The mid-point of a data set when the set of observations is placed in ascending order 
				(Note: The median does not have to be a point in the data set)</p><br />
				<p class="inline">	If the number of observations (n) is odd, then the median (m) is the center value at location (n+1)/2
				If (n) is even, then the median is the mean of the two middle values</p>
				<div class="info inline" info="median_info">
					&nbsp;&nbsp;&and;
				</div>
			</div>
			<div>
				<label>Mode: </label>
				<input type="text" id="mode" val="" />
				<div class="info inline down" icon="mode_info">
					&nbsp;&nbsp;&or;
				</div>
			</div>
			<div class="up" id="mode_info" info="mode_info" style="margin: 5px 40px; color: white;">
				<p class="inline">The value in a data set which occurs with the greatest frequency, the peak point of the relative frequency distribution
				(Note: A data set may have more than one mode or a mode can not exist).</p>
				<div class="info inline" info="mode_info">
					&nbsp;&nbsp;&and;
				</div>
			</div>
			<div>
				<label>Range: </label>
				<input type="text" id="range" val="" />
				<div class="info inline down" icon="range_info">
					&nbsp;&nbsp;&or;
				</div>
			</div>
			<div class="up" id="range_info" info="range_info" style="margin: 5px 40px; color: white;">
				<p class="inline">The difference between the largest and the smallest measurement in a data set</p>
				<div class="info inline" info="range_info">
					&nbsp;&nbsp;&and;
				</div>
			</div>
			<div>
				<label>Variance S&sup2;:</label>
				<input type="text" id="variance" val="" />
				<div class="info inline down" icon="variance_info">
					&nbsp;&nbsp;&or;
				</div>
			</div>
			<div class="up" id="variance_info" info="variance_info" style="margin: 5px 40px; color: white;">
				<p class="inline">The variation of a data set in terms of the amounts by which the observations deviate from the mean</p>
				<div class="info inline" info="variance_info">
					&nbsp;&nbsp;&and;
				</div>
				<img src="/css/images/formulas/variance.png" height="165" width="250" />
			</div>
			<div class="margin">
				<label>Standard Deviation: </label>
				<input type="text" id="deviation" val="" />
				<div class="info inline down" icon="deviation_info">
					&nbsp;&nbsp;&or;
				</div>	
			</div>
			<div class="up" id="deviation_info" info="deviation_info" style="margin: 5px 40px; color: white;">
				<p class="inline">Standard deviation is the positive square root of the variance.  The variability in standard deviation is simpler to interpret compared to the variance because the units of the standard deviation are the same as the units of the data.</p><br />
				<p class="inline"><br />For a mound shaped distribution: <br />
					Approx. 68.3% of observations will lie within y&#772 &#8723; <em>s</em> for samples and &mu; &#8723; &sigma;  for populations.<br />
					Approx. 95.45% of observations will lie within y&#772 &#8723; <em>s</em> for samples and &mu; &#8723; 2&sigma;  for populations.<br />
					Approx. 99.73% of observations will lie within y&#772 &#8723; <em>s</em> for samples and &mu; &#8723; 3&sigma;  for populations.
				</p>
				<div class="info inline" info="deviation_info">
					&nbsp;&nbsp;&and;
				</div>
			</div>
		</div>
	</div>
	<div class="span6" style="margin-top: 10px;">
		<br /><br />
		<div class="margin">
			<label>Upper Quartile Loc: </label>
			<input type="text" id="u_quart_loc" val="" />
		</div>
		<div class="margin">
			<label>Upper Quartile Value: </label>
			<input type="text" id="u_quart_val" val="" />
			<div class="info inline down" icon="upper_info">
				&nbsp;&nbsp;&or;
			</div>	
		</div>
		<div class="up" id="upper_info" info="upper_info" style="margin: 5px 40px; color: white;">
			<p class="inline">Q<sub>U</sub> = &frac34; * ( n + 1 ) (provides location of 75th percentile)</p>
			<div class="info inline" info="upper_info">
				&nbsp;&nbsp;&and;
			</div>
		</div>
		<div class="margin">
			<label>Mid Quartile Value: </label>
			<input type="text" id="m_quart_val" val="" />
			<div class="info inline down" icon="mid_info">
				&nbsp;&nbsp;&or;
			</div>	
		</div>
		<div class="up" id="mid_info" info="mid_info" style="margin: 5px 40px; color: white;">
			<p class="inline">Q<sub>M</sub> = The numerical value midway between Q<sub>U</sub> and Q<sub>L</sub> (the median)</p>
			<div class="info inline" info="lower_info">
				&nbsp;&nbsp;&and;
			</div>
		</div>
		<div class="margin">
			<label>Lower Quartile Loc: </label>
			<input type="text" id="l_quart_loc" val="" />
		</div>
		<div class="margin">
			<label>Lower Quartile Value: </label>
			<input type="text" id="l_quart_val" val="" />
			<div class="info inline down" icon="lower_info">
				&nbsp;&nbsp;&or;
			</div>	
		</div>
		<div class="up" id="lower_info" info="lower_info" style="margin: 5px 40px; color: white;">
			<p class="inline">Q<sub>L</sub> = &frac14; * ( n + 1 ) (provides location of 25th percentile)</p>
			<div class="info inline" info="lower_info">
				&nbsp;&nbsp;&and;
			</div>
		</div>
		<div class="margin">
			<label>Inter Quartile Range: </label>
			<input type="text" id="inter" val="" />
			<div class="info inline down" icon="inter_info">
				&nbsp;&nbsp;&or;
			</div>	
		</div>
		<div class="up" id="inter_info" info="inter_info" style="margin: 5px 40px; color: white;">
			<p class="inline">Inter Quartile Range = Q<sub>U</sub> - Q<sub>L</sub></p>
			<div class="info inline" info="lower_info">
				&nbsp;&nbsp;&and;
			</div>
		</div>
		<div class="margin">
			<label>Z Value: </label>
			<input type="text" id="z_value" val="" />
			<div class="info inline down" icon="z_info">
				&nbsp;&nbsp;&or;
			</div>	
		</div>
		<div class="up" id="z_info" info="z_info" style="margin: 5px 40px; color: white;">
			<p class="inline">Z Value = The location of an observation relative to the mean (i.e., the distance of the observation above or below the mean) measured in units of standard deviation</p><br />
			<p class="inline">If Z is a negative value, then the  observation is below the mean while if Z is a positive value, then the observation is above the mean</p><br />
			<p class="inline">Rule of Thumb: If the absolute value of the z-score is greater than 3, the observation is probably an outlier</p>
			<img src="/css/images/formulas/zvalue.png" height="100" width="175" />
			<div class="info inline" info="lower_info">
				&nbsp;&nbsp;&and;
			</div>
		</div>
	</div>
</div>
<br />
<br />
<br />

