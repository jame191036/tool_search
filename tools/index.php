<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <div class="bor_list">
    <form class="form-horizontal" name="frm" method="post" action="">
      <div class="bor_dody">
        <div class="row">
          <div class="col-sm-1 text-right">
            <p>List</p>
          </div>
          <div class="col-sm-11">
            <input name= "list" type="text" size="80" placeholder="9,1,6,2,4,10,8,7,5,3" required><br><br>
          </div>
          <div class="col-sm-1 text-right">
            <p>ค้นหา</p>
          </div>
          <div class="col-sm-4">
            <input name= "search" type="text" size="30" required><br><br>
          </div>
          <div class="col-sm-5">
            <input class="btn btn-warning" type="submit" name="submit" value="ค้นหา" />
          </div>
          <div class="col-sm-3">
          </div>
          <div class="col-sm-12 text-center">
            <h2>ประเภทการค้นหา</h2>
          </div>
          <div class="col-sm-12 text-center select_list">
            <select name="select_search">
              <option value="linear">Linear Search</option>
              <option value="binary">Binary Search</option>
              <option value="bubble">Bubble Search</option>
            </select>
          </div>
          <div class="col-sm-12">
            <h3>ผลลัพธ์</h3>
          </div>
          <div class="col-sm-2">

          </div>


            <?php


            function bubble_Sort($my_array )
            {
              do
              {
                $swapped = false;
                for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
                {
                  if( $my_array[$i] > $my_array[$i + 1] )
                  {
                    list( $my_array[$i + 1], $my_array[$i] ) =
                    array( $my_array[$i], $my_array[$i + 1] );
                    $swapped = true;
                  }
                }
              }
              while( $swapped );
              return $my_array;
            }


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





            if (isset($_POST['submit']) == true){ ?>
              <div class="col-sm-8 text-center show_calculate">
              <?php   $list = $_POST['list'];
              $search = $_POST['search'];
              $select_search = $_POST['select_search'];

              $pieces = explode(",", $list);
              $nuber_sert = $search;
              $pizza_jojo = count($pieces);
              $arr = bubble_Sort($pieces);


              if ($select_search == 'linear') {
                echo "line : [";
                $a = 1;
                for ($i = 0; $i < $pizza_jojo; $i++) {
                  echo $pieces[$i], ", ";
                  if ($a == $pizza_jojo) {
                    echo "]";
                  }
                  $a++;
                };
                echo "<br>";
                echo "Search : ".$nuber_sert;
                echo "<br>";
                echo "Resuit :::";
                echo "<br>";
                $number_round = 1;
                for ($i = 0; $i < $pizza_jojo; $i++) {

                  if ($pieces[$i] == $nuber_sert) {
                    echo "round :".$number_round."===>".$pieces[$i] ." = ". $nuber_sert."  found !!"."<br>";
                    exit();
                  }else {
                    echo "round :".$number_round."===>".$pieces[$i] ." != ". $nuber_sert."<br>";
                  }
                  $number_round++;

                };
              }

            if ($select_search == 'bubble') {
              echo "line : [";
              $a = 1;
              for ($i = 0; $i < $pizza_jojo; $i++) {
                echo $pieces[$i], ", ";
                if ($a == $pizza_jojo) {
                  echo "]";
                }
                $a++;
              };
              echo "<br>";
              echo "Search : ".$nuber_sert;
              echo "<br>";
              echo "Resuit :::";
              echo "<br>";
              $number_round = 1;
              for ($i = 0; $i < $pizza_jojo; $i++) {

                if ($arr[$i] == $nuber_sert) {
                  echo "round :".$number_round."===>".$arr[$i] ." = ". $nuber_sert."  found !!"."<br>";
                  exit();
                }else {
                  echo "round :".$number_round."===>".$arr[$i] ." != ". $nuber_sert."<br>";
                }
                $number_round++;
              };
            }else {
              echo "line : [";
              $a = 1;
              for ($i = 0; $i < $pizza_jojo; $i++) {
                echo $pieces[$i], ", ";
                if ($a == $pizza_jojo) {
                  echo "]";
                }
                $a++;
              };
              echo "<br>";
              echo "Search : ".$nuber_sert;
              echo "<br>";
              echo "Resuit :::";
              echo "<br>";
              $n = count($arr);
              $x = $nuber_sert;
              $result = binarySearch($arr, 0,
              					$n - 1, $x);

              $result;
            }
              }
            ?>

          </div>
          <div class="col-sm-2">
          </div>

        </div>
      </div>
    </form>
  </div>



</body>
</html>
