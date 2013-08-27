<?php

/**
 * Baseuser_social
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property bigint $sf_guard_user_id
 * @property bigint $social_id
 * @property string $value
 * @property sfGuardUser $User
 * 
 * @method bigint      getSfGuardUserId()    Returns the current record's "sf_guard_user_id" value
 * @method bigint      getSocialId()         Returns the current record's "social_id" value
 * @method string      getValue()            Returns the current record's "value" value
 * @method sfGuardUser getUser()             Returns the current record's "User" value
 * @method user_social setSfGuardUserId()    Sets the current record's "sf_guard_user_id" value
 * @method user_social setSocialId()         Sets the current record's "social_id" value
 * @method user_social setValue()            Sets the current record's "value" value
 * @method user_social setUser()             Sets the current record's "User" value
 * 
 * @package    transfer
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseuser_social extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_social');
        $this->hasColumn('sf_guard_user_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('social_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('value', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'sf_guard_user_id',
             'foreign' => 'id'));
    }
}