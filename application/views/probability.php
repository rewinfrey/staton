<div class="hero-unit" style="margin-top: 36px;">
	<h1>Welcome to <span class="green">P(stat):on</span></h1>
</div>


<div class="box span10 relative">
	<h2>Simple Event</h2>
		<img class="absolute show_info" icon="simple_event_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<p class="inline">The basic outcome of an experiment; it cannot be decomposed into simpler outcomes.</p>
		<br /><br />
		<div class="display_on" id="simple_event_info" info="simple_event_info">
		<h3>Examples:</h3>
		<p>Outcomes for flipping a coin would be "Head" or "Tails"</p>
		<h5>Problem</h5>
		<p>A software engineer must select three program modules from among five that need to be checked for defective code. If, unkonwn to the engineer, the modules vary in the effort required to debug them, what is the probability that<br />
			a. The engineer selects the two modules that require the least amount of effort?<br />
			b. The engineer selects the three modules that require the most effort?<br />
		</p>
		<h5>Solution</h5>
		<ol>
			<li>The experiment consists of selecting three modules from among the five that require debugging.</li>
			<li>We will denote the available modules by the symbols M<sub>1</sub>, M<sub>2</sub>,...M<sub>5</sub>, where M<sub>1</sub> is the module that requires the least effort and M<sub>5</sub> requires the most effort. The notation M<sub>i</sub> M<sub>j</sub> will denote the selection of modules M<sub>1</sub> and M<sub>3</sub>. Then the 10 simple events associated with the experiment are as follows:</li>
			<table>
				<thead>
					<tr>
						<th>Simple Event</th>
						<th>Probability</th>
						<th>Simple Event</th>
						<th>Probability</th>
					</tr>
				</thead>
					<tr>
						<td>M<sub>1</sub> M<sub>2</sub> M<sub>3</sub></td>
						<td> 1 / 10 </td>
						<td>M<sub>1</sub> M<sub>4</sub> M<sub>5</sub></td>
						<td> 1 / 10 </td>
					</tr>
					<tr>
						<td>M<sub>1</sub> M<sub>2</sub> M<sub>4</sub></td>
						<td> 1 / 10 </td>
						<td>M<sub>2</sub> M<sub>3</sub> M<sub>4</sub></td>
						<td> 1 / 10 </td>
					</tr>
					<tr>
						<td>M<sub>1</sub> M<sub>2</sub> M<sub>5</sub></td>
						<td> 1 / 10 </td>
						<td>M<sub>2</sub> M<sub>3</sub> M<sub>5</sub></td>
						<td> 1 / 10 </td>
					</tr>
					<tr>
						<td>M<sub>1</sub> M<sub>3</sub> M<sub>4</sub></td>
						<td> 1 / 10 </td>
						<td>M<sub>2</sub> M<sub>4</sub> M<sub>5</sub></td>
						<td> 1 / 10 </td>
					</tr>
					<tr>
						<td>M<sub>1</sub> M<sub>3</sub> M<sub>5</sub></td>
						<td> 1 / 10 </td>
						<td>M<sub>3</sub> M<sub>4</sub> M<sub>5</sub></td>
						<td> 1 / 10 </td>
					</tr>
			</table>
			<li>If we assume that the selection of any set of three modules is as likely as any other, then the probability of each of the 10 simple events is 1 / 10.</li>
			<li>Define the events A and B as follows:<br />
				<p>A: The engineer selects the two modules that require the least amount of effort.</p>
				<p>B: The engineer selects the three modules that require the most effort</p>
				<p>Event A will occur for any simple events in which modules M<sub>1</sub> and M<sub>2</sub> are selected - namely, the three simple events M<sub>1</sub> M<sub>2</sub> M<sub>3</sub>, M<sub>1</sub> M<sub>2</sub> M<sub>4</sub> and M<sub>1</sub> M<sub>2</sub> M<sub>5</sub>. Similarly, the event B is made up of the single event M<sub>3</sub> M<sub>4</sub> M<sub>5</sub>.</p></li>
			<li>We now sum the probabilities of the simple events in A and B to obtain:<br />
				<p>P( A ) = P( M<sub>1</sub> M<sub>2</sub> M<sub>3</sub> ) + P( M<sub>1</sub> M<sub>2</sub> M<sub>4</sub> ) + P( M<sub>1</sub> M<sub>2</sub> M<sub>5</sub> )</p>
				<p>P( A ) = 1 / 10 + 1 / 10 + 1 / 10 = 3 / 10</p>
				<p>and</p>
				<p>P( B ) = P( M<sub>3</sub> M<sub>4</sub> M<sub>5</sub> ) = 1 / 10</p>
			</li>
		</ol>
	</div>
