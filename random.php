<?php

rand();

$x = 0;  
$TIMEFORTE = 0;
$EMPATE = 0;
$TIMEFRACO = 0;
//function sortearGOL(){
	do {

		echo(rand(0,30). "<br>");
		$sorteioGOL = rand(0,30);
		$x = $x + 1;

		if($sorteioGOL >= 0 && $sorteioGOL <= 9){
			echo("gol time mais forte <br>");
			$sortei2 = rand(0,100);
				if($sortei2 <= 10){
					$TIMEFORTE = $TIMEFORTE + 1;
				}
					else{

						$TIMEFORTE = $TIMEFORTE;
					}
		}
		
			else if($sorteioGOL >= 10 && $sorteioGOL <= 18){
				echo("gol time mais fraco <br>");
				$sortei2 = rand(0,100);
					if($sortei2 <= 10 ){
						$TIMEFRACO = $TIMEFRACO + 1;
					}
						else{

							$TIMEFRACO = $TIMEFRACO;
						}
			}

				else{

					echo("EMPATE<br>");
					$EMPATE = $EMPATE + 1;	
				}

	} while ($x < 90);
	//return $sorteioGOL;
//}
echo("TIMEFORTE = $TIMEFORTE <br>");
echo("EMPATE = $EMPATE <br>");
echo("TIMEFRACO = $TIMEFRACO <br>");

?>

