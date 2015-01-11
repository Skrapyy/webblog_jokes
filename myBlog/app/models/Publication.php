<?php

class Publication extends Eloquent {
	
		protected $fillable =array ('title', 'author', 'text');
		protected $table = 'Publication';
}