<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Form extends Model
{
    use HasFactory;
    protected $table = 'form';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'company_name',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function auditee()
    {
        return $this->hasMany(Auditee::class, 'form_id', 'id');
    }

    public function strategi_organisasi()
    {
        return $this->hasMany(StrategiOrganisasi::class, 'form_id', 'id');
    }

    public function tujuan_organisasi()
    {
        return $this->hasMany(TujuanOrganisasi::class, 'form_id', 'id');
    }

    public function profile_resiko()
    {
        return $this->hasMany(profile_resiko::class, 'form_id', 'id');
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
