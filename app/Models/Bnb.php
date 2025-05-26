<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Bnb extends Model
{
    protected $table = 'bnb_s';
    protected $fillable = [
        "name",
        "scheme_id"
    ];
    public function scheme()
    {
        return $this->belongsTo(Scheme::class);
    }
}
