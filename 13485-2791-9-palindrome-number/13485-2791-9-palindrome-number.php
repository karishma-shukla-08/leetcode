class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x = strval($x);
        $rev = strrev($x);
        if($x == $rev) return true;
        return false;
    }
}