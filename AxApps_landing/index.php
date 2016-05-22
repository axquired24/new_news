<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AxQuired Apps</title>
<link href="splashCss.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php $destination="../front.php?ur=home"; ?>
    <div align="center">
        <a href="<?php echo $destination; ?>">
            <img src="axApps512.png" alt="Axquired Apps" width="512" height="512" />
        </a>
    	<div style="color: #333333; font-size:32px;">
        	<strong>New</strong> news ~
        </div>
        <div>
            <img src="axquiredAppsLoad.gif" width="118" height="36" alt="axquiredApps Loading" style="margin:30px;">
        </div>
        <a href="./">
            <button id="btnAxApps"> More Apps</button>
        </a>
        <a href="<?php echo $destination; ?>">
            <button id="btnAxApps">Continue &rarr;</button>
        </a>
        
        <div id="sign">&copy; 2013 Albert Septiawan</div>
    </div>

    <meta http-equiv="refresh" content="3; url=<?php echo $destination; ?>" />
</body>
</html>
