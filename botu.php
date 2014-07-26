<?php require "fonksiyon.php"; ?>


    <?php 
        $Baglan = file_get_contents("http://smf.teknoromi.com/index.php?topic=73.0");
        preg_match('#id="subject_(.*?)"><a href="(.*?)">(.*?)</a>#', $Baglan, $Konu);
        preg_match('#<div class="post">(.*?)</div>#', $Baglan, $Konuicerik);
        
        
        $Konuİsmi = $Konu[3];
        $Konuİcerik = $Konuicerik[1];
        
        echo $Konuİsmi.$Konuİcerik;
       
        
    ?>
