<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Modèle Plateformes_Animes avec HasFactory
 * @author Jonathan
 */
class PlateformesAnime extends Model
{
    use HasFactory;

    /**
     * Fonction permettant de trouver l'anime de cette instance de plateformes_anime
     * @author Jonathan
     * @return BelongsTo
     */
    public function anime(): BelongsTo
    {
        return $this->belongsTo(Anime::class, 'anime_id');
    }

    /**
     * Fonction permettant de trouver la plateforme de cette instance de plateformes_anime
     * @author Jonathan
     * @return BelongsTo
     */
    public function plateforme(): BelongsTo
    {
        return $this->belongsTo(Plateforme::class, 'plateforme_id');
    }
}