</div>
<br /><br />


<div class="box span10 relative">
	<h2>Sample Space</h2>
	<img class="absolute show_info" icon="sample_space_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
	<p class="inline">If you count/collect all outcomes or simple events, then that collection is the sample space.</p>
	<br /><br />
	<div class="display_on" id="sample_space_info" info="simple_event_info">
	<h3>Examples:</h3>
	<img src="/css/images/probability/sample_space.png" height="320" width="580" />
	</div>
</div>
<br /><br />


<div class="box span10 relative">
	<h2>Probablity</h2>
		<img class="absolute show_info" icon="probability_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<p class="inline">The measure of the likelihood of a simple event occurring when an experiment is performed; for a simple event E, the probability is denoted as P( E ).</p>
		<br /><br />
		<div class="display_on" id="probability_info" info="probability_info">
		<h3>Definitions:</h3>
		<h5>The Classical Definition:</h5>
		<p>P( H ) = No. of Ways ( H ) Can Occur / Total No. of Possible Outcomes<p>
		<h5>The Relative Frequency Definition:</h5>
		<p>P( H ) = No. of Ways ( H ) Has Occured / Total No. of Trials</p>
		<br />
		<h5>Steps For Calculating</h5>
		<ul>
			<li>Define the experiment (i.e., desribe how to make observations and the type of observations to be recorded)</li>
			<li>List the simple events</li>
			<li>Assign the probabilities to the simple events</li>
			<li>Determine the collection of simple events contained in the event of interest (sample space)</li>
			<li>Sum the simple event probabilities to get the event probability</li>
		</ul>
		<h5>Example</h5>
		<p>Flipping two student IDs. Let U and D represent the "UP" and "DOWN" outcomes respectively.</p>
		<ul>
			<li>Simple Events = { UU, UD, DU, DD }</li>
			<li>Probabilities = { 1/4, 1/4, 1/4, 1/4 }</li>
			<li>Sum of Probabilities = 1</li>
		</ul>
		<br />
		<p>Observe an odd number on one roll of a die</p>
		<p>Define A: {observe odd number}</p>
		<p>Simple events, S = { 1, 3, 5 }</p>
			<ul>
				<li>P( 1 ) = 1 / 6</li>
				<li>P( 3 ) = 1 / 6</li>
				<li>P( 5 ) = 1 / 6</li>
			</ul>
		<p>P( A ) = P( 1 ) + P( 3 ) + P( 5 ) = 3 / 6 = 1 / 2</p>
		<br />
		<h5>Rules</h5>
		<ol>
			<li>All simple event probabilities must be between 0 and 1:</li>
			<p> 0 <= P( E<sub>i</sub> ) <= 1 for <em>i</em> = 1, 2, ..., k</p>
			<li>The sum of the probabilities of all simple events within a sample space must equal 1:</li>
			<img src="/css/images/probability/probability_sum.png" width="170" height="110" />
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Compound Events</h2>
		<img class="absolute show_info" icon="compound_events_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<p class="inline">An event can be defined as a composition of two or more other events and can be formed in two ways:</p>
		<h3>Union</h3>
		<p>The union of two events A and B (A&cup;B) is the event that contains all points (observations, simple events) that are in A, in B or in both.</p>
		<h3>Intersection</h3>
		<p>The intersection of events A and B (A&cap;B) is the set (or event) containing the points (observations, simple events) that are in both A and B.</p>
		<h3>Complement</h3>
		<p>The compliment of an event A are all events that are not in A</p>
		<p>Denoted as: A<sup>c</sup></p>
		<h5>Rule:</h5>
		<p>P( A ) + P( A<sup>c</sup> ) = 1</p>
		<p>P( A ) = 1 - P ( A<sup>c</sup> ) <em class="indent">helpful when dealing with large data sets</em></p>
		<br />
		<div class="display_on" id="compound_events_info" info="compound_events_info">
		<h5>Example</h5>
		<p>Consider an experiment of drawing a tile from a box containing 26 tiles, each tile representing a letter of the English alphabet. Let V be the event of drawing a vowel and let K be the event of drawing one of the letters found in the name "SHAKESPEARE"</p>
		<ul>
			<li>What would the outcome of the Union be?</li>
			<li>What would the outcome of the Intersection be?</li>
			<li>what would the outcome of the Complement be?</li>
		</ul>
		<h5>Solution</h5>
		<img src="/css/images/probability/union.png" height="220" width="450" style="margin-left: 90px;"/>
		<p>What would the outcome of the Union be?</p>
		<p class="indent">V&cup;K = I, O, U, A, E, S, H, P, K, R</p>
		<p>What would the outcome of the Intersection be?</p>
		<p class="indent">V&cap;K = A, E</p>
		<p>What would the outcome of the complement be?</p>
		<p class="indent">V<sup>c</sup> & K<sup>c</sup> = B, D, C, F, G...</p>
		<h5>Example 2</h5>
		<p>Consider a die-tossing experiment</p>
		<p>A = { Toss an even number }</p>
		<p>B = { Toss a number <= 3 }</p>
		<ul>
			<li>What is A&cup;B?</li>
			<li>What is A&cap;B?</li>
			<li>Calculate P( A&cup;B ) and P( A&cap;B )</li>
		</ul>
		<h5>Solution</h5>
		<p>What is A&cup;B?</p>
		<p class="indent">A&cup;B = { 1, 2, 3, 4, 6 }</p>
		<p>What is A&cap;B?</p>
		<p class="indent">A&cap;B = { 2 }</p>
		<p>Calculate P( A&cup;B ) and P( A&cap;B )</p>
		<p class="indent">P( A&cup;B ) = P( 1 ) + P( 2 ) + P( 3)  + P( 4 ) + P(6)</p>
		<p class="indent">P( A&cup;B ) = 1/6 + 1/6 + 1/6 + 1/6 + 1/6 = 5/6 </p>
		<p class="indent">P( A&cap;B ) = P( 2 )</p>
		<p class="indent">P( A&cap;B ) = 1/6</p>
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Conditional Probability</h2>
		<img class="absolute show_info" icon="conditional_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<p class="inline">The symbol P( A | B ) represents the probability that A will occur given that B has occurred. This is called conditional probability.</p><br /><br />
		<p><span class="answer">P( A | B ) = P( A&cap;B ) / P( B )  <em class="indent">where P( B ) does not equal 0</span></em></p>
		<br />
		<div class="display_on" id="conditional_info" info="conditional_info">
		<h5>Example</h5>
		<p>Out of the adults in a small town who have completed the requirements for a college degree, 460 males are employed, 40 males are unemployed, 140 females are employed and 260 females are unemployed. Pick someone at random and find the probability that the chosen person will be male given that the person chosen is also unemployed</p>
		<h5>Solution</h5>
		<ol>
			<li>Tabulate the data</li>
				<table>
					<tr>
						<thead>
							<th></th>
							<th>Employed</th>
							<th>Unemployed</th>
							<th>Total</th>
						</thead>
					</tr>
					<tr>
						<td>Male</td>
						<td>460</td>
						<td>40</td>
						<td>500</td>
					</tr>
					<tr>
						<td>Female</td>
						<td>140</td>
						<td>260</td>
						<td>400</td>
					</tr>
					<tr>
						<td>Total</td>
						<td>600</td>
						<td>300</td>
						<td>900</td>
					</tr>
				</table>
			<li>List the events:</li>
			<p>Event M = { male is chosen }</p>
			<p>Event E = { person is unemployed }</p>
			<li>Identify the conditional probability:</li>
			<p><span class="answer">P( M | E ) = P( M&cap;E ) / P( E )</span></p><br />
			<p>P( M&cap;E ) = 460 / 900</p><br />
			<p>P( E ) = 600 / 900</p><br />
			<p><span class="answer">P( M | E ) = P( M&cap;E ) / P( E )</span> = ( 460 / 900 ) / ( 600 / 900 ) = 46 / 60</p><br />
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Independent Events</h2>
		<img class="absolute show_info" icon="independent_info" src="/css/images/toggle.png" style="top: 20px; right: 20px;" />
		<p>Two events A, and B are independent events if and only if the occurrence (or non-occurrence) of one does not affect the other event.</p>
		<p>Events that are not independent are said to be dependent.</p>
		<p>For independent events:</p>
		<p><span class="answer">P( A&cap;B ) = P( A ) * P( B )</span></p>
		<br />
		<div class="inline">
			<p>Recall:</p>
			<p><span class="answer">P( A | B ) = P( A &cap; B ) / P( B )</span></p>
		</div>
		<div class="inline" style="margin-left: 100px;">
			<p>Therefore (for independent events):</p>
			<p><span class="answer">P( A | B ) = P( P( A ) * P( B ) ) / P( B ) = P( A )</span></p>
		</div>
		<div class="display_on" id="independent_info" info="independent_info">
		<h5>Example</h5>
		<div class="inline">
			<p>Independent Events:</p>
			<p>A = Snowing today</p>
			<p>B = Winning the lottery today</p>
		</div>
		<div class="inline" style="margin-left: 75px;">
			<p>Dependent Events:</p>
			<p>A = Snowing today</p>
			<p>B = Observing a traffic accident today</p>
		</div>
		<h5>Example 2</h5>
		<p>Consider tossing a coin twice and recording the up face on each toss.</p>
		<p>A = { First toss is head }</p>
		<p>B = { Second toss is head }</p>
		<p>Does knowing that event A occurred impact the probability that B will occur?</p>
		<h5>Solution</h5>
		<p>S = { HH, HT, TH, TT } and each has 1/4 probability of occurring</p>
		<p>P( A ) = P( HH ) + P( HT ) = 1/2</p>
		<p>P( B ) = P( HH ) + P( TH ) = 1/2</p>
		<p>P( B | A ) = P( A&cap;B ) / P( A ) = P( HH ) / P( A )</p>
		<p>P( B | A ) = ( 1/4 ) / ( 1/2 ) = 1/2</p>
		<p>P( B | A ) = P( B )</p>
		<p>Therefore the events are independent (no correlation)</p>
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Additive Rule of Probability</h2>
		<img class="absolute show_info" icon="additive_rule_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<p class="inline"><span class="answer">P( A&cup;B ) = P( A ) + P( B ) - P( A&cap;B )</span></p>
		<p><em>We must subract the intersection or else we would add P( A&cap;B ) twice.</em></p><br />
		<p>If A and B are mutually exclusive events (meaning there is no intersection):</p>
		<p><span class="answer">P( A&cup;B ) = P( A ) + P( B )</span></p>
		<br />
		<div class="display_on" id="additive_rule_info" info="additive_rule_info">
		<h5>Example</h5>
		<p>Consider the following experiment of tossing two coins:</p>
		<p>S = { HH, HT, TH, TT }</p>
		<p>A = { Observe at least one head } = { HH, HT, TH }</p>
		<p>B = { Observe exactly one head } = { HT, TH }</p>
		<p>C = { Observe exactly two heads } = { HH }</p>
		<p><em>Note that A = ( B&cup;C ). Also B and C are mutually exclusive</em></p>
		<p>Find the probability of observing at least one head.</p>
		<h5>Solution</h5>
		<p>P( A ) = P( B&cup;C ) = P( B ) + P( C ) - P( B&cap;C )</p>
		<p>P( A ) = 2/4 + 1/4 - 0 = 3/4</p>
		<p>We can also solve this using the compliment of A:</p>
		<p>P( A ) = 1 - P( A<sup>c</sup> ) = 1 - P{ TT } = 1 - 1/4 = 3/4</p>
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Multiplication Rule of Probability</h2>
		<img class="absolute show_info" icon="multiplication_rule_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<p>If an operation can be performed n<sub>1</sub> ways, and if a second operation can be performed in n<sub>2</sub> ways and if the K<sub>th</sub> operation can be performed in n<sub>k</sub> ways, then all the operations can be performed n<sub>1</sub> * n<sub>2</sub> * n<sub>3</sub> * ... * n<sub>k</sub> ways.</p>
		<br />
		<div class="display_on" id="multiplication_rule_info" info="multiplication_rule_info">
		<h5>Example</h5>
		<p>If we are tossing a pair of dies in an experiment, and we have the following:</p>
		<p>K = 2 (die)</p>
		<p>n<sub>1</sub> = 6 outcomes</p>
		<p>n<sub>2</sub> = 6 outcomes</p>
		<p>Total number of outcomes = n<sub>1</sub> * n<sub>2</sub></p>
		<p>Total number of outcomes = 6 * 6 = 36</p>
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Permutation Rule of Probability</h2>
		<p><span class="answer">A permutation is an ordered grouping of items</span></p>
		<img class="absolute show_info" icon="permutation_rule_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<p>Given a set of N distinctly different elements, and we want to select <em>n</em> elements from <em>N</em> and arrange them within <em>n</em> positions. The number of different permutations of the <em>N</em> elements taken <em>n</em> at a time is given by:</p>
		<div class="inline">
			<p>P<sup>N</sup><sub>n</sub> = N ! / (N - n) !</p>
		</div>
		<div class="inline" style="margin-left: 20px;">
			<p>or N( N - 1 )( N - 2 )...( N - n + 1 )</p>
		</div>
		<br />
		<div class="display_on" id="permutation_rule_info" info="permutation_rule_info">
		<h5>Example</h5>
		<p>If we are tossing a pair of dies in an experiment, and we have the following:</p>
		<p>K = 2 (die)</p>
		<p>n<sub>1</sub> = 6 outcomes</p>
		<p>n<sub>2</sub> = 6 outcomes</p>
		<p>Total number of outcomes = n<sub>1</sub> * n<sub>2</sub></p>
		<p>Total number of outcomes = 6 * 6 = 36</p>
		<h5>Example 2</h5>
		<p>There are 8 players on a basketball team, who can play all 5 positions. What is the number of ways those 8 players can be selected for those 5 positions?</p>
		<h5>Solution</h5>
		<p>N = 8 distinctly different elements, and n = 5 positions</p>
		<p>1st position = 8 ways</p>
		<p>2nd position = 7 ways</p>
		<p>3rd position = 6 ways</p>
		<p>4th position = 5 ways</p>
		<p>5th position = 4 ways</p>
		<p>Using the Permutation Rule:</p>
		<p>P<sup>N</sup><sub>n</sub> = N ! / ( N - n ) ! </p>
		<p>P<sup>N</sup><sub>n</sub> = 8! / ( 8 - 5 )! </p>
		<p>P<sup>N</sup><sub>n</sub> = ( 8 * 7 * 6 * 5 * 4 * 3 * 2 * 1 ) / ( 3 * 2 * 1 ) = 8 * 7 * 6 * 5 * 4 = 6,720</p>
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Partitions Rule of Probability</h2>
		<img class="absolute show_info" icon="partitions_rule_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<p>Given a set of N distinctly different elements (objects), and we want to partition the N elements into K sets of sizes n<sub>1</sub>, n<sub>2</sub>, ..., n<sub>k</sub> where:</p><br />
		<img src="/css/images/probability/partitions.png" height="100" width="170"/>
		<p><br />The number of different partitions is:</p>
		<img src="/css/images/probability/partitions2.png" height="110" width="220" />
		<br />
		<div class="display_on" id="partitions_rule_info" info="partitions_rule_info">
		<h5>Example</h5>
		<p>9 people are going on a trip in 3 cars</p>
		<p>Car 1 has 2 people</p>
		<p>Car 2 has 3 people</p>
		<p>Car 3 has 4 people</p>
		<p>How many ways is it possible to transport the people using the 3 cars?</p>
		<h5>Solution</h5>
		<p>N = 9 (different objects)</p>
		<p>Groups (sets of sizes):</p>
		<p class="indent">n<sub>1</sub> = 2 outcomes</p>
		<p class="indent">n<sub>2</sub> = 3 outcomes</p>
		<p class="indent">n<sub>3</sub> = 4 outcomes</p>
		<p>Using partitions rule:</p>
		<p>Total ways = N ! / ( n<sub>1</sub> * n<sub>2</sub> * n<sub>3</sub> )</p>
		<p>Total ways = 9! / ( 2! * 3! * 4! )</p>
		<p>Total ways = 1,260 ways</p>
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Combinations Rule of Probability</h2>
		<p>(special case of the partitions rule)</p>
		<p>Given a set of <em>N</em> different elements and we want to select <em>n</em> elements <span class="green">without regard to the order</span>, the total number of possible ways is:</p>
		<img class="absolute show_info" icon="combinations_rule_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<img src="/css/images/probability/combinations.png" height="75" width="250"/>
		<p><br />or</p>
		<img src="/css/images/probability/combinations2.png" height="75" width="150" />
		<br />
		<div class="display_on" id="combinations_rule_info" info="combinations_rule_info">
		<h5>Example</h5>
		<p>10 job applicants with equal qualifications are applying for a job. How many ways can 3 of them be chosen <span class="green">without regard to order</span>?</p>
		<p>N = 10 (different elements)</p>
		<p>n = 3 (different elements in the set)</p>
		<p>Using the combinations rule:</p>
		<img src="/css/images/probability/combinations3.png" height="100" width="300" />
		<h5>Examples</h5>
		<p>We have 9 people going on a trip in 3 cars</p>
		<p>Car 1 has 2 people</p>
		<p>Car 2 has 3 people</p>
		<p>Car 3 has 4 people</p>
		<p>How many ways is it possible to transport the people using the 1st car?</p>
		<p class="indent">N = 9</p>
		<p class="indent">n = 2</p>
		<img src="/css/images/probability/combinations4.png" height="100" width="250"/>
		<p><br />How many ways is it possible to transport the people using the 2nd car?</p>
		<p class="indent">N = 7</p>
		<p class="indent">n = 3</p>
		<img src="/css/images/probability/combinations5.png" height="100" width="250" />
		<p><br />How many ways is it possible to transport the people using the 3rd car?</p>
		<p class="indent">N = 4</p>
		<p class="indent">n = 4</p>
		<img src="/css/images/probability/combinations6.png" height="100" width="250" />
		<p><br />How many ways is it possible to transport the people using the 3 cars?</p>
		<p class="indent">Total ways = car1 * car2 * car3</p>
		<p class="indent">Total ways = ( 9! / 2! * 7! ) * ( 7! / 3! * 4! ) * ( 4! / 4! * 0! ) <em>Note: 0! = 1</em></p>
		<p class="indent">Total ways = 1,260</p>
	</div>
