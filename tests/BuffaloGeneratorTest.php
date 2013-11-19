<?php

use Buffalo\buffalo\Buffalo\buffalo\buffalo\buffalo\Buffalo\buffalo\BuffaloGenerator;

class BuffaloGeneratorTest extends TestCase {

    /**
     * Set up the test
     *
     * @return void
     */
    public function setUp()
    {
        $this->buffaloGenerator = new BuffaloGenerator;
        $this->buffaloClass = '\Buffalo\buffalo\Buffalo\buffalo\buffalo\buffalo\Buffalo\buffalo\Buffalo';
    }

    /**
     * Assert that the buffalo generator can generate a buffalo.
     *
     * @return void
     */
    public function testBuffaloGeneratorCanGenerateABuffalo()
    {
        $count = 0;
        foreach ($this->buffaloGenerator->generateBuffalo(1) as $buffalo)
        {
            $this->assertInstanceOf($this->buffaloClass, $buffalo);
            $count++;
        }
        return $this->assertEquals(1, $count);
    }

    /**
     * Assert that the buffalo generator can generate many buffalos.
     *
     * @return void
     */
    public function testBuffaloGeneratorCanGenerateManyBuffalos()
    {
        $count = 0;
        foreach ($this->buffaloGenerator->generateBuffalo(3) as $buffalo)
        {
            $this->assertInstanceOf($this->buffaloClass, $buffalo);
            $count++;
        }
        return $this->assertEquals(3, $count);
    }

}