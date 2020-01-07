<?php

namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Dagsordenspunkt
{
    /** @ODM\Id */
    public $_id; //int
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $kørebemærkning; //object
    /** @ODM\Field(type="string") */
    public $titel; //String
    /** @ODM\Field(type="string") */
    public $kommentar; //String
    /** @ODMstringId */
    public $nummer; //String
    /** @ODM\Field(type="string") */
    public $forhandlingskode; //String
    /** @ODM\Field(type="string") */
    public $forhandling; //object
    /** @ODM\Field(type="int") */
    public $superid; //object
    /** @ODM\Field(type="int") */
    public $sagstrinid; //object
    /** @ODM\Field(type="int") */
    public $mødeid; //int
    /** @ODM\Field(type="string") */
    public $offentlighedskode; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
}



