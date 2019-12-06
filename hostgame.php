<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link href="https://fonts.googleapis.com/css?family=Roboto|Space+Mono&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="./hosty.css" />
		<script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
		<title> Stadia of Olympus </title>
		<link rel="shortcut icon" href="./img/logo.ico" />
	</head>
  <header class="h">
    <div class="logo-container">
      <img src="./img/logo.png" alt="logo" class="sdo" />
      <h4 class="logo" style="padding-top:1vh;">Stadia of Olympus</h4>
    </div>
    <nav class="navigator">
      <ul class="nav-link">
        <li><a class="nav-link home-button" href="index.html">HOME</a></li>
        <!-- <li><a class="nav-link profile-button" href="#">MY PROFILE</a></li> -->
      </ul>
    </nav>
  </header>
  <div class="one">
    <img class="grad-hex" src="./img/1.svg" alt="" />
    <img class="right-hex" src="./img/2.svg" alt="" />
    <img class="left-hex" src="./img/3.svg" alt="" />
    <!--<img class="pink-hex" src="./img/4.svg" alt="" />-->
  </div>
	<div class="two">
			<img class="grad-hex" src="./img/1.svg" alt="" />
			<img class="left-hex" src="./img/3.svg" alt="" />
	</div>

	<body>
		<?php
			$gid = $_GET["gid"];
			$banner="img/banner/".$gid."banner.png";
	echo "<div class='somespace' style='width: 100%; height: 20vh; display:flex; align-items:center;	justify-content:center; margin-top: 5vh;' >
	<img class='bannerr' src=$banner height='90px' alt='' />
	</div>";
	?>
      <main class="host-main">

				<div class="hosting">
					<?php
						$gid = $_GET["gid"];
				echo "<form name='form' action='host.php?gid=$gid'  method='POST' class='hosting-form'>";
				?>

						<ul class="ename">
							<li class="q"><h4 class="">EVENT NAME</h4></li>
							<li class="ename2">	<textarea rows="1" cols="50"class="ename-area" name='e' placeholder=" "></textarea></li>
						</ul>

						<ul class="location">
							<li class="q"><h4 class="">LOCATION</h4></li>
							<li class="loc2"><input class="loc4" type="text" name='place' placeholder="City"</li>
							<li class="loc3"><textarea rows="4" cols="50" class="enmae-loc" name='address'placeholder="Address"></textarea></li>
						</ul>

						<ul class="rules">
							<li class="q"><h4 class="">RULES</h4></li>
							<li class="rules2">	<textarea rows="8" cols="15" class="enmae-rules" name='rules' placeholder=""></textarea></li>
						</ul>

						<ul class="edate">
							<li class="q"><h4 class="">DATE</h4></li>
							<li class="edate2">	<input class="edate3" type="date" name='edate' placeholder="" ></li>
						</ul>

						<ul class="price">
							<li class="q"><h4 class="">ENTRY PRICE</h4></li>
							<li class="price2"><input id='p' class="price3" type="text" placeholder="optional" name='price'></li>
						</ul>
						<script>

						const element = document.querySelector('.hosting-form');
						element.addEventListener('submit', event => {

						var p = document.forms["form"]["price"];
						var q = document.forms["form"]["edate"];
						var r = document.forms["form"]["rules"];
						var s = document.forms["form"]["address"];
						var t = document.forms["form"]["place"];
						var u = document.forms["form"]["e"];
							// console.log(r.value);
							// 	console.log(s.value);
							// 		console.log(t.value);
							// 			console.log(u.value);
						if (isNaN(p.value)) {
								event.preventDefault();
	 					window.alert("Please enter a valid price.");
		  			console.log('Form submission cancelled.');
					}
					if(q.value=="" ||r.value=="" ||s.value=="" ||t.value=="" ||u.value==""  ){
							event.preventDefault();
							window.alert("Please enter all required details.");
							console.log('Form submission cancelled.');
					}

				});


						</script>

						<div class="s">	<button type="submit" class="submit-signup-button" value="submit"> SUBMIT </button></div>


					</form>
				</div>

      </main>
      <footer class="social-footer">
      <div class="social-footer-icons">
        <ul class="linkk">
          <li><a class="linkk" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a class="linkk" href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a class="linkk" href="https://www.github.com/kaushikkateel"><i class="fa fa-github" aria-hidden="true"></i></a></li>
          <li><a class="linkk" href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
        <ul class="feedbackdiv">
          <li><a class="feedbackdiv2" id="f" href="#">feedback</a></li>
        </ul>
      </div>
    </footer>
  	<script	src="./games.js">	</script>


  </body>
  </html>
