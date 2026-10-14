 <?php
    function convertctof($c)
    {
        $x = (9/5)*$c+32;
        return $x;
    }
    echo convertctof (15);
    ?>

<br>
<br>


<?php
    function fnc($fanhreinheit)
    {

       $y=($fanhreinheit - 32)*5/9;
       return $y;
        
    }
    echo fnc(77);
?>