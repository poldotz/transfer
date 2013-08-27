<?php

/**
 * Basetransfer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property bigint $booking_id
 * @property date $day
 * @property time $hour
 * @property time $pickup_hour
 * @property boolean $pickup
 * @property string $note
 * @property string $flight
 * @property bigint $locality_from
 * @property bigint $locality_to
 * @property bigint $driver_id
 * @property bigint $vehicle_id
 * @property bigint $pay_method_id
 * @property locality $LocalityFrom
 * @property locality $LocalityTo
 * @property sfGuardUser $Driver
 * @property vehicle $Vehicle
 * @property payMethod $PayMethod
 * 
 * @method bigint      getBookingId()     Returns the current record's "booking_id" value
 * @method date        getDay()           Returns the current record's "day" value
 * @method time        getHour()          Returns the current record's "hour" value
 * @method time        getPickupHour()    Returns the current record's "pickup_hour" value
 * @method boolean     getPickup()        Returns the current record's "pickup" value
 * @method string      getNote()          Returns the current record's "note" value
 * @method string      getFlight()        Returns the current record's "flight" value
 * @method bigint      getLocalityFrom()  Returns the current record's "locality_from" value
 * @method bigint      getLocalityTo()    Returns the current record's "locality_to" value
 * @method bigint      getDriverId()      Returns the current record's "driver_id" value
 * @method bigint      getVehicleId()     Returns the current record's "vehicle_id" value
 * @method bigint      getPayMethodId()   Returns the current record's "pay_method_id" value
 * @method locality    getLocalityFrom()  Returns the current record's "LocalityFrom" value
 * @method locality    getLocalityTo()    Returns the current record's "LocalityTo" value
 * @method sfGuardUser getDriver()        Returns the current record's "Driver" value
 * @method vehicle     getVehicle()       Returns the current record's "Vehicle" value
 * @method payMethod   getPayMethod()     Returns the current record's "PayMethod" value
 * @method transfer    setBookingId()     Sets the current record's "booking_id" value
 * @method transfer    setDay()           Sets the current record's "day" value
 * @method transfer    setHour()          Sets the current record's "hour" value
 * @method transfer    setPickupHour()    Sets the current record's "pickup_hour" value
 * @method transfer    setPickup()        Sets the current record's "pickup" value
 * @method transfer    setNote()          Sets the current record's "note" value
 * @method transfer    setFlight()        Sets the current record's "flight" value
 * @method transfer    setLocalityFrom()  Sets the current record's "locality_from" value
 * @method transfer    setLocalityTo()    Sets the current record's "locality_to" value
 * @method transfer    setDriverId()      Sets the current record's "driver_id" value
 * @method transfer    setVehicleId()     Sets the current record's "vehicle_id" value
 * @method transfer    setPayMethodId()   Sets the current record's "pay_method_id" value
 * @method transfer    setLocalityFrom()  Sets the current record's "LocalityFrom" value
 * @method transfer    setLocalityTo()    Sets the current record's "LocalityTo" value
 * @method transfer    setDriver()        Sets the current record's "Driver" value
 * @method transfer    setVehicle()       Sets the current record's "Vehicle" value
 * @method transfer    setPayMethod()     Sets the current record's "PayMethod" value
 * 
 * @package    transfer
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basetransfer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('transfer');
        $this->hasColumn('booking_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('day', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('hour', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('pickup_hour', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('pickup', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('note', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('flight', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('locality_from', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('locality_to', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('driver_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('vehicle_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
        $this->hasColumn('pay_method_id', 'bigint', null, array(
             'type' => 'bigint',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('locality as LocalityFrom', array(
             'local' => 'locality_from',
             'foreign' => 'id'));

        $this->hasOne('locality as LocalityTo', array(
             'local' => 'locality_to',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as Driver', array(
             'local' => 'driver_id',
             'foreign' => 'id'));

        $this->hasOne('vehicle as Vehicle', array(
             'local' => 'vehicle_id',
             'foreign' => 'id'));

        $this->hasOne('payMethod as PayMethod', array(
             'local' => 'pay_method_id',
             'foreign' => 'id'));

        $blameable0 = new Doctrine_Template_Blameable();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $versionable0 = new Doctrine_Template_Versionable(array(
             'versionColumn' => 'version',
             'className' => '%CLASS%Version',
             'auditLog' => true,
             ));
        $this->actAs($blameable0);
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
        $this->actAs($versionable0);
    }
}