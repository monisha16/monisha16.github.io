<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Space+Mono&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="./events.css" />
	<script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
	<title> Stadia of Olympus </title>
	<link rel="shortcut icon" href="./img/logo.ico" />

</head>

<body class="body">

	<header class="h">
		<div class="logo-container">
			<img src="./img/logo.png" alt="logo" />
			<h4 class="logo" style="padding-top:1vh;">Stadia of Olympus</h4>
		</div>
		<nav class="navigator">
			<ul class="nav-link">
				<li><a class="nav-link home-button" href="logout.php">LOGOUT</a></li>
				<li>
					<?php
						$gid = $_GET["gid"];
						echo "<a class='nav-link profile-button' href='hostgame.php?gid=$gid'>HOST A GAME</a>";
							?>
				</li>
			</ul>
		</nav>
	</header>

	</div>
	<div class="one">
		<img class="grad-hex" src="./img/1.svg" alt="" />
		<img class="right-hex" src="./img/2.svg" alt="" />
		<img class="left-hex" src="./img/3.svg" alt="" />
	</div>
	<!-- <div class="two">
			<img class="grad-hex" src="img/games-icon/111.png"alt="" style='transform:scale(1.5);'/>
	</div> -->
  <main style='width:100%; height:100%; margin-bottom: 1vh;'>
	<?php
				$gid = $_GET["gid"];
				$banner="img/banner/".$gid."banner.png";
 				 echo "<div class='somespace' style='width: 100%; height: 20vh; display:flex; align-items:center;	justify-content:center; margin-top: 5vh;' >
  				<img class='bannerr' src=$banner height='90px' alt='' />
  				</div>";
	?>

	<ul class="events-list" style='overflow:hidden; overflow-y:scroll; height:100%; width:100%;'>

	<?php
	session_start();
	$uid=$_SESSION['uid'];
	require_once 'config.php';
	$gid = $_GET["gid"];
	$img="img/games-icon/".$gid.".png";
	// $bgg=" \" url('img/games-icon/".$gid.".jpg')\"";
	// // $bg=" " ".$bgg." " ";
	// echo "<script> $('.body').css('background-image', $bgg);</script>";
	$sql = "SELECT eid,ename,eloc,edate FROM hosted WHERE gid=$gid";
	$sql2="SELECT eid FROM joined WHERE uid=$uid";
	$res = $conn->query($sql2);
	$eids=Array();
	while ($r = $res->fetch_array()) {
		array_push($eids,$r['eid']);
	}
	// print_r($eids);

	if ($result = $conn->query($sql)) {
			if ($result->num_rows > 0) {

					while ($row = $result->fetch_array()) {
							if (!in_array($row['eid'], $eids)){
							echo "<li class='l1'><ul class='u'>";
							echo "<li class='l2'> <img src=$img width='75px' style='filter: drop-shadow(0px 5px 3px black);	'></li>";
							echo "<li class='l3'>
												<span style='font-size: 24px;font-weight: 500;'>
													${row['ename']}
												</span>
												<br>
												<div style='display:flex;'>
														<span style=' margin-right:1vh;flex:1;'>
															Location: ${row['eloc']}
														</span>
														<span style=' margin-right:1vh; flex:1;'>
															Date: ${row['edate']}
														</span>
												</div>
									</li>";
							echo "<li class='l4'><a class='j' href='join.php?eid=${row['eid']}&gid=$gid'>JOIN</a></li>";
							echo "</ul></li>";
						}
					}
					;
					// Free result set
					$result->free();
				} else {
					echo " <div class='lead' style='	width: 100%;
						height: 100%;
						display: flex;
						justify-content: center;
						align-items: center;'> <p> <em>No records were found.</em> </p> </div>";
				}
		} else {
			echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
		}
	// Close connection
	$conn->close();
	?>


	</main>
	<!-- <div class="bg-modal">
				<div class="modal-contents">
					<div class="close">+</div>
					<div class="sign-up-form">

							<form class="m" action="join.php" method="POST" >
								<h4>Enter Team Details</h4>
								<ul class="user">

									<input class="user4" type="text" name="tname" placeholder="Team Name" required>
								</ul>

								<ul class="email">
								<textarea rows="4" cols="5" style="color: black;" class="email4" type="email" name="mbr_name" placeholder="Memebers Name" required></textarea>
								</ul>

								<button type="submit" class="submit-signup-button" value="submit"> JOIN </button>
							</form>

					</div>
	</div>
	</div> -->
	<div class='somespace' style='width: 100%; height: 10vh;' >

	</div>
	<footer class="social-footer" >
		<div id="bottom" class="social-footer-icons">
		<ul class="linkk">
			<li><a class="linkk" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a class="linkk" href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<li><a class="linkk" href="https://www.github.com/kaushikkateel"><i class="fa fa-github" aria-hidden="true"></i></a></li>
			<li><a class="linkk" href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		 </ul>
		<ul class="feedbackdiv" >
			<li><a class="feedbackdiv2"  id='f'href="#">feedback</a></li>
		</ul>
	</div>

</footer>
	<script src="./events.js">

	</script>


</body>

</html>
