<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello World</title>
    </head>
    <body>
        <?php 
		$uptime = shell_exec('uptime');
		echo $uptime;
	?>
    </body>
</html>
