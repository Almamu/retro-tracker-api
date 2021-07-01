<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Collection
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 */
class Collection extends Model
{
    use HasFactory;

    public function items ()
    {
        return $this->hasMany (Item::class);
    }
}
