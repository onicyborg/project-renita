<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProfileRisiko extends Model
{
    use HasFactory;
    protected $table = 'profile_risiko';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'pertanyaan_1_dampak',
        'pertanyaan_1_terjadi',
        'pertanyaan_2_dampak',
        'pertanyaan_2_terjadi',
        'pertanyaan_3_dampak',
        'pertanyaan_3_terjadi',
        'pertanyaan_4_dampak',
        'pertanyaan_4_terjadi',
        'pertanyaan_5_dampak',
        'pertanyaan_5_terjadi',
        'pertanyaan_6_dampak',
        'pertanyaan_6_terjadi',
        'pertanyaan_7_dampak',
        'pertanyaan_7_terjadi',
        'pertanyaan_8_dampak',
        'pertanyaan_8_terjadi',
        'pertanyaan_9_dampak',
        'pertanyaan_9_terjadi',
        'pertanyaan_10_dampak',
        'pertanyaan_10_terjadi',
        'pertanyaan_11_dampak',
        'pertanyaan_11_terjadi',
        'pertanyaan_12_dampak',
        'pertanyaan_12_terjadi',
        'pertanyaan_13_dampak',
        'pertanyaan_13_terjadi',
        'pertanyaan_14_dampak',
        'pertanyaan_14_terjadi',
        'pertanyaan_15_dampak',
        'pertanyaan_15_terjadi',
        'pertanyaan_16_dampak',
        'pertanyaan_16_terjadi',
        'pertanyaan_17_dampak',
        'pertanyaan_17_terjadi',
        'pertanyaan_18_dampak',
        'pertanyaan_18_terjadi',
        'pertanyaan_19_dampak',
        'pertanyaan_19_terjadi',
        'kritik_saran',
        'form_id',
        'auditee_id',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }

    public function auditee()
    {
        return $this->belongsTo(Auditee::class, 'auditee_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
