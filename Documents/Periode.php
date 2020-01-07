<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Periode
{
    /** @ODM\Id */
    public $_id; //int
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="date") */
    public $startdato; //Date
    /** @ODM\Field(type="date") */
    public $slutdato; //Date
    /** @ODM\Field(type="string") */
    public $type; //String
    /** @ODM\Field(type="string") */
    public $kode; //String
    /** @ODM\Field(type="string") */
    public $titel; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}



