<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class SummingNSerriesTest extends TestCase {

    public function sum(int $n) {
        $mod = (pow(10,9) +7);
        var_dump($mod);
        $result = 0;

        // for($i=1; $i<=$n; $i++){
        //     $result += pow($i,2) - pow(($i-1),2);
        //     var_dump(pow($i,2) - pow(($i-1),2));
        //     $result %= $mod;
        // }
        // return $result;

        for($i=1;$i<=$n*2;$i++) {
            if($i%2 == 1) {
                $result += $i;
                $result %= $mod;
            }
        }
        return $result;
    }

    public function testSum() {
        // $this->assertEquals(4, $this->sum(2));
        // $this->assertEquals(1, $this->sum(1));
        $this->assertEquals(218194447, $this->sum(10));
    }
}