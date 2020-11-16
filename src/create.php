<?php

/**
  * Add a new entry to the users table.
  *
  */

	if (isset($_POST['submit'])) {
		require "config.php";
		require "common.php";

		try {
			$new_user = array(
				"firstname"	=> $_POST['firstname'],
				"lastname"	=> $_POST['lastname'],
				"contact"	=> $_POST['contact'],
				"sa_id"		=> $_POST['sa_id'],
				"bank"		=> $_POST['bank'],
				"account"	=> $_POST['account']
			);

			$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"users",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user))
			);
			echo $sql;
			$statement = $db->prepare($sql);
			$statement->execute($new_user);
		}
		catch(PDOException $error) {
			echo $sql . "<br>" . $error->getMessage();
		}
	}
?>

<!-- Start of the page -->
<?php require "templates/header.php"; ?>

	<section id="main">

		<!-- Display add message -->
		<?php 
			if (isset($_POST['submit']) && $statement) { 
		?>
		<blockquote>
			<?php 
				echo $_POST['firstname'];
			?>
				successfully added.
		</blockquote>
		<?php
			}
		?>

		<!-- Insert promoter's form -->
		<h1>Add a promoter</h1>
		<?php require "templates/promoter_form.php"; ?>
		
		<hr/>

		<a href="../index.php">Back to home</a>
	</section>

<?php include "templates/footer.php"; ?>
