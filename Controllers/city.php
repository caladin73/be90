<?php

/*
 * city class
 */

class City {
    private $countrycode;
    private $district;
    private $id;
    private $name;
    private $population;

    public function __construct($cityCountryCode, $cityDistrict, $cityID, $cityName, $cityName, $cityPopulation) {
        $this->countrycode = $cityCountryCode;
        $this->district = $cityDistrict;
        $this->id = $cityName;
        $this->name = $cityDistrict;
        $this->population = $cityPopulation;
    }

    public function getCountryCode() {
        return $this->countrycode;
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

    public static function setCreateCity($name, $countrycode, $district, $population, $dbh) {
        $CreateCity = array();

        $sql = "INSERT INTO city (name, countrycode, district, population)";
        $sql .= "VALUES ($name, $district, $population)";
        try {
            $q = $dbh->prepare($sql);
            $q->bindValue(':name', $name);
            $q->bindValue('district', $district);
            $q->bindValue('population', $population);

        }
    }


}