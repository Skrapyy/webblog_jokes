<?php

class Users extends Eloquent {
	
		protected $fillable =array ('fname', 'name', 'email', 'password');
		protected $table = 'users';
}