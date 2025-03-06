<?php

namespace Drieopeenrij;

class Rectangle extends Figure {
    private $height;
    private $width;

    public function __construct($height, $width, $colorR, $colorG, $colorB) {
        $this->height = $height;
        $this->width = $width;
        parent::__construct($colorR, $colorG, $colorB);
    }

    public function draw() {
        $color = $this->getColor();

        return "
        <svg width=\"{$this->width}\" height=\"{$this->height}\">
            <rect width=\"{$this->width}\" height=\"{$this->height}\" 
            style=\"fill:rgb({$color}); stroke-width: 10; stroke:rgb(0,0,0);\" />
        </svg>
        ";
    }
}
