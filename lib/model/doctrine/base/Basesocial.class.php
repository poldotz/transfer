<?php

/**
 * Basesocial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * 
 * @method string getName() Returns the current record's "name" value
 * @method social setName() Sets the current record's "name" value
 * 
 * @package    transfer
 * @subpackage model
 * @author     poldotz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basesocial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('social');
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}