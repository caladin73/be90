<?php

/*
 * city class
 */

class City {
    private $city_id;
    private $city_name;
    private $city_countrycode;
    private $city_district ;
    private $city_population;

    public function __construct($id, $name, $countrycode, $district, $population) {
        $this->city_id;
        $this->city_name = $name;
        $this->city_countrycode= $countrycode;
        $this->city_district = $district;
        $this->city_population = $population;
    }

    public function getCity_id() {
        return $this->city_id;
    }

    public function getName() {
        return $this->city_name;
    }

    public function getCity_Countrycode() {
        return $this->city_countrycode;
    }

    public function getCity_District() {
        return $this->city_district;
    }

    public function getCity_Population() {
        return $this->city_population;
    }

    public static function setCreateCity($name, $countrycode, $district, $population, $dbh) {
        $CreateCity = array();

        $sql = "INSERT INTO city (name, countrycode, district, population)";
//      $sql .= "VALUES ($name, $countrycode, $district, $population)";
        try {
            $q = $dbh->prepare($sql);
            $q->bindValue(':name', $name);
            $q->bindValue(':countrycode', countrycode);
            $q->bindValue('district', $district);
            $q->bindValue('population', $population);

        }
    }


}