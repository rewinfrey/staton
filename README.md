#Stat:on 
<hr />
A simple and easy to use calculator designed for the problem sets of WSU's IME254 (engineering probability and stats). 

#Use
To use this repo, you will need a local web server running on your machine. Simply place the Stat:on directory in your web server's root directory. Currently there is no database associated with Stat:on.

#Credits
This repo is built using CodeIgniter's PHP MVC framework.
(www.codeigniter.com)
Styling / Menu dressed by BootStrap (http://twitter.github.com/bootstrap/)
Background image provided by SubtlePatterns (http://subtlepatterns.com/)

#Known bugs:
First column of the results table is positioned absolutely to prevent the "Z-Value" sidebar from skewing the input fields. However, when an information arrow is clicked and the relevant information appears, the result table's height does not adjust. The fix is to dynamically set the height of the result table when an information button is clicked to account for the additional height of the information div, but I haven't had the time to implement this.

#Future features:
<ul>
	<li>Store example problems in a database.</li> 
	<li>Give the user a select list to view example problems.</li>
	<li>Animate a step-by-step explanation of how a particular problem is solved.</li>
	<li>Add graph functionality</li>
	<li>Add a simple probability calculatar</li>
	<li>Continue to add to the existing functionality as the class continues and the complexity of problem sets increases.</li>
</ul>

#License:
MIT
