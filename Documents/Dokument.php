<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Dokument
{
    /** @ODM\Id */
    public $_id; //int
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $typeid; //int
    /** @ODM\Field(type="int") */
    public $kategoriid; //int
    /** @ODM\Field(type="int") */
    public $statusid; //int
    /** @ODM\Field(type="string") */
    public $offentlighedskode; //String
    /** @ODM\Field(type="string") */
    public $titel; //String
    /** @ODM\Field(type="date") */
    public $dato; //Date
    /** @ODM\Field(type="date") */
    public $modtagelsesdato; //object
    /** @ODM\Field(type="date") */
    public $frigivelsesdato; //Date
    /** @ODM\Field(type="string") */
    public $paragraf; //String
    /** @ODM\Field(type="string") */
    public $paragrafnummer; //String
    /** @ODM\Field(type="string") */
    public $spørgsmålsordlyd; //object
    /** @ODM\Field(type="string") */
    public $spørgsmålstitel; //object
    /** @ODM\Field(type="int") */
    public $spørgsmålsid; //object
    /** @ODM\Field(type="string") */
    public $procedurenummer; //String
    /** @ODM\Field(type="string") */
    public $grundnotatstatus; //String
    /** @ODM\Field(type="string") */
    public $dagsordenudgavenummer; //object
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}

