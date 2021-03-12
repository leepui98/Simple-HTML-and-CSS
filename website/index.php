<?php
	$conn=new mysqli("localhost","myuser","mypass","mydb");

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
?> 
<!DOCTYPE html>
<html>
	<head>
	<meta charset= "utf-8">
	<title>
	Fuyoh
	</title>
	<link rel= "stylesheet" type="text/css" href= "style.css" />
	</head>
	
		<body>
		<h1>
		Fried rice and Msg!
		</h1>
		<label for="anything">Type anything</label>
		<input type="text" id="heiheihei" />
		<button id= "gg" > Enter </button>
		
		<section>
			<p id= "name1">
		 <a href= " https://en.wikipedia.org/wiki/Nigel_Ng#:~:text=Nigel%20Ng%20as%20Uncle%20Roger%20in%20Stockholm%2C%20Sweden%2C%20November%202020.&text=Nigel%20Ng%20(%2F%CB%88na%C9%AA,his%20comedic%20character%2C%20Uncle%20Roger. "> Uncle Roger</a> loves <a href="second.html"> fried rice.</a>
			<br>
			He hates people who cooks fried rice in a wrong way.
			</br>
			</p>
	</section>
		<div class="ab">
		<a href="https://www.youtube.com/watch?v=53me-ICi_f8">
		<img src= "4bsvt0.jpg" alt= "Meme about MSG" />
		<br>
		link to uncle roger reviews on bbc fried rice
		<br/>
		</a>
</div>
	
	<section>
	<p id ="msg">
	<strong> He loves msg too. </strong>
	</p>
	<ol>
	<li class="happy">  He said msg is king of flavor.     </li>
	<li class= "happy2"> He said msg add flavor to your life.  </li>
	<li class= "happy3"> When sad, just use <a href= " https://themarket.com/nz/p/ajinomoto-monosodium-glutamate/5093-THI2048?skuid=6994749&utm_source=google&utm_medium=cpc&utm_campaign=Food,-Wine-&-Beer-_-Pantry-_-Other-Pantry-_-Other-Pantry&gclid=CjwKCAiA2O39BRBjEiwApB2Iktpo4X9UU6BAP3agv8uxzobFe1n8Cy-v9XFEDFOYlHMUMpohCkqGaRoC2Y0QAvD_BwE" > MSG! </a>    </li>
	
	</ol>
	</section>
	
	<section>
	<div class="side">
		<table id="table">
		<tr> <th> Chef   </th>  <th> Age  </th>    </tr>
		<tr> <td> Jamie Oliver  </td>  <td> 39 </td>  </tr>
		 
		</table>
	</div>
	
	<div class="side">
	<form action="index.php" method="get">
		Name? <input type="text" name="username" />
		Number? <input type="text" name="num" />
		<input type="submit" value="Submit" />
		</form>

<button type="button" id="Delete">Delete</button>
	</div>
	
</section>
	<div class="beside">
	<canvas width="500" height="500" id="happydrawing" style="background: white; width: 500px; height: 500px;"> </canvas>
</div>

    <div class="beside">
	<label id="jjj" > Draw anything you like  </label>
</div>
	</body>
	<script type="text/javascript" src="webbb.js"></script>
</html>