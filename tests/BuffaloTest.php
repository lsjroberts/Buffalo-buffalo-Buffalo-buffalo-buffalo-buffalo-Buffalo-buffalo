<?php

use Buffalo\buffalo\Buffalo\buffalo\buffalo\Buffalo\buffalo\Buffalo;

class BuffaloTest extends TestCase {

    /**
     * Set up the test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->buffalo = new Buffalo;
        $this->buffaloStatement = 'Buffalo buffalo Buffalo buffalo buffalo buffalo Buffalo buffalo';
    }

    /**
     * Assert that the buffalo is a buffalo.
     *
     * @return void
     */
    public function testBuffaloIsBuffalo()
    {
        return $this->assertTrue($this->buffalo->isBuffalo());
    }

    /**
     * Assert that the buffalo can buffalo.
     *
     * @return void
     */
    public function testBuffaloCanBuffalo()
    {
        return $this->assertEquals($this->buffaloStatement, $this->buffalo->buffalo());
    }

}