<?php

class Cylinder
{
    public int|float $radius;
    public int|float $height;

    public function __construct(float|int $radius, float|int $height)
    {
        $this->radius = $radius;
        $this->height = $height;
    }

    public function getVolume()
    {
        $baseArea = $this->getBaseArea();
        return $baseArea * $this->height;
    }

    public function getBaseArea(): int|float
    {
        return pi() * ($this->radius * $this->radius);
    }

    public function getPerimeter(): int|float
    {
    return pi()*$this->radius*2;
    }
}
