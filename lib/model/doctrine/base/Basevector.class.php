<?php

/**
 * Basevector
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $code
 * @property bigint $vector_type_id
 * @property bigint $locality_id
 * @property locality $Locality
 * 
 * @method string   getCode()           Returns the current record's "code" value
 * @method bigint   getVectorTypeId()   Returns the current record's "vector_type_id" value
 * @method bigint   getLocalityId()     Returns the current record's "locality_id" value
 * @method locality getLocality()       Returns the current record's "Locality" value
 * @method vector   setCode()           Sets the current record's "code" value
 * @method vector   setVectorTypeId()   Sets the current record's "vector_type_id" value
 * @method vector   setLocalityId()     Sets the current record's "locality_id" value
 * @method vector   setLocality()       Sets the current record's "Locality" value
 * 
 * @package    transfer
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basevector extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vector');
        $this->hasColumn('code', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('vector_type_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('locality_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('locality as Locality', array(
             'local' => 'locality_id',
             'foreign' => 'id'));
    }
}