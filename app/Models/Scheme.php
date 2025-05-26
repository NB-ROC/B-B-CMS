<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    protected $table = 'schemes';
    protected $fillable = [
        "name"
    ];
    public function primaryColor()
    {
        return $this->belongsTo(Color::class, 'primary_color');
    }
    public function textColor()
    {
        return $this->belongsTo(Color::class, 'text_color');
    }
    public function hoverColor()
    {
        return $this->belongsTo(Color::class, 'hover_color');
    }
    public function ctaColor()
    {
        return $this->belongsTo(Color::class, 'cta_color');
    }
    public function footerColor()
    {
        return $this->belongsTo(Color::class, 'footer_color');
    }
}
