<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Role extends SpatieRole
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    } 
}
