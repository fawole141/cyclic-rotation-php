<?php
function solution($A, $K){
$length = count($A);
//get last element in array

	$rotatedArray = [];
	while($K>0 ){

			$lastElement = $A[$length -1];
			$rotatedArray[0] = $lastElement;

		for($i=0; $i<$length -1; $i++){
				$rotatedArray[] = $A[$i];
		
		}

		$A = $rotatedArray;
	 $rotatedArray = [];
	$K--;
	}

		return $A;

}
//6,3,8,9,7
//7,6,3,8,9
print_r(solution([3,8,9,7,6],3));

?>