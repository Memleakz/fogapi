<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Omtryk
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $dokumentid; //int
    /** @ODM\Field(type="date") */
    public $dato; //Date
    /** @ODM\Field(type="string") */
    public $begrundelse; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}


