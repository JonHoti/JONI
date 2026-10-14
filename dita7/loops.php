<?php
    $x=0;


    while($x <= 10)
        {
            echo $x."<br>";
            $x++;
            if($x==6)
                {
                    break;
                }
        }
    ?>

<p>Do while loops</p>
<?php

    $y=0;
    do{
        echo $y."<br>";
        $y++;
        if($y==6)
            {
                break;
            }
    }
    while($y <= 10)
?>

<p>For Loops</p>


    <?php
			for($z=0;$z<=10;$z++)
			{
				echo 'Numeri eshte: ' . $z . '<br>';
				if($z==6)
				{
					continue; //e nderpret loop edhe nese nuk ka perfundu ende.
				}
			}
		?>

<p>Foreach Loops </p>

<?php
    $txt = array(1,28,3,4,5,6,7,90);
    sort($txt);

    foreach($txt as $x)
        {
            echo"$x <br>";
        }

?>
<br>
<?php
    $text = array(2,3,5,22,11,6,3,5);
    sort($text);

    $txt=count($text);
        for($x=0; $x<$txt; $x++)
            {
                echo $text[$x]."<br>";
            }
?>

<br>

<?php
    for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            echo $y."";
        }
        echo "<br>";
    }
?>
<br><br>


<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            echo $x."";
        }
        echo "<br>";
    }
?>

<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            echo $x."";
        }
        echo "<br>";
    }

?>


<br>
<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            echo "X";
        }
        echo "<br>";
    }
?>
<br>
<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            echo ($x + $y -1);
        }
        echo "<br>";
    }
?>
<br>
<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=$x;$y++){
            echo "*"."";
        }
        echo "<br>";
    }
?>
<br>
<?php
     for($x=5;$x>=1;$x--){
        for($y=1;$y<=$x;$y++){
            echo "*"."";
        }
        echo "<br>";
    }
?>

<br>
<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            if($x == $y){
                echo"X"."";
            }
            else{
                echo "0"."";
            }
        }
        echo "<br>";
     }
?>       
 <br>
<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            if($x + $y==6){
                echo"X"."";
            }
            else{
                echo "0"."";
            }
        }
        echo "<br>";
     }
?> 
 <br>
<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            if($x + $y==6 || $x==$y){
                echo"X"."";
            }
            else{
                echo "0"."";
            }
        }
        echo "<br>";
     }
?> 
 <br>
<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            if($x == 1 || $x == 5 || $y == 1 ||  $x == $y || ($x == 2 && $y <= 4)||($x == 4 && $y <= 4)){
                echo"X"."";
            }
            else{
                echo "0"."";
            }
        }
        echo "<br>";
     }
?> 
 <br>
<?php
     for($x=1;$x<=5;$x++){
        for($y=1;$y<=5;$y++){
            if($x == 1 || $x == 5 || $x + $y==6){
                echo $y."";
            }
            else if ($y == 3){
                echo 3;
            }
            else{
                echo "0"."";
            }
        }
        echo "<br>";
     }
?> 

