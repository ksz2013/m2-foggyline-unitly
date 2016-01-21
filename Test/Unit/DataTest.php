<?php

namespace Foggyline\Unitly\Test\Unit;

class DataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    /**
     * @codeCoverageIgnore
     */
    public function additionProvider()
    {
        return array(
            'adding zeros' => array(0, 0, 0),
            'zero plus one' => array(0, 1, 1),
            'one plus zero' => array(1, 0, 1),
//            'one plus one' => array(1, 1, 3) // fails
        );
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testFailingInclude()
    {
        include 'not_existing_file.php';
    }

    public function testSomethingIncomplete()
    {
        // Optional: Test anything here, if you want.
        $this->assertTrue(TRUE, 'This should already work.');

        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    public function testSomething()
    {

        return;
        $this->fail("Exception raised");
        return ;
    }




}
