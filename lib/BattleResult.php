<?php

class BattleResult
{
    /**
     * @var
     */
    private $usedJediPower;

    /**
     * @var
     */
    private $winningShip;

    /**
     * @var
     */
    private $losingShip;

    /**
     * BattleResult constructor.
     * @param $usedJediPower
     * @param $winningShip
     * @param $losingShip
     */
    public function __construct($usedJediPower, Ship $winningShip, Ship $losingShip)
    {
        $this->usedJediPower = $usedJediPower;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return Ship
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return boolean
     */
    public function wereJediPowerUsed()
    {
        return $this->usedJediPower;
    }

    /**
     * @return Ship
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }


}
