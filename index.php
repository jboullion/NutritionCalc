<?php 
	$fda = 'https://www.accessdata.fda.gov/scripts/interactivenutritionfactslabel/';
?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Boullion Boilerplate</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Place favicon.ico in the root directory -->
		<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Roboto|Ubuntu&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="css/dev.css">
	</head>
	<body>
		<!--[if lt IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<form id="input-form">
						<div class="form-group">
							<label for="num-people">Number of People</label>
							<input type="number" class="form-control" id="num-people" value="1">
						</div>
						<div class="form-group">
							<label for="num-calories">Calories per Person</label>
							<input type="number" class="form-control" id="num-calories" value="1">
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<form autocomplete="off" action="/action_page.php">
						<div class="autocomplete" style="width:300px;">
							<input id="myInput" type="text" name="myCountry" placeholder="Country">
						</div>
						<input type="submit">
					</form>
					<script>
						var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

						autocomplete(document.getElementById("myInput"), countries);

						function autocomplete(inp, arr) {
							/*the autocomplete function takes two arguments,
							the text field element and an array of possible autocompleted values:*/
							var currentFocus;
							/*execute a function when someone writes in the text field:*/
							inp.addEventListener("input", function(e) {
								var a, b, i, val = this.value;
								/*close any already open lists of autocompleted values*/
								closeAllLists();
								if (!val) { return false;}
								currentFocus = -1;
								/*create a DIV element that will contain the items (values):*/
								a = document.createElement("DIV");
								a.setAttribute("id", this.id + "autocomplete-list");
								a.setAttribute("class", "autocomplete-items");
								/*append the DIV element as a child of the autocomplete container:*/
								this.parentNode.appendChild(a);
								/*for each item in the array...*/
								for (i = 0; i < arr.length; i++) {
									/*check if the item starts with the same letters as the text field value:*/
									if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
									/*create a DIV element for each matching element:*/
									b = document.createElement("DIV");
									/*make the matching letters bold:*/
									b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
									b.innerHTML += arr[i].substr(val.length);
									/*insert a input field that will hold the current array item's value:*/
									b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
									/*execute a function when someone clicks on the item value (DIV element):*/
										b.addEventListener("click", function(e) {
										/*insert the value for the autocomplete text field:*/
										inp.value = this.getElementsByTagName("input")[0].value;
										/*close the list of autocompleted values,
										(or any other open lists of autocompleted values:*/
										closeAllLists();
									});
									a.appendChild(b);
									}
								}
							});
							/*execute a function presses a key on the keyboard:*/
							inp.addEventListener("keydown", function(e) {
								var x = document.getElementById(this.id + "autocomplete-list");
								if (x) x = x.getElementsByTagName("div");
								if (e.keyCode == 40) {
									/*If the arrow DOWN key is pressed,
									increase the currentFocus variable:*/
									currentFocus++;
									/*and and make the current item more visible:*/
									addActive(x);
								} else if (e.keyCode == 38) { //up
									/*If the arrow UP key is pressed,
									decrease the currentFocus variable:*/
									currentFocus--;
									/*and and make the current item more visible:*/
									addActive(x);
								} else if (e.keyCode == 13) {
									/*If the ENTER key is pressed, prevent the form from being submitted,*/
									e.preventDefault();
									if (currentFocus > -1) {
									/*and simulate a click on the "active" item:*/
									if (x) x[currentFocus].click();
									}
								}
							});
							function addActive(x) {
								/*a function to classify an item as "active":*/
								if (!x) return false;
								/*start by removing the "active" class on all items:*/
								removeActive(x);
								if (currentFocus >= x.length) currentFocus = 0;
								if (currentFocus < 0) currentFocus = (x.length - 1);
								/*add class "autocomplete-active":*/
								x[currentFocus].classList.add("autocomplete-active");
							}
							function removeActive(x) {
								/*a function to remove the "active" class from all autocomplete items:*/
								for (var i = 0; i < x.length; i++) {
								x[i].classList.remove("autocomplete-active");
								}
							}
							function closeAllLists(elmnt) {
								/*close all autocomplete lists in the document,
								except the one passed as an argument:*/
								var x = document.getElementsByClassName("autocomplete-items");
								for (var i = 0; i < x.length; i++) {
								if (elmnt != x[i] && elmnt != inp) {
								x[i].parentNode.removeChild(x[i]);
								}
							}
							}
							/*execute a function when someone clicks in the document:*/
							document.addEventListener("click", function (e) {
								closeAllLists(e.target);
							});
						}

					</script>
				</div>
				<div class="col-md-4">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action active">
							Cras justo odio
						</a>
						<a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
						<a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
						<a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
						<a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
					</div>
				</div>
				<div class="col-md-12">
					<?php include 'components/nutritionfacts.php'; ?>
				</div>
			</div>
		
		
		<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous"></script>

		<script src="js/dev.js"></script>

		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<!--
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
	-->
	</body>
</html>
