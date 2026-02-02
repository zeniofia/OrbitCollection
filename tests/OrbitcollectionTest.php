<?php
/**
 * Tests for OrbitCollection
 */

use PHPUnit\Framework\TestCase;
use Orbitcollection\Orbitcollection;

class OrbitcollectionTest extends TestCase {
    private Orbitcollection $instance;

    protected function setUp(): void {
        $this->instance = new Orbitcollection(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Orbitcollection::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
