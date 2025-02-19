<?php
namespace App;

class House 
{
    private array $rooms = [];
    private float $volume = 0;
    private float $price = 0;

    public function __construct(array $rooms) 
    {
        $this->rooms = $rooms;
        $this->calculateVolume();
        $this->calculatePrice();
    }

    private function calculateVolume(): void 
    {
        foreach ($this->rooms as $room) {
            $this->volume += $room->getVolume();
        }
    }

    private function calculatePrice(): void 
    {
        $this->price = $this->volume * 1500;
    }

    public function getHouse(): string
    {
        $roomDetails = "Inhoud kamers: <br>";
        foreach ($this->rooms as $index => $room) {
            $roomDetails .= "Kamer " . ($index + 1) . ": " . $room->getDimensions() . "<br>";
        }

        $roomDetails .= "Totale inhoud: " . $this->volume . " m³<br>";
        $roomDetails .= "Prijs: €" . number_format($this->price, 2, ',', '.') . "<br>";

        return $roomDetails;
    }
}
