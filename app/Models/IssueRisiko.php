<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class IssueRisiko extends Model
{
    use HasFactory;
    protected $table = 'issue_risiko';
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
        'pertanyaan_8',
        'pertanyaan_9',
        'pertanyaan_10',
        'pertanyaan_11',
        'pertanyaan_12',
        'pertanyaan_13',
        'pertanyaan_14',
        'pertanyaan_15',
        'pertanyaan_16',
        'pertanyaan_17',
        'pertanyaan_18',
        'pertanyaan_19',
        'pertanyaan_20',
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
