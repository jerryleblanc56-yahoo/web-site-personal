<?php print( '<?xml version = "1.0" encoding = "utf-8"?>' ) ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
<title> <?php System("hostname"); ?> - Apache2 + PHP</title>
<h2>    <?php System("hostname"); ?> - Apache2 + PHP</h2>
</head>
<body>
<p>This is the default PHP page for this server.</p>
<p>Apache content starts at /var/www/<br>
   Apache config files are at /etc/apache2/
</p><p>
        PHP sample
        <A HREF="hello.php">hello PHP </A><br/>
        <A HREF="radio.php">Start Radio PHP </A> --
        <A HREF="qradio.php">Check Radio PHP </A> --
        <A HREF="killradio.php">Kill Radio PHP </A>
        <br/>
        <A HREF="hostinfo.php">hostinfo PHP </A>
</p><p>
   <?php
        echo "<p>PHP code <br />";
        System("who");
        echo " --- ";
        System("whoami");
        echo "<p>end<br />";
        # phpinfo();
   ?> <!-- end PHP -->
        <IMG alt="BizCard image not found" src="image/BizCard_CountOnQuality.jpg">
</p><p>
<A HREF="mailto:jerryleblanc56@yahoo.com">Click here to send eMail to Jerry</A>
</p>
</body></html>
