<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class AktørAktør
{
    /** @ODM\Id */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $fraaktørid; //int
    /** @ODM\Field(type="int") */
    public $tilaktørid; //int
    /** @ODM\Field(type="date") */
    public $startdato; //Date
    /** @ODM\Field(type="date") */
    public $slutdato; //object
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
    /** @ODM\Field(type="int") */
    public $rolleid; //int

}

