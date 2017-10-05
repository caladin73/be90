<?php

/*
 * city class
 */

class City {
    private $country;
    private $district;
    private $id;
    private $name;
    private $population;

    public function __construct($cityCountry, $cityDistrict, $cityID, $cityName, $cityName, $cityPopulation) {
        $this->country = $cityCountry;
        $this->district = $cityDistrict;
        $this->id = $cityName;
        $this->name = $cityDistrict;
        $this->population = $cityPopulation;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getDistrict() {
        return $this->district;
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPopulation() {
        return $this->population;
    }

    public static function setCreateCity($country, $district, $name, $population, $dbh) {
        $CreateCity = array();

        $sql = "INSERT INTO city (name, district, population)";
        $sql .= "VALUES ($name, $district, $population)";
        try {
            $q = $dbh->prepare($sql);
            $q->bindValue(':')
        }
    }


}