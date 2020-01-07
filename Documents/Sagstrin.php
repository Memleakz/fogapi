<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Sagstrin
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $titel; //String
    /** @ODM\Field(type="date") */
    public $dato; //Date
    /** @ODM\Field(type="int") */
    public $sagid; //int
    /** @ODM\Field(type="int") */
    public $typeid; //int
    /** @ODM\Field(type="string") */
    public $folketingstidendeurl; //object
    /** @ODM\Field(type="string") */
    public $folketingstidende; //String
    /** @ODM\Field(type="string") */
    public $folketingstidendesidenummer; //String
    /** @ODM\Field(type="int") */
    public $statusid; //int
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}

