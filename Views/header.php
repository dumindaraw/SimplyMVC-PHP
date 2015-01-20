<html>
<head>
<title>SimplyMVC</title>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>Public/CSS/default.css">
</head>
<body>
<div id="header">
<a href="<?php echo BASE_PATH;?>index">Home</a>

<?php if(Session::get("isLoggedIn") == true): ?> 
	<a href="<?php echo BASE_PATH;?>dashboard/logout">Logout</a>
<?php else: ?>
	<a href='<?php echo BASE_PATH;?>login'>Login</a>
<?php endif ?>

</div>
<div id="content">