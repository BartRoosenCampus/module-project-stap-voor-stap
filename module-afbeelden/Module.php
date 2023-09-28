<?php

class Module
{
    private ?int $id;
    private string $naam;
    private float $prijs;

    public function __construct(string $naam, float $prijs, ?int $id)
    {
        $this->id    = $id;
        $this->naam  = $naam;
        $this->prijs = $prijs;
    }

    public static function create(
        string $naam, float $prijs, ?int $id = null
        ): Module
    {
        return new Module($naam, $prijs, $id);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): string
    {
        return $this->naam;
    }

    public function getPrijs(): string
    {
        return number_format($this->prijs, 2);
    }
}
