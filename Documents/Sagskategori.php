<?php
namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
/** @ODM\Document */
class Sagskategori
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $kategori; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}


