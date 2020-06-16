<?php
	try
	{
		session_start();
		require "common.php";
		$result = $_SESSION['query_result'];
	}
	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<title>OLC Wagesheet</title>
		
		<style type="text/css">
			table
			{
				border-collapse: collapse;
				border-spacing: 0;
				width: 100%;
				border: 1px solid #ddd;
			}

			th, td
			{
				text-align: left;
				padding: 8px;
			}

			tr:nth-child(even){background-color: #82CAFA}
		</style>
	</head>

	<body>

			<section id="query_table">
			<h1>Results</h1>
			<div style="overflow-x:auto;">
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Contact</th>
						<th>SA ID</th>
						<th>Bank</th>
						<th>Account</th>
						<th>Date</th>
					</tr>
				</thead>
				<hr/>
				<tbody>
					<?php 
						foreach ($result as $row) 
						{
					?>
							<tr>
								<td><?php echo escape($row["id"]); ?></td>
								<td><?php echo escape($row["firstname"]); ?></td>
								<td><?php echo escape($row["lastname"]); ?></td>
								<td><?php echo escape($row["contact"]); ?></td>
								<td><?php echo escape($row["sa_id"]); ?></td>
								<td><?php echo escape($row["bank"]); ?></td>
								<td><?php echo escape($row["account"]); ?></td>
								<td><?php echo escape($row["date"]); ?> </td>
							</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
			</div>
			
			<hr/>
			<br>
			<a href="#" onclick="history.go(-1)">Back to search</a>
			<a href="../index.php">Back to home</a>
			</section>
			<?php require "templates/footer.php"; ?>