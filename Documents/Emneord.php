<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Emneord
{
    /** @ODM\Id */
    public $_id; //int
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $typeid; //int
    /** @ODM\Field(type="string") */
    public $emneord; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}


