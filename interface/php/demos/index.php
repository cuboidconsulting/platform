<?php
	include('../../../core/php/Seed.php');

	// will replace with persistent-storage unlock mechanism:
	if (isset($_GET['down'])) {$test = new SeedRequest(array('seed_request_type' => 'asset', 'seed_action' => 'redirect','asset_id' => 1));}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>CASH Music : Seed Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="assets/css/demo.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="mainspc">
	<h1>BAD BOOKS</h1>
	<h2>our mailing list</h2>

	<?php seed_embedElement(1); // Seed element (Bad Books YWHTA Email For Download) ?>

	<?php include('debug/seed_debug.php'); // Seed debug DO NOT INCLUDE IN PRODUCTION! ?>
</div>

</body>
</html>