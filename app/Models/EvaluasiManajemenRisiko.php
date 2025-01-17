<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EvaluasiManajemenRisiko extends Model
{
    use HasFactory;
    protected $table = 'evaluasi_manajemen_risiko';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'pertanyaan_1',
        'pertanyaan_2',
        'pertanyaan_3',
        'pertanyaan_4',
        'pertanyaan_5',
        'pertanyaan_6',
        'pertanyaan_7',
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
