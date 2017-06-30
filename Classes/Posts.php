<?php


// CLASSES CREATION => POSTS //

class Posts {
    public $postdate;
    public $posttitle;
    public $departure;
    public $arrivallocation;
    public $departuredate;
    public $departuretime;
    public $price;
    public $parcelsize;  
    public $postdetails;
    
    function __construct( $posttitle, $departure, $arrivallocation, $departuredate, $departuretime, $price, $parcelsize, $postdetails) {
       // $this->postdate = $postdate;
        $this->posttitle = $posttitle;
        $this->departure = $departure;
        $this->arrivallocation = $arrivallocation;
        $this->departuredate = $departuredate;
        $this->departuretime = $departuretime;
        $this->price = $price;
        $this->parcelsize = $parcelsize;
        $this->postdetails = $postdetails;
    }
    
    function getPostdate() {
        return $this->postdate;
    }

    function getPosttitle() {
        return $this->posttitle;
    }

    function getDeparture() {
        return $this->departure;
    }

    function getArrivallocation() {
        return $this->arrivallocation;
    }

    function getDeparturedate() {
        return $this->departuredate;
    }

    function getDeparturetime() {
        return $this->departuretime;
    }

    function getPrice() {
        return $this->price;
    }

    function getParcelsize() {
        return $this->parcelsize;
    }

    function getPostdetails() {
        return $this->postdetails;
    }

    function setPostdate($postdate) {
        $this->postdate = $postdate;
    }

    function setPosttitle($posttitle) {
        $this->posttitle = $posttitle;
    }

    function setDeparture($departure) {
        $this->departure = $departure;
    }

    function setArrivallocation($arrivallocation) {
        $this->arrivallocation = $arrivallocation;
    }

    function setDeparturedate($departuredate) {
        $this->departuredate = $departuredate;
    }

    function setDeparturetime($departuretime) {
        $this->departuretime = $departuretime;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setParcelsize($parcelsize) {
        $this->parcelsize = $parcelsize;
    }

    function setPostdetails($postdetails) {
        $this->postdetails = $postdetails;
    }
}