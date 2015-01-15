
<?php
echo "</br>Mehdi SHerafat - 870086235</br>";
 	$queen8_8=array(
		array(0,0,0,0,0,0,0,0),
		array(0,0,0,0,0,0,0,0),
		array(0,0,0,0,0,0,0,0),
		array(0,0,0,0,0,0,0,0),
		array(0,0,0,0,0,0,0,0),
		array(0,0,0,0,0,0,0,0),
		array(0,0,0,0,0,0,0,0),
		array(0,0,0,0,0,0,0,0),
	);
	
	$counter=0;
	for($i=0;$i<8;$i++){
		
		$z=find($queen8_8,$i);
		if($z==0){
	       $i=$i-1;
	       while (change($queen8_8,$i)==0)
		   		$i=$i-1;
				
	       }
		   $counter++;
	 }


	echo "</br>";
	echo "<table style=\"border: 5px solid #000;\"> \n";
	for($i=0;$i<8;$i++){
		echo "<tr> \n";
		for($j=0;$j<8;$j++){
		echo "<td  style=\"border: 2px solid #fff; width: 25px; height: 20px;
		text-align:center;\">";
		echo "<div style=\"background-color:#f1b513\">";
			echo "~".$queen8_8[$i][$j]."~";
			
	echo"</br>";
	echo "</td> \n";
		}
	echo "</tr> \n";
	}
	echo "</table>";
echo "counter=".$counter."</br>";

?>
<?php
 

function guard( $queen8_8, $satr, $soton) //guard vazirha
{
	     $v=0;
		 global $queen8_8;
		 
	     for($i=0;$i<8;$i++)
			if($queen8_8[$i][$soton]==1)
				$v=1;

	     for($i=0;$i<8;$i++)
			if($queen8_8[$satr][$i]==1)
				$v=1;

	     $i=$satr-1;
	     $j=$soton-1;
				
	     while($i>=0 && $j>=0)
	     {
		  	if($queen8_8[$i][$j]==1)
				$v=1;
		  		$i=$i-1;
		  		$j=$j-1;
	     }

	     $i=$satr+1;
	     $j=$soton-1;
	     while($i<8 && $j>=0)
	     {
		  	if($queen8_8[$i][$j]==1)
				$v=1;
		  		$i=$i+1;
		  		$j=$j-1;
	     }

	     $i=$satr-1;
	     $j=$soton+1;
	     while($i>=0 && $j<8)
	     {
		  	if($queen8_8[$i][$j]==1)
				$v=1;
		  		$i=$i-1;
		  		$j=$j+1;
	      }

	      $i=$satr+1;
	      $j=$soton+1;
	      while($i<8 && $j<8)
	      {
		  	if($queen8_8[$i][$j]==1)
				$v=1;
		  		$i=$i+1;
		  		$j=$j+1;
	      }
	      return $v;
		  
	 }

	 

function change ( $queen8_8, $soton) //change vazirha
 {
			global $queen8_8;
			for($i=0;$i<8;$i++)
			
	      		if($queen8_8[$soton][$i]==1)
				$v=$i;
				$queen8_8[$soton][$v]=0;
				$v=$v+1;
					while ($v<8 && guard($queen8_8,$soton,$v)==1)
					
						$v=$v+1;
					if ($v<8){
						$queen8_8[$soton][$v]=1;
					return true;
					}
					
			return false;
 			}


function find( $queen8_8, $soton) //peyda kardan vazirha
{
		global $queen8_8;
 		$satr=0;
		for($i=0;$i<8;$i++)
		
			if ( guard($queen8_8,$soton,$i)==0)
			{
				$queen8_8[$soton][$i]=1;
			return true;
			}
		return false;
		}


?>

