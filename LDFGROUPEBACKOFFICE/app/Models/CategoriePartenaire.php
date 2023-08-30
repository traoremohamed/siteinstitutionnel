<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_categorie
 * @property string $libelle_categ
 * @property boolean $flag_cat
 * @property string $created_at
 * @property string $updated_at
 */
class CategoriePartenaire extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorie_partenaire';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_categorie';

    /**
     * @var array
     */
    protected $fillable = ['libelle_categ', 'flag_cat', 'created_at', 'updated_at'];

}
