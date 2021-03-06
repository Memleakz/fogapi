<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Afstemningstype
{
    /** @ODM\Id */
    public $_id; //int
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $type; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}

