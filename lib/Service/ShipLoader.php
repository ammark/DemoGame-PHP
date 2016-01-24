<?php

class ShipLoader
{
    private $pdo;

    private $dbDsn;

    private $dbUser;

    private $dbPass;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return AbstractShip[]
     * @throws Exception
     */
    public function getShips()
    {
        $shipsData = $this->queryForShips();
        $ships = array();
        foreach($shipsData as $shipData) {
            $ships[] = $this->createShipFromDate($shipData);
        }

        return $ships;
    }

    /**
     * @param $id
     * @return null|AbstractShip
     */
    public function findOneById($id)
    {
        $pdo = $this->getPDO();
        $statement = $pdo->prepare('SELECT * FROM ship WHERE id = :id');
        $statement->execute(array('id'=> $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$shipArray) {
            return null;
        }

        return $this->createShipFromDate($shipArray);
    }

    private function createShipFromDate(array $shipData)
    {
        if ($shipData['team'] == 'rebel') {
            $ship = new RebelShip($shipData['name']);
        } else {
            $ship = new Ship($shipData['name']);
            $ship->setJediFactor($shipData['jedi_factor']);
        }
        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setStrength($shipData['strength']);


        return $ship;
    }

    private function queryForShips()
    {
        $pdo = $this->getPDO();
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $shipsArray;
    }

    /**
     * @return PDO
     */
    private function getPDO()
    {
        return $this->pdo;
    }

}
