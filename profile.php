<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link href="https://fonts.googleapis.com/css?family=Roboto|Space+Mono&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="./profilee.css" />
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
        <li style='display:flex;'>

					<a class="nav-link opt1" href="#">HOSTED&nbsp;</a>
					<span class="nav-link" >/</span>
					<a class="nav-link opt2" href="#">&nbsp;JOINED</a>
					</li>

      </ul>
    </nav>
  </header>
  <div class="one">
    <img class="grad-hex" src="./img/1.svg" alt="" />
    <img class="right-hex" src="./img/2.svg" alt="" />
    <img class="left-hex" src="./img/3.svg" alt="" />
    <!--<img class="pink-hex" src="./img/4.svg" alt="" />-->
  </div>


	<body>
    <div class='somespace' style='width: 100%; height: 10vh;' ></div>
      <main class="profile-main"  style='width:100%; height:80%; margin-bottom: 1vh; overflow:hidden;'>

        <div class="profile">
          <ul class="">
						  <li class=""> <div class="profile-img" ><img src="./img/avatar.png" width="90px" alt="" class=""></div></li>
						<?php
	        	require_once 'config.php';
						session_start();
						$uid=$_SESSION['uid'];
						// echo "$uid";
	        	$sql = "SELECT uname,uemail FROM user WHERE uid=$uid";
	        	if ($result = $conn->query($sql)) {
								$row = $result->fetch_array();

							echo"	<li class=''>
									<div class='q'>  <h4 class=''>NAME</h4></div>
									<div class='w'>  <h3 class=''>${row['uname']}</h3></div>
								</li>
								<li class=''>
									<div class='q'>  <h4 class=''>EMAIL</h4></div>
									<div class='w'>  <h3 class=''>${row['uemail']}</h3></div>
								</li>";

									// Free result set
									$result->free();

						} else {
							echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
						}
					// Close connection
					// $conn->close();
					?>
            <li class="">
              <div class="s">	<button  class="edit-profile-button" value="submit" href="#"> EDIT PROFILE </button></div>
            </li>
          </ul>
        </div>
        <div class="mygames" style='width:100%; height:100%; margin-bottom: 1vh; '>
					<div  class='hostedgames' style="display:none;">
						<ul class="events-list" style='overflow:hidden; overflow-y:scroll; height:100%; width:100%;'>
		          <?php
							// session_start();
							$uid=$_SESSION['uid'];
		        	$sql = "SELECT eid,ename,eloc,edate,gid FROM hosted WHERE uid=$uid";
		        	if ($result = $conn->query($sql)) {
		        			if ($result->num_rows > 0) {

		        					while ($row = $result->fetch_array()) {
		        							// echo "<tr style='background:gray; position:absolute'>";
		        							// echo "<td><img src='img\games-icon\icon-48x48-medium (4).png' width='75px'></td>";
		        							// echo "<td> <span style='font-size: 32px'>${row['ename']}</span><br>${row['eloc']}</td>";
		        							// echo "<td><button style='color:black;'>Join</button></td>";
		        							// //     echo "<a href='". $row['link'] ."' target='_blank'>Veiw Resume</a>";
		        							// // echo "</td>";
													$i=$row['gid'];
														$img="img/games-icon/".$i.".png";

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
																					echo "<li class='l4'><a class='j' style='text-decoration:none;' href='pdf.php?eid=${row['eid']}'>GET DETAILS</a></li>";
																					echo "</ul></li>";
		        						}

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

		        	?>
				</div>
				<div class='joinedgames' style="display:block;">
					<ul class="events-list" style='overflow:hidden; overflow-y:scroll; height:100%; width:100%;'>
				<?php
				// session_start();
				$uid=$_SESSION['uid'];
				$sql = "SELECT ename,eloc,edate,gid FROM hosted WHERE eid in (SELECT eid FROM joined WHERE uid=$uid) ";
				if ($result = $conn->query($sql)) {
						if ($result->num_rows > 0) {

								while ($row = $result->fetch_array()) {
										$i=$row['gid'];
											$img="img/games-icon/".$i.".png";

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
																		echo "</ul></li>";
									}

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
						</div>
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
  	<script	src="./profile.js">	</script>


  </body>
  </html>
