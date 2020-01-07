<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class MødeAktør
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $mødeid; //int
    /** @ODM\Field(type="int") */
    public $aktørid; //int
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
}



