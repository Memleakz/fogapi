<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Sagsstatus
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $status; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}

