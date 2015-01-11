<?php

class Comments extends Eloquent {
	
		protected $fillable =array ('title', 'author', 'text');
		protected $table = 'comments';
}