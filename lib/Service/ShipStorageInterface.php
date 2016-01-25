<?php

/**
 * Created by PhpStorm.
 * User: ammarkalim
 * Date: 2016-01-24
 * Time: 9:28 PM
 */
interface ShipStorageInterface
{
    /**
     * Return an array of Ship arrays, with keys id, name, weaponPower, defense.
     *
     * @return array
     */
    public function fetchAllShipsData();

    /**
     * @param integer $id
     * @return array()
     */
    public function fetchSingleShipData($id);
}
