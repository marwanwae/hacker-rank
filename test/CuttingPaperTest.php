<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ConnectingTownsTest extends TestCase {

    public function connecting(int $n, array $routes) {
        $result = 1;
        foreach($routes as $value) {
            $result = $result * $value;
            $result %= 1234567;
        }
        return $result;
    }

    public function testConnecting() {
        $this->assertEquals(3, $this->connecting(3, [1, 3]));
        $this->assertEquals(8, $this->connecting(4, [2, 2, 2]));
        $this->assertEquals(813562, $this->connecting(11, [473, 264, 845, 374, 782, 809, 188, 35, 253, 635]));
    }
}