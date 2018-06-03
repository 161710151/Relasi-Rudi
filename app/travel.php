<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class travel extends Model
{
    protected $fillable = ['nama_wisata','kuliner','kategori_id'];
    public $timesstamps = true;

    public function kategori()
    {
        return $this->belongtoMany('App\kategori','kategori_id')
    }
}
