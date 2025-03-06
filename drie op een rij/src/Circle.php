<?php

namespace Drieopeenrij;

class Circle extends Figure {
    private $value;

    public function __construct($colorR, $colorG, $colorB, $value) {
        $this->value = $value;
        parent::__construct($colorR, $colorG, $colorB);
    }

    public function draw() {
        $length = $this->value * 2;
        $radius = $this->value - 5;
        $color = $this->getColor();

        return "
        <svg width=\"{$length}\" height=\"{$length}\">
            <circle cx=\"{$this->value}\" cy=\"{$this->value}\" r=\"{$radius}\"
            style=\"fill:rgb({$color}); stroke-width:10; stroke:rgb(0,0,0);\" />
        </svg>
        ";
    }
}
