<?php

/**
 * BaseDeparture
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property bigint $booking_id
 * @property date $day
 * @property time $hour
 * @property time $departure_time
 * @property boolean $pick_up
 * @property string $flight
 * @property decimal $cost
 * @property string $note
 * @property bigint $locality_from
 * @property bigint $locality_to
 * @property bigint $driver_id
 * @property bigint $vehicle_id
 * @property bigint $pay_method_id
 * @property booking $Booking
 * @property locality $LocalityFrom
 * @property locality $LocalityTo
 * @property sfGuardUser $Driver
 * @property vehicle $Vehicle
 * @property payMethod $PayMethod
 * 
 * @method bigint      getBookingId()      Returns the current record's "booking_id" value
 * @method date        getDay()            Returns the current record's "day" value
 * @method time        getHour()           Returns the current record's "hour" value
 * @method time        getDepartureTime()  Returns the current record's "departure_time" value
 * @method boolean     getPickUp()         Returns the current record's "pick_up" value
 * @method string      getFlight()         Returns the current record's "flight" value
 * @method decimal     getCost()           Returns the current record's "cost" value
 * @method string      getNote()           Returns the current record's "note" value
 * @method bigint      getLocalityFrom()   Returns the current record's "locality_from" value
 * @method bigint      getLocalityTo()     Returns the current record's "locality_to" value
 * @method bigint      getDriverId()       Returns the current record's "driver_id" value
 * @method bigint      getVehicleId()      Returns the current record's "vehicle_id" value
 * @method bigint      getPayMethodId()    Returns the current record's "pay_method_id" value
 * @method booking     getBooking()        Returns the current record's "Booking" value
 * @method locality    getLocalityFrom()   Returns the current record's "LocalityFrom" value
 * @method locality    getLocalityTo()     Returns the current record's "LocalityTo" value
 * @method sfGuardUser getDriver()         Returns the current record's "Driver" value
 * @method vehicle     getVehicle()        Returns the current record's "Vehicle" value
 * @method payMethod   getPayMethod()      Returns the current record's "PayMethod" value
 * @method Departure   setBookingId()      Sets the current record's "booking_id" value
 * @method Departure   setDay()            Sets the current record's "day" value
 * @method Departure   setHour()           Sets the current record's "hour" value
 * @method Departure   setDepartureTime()  Sets the current record's "departure_time" value
 * @method Departure   setPickUp()         Sets the current record's "pick_up" value
 * @method Departure   setFlight()         Sets the current record's "flight" value
 * @method Departure   setCost()           Sets the current record's "cost" value
 * @method Departure   setNote()           Sets the current record's "note" value
 * @method Departure   setLocalityFrom()   Sets the current record's "locality_from" value
 * @method Departure   setLocalityTo()     Sets the current record's "locality_to" value
 * @method Departure   setDriverId()       Sets the current record's "driver_id" value
 * @method Departure   setVehicleId()      Sets the current record's "vehicle_id" value
 * @method Departure   setPayMethodId()    Sets the current record's "pay_method_id" value
 * @method Departure   setBooking()        Sets the current record's "Booking" value
 * @method Departure   setLocalityFrom()   Sets the current record's "LocalityFrom" value
 * @method Departure   setLocalityTo()     Sets the current record's "LocalityTo" value
 * @method Departure   setDriver()         Sets the current record's "Driver" value
 * @method Departure   setVehicle()        Sets the current record's "Vehicle" value
 * @method Departure   setPayMethod()      Sets the current record's "PayMethod" value
 * 
 * @package    transfer
 * @subpackage model
 * @author     poldotz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDeparture extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('departure');
        $this->hasColumn('booking_id', 'bigint', null, array(
             'type' => 'bigint',
             'primary' => true,
             ));
        $this->hasColumn('day', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('hour', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('departure_time', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('pick_up', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('flight', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('cost', 'decimal', 5, array(
             'type' => 'decimal',
             'scale' => 2,
             'length' => 5,
             ));
        $this->hasColumn('note', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
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
        $this->hasOne('booking as Booking', array(
             'local' => 'booking_id',
             'foreign' => 'id'));

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