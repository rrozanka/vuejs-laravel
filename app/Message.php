<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 *
 * @package App
 */
class Message extends Model
{

    /**
     * @var array
     *
     */
    protected $fillable = [
        'name', 'message'
    ];

}
