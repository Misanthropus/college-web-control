<?php

class Turn extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function sections()
    {
        return $this->hasMany('CourseSection', 'turn_id');
    }
}