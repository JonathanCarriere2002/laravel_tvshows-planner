<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Modèle Plateforme avec HasFactory
 * @author Jonathan
 */
class Plateforme extends Model
{
    use HasFactory;

    /**
     * Propriétés pouvant entre créer via un formulaire
     * @author Jonathan
     * @var string[]
     */
    protected $fillable = [
        'nom',
        'image',
        'description',
    ];

    /**
     * Fonction permettant de trouver les animes de cette plateforme
     * @author Jonathan
     * @return HasMany
     */
    public function animes(): HasMany
    {
        return $this->hasMany(PlateformesAnime::class, 'plateforme_id');
    }
}
