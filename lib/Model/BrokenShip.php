<?php

/**
 * Created by PhpStorm.
 * User: ammarkalim
 * Date: 2016-01-24
 * Time: 6:58 PM
 */
class BrokenShip extends AbstractShip
{
    public function getJediFactor()
    {
        return 0;
    }

    public function isFunctional()
    {
        return false;
    }

    public function getType()
    {
        return 'Broken';
    }
}
