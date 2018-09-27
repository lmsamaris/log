<?php
class FizzBuzz
{
    public function __construct($first, $last)
    {
        $this->first = $first;
        $this->last = $last;
    }
    public function __toString()
    {
        $i = $this->first;
        $limit = $this->last;

        $result = '';
        $word = '';
        $flag_mult = 0;
        $flag_15 = 0;

        while ($i <= $limit) {
            if (($i % 3 == 0) || (strpos($i, '3') !== false)) {
                $word = "fizz";
                $flag_mult = 1;
            }
            if (($i % 3 == 0) && (strpos($i, '3') !== false)) {
                $word = "fizz fizz";
                $flag_mult = 1;
            }

            if (($i % 5 == 0) || (strpos($i, '5') !== false)) {
                $word = "buzz";
                $flag_mult=1;
            }

            if (($i % 5 == 0) && (strpos($i, '5') !== false)) {
                $word = "buzz buzz";
                $flag_mult = 1;
            }

            if ($i % 15 == 0) {
                $word = "fizzbuzz";
                $flag_15 = 1;
            }

            if ($flag_mult && $flag_15) {
                $word = "lucky";
            }

            $result .= empty($word) ? $i.',' : $word.',';

            $word='';
            $flag_mult=0;
            $flag_15=0;
            $i++;
        }
        return (string)  substr_replace($result, "", -1);
    }
}
