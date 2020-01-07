<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class EmneordDokument
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="int") */
    public $emneordid; //int
    /** @ODM\Field(type="int") */
    public $dokumentid; //int
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date
}


