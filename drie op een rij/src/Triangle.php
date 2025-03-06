<?php

namespace Drieopeenrij;

class Triangle extends Figure {
    private $height;
    private $width;

    public function __construct($height, $width, $colorR, $colorG, $colorB) {
        $this->height = $height;
        $this->width = $width;
        parent::__construct($colorR, $colorG, $colorB);
    }

    public function draw() {
        $halfWidth = $this->width / 2;
        $color = $this->getColor();

        return "<svg height='{$this->height}' width='{$this->width}'>
             <polygon points='0,{$this->height} {$halfWidth},0 {$this->width},{$this->height}' 
             style='fill:rgb({$color});stroke-width: 5; stroke:rgb(0,0,0);\' />
        </svg>";
    }
}
