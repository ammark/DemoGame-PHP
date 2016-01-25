<?php

/**
 * Created by PhpStorm.
 * User: ammarkalim
 * Date: 2016-01-24
 * Time: 9:28 PM
 */
abstract class AbstractShipStorage
{
    abstract public function fetchAllShipsData();

    abstract public function fetchSingleShipData($id);
}
