<?php

class Ship
{
    /**
     * @var
     */
    private $name;

    /**
     * @var int
     */
    private $weaponPower = 0;

    /**
     * @var int
     */
    private $jediFactor = 0;

    /**
     * @var int
     */
    private $strength = 0;

    /**
     * @var bool
     */
    private $underRepair;

    /**
     * Ship constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
        // randomly put this ship under repair
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return !$this->underRepair;
    }

    /**
     *
     */
    public function sayHello()
    {
        echo 'Hello!';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $number
     * @throws Exception
     */
    public function setStrength($number)
    {
        if (!is_numeric($number)) {
            throw new \Exception('Strength must be a number, duh!');
        }

        $this->strength = $number;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param bool $useShortFormat
     * @return string
     */
    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    /**
     * @param $givenShip
     * @return bool
     */
    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }
}
