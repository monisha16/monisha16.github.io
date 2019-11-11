<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link href="https://fonts.googleapis.com/css?family=Roboto|Space+Mono&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="./style3.css" />
	<script src="https://code.jquery.com/jquery-3.4.1.js"> </script>
	<title> Stadia of Olympus </title>

</head>

<body>

	<header class="h">
		<div class="logo-container">
			<img src="./img/logo.svg" alt="logo" />
			<h4 class="logo">Stadia of Olympus</h4>
		</div>
		<nav class="navigator">
			<ul class="nav-link">
				<li><a class="nav-link home-button" href="index.html">HOME</a></li>
				<li><a class="nav-link profile-button" href="#">MY PROFILE</a></li>
			</ul>
		</nav>
	</header>

	</div>
	<div class="one">
		<img class="grad-hex" src="./img/1.svg" alt="" />
		<img class="right-hex" src="./img/2.svg" alt="" />
		<img class="left-hex" src="./img/3.svg" alt="" />
	</div>

	<?php
	require_once 'config.php';
	$gid = $_GET["gid"];
	$sql = "SELECT ename,eloc FROM hosted WHERE gid=$gid";
	if ($result = $conn->query($sql)) {
			if ($result->num_rows > 0) {
					echo "<div class='hosted-table'>";
					echo "<table class='table table-bordered table-striped' style='text-align:center; width:40% ;' >";
					echo "<tbody>";
					while ($row = $result->fetch_array()) {
							echo "<tr>";
							echo "<td><img src='img\games-icon\icon-48x48-medium (4).png' width='75px'></td>";
							echo "<td> <span style='font-size: 32px'>${row['ename']}</span><br>${row['eloc']}</td>";
							echo "<td><button style='color:black;'>Join</button></td>";
							//     echo "<a href='". $row['link'] ."' target='_blank'>Veiw Resume</a>";
							// echo "</td>";
							echo "</tr>";
						}
					echo "</tbody>";
					echo "</table>";
					echo "</div>";
					// Free result set
					$result->free();
				} else {
					echo "<p class='lead'><em>No records were found.</em></p>";
				}
		} else {
			echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
		}
	// Close connection
	$conn->close();
	?>


	</main>
	
	<div class="social-footer">
		<div class="social-footer-icons">
			<ul class="linkk">
				<li><a class="linkk" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a class="linkk" href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a class="linkk" href="https://www.github.com/kaushikkateel"><i class="fa fa-github" aria-hidden="true"></i></a></li>
				<li><a class="linkk" href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
			
		</div>

	</div>
	<script src="./games.js">

	</script>


</body>

</html>