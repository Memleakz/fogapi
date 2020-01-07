<?php
namespace Documents;

/** @ODM\Document */
class Dokumentkategori
{
    /** @ODM\Field(type="int") */
    public $id; //int
    /** @ODM\Field(type="string") */
    public $kategori; //String
    /** @ODM\Field(type="date") */
    public $opdateringsdato; //Date

}



