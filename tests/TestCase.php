<?php
namespace Illuminate\Foundation\Testing;
use Mockery;
use PHPUnit_Framework_TestCase;
use Tasnim\MarkdownParser;

 class TestCase extends PHPUnit_Framework_TestCase
{
    
    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        
    }


    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->assertTrue("test", MarkdownParser::parse("test"));
    }



    /**
     * Clean up the testing environment before the next test.
     *
     * @return void
     */
    public function tearDown()
    {
        if (class_exists('Mockery')) {
            Mockery::close();
        }
        
        if (property_exists($this, 'serverVariables')) {
            $this->serverVariables = [];
        }
    }

}