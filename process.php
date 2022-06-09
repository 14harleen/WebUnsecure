<?php
	require('header.php');
 ?>

  <!-- ======== Processing the Testimonial ======= -->
  <main id="main">
	<br><br><br>
    <?php 
			$name = $_POST['name'];
			$test = $_POST['testimonial'];
			$sql = "INSERT INTO testimonials VALUES ('$name','$test')";
			if ($connection->query($sql) === TRUE) {
				echo "<h3 align='center'>Testimonial submitted</h3>";
			} else {
				echo "Error: " . $sql . "<br>" . $connection->error;
			}
		?>
	<br><br><br>
  </main><!-- End #main -->

  <?php
	require('footer.php');
 ?>