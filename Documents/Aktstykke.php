<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class Aktstykke
{
    /** @ODM\Id */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $typeid; //int
    /** @ODM\Field(type="int") */
    public $kategoriid; //int
    /** @ODM\Field(type="int") */
    public $statusid; //int
    /** @ODM\Field(type="string") */
    public $titel; //String
    /** @ODM\Field(type="string") */
    public $titelkort; //String
    /** @ODM\Field(type="string") */
    public $offentlighedskode; //String
    /** @ODM\Field(type="string") */
    public $nummer; //String
    /** @ODM\Field(type="string") */
    public $nummerprefix; //String
    /** @ODM\Field(type="string") */
    public $nummernumerisk; //String
    /** @ODM\Field(type="string") */
    public $nummerpostfix; //String
    /** @ODM\Field(type="string") */
    public $resume; //String
    /** @ODM\Field(type="string") */
    public $afstemningskonklusion; //String
    /** @ODM\Field(type="int") */
    public $periodeid; //int
    /** @ODM\Field(type="string") */
    public $afgørelsesresultatkode; //object
    /** @ODM\Field(type="string") */
    public $baggrundsmateriale; //object
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
    /** @ODM\boolean */
    public $statsbudgetsag; //boolean
    /** @ODM\Field(type="string") */
    public $begrundelse; //object
    /** @ODM\Field(type="string") */
    public $paragrafnummer; //object
    /** @ODM\Field(type="string") */
    public $paragraf; //object
    /** @ODM\Field(type="date") */
    public $afgørelsesdato; //object
    /** @ODM\Field(type="string") */
    public $afgørelse; //object
    /** @ODM\Field(type="date") */
    public $rådsmødedato; //object
    /** @ODM\Field(type="string") */
    public $lovnummer; //String
    /** @ODM\Field(type="date") */
    public $lovnummerdato; //Date
    /** @ODM\Field(type="string") */
    public $retsinformationsurl; //object
    /** @ODM\Field(type="int") */
    public $fremsatundersagid; //object
    /** @ODM\Field(type="int") */
    public $deltundersagid; //object

}

