<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property ?string $barcode
 */
class Item extends Model
{
    use HasFactory;

    public function collection ()
    {
        return $this->belongsTo (Collection::class, 'collection_id', 'id');
    }
}
