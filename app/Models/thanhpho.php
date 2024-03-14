<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thanhpho extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_thanh_pho',
        'slug',
        'id_khu_vuc'
    ];

    public function khuvucfpt() {
        return $this->belongsTo(khuvucfpt::class, 'id_khu_vuc', 'id');
    }
}
