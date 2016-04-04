<?php

namespace Kata;

class Backstage extends Item
{

    public function tick()
    {
        $this->sellIn -= 1;
        $this->quality += 1;

        if ($this->sellIn <= 9) {
            $this->quality += 1;
        }

        if ($this->sellIn <= 4) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }

        if ($this->sellIn <= -1) {
            $this->quality = 0;
        }
    }
}
