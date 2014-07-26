<?php require "fonksiyon.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-9" />
</head>
<body>

    <?php 
        $Baglan = Baglan("http://www.konusal.com/erdogana-verilen-cesaret-odulu-geri-istendi-t506.0.html");
        preg_match('#id="subject_(.*?)"><a href="(.*?)">(.*?)</a>#', $Baglan, $Konu);
        preg_match('#<div class="post">(.*?)</div>#', $Baglan, $Konuicerik);
        
        
        $Konuİsmi = $Konu[3];
        $Konuİcerik = $Konuicerik[1];
        
        echo $Konuİsmi; ?>
        <br />
        <?php echo $Konuİcerik;
    ?>
</body>
</html>
