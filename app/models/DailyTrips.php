<?php

class DailyTrips extends Eloquent  {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'daily_trips';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

    public $timestamps  = false;

    protected $filables = array('client_id', 'user_id', 'customer_name', 'departure_km', 'departure_date_time', 'arrival_km', 'arrival_date_time', 'departure_address', 'arrival_address', 'trip_cost', 'currency', 'delete_req', 'edit_req');

}
