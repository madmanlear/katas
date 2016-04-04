<?php

use Kata\GildedRose;

class GildedRoseTest extends PHPUnit_Framework_TestCase
{
    
    public function test_class_exists()
    {
        $gildedRose = new GildedRose('product', 1, 1);
        $this->assertInstanceOf(GildedRose::class, $gildedRose);
    }

    public function test_updates_normal_items_before_sell_date()
    {
        $item = GildedRose::of('normal', 10, 5); // quality, sell in X days

        $item->tick();

        $this->assertEquals(9, $item->quality);
        $this->assertEquals(4, $item->sellIn);
    }

    public function test_updates_normal_items_on_sell_date()
    {
        $item = GildedRose::of('normal', 10, 0);

        $item->tick();

        $this->assertEquals(8, $item->quality);
        $this->assertEquals(-1, $item->sellIn);
    }

    public function test_updates_normal_items_after_sell_date()
    {
        $item = GildedRose::of('normal', 10, -5);

        $item->tick();

        $this->assertEquals(8, $item->quality);
        $this->assertEquals(-6, $item->sellIn);
    }

    public function test_updates_normal_items_with_a_quality_of_0()
    {
        $item = GildedRose::of('normal', 0, 5);

        $item->tick();

        $this->assertEquals(0, $item->quality);
        $this->assertEquals(4, $item->sellIn);
    }

    public function test_updates_brie_items_before_sell_date()
    {
        $item = GildedRose::of('Aged Brie', 10, 5);

        $item->tick();

        $this->assertEquals(11, $item->quality);
        $this->assertEquals(4, $item->sellIn);
    }

    /*context('Brie Items', function () {

        it ('updates Brie items before the sell date with maximum quality', function () {
            $item = GildedRose::of('Aged Brie', 50, 5);

            $item->tick();

            expect($item->quality)->toBe(50);
            expect($item->sellIn)->toBe(4);
        });

        it ('updates Brie items on the sell date', function () {
            $item = GildedRose::of('Aged Brie', 10, 0);

            $item->tick();

            expect($item->quality)->toBe(12);
            expect($item->sellIn)->toBe(-1);
        });

        it ('updates Brie items on the sell date, near maximum quality', function () {
            $item = GildedRose::of('Aged Brie', 49, 0);

            $item->tick();

            expect($item->quality)->toBe(50);
            expect($item->sellIn)->toBe(-1);
        });

        it ('updates Brie items on the sell date with maximum quality', function () {
            $item = GildedRose::of('Aged Brie', 50, 0);

            $item->tick();

            expect($item->quality)->toBe(50);
            expect($item->sellIn)->toBe(-1);
        });

        it ('updates Brie items after the sell date', function () {
            $item = GildedRose::of('Aged Brie', 10, -10);

            $item->tick();

            expect($item->quality)->toBe(12);
            expect($item->sellIn)->toBe(-11);
        });

         it ('updates Briem items after the sell date with maximum quality', function () {
            $item = GildedRose::of('Aged Brie', 50, -10);

            $item->tick();

            expect($item->quality)->toBe(50);
            expect($item->sellIn)->toBe(-11);
        });

    });


    context('Sulfuras Items', function () {

        it ('updates Sulfuras items before the sell date', function () {
            $item = GildedRose::of('Sulfuras, Hand of Ragnaros', 10, 5);

            $item->tick();

            expect($item->quality)->toBe(10);
            expect($item->sellIn)->toBe(5);
        });

        it ('updates Sulfuras items on the sell date', function () {
            $item = GildedRose::of('Sulfuras, Hand of Ragnaros', 10, 5);

            $item->tick();

            expect($item->quality)->toBe(10);
            expect($item->sellIn)->toBe(5);
        });

        it ('updates Sulfuras items after the sell date', function () {
            $item = GildedRose::of('Sulfuras, Hand of Ragnaros', 10, -1);

            $item->tick();

            expect($item->quality)->toBe(10);
            expect($item->sellIn)->toBe(-1);
        });

    });*/

}
