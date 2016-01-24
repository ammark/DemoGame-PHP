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
     * @param AbstractShip $winningShip
     * @param AbstractShip $losingShip
     */
    public function __construct($usedJediPower, AbstractShip $winningShip = null, AbstractShip $losingShip = null)
    {
        $this->usedJediPower = $usedJediPower;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return Ship|null
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
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    public function isThereAWinner()
    {
        return $this->getWinningShip() != null;
    }

}
