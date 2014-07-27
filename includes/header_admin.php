<?php 
	session_start();

	require_once("includes/model_customer.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Tourists and travel experts best choice of traveling Queens town in NZ">
	<meta name="keywords" content="travel, fttl, queenstown, aerosports">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Emilie Park">
	<meta name="rating" content="general">
	<title>Fly To The Limit</title>
	<link rel="stylesheet" href="assets/css/normalize.css" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
	<div id="outer-frame">
		<div id="inner-frame"></div>
			<div id="wrapper">
				<header>
					<h1 class="slogan" >No.1 Travel Agency in NZ</h1>
					<div id="logo"><a href="index.php">FTTL</a></div>
					<nav>

						
					
					</nav>
				</header>
				<div id="content-panel">
					<div id="top-info">
						<div id="status">
							<?php 
								if(isset($_SESSION["AdminID"])){
									$oCustomer = new Customer();
									$oCustomer->load($_SESSION["AdminID"]);

									echo '<p>Welcome, '.htmlentities($oCustomer->FirstName).'</p>';
									echo '<a href="logout_admin.php">Sign-out</a>';

								}else{
									echo 'Only Admin can access this page.';
								}

							?>

						</div>
						<div id ="search">+64 3 123 3456
							<form action="http://www.fttl.co.nz"  method="GET" role="search">
								<input name="search" type="search" placeholder="- search" required />
								<button type="submit" role="button">search</button>
							</form>
						</div>
					</div>
