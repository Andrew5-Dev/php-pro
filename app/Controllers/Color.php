<?php

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    public function setRed($red): void
    {
        if ($red < 0 || $red > 255) {
            throw new InvalidArgumentException("Помилкове значення red. Повинно бути між 0 та 255.");
        }
        $this->red = $red;
    }

    public function setGreen($green): void
    {
        if ($green < 0 || $green > 255) {
            throw new InvalidArgumentException("Помилкове значення green. Повинно бути між 0 та 255.");
        }
        $this->green = $green;
    }

    public function setBlue($blue): void
    {
        if ($blue < 0 || $blue > 255) {
            throw new InvalidArgumentException("Помилкове значення blue. Повинно бути між 0 та 255.");
        }
        $this->blue = $blue;
    }

    public function equals(Color $other): bool
    {
        return $this->red === $other->getRed() &&
            $this->green === $other->getGreen() &&
            $this->blue === $other->getBlue();
    }

    public static function random(): Color
    {
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);
        return new self($red, $green, $blue);
    }

    public function mix(Color $other): Color
    {
        $newRed = round(($this->red + $other->getRed()) / 2);
        $newGreen = round(($this->green + $other->getGreen()) / 2);
        $newBlue = round(($this->blue + $other->getBlue()) / 2);
        return new self($newRed, $newGreen, $newBlue);
    }
}
