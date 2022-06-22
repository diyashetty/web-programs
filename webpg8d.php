<?php
// This function adds A[][] and
// B[][], and stores the result in C[][]
function add(&$A, &$B, &$C)
{
	$N = 4;
	for ($i = 0; $i < $N; $i++)
		for ($j = 0; $j < $N; $j++)
			$C[$i][$j] = $A[$i][$j] +
						$B[$i][$j];
}

// Driver code
$A = array(array(1, 1, 1, 1),
		array(2, 2, 2, 2),
		array(3, 3, 3, 3),
		array(4, 4, 4, 4));

$B = array(array(1, 1, 1, 1),
		array(2, 2, 2, 2),
		array(3, 3, 3, 3),
		array(4, 4, 4, 4));

$N = 4;
add($A, $B, $C);

echo "Result matrix is \n";
for ($i = 0; $i < $N; $i++)
{
	for ($j = 0; $j < $N; $j++)
	{
		echo $C[$i][$j];
		echo " ";
	}
	echo "\n" ;
}

// This code is contributed
// by Shivi_Aggarwal
?>

