<?php

/**
  * Query information from the users table, based on the provided criteria
  *
  */

if (isset($_POST['submit'])) 
{
	try 
	{
		session_start();

		require "config.php";
		require "common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$query_criteria = array(
			"firstname"	=> $_POST['firstname'],
			"lastname"	=> $_POST['lastname'],
			"contact"	=> $_POST['contact'],
			"sa_id"		=> $_POST['sa_id'],
			"bank"		=> $_POST['bank'],
			"account"	=> $_POST['account']
		);

		// Preparing the SQL statement
		$sql = "SELECT * FROM users WHERE ";
		foreach ($query_criteria as $key => $value) 
		{
			echo "[$key] => [$value] => ";
			if (!empty($value))
			{
				$sql .= "$key = '$value' AND ";
				//echo "TRUE";
			}
			echo nl2br("\n");
		}
		$sql = substr($sql, 0, -4);
		echo $sql;

		$statement = $connection->prepare($sql);
		$statement->execute();

		$result = $statement->fetchAll();
	}
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
}
?>

<!-- Start of the page -->
<?php require "templates/header.php"; ?>

	<section id="main">
	
		<!-- Display results -->
		<?php
		if (isset($_POST['submit'])) 
		{
			if ($result && $statement->rowCount() > 0) 
			{ 
		?>
				<?php
					$_SESSION['query_result'] = $result;
					//echo nl2br("PRINTING THE RESULTS\n");
				?>
				
				<?php
					//header('Location: display_results.php');
					//exit;
					redirect("display_results.php");
				?>
				<a href="display_results.php">SHOW RESULTS</a>
			<?php 
			}
			else 
			{
			?>
				<h2>No promoters match the following criteria:</h2>
				<hr/>
				<p>
				<?php
					foreach ($query_criteria as $key => $value) 
					{
						if (!empty($value))
						{
							echo nl2br(
								preg_replace(
									array(
										"/firstname/", 
										"/lastname/", 
										"/contact/", 
										"/sa_id/", 
										"/^((?!.bank)bank(?!.bank))/", 
										"/account/"),
									array(
										"First Name", 
										"Last Name", 
										"Contact No.", 
										"SA ID", 
										"Bank", 
										"Account"
									),
								"$key: $value"
								));
							echo nl2br("\n");
						}
					}
				?>
				</p>
				<hr/>
		<?php 
			}
		}
		?>

		<!-- Insert promoter's form -->
		<h1>Find promoters</h1>
		<p>Enter the relevant search criteria:</p>
		<?php require "templates/promoter_form.php"; ?>
		
		<hr/>

		<a href="../index.php">Back to home</a>
	</section>
<?php require "templates/footer.php"; ?>
