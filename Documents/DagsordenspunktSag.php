<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class DagsordenspunktSag
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $dagsordenspunktid; //int
    /** @ODM\Field(type="int") */
    public $sagid; //int
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}



