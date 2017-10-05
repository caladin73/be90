<?php

/*
 * city class
 */

class City {
    private $city_name;
    private $city_countrycode;
    private $city_district ;
    private $city_population;

    public function __construct($name, $countrycode, $district, $population) {
        $this->city_name = $name;
        $this->city_countrycode= $countrycode;
        $this->city_district = $district;
        $this->city_population = $population;
    }

    public function getName() {
        return $this->city_name;
    }

    public function getCity_countrycode() {
        return $this->city_countrycode;
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