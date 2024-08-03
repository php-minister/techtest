<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'id'; // or null
    public $incrementing = true;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'title', 'content','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
    */
    protected $hidden = [];
	
	/**
     * The connection name for the model.
     *
     * @var string
    */
    protected $connection = 'techtest';
    
    public function __construct() {
        parent::__construct();
        $this->connection = Session::get('dbconn');
    }
}
