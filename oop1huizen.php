<?php
// Auteur: Emily van den Berg
// Functie: Huis opdracht

// Maak een class aan met een aantal properties voor verdiepingen, kamers, en om later het volume en de prijs te berekenen
class House {
    private int $floor;
    private int $rooms;
    private float $width;
    private float $height;
    private float $length;
    private int $volume;
    private int $price;


    // Constructor methode opstellen
    public function __construct($floor, $rooms, $width, $height, $length) {
        $this->floor = $floor;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        $this->setVolume();
    }

    // Methode om de volume te berekenen
    public function setVolume() {
        $this->volume = $this->width * $this->height * $this->length;
        return $this->volume;
    }

    // Methode om de prijs te berekenen op basis van het volume
    public function getPrice() {
        $this->price = $this->volume * 1500;
        return $this->price;
    }

    // Methode om de informatie over het huis te weergeven
    public function getHouse() {
        return "Dit huis heeft " . $this->floor . " verdiepingen, " . $this->rooms . " kamers 
        en heeft een volume van " . $this->setVolume() . " m3. <br> 
        De prijs van het huis is " . $this->getPrice() . " euro. <br>";
    }

}

// Stel 3 objecten op en vul de data in op basis van de constructor
$house1 = new House(2, 5, 10.5, 3.2, 8.0);
$house2 = new House(4, 9, 13.7, 20.2, 24.3);
$house3 = new House(3, 3, 11.2, 4.4, 10.0);

// Toon de informatie over het huis op het scherm
echo $house1->getHouse();
echo $house2->getHouse();
echo $house3->getHouse();
?>
