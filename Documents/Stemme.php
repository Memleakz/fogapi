<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Stemme
{
    /** @ODM\Field(type="int") */
    public $_id; //int
     /** @ODM\Field(type="int") */
    public $id; //int
     /** @ODM\Field(type="int") */
    public $typeid; //int
     /** @ODM\Field(type="int") */
    public $afstemningid; //int
     /** @ODM\Field(type="int") */
    public $aktørid; //int
     /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}

