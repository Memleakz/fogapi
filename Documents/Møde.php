<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Møde
{
    /** @ODM\Id */
    public $_id; //int
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $titel; //String
    /** @ODM\Field(type="string") */
    public $lokale; //String
    /** @ODM\Field(type="int") */
    public $nummer; //object
    /** @ODM\Field(type="string") */
    public $dagsordenurl; //String
    /** @ODM\Field(type="string") */
    public $starttidsbemærkning; //String
    /** @ODM\Field(type="string") */
    public $offentlighedskode; //String
    /** @ODM\Field(type="string") */
    public $dato; //Date
    /** @ODM\Field(type="int") */
    public $statusid; //int
    /** @ODM\Field(type="int") */
    public $typeid; //int
    /** @ODM\Field(type="int") */
    public $periodeid; //int
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
}



