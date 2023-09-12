class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $reversed = strrev($x);
        if($x == $reversed) {
            return true;
        } else {
            return false;
        }
    }
}