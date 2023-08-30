<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_visite
 * @property string $ip_visite
 * @property string $cookies
 * @property string $created_at
 * @property string $updated_at
 */
class Visite extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'visite';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_visite';

    /**
     * @var array
     */
    protected $fillable = ['ip_visite', 'cookies', 'created_at', 'updated_at'];

}
