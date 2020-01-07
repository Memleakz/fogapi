<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

class AktørAktørRolle
{
    /** @ODM\Id */
    public $_id; //int
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $rolle; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}


