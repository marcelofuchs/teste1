<?php
use App\Entities\Tag;

class TagEloquentTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        parent::setUp();

        $stub = $this->getMock('App\\Entities\\Tag');
        $stub->expects($this->any())->method('save');
        $this->_fixture = $stub;
    }

    /**
     * @test
     */
    public function create() {
        $data = [
            'tag' => "tagteste",
        ];

        $this->_fixture->tag = $data["tag"];

        $this->assertEquals($data['tag'], $this->_fixture->tag);

        return $text;
    }

}
