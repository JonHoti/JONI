<?php
    echo "Sot eshte" . date("d/m/Y") . "<br>";
    echo "Sot eshte" . date("Y.m.d") . "<br>";
    echo "Sot eshte" . date("Y-m-d") . "<br>";
    echo "Sot eshte" . date("l");
?>
<br>
&copy; 2010-<?php echo date("Y");?>
<?php
    echo "Ora eshte" . date("h:i:sa");
    echo "<br>";
    echo "Ora eshte" . date("H:i:s");
?>
<br>
<?php
    echo date("Y-m-d H:i:s");
?>
<br>
<?php
    $date1=mktime(23, 04, 50, 9, 27, 1994);
    echo date("Y-m-d H:i:s", $date1);
?>