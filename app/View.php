<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class View
 * @package App
 */
class View extends Model
{
    protected $table = 'views';

    protected $fillable = [
        'ip_address',
        'views',
        'browser',
        'os',
        'created_at',
        'updated_at'
    ];
}