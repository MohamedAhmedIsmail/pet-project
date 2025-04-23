<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\Region;
class Venue extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'region'=>Region::class, 
        ];
    }

    public function conferences(): HasMany
    {
        return $this->hasMany(Conference::class);
    }
}
