<?php

/**
 * Created by PhpStorm.
 * User: ammarkalim
 * Date: 2016-01-23
 * Time: 1:08 AM
 */
class RebelShip extends AbstractShip
{
    public function getFavouriteJedi()
    {
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    public function getType()
    {
        return 'Rebel';
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return true;
    }

    /**
     * @param bool $useShortFormat
     * @return string
     */
    public function getNameAndSpecs($useShortFormat = false)
    {
        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Rebel) ';

        return $val;
    }

    public function getJediFactor()
    {
        return rand(10, 30);
    }
}
