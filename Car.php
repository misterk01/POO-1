<?php
class Car
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;
    /**
     * @var integer
     */
    private $nbSeats;
    /**
     * @var integer
     */
    private $nbWheels = 4;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;


    /*Constructeur*/

    public function __construct(string $color, string $energy, int $nbSeats = 4)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    /*Getters et Setters*/
    /**
     * @return int
     */
    public function getnbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int
     */
    public function setnbWheels(int $nbWheels): int
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return int
     */
    public function getnbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int
     */
    public function setnbSeats(int $nbSeats): int
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }
    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): string
    {
        $this->energy = $energy;
    }
    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): int
    {
        $this->energyLevel = $energyLevel;
    }

    /*ce que peut faire l'objet = METHODES/FONCTIONS*/
    public function start()
    {
        return "The car is on the road !";
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }





}
