<?php
// PHP program to implement
// iterative Binary Search

// A iterative binary search
// function. It returns location
// of x in given array arr[l..r]
// if present, otherwise -1
function binarySearch($arr, $l,
					$r, $x)

{
    $nunber_round = 1;
	while ($l <= $r)

	{

		$m = $l + ($r - $l) / 2;

    if ($arr[$m] == $x) {
      echo "round :".$nunber_round." ===>".$arr[$m]." = ". $x ."  found !!"."<br>";
    }else {
      echo "round :".$nunber_round." ===>".$arr[$m]." != ". $x ."<br>";
    }
		// Check if x is present at mid
		if ($arr[$m] == $x)
			return floor($m);

		// If x greater, ignore
		// left half
		if ($arr[$m] < $x)
			$l = $m + 1;

		// If x is smaller,
		// ignore right half
		else
			$r = $m - 1;

      $nunber_round++;
	}

	// if we reach here, then
	// element was not present
	return -1;
}


// Driver Code
$arr = array(9, 1, 6, 2, 4, 10, 8, 7, 5, 3);
$x = 10;
echo "<hr>";
print_r($arr);
$na = count($arr);
echo "<hr>";
echo $na-1;

// if ($arr[$na-1] == $x) {
//   $arr[] = $na+1;
// }

echo "<hr>";
print_r($arr);
echo "<hr>";
print_r($arr);
$n = count($arr);
echo "<hr>";
echo $n;
echo "<hr>";

$result = binarySearch($arr, 0,
					$n - 1, $x);

$result;



// This code is contributed by anuj_67.
?>
