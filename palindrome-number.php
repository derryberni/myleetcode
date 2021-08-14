class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($number) {
        $newNumber = 0;
        $koma = $number;

        if($number < 0){
            return false;
        }

        while($koma){
            $sisaBagi = $koma % 10;
            $newNumber = $newNumber * 10 + $sisaBagi;
            $koma = floor($koma/10);
        }

        if($number == $newNumber){
            return true;
        }

        return false;
    }
}
