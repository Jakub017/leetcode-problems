class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i = 0; $i < count($nums); $i++) {
            $cur = $i;
            for($j = 0; $j < count($nums); $j++) {
                if($nums[$cur] + $nums[$j] == $target && $j != $cur) {
                    return [$cur, $j];
                }
            }
        }
    }
}