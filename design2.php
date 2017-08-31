<?

?>
<!DOCTYPE html>
<html>
<head>
	<title>CW</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" media="all" href="/jquery-ui-1.10.0.custom.min.css" /> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="cook2.css" />
	<script src='/jquery-3.1.1.min.js'></script>
	<script src='/jquery-ui-1.10.0.custom.min.js'></script>
	<script>

$(function(){
	

	$("#searchbox").autocomplete({
        source: "ajax.php",
        minLength: 0,
        select: function(event, ui) {
            var url = ui.item.id;
            location.href = 'play.php?id=' + url;
        }
    });
	
});
	
</script>

</head>
<body>
	<div class='container'>

		<header>
			<svg viewBox="0 20 120 80" id='logo' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
				<image xlink:href="icons/cooking.svg" />
			</svg>
			<h1 class='title'>Cook</h1>
		</header>

		<section class='search'>
			<input id='searchbox' name='search' placeholder='what?' value='' />
			<button id='searchbutton' type='submit' value=''><i class="material-icons">search</i></button>
		</section>

		<nav>
			<div class='nav account'>
				<svg viewBox="0 0 110 120" id='userpic' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
					<image xlink:href="icons/user.svg" />
				</svg>
				<div class='caption'>Log In</div>
			</div>
		
			<div class='nav explore'>
				<svg viewBox="0 10 120 100" id='explorepic' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
					<image xlink:href="icons/books.svg" />
				</svg>
				<div class='caption'>Explore</div>
			</div>
		
			<div class='nav add'>
				<svg viewBox="10 10 100 100" id='pencilpic' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
					<image xlink:href="icons/pencil.svg" />
				</svg>
				<div class='caption'>Add</div>
			</div>
		</nav>

		
		<main>
			
			<section class='suggested-recipes'>

				<article class='recipe'>
					<div class='recipe-pic' style='background-image:url(recipe-pics/tikka-masala.jpg);'>
						<h3 class='recipe-name'>Chicken Tikka Masala</h3>
					</div>
					<!-- <p class='recipe-summary'>An Indian/English classic.  Forget the take-away and make your own!</p>  -->
					<div class='stats'>
						<div class='time'>30 minutes</div>
						<div class='difficulty'>2/5 easy</div>
					</div>
					<section class='recipe-ingredients'>
						<h3>Ingredients</h3>
						<ul>
							<li>Patak's Tikka Paste</li>
							<li>Onions</li>
							<li>Chicken Breast</li>
							<li>Canned Tomatoes</li>
							<li>Double Cream</li>
							<li>Water</li>
						</ul>
					</section>
					<section class='method'>
						<h3>Method</h3>
						<ol>
							<li>Dice onion</li>
							<li>Cut Chicken into bite sized chunks</li>
						</ol>
					</section>
				</article>
					

					
				<article class='recipe'>
					<div class='recipe-pic' style='background-image:url(recipe-pics/roast-potatoes.jpg);'>
						<h3 class='recipe-name'>Roast Potatoes</h3>
					</div>
					<!-- <p class='recipe-summary'>An Indian/English classic.  Forget the take-away and make your own!</p>  -->
					<div class='stats'>
						<div class='time'>90 minutes</div>
						<div class='difficulty'>1/5 easy</div>
					</div>
					<section class='recipe-ingredients'>
						<h3>Ingredients</h3>
						<ul>
							<li>Potatoes</li>
							<li>Goose Fat</li>
							<li>Salt</li>
						</ul>
					</section>
					<section class='method'>
						<h3>Method</h3>
						<ol>
							<li>Turn on the oven to 180 degrees (fan)</li>
							<li>Add goose fat to a baking tray - put in oven to heat up</li>
							<li>Cut Potatoes to required size</li>
							<li>Smother in the hot goose fat</li>
							<li>Salt generously and place in the oven</li>
						</ol>
					</section>
				</article>					
					
					
					
			</section>

			<section class='ingredients'>
				<h2>Popular Ingredients</h2>
				<p>Choose from an ingredient below to find all of our recipes that contain that item.  Great for deciding on what to cook based on what you have!</p>
				<ul>
					<li>Onion</li>
					<li>Potato</li>
					<li>Carrot</li>
					<li>Lettuce</li>
					<li>Tomato</li>
					<li>Bacon</li>
				</ul>
			</section>
		
		<footer>
		<p>Contact us</p>
		</footer>

		</main>	
	</div>
</body>
</html>