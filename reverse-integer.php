class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $min = -(2**31);
        $max = (2**31)-1;

        $negative = false;
        if($x < 0){
            $negative = true;
        }
        $rev = strrev($x);
        $result = (int)$rev;
        if($negative){
            $result = -$result;
        }

        if($result > $max || $result < $min){
            return 0;
        }
        
        return $result;
    }
}
