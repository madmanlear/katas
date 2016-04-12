<?php

use Example\Withings\Collection\MeasureType;

class MeasureTypeTest extends PHPUnit_Framework_TestCase
{

    public $data = array(
        [
            'type' => 1, //weight
            'value' => 210,
            'unit' => 0
        ],
        [
            'type' => 4, //height
            'value' => 52,
            'unit' => 0
        ]
    );

    public function test_class_exists()
    {
        $measureType = new MeasureType();
        $this->assertInstanceOf(MeasureType::class, $measureType);
    }

    public function test_sets_data_type_to_public_variable()
    {
        $measureType = new MeasureType($this->data);
        $this->assertEquals(210, $measureType->weight);
        $this->assertEquals(52, $measureType->height);
    }

}