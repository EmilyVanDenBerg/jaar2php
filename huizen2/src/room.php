<?php
namespace App;

class Room 
{
    private float $width;
    private float $height;
    private float $length;

    public function __construct(float $length, float $width, float $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function getVolume(): float {
        return $this->width * $this->height * $this->length;
    }

    public function getDimensions(): string {
        return "Lengte: " . $this->length . "m, breedte: " . $this->width . "m, hoogte: " . $this->height . "m";
    }
}