</div>
<br /><br />

<div class="box span10 relative">
	<h2>Other Examples</h2>
	<p>Practice problems that tie the rules of probability together.</p>
		<img class="absolute show_info" icon="examples_info" src="/css/images/toggle.png" / style="top: 20px; right: 20px;">
		<div class="display_on" id="examples_info" info="examples_info">
		<h5>Example 1</h5>
		<p>Given the letters A, B, C and D, list the permutations and combinations for selecting two letters</p>
		<table border="1" style="border: 1px solid #c1c1c1;">
			<thead>
				<tr>
					<th colspan="4">Permutations</th>
					<th colspan="2">Combinations</th>
				</tr>
			</thead>
			<tr>
				<td>AB</td>
				<td>BA</td>
				<td>CA</td>
				<td style="border-right: 1px solid #c1c1c1;">DA</td>
				<td>AB</td>
				<td>BC</td>
			</tr>
			<tr>
				<td>AC</td>
				<td>BC</td>
				<td>CB</td>
				<td style="border-right: 1px solid #c1c1c1;">DB</td>
				<td>AC</td>
				<td>BD</td>
			</tr>
			<tr>
				<td>AD</td>
				<td>BD</td>
				<td>CD</td>
				<td style="border-right: 1px solid #c1c1c1;">DC</td>
				<td>AD</td>
				<td>CD</td>
			</tr>
		</table>
	<h5>Example 2</h5>
	<p>Pg. 87 #3.33</p>
	<p>Two independently operating instrusion detection systems:</p>
	<p>If intruder, system A = .90</p>
	<p>If intruder, system B = .95</p><br />
	<p>If no intruder, system A = .2</p>
	<p>If no intruder, system B = .1</p>
	<p>b) If there is an intruder, what is the probability that both systems sound an alarm?</p>
	<p class="indent">P( A&cap;B ) = .9 * .95 = .855</p>
	<p>c) If there is no intruder, what is the probability that both systems sound an alarm?</p>
	<p class="indent">P( A&cap;B ) = .2 * .1 = .02</p>
	<p>d) Given an intruder, what is the probability that at least one of the systems sounds an alarm?</p>
	<p class="indent">P( A ) + P( B ) - P( A&cap;B ) = .9 + .95 - .855 = .995</p>
	<h5>Example 3</h5>
	<p>Pg. 89 #3.53</p>
	<p>Four metals are available (Fe, Co, Ni and Cu)</p>
	<p>Four catalysts support classes:</p>
	<ul>
		<li>low acidity</li>
		<li>high acidity</li>
		<li>porous</li>
		<li>high surface area</li>
	</ul>
	<p>a) How many metal support combinations are possible?</p>
	<p class="indent">4 metals, 4 supports</p>
	<p class="indent">k = 2 (classes, one is metals, one is catalysts)</p>
	<p class="indent">n1 = 4</p>
	<p class="indent">n2 = 4</p>
	<p class="indent">n1 * n2 = 4 * 4 = 16</p>
	<p>b) How many different orderings of the four supports are possible with each metal?</p>
	<p>permutations (need ordering for all possible combinations):
	<p class="indent">N ! / ( N - n ) !</p>
	<p class="indent">N = 4</p>
	<p class="indent">n = 4</p>
	<p class="indent">4 ! / ( 4 - 4 ) ! = 24</p>
	</div>
</div>
<br /><br />
