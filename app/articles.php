<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model {
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

	//


    public function user()
    {
        return $this->belongTo('App\User');
    }
}