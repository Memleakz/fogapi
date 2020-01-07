<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class SagAktør
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $aktørid; //int
    /** @ODM\Field(type="int") */
    public $sagid; //int
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
    /** @ODM\Field(type="int") */
    public $rolleid; //int

}


