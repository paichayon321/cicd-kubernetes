<html>
 <head>
 <title>Docker PHP Application</title>
 </head>
 <body bgcolor=yellow>
 <h1>Congratulations! This is Your first PHP web page</h1>
        <p>Your <em>PHP</em> application is now running on Docker container</p>
        <p>You are running PHP version <?= phpversion() ?></p>
        <p>You are running PHP on HOST: <?= gethostname() ?> </p>
		<p>You can view all php engine information by click <a href='phpinfo.php'> here </a></p>
 </body>
</html>
