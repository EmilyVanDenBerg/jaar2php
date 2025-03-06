<?php

namespace Drieopeenrij;

class Square extends Figure {
    private $length;

    public function __construct($length, $colorR, $colorG, $colorB) {
        $this->length = $length;
        parent::__construct($colorR, $colorG, $colorB);
    }

    public function draw() {
        $color = $this->getColor();

        return "
        <svg width=\"{$this->length}\" height=\"{$this->length}\">
            <rect width=\"{$this->length}\" height=\"{$this->length}\" 
            style=\"fill:rgb({$color}); stroke-width: 10; stroke:rgb(0,0,0);\" />
        </svg>
        ";
    }
}
