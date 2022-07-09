<?php
/*
 * The Diamond Class
 */

namespace FlickerLeap;

class Diamond extends Shape
{

    /**
     *
     * @param int $length
     */
    public function __construct($length = 8)
    {
        $this->name = 'Diamond';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;
    }

    /**
     * Draws the square.
     */
    public function draw()
    {
        for ($i = 0; $i < $this->sideLength; $i++) {
            for ($j = $i; $j < $this->sideLength; $j++) {
                echo $this->padding(2);
            }
            for ($j = 2 * $i - 1; $j > 0; $j--) {
                echo $this->pixel;
            }
          $this->newLine();
        }

        for ($i = $this->sideLength; $i > 0; $i--) {
            for ($j = $this->sideLength - $i; $j > 0; $j--) {
                echo $this->padding(2);
            }
            for ($j = 2 * $i - 1; $j > 0; $j--) {
                echo $this->pixel;
            }
                $this->newLine();
        }
    }
}