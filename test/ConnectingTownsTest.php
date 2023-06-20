<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ConnectingTownsTest extends TestCase {

    public function cutting(int $m, int $n) {
        if($m == 1) {
            return ($m) * ($n-1);
        }elseif($n == 1) {
            return ($m-1) * $n;
        }else {
            return ($m-1) * ($n-1);
        }
    }

    public function testCutting() {
        $this->assertEquals(3, $this->connecting(2, [3, 1]));
    }
}

// 2*2 = 3
// [][]
// [][]

// 3*3 = 8
// []|[]|[]
// []|[]|[]
// []|[]|[]

// 4*4 = 15
// [][][][]
// [][][][]
// [][][][]
// [][][][]