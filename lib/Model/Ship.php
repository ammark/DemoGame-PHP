<?php

class Ship extends AbstractShip
{
    /**
     * @var int
     */
    private $jediFactor = 0;

    private $underRepair;

    public function __construct($name)
    {
        parent::__construct($name);
        // randomly put this ship under repair
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return !$this->underRepair;
    }


    public function getType()
    {
        return 'Empire';
    }
}
