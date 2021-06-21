<?php 
    function removeDuplicates($nums) {
        $j = 0;
        $x = count($nums); // Count the number of array
        sort($nums); // If array is unsorted then sort first
        // loop first go upto length-1 and the reason is that we compare each element with after that element
        // if first element match with second element the leave that and going on. 
        for($i=0; $i<count($nums)-1;$i++){
            if( $nums[$i] != $nums[$i+1]){
                $temp[$j] = $nums[$i];
                $j++;
            }
            $temp[$j] = $nums[$x-1];
        }
        return $temp;
    }


    $nums = array( rand(1,10),rand(2,5),rand(3,5),rand(10,40));
    $pnums = removeDuplicates($nums);
    foreach( $pnums as $key => $val){
        print $key.' ==== '. $val.'<br />';
    }
?>