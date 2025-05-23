<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Bnb extends Model
{
    protected $table = 'b&_b_s';
    protected $fillable = [
        "name",
        "user_id",
        "scheme_id"
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scheme()
    {
        return $this->belongsTo(Scheme::class);
    }
}
