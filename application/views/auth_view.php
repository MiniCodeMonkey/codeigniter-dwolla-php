<!doctype html>
<html>
<head>
	<title>Dwolla authentication test</title>
</head>
<body>
<?php
if (isset($auth_url)):
?>
<p><?php echo anchor($auth_url, 'Authenticate with Dwolla'); ?></p>
<?php
else:
?>
<p>Hello <?php echo $account_info['Name']; ?>!</p>
<p>You are now authenticated with Dwolla</p>
<?php
endif;
?>
</body>
</html>