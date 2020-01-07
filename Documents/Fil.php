<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Fil
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $dokumentid; //int
    /** @ODM\Field(type="string") */
    public $titel; //String
    /** @ODM\Field(type="date") */
    public $versionsdato; //Date
    /** @ODM\Field(type="string") */
    public $filurl; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
    /** @ODM\Field(type="string") */
    public $variantkode; //String
    /** @ODM\Field(type="string") */
    public $format; //String

}



