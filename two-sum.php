class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
         $countNums = count($nums);
         $countNumMin = $countNums-1;
         $answer = [];

          for($a = 0; $a < $countNumMin;$a++){
              for($b = $a+1; $b < $countNums; $b++){
                  if($a != $b){
                    $calc = $nums[$a]+$nums[$b];
                    if($calc == $target){
                        array_push($answer, $a);
                        array_push($answer, $b);
                    }
                  }
              }
          }
  
        return $answer;
    }
}
