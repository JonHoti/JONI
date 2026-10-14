<?php
    function x()
    {
        echo "Jon Hoti";
    }
    x()
?>
<br>
<?php
    function text($emri)
    {
        echo $emri."<br>";
    }
    text("Joni");
    text("Amir");
    text("Lis");

    function text1($emri,$mbiemri)
    {
        echo $emri.$mbiemri."<br>";
    }
    text1("Jon","Hoti");
    text1("J","Hoti");
    text1("Niti","Tershnjaku");
?>
<br>
<?php
    function vlera($x,$y)
    {
        echo $x+$y;
        echo"<br>";
        echo "$x"*"$y";
    }
    vlera(5,5);
?>
<br>
<?php
    function number(int $a, int $b)
    {
        return $a + $b;
    }
    echo number (5,"5");
?>
<br>
    <?php
			function ari($a, $b)//Edhe pa tipin e te dhenave funksionon.
			{
				return $a . $b;//Return gjithashtu perdoret edhe per ta ndaluar se ekzekutuar funksionin.
			}
			echo ari(5,"5days");//
		?>
    <br>
    <?php
			function numeri()
			{
				$x = "10"; //Mund te i caktojme edhe variabla brenda funksionit.
				$y = 5;
				return $x * $y;
				
			}
			echo numeri();
			echo $x;
		?>
    <br>
    <?php 
			$x = 10;
			$y = 7;
			function mbledh()
			{
				// $x = 10;
				// $y = 7;
				return $x + $y;
			}
			echo mbledh();
			echo $x;
		?>
    <br>
    <?php
			function fiks ($x = 20) //Parametrave mund te ju caktojme edhe vlera fikse.
			{
				echo "Vlera eshte: $x";
			}
			fiks();
		?>
    <br>
    <?php
		//Nese deshirojme te caktojme parametra me te dhena "float" por si rez. te nxjerrim "int".
			function mePresje(float $a, float  $b)//:int
			{
				return($a + $b);
			}
			echo mePresje(1.5,3.6);
		?>
    <br>
    <?php 
		//Nese e shenojme keshtu atehere si rezultat na nxjerr numer me presje(float).
			function mePres($a, $b) 
			{
				return($a + $b);
			}
			echo mePres(1.5, 3.4);
		
		?>
    <br>
    <?php
    function convertctof($c)
    {
        $x = (9/5)*c+32;
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