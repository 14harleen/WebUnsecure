<?php
	require('header.php');
 ?>

  <!-- ======== Login ======= -->
  <main id="main">
	<br><br><br>
    <?php
	ob_start(); // session management
 
	$username=$_POST['uname'];
	$password=$_POST['password'];
		//Check the database (Check user information)
		//-------Prevent SQLi-------Check for only username instead of both username and password
		//-------Prevent SQLi-------Use prepared statements along with escaped input

		$sql = "SELECT * FROM login WHERE username ='".$username."' AND password = '".$password."'";	
		$result = $connection->query($sql);			
		$row=$result->fetch_assoc();
		if( ($result->num_rows > 0 )){								//Use =1 instead of >0 for the total results
			$_SESSION['username'] = $_POST['uname'];
		?>
		<br><br><h3 align="center" style="color:#000000"> Login Successful! Redirecting to Homepage. </h3> </div>
		<?php
		header("refresh:1; url=index.php ");
		}
		else {
		?>
		<h3 align="center" style="color:#000000"> Login Unsuccessful! Click <a href="login.php">here</a> to try again </h3>
		</div>
		<?php }
		ob_end_flush();
		?>
	<br><br><br>
  </main><!-- End #main -->

  <?php
	require('footer.php');
 ?>