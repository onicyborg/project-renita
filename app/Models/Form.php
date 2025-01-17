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
        return $this->hasMany(ProfileRisiko::class, 'form_id', 'id');
    }

    public function issue_risiko()
    {
        return $this->hasMany(IssueRisiko::class, 'form_id', 'id');
    }

    public function evaluasi_manajemen_risiko()
    {
        return $this->hasMany(EvaluasiManajemenRisiko::class, 'form_id', 'id');
    }

    public function arahan_manajemen_risiko()
    {
        return $this->hasMany(ArahanManajemenRisiko::class, 'form_id', 'id');
    }

    public function pemantauan_manajemen_risiko()
    {
        return $this->hasMany(PemantauanManajemenRisiko::class, 'form_id', 'id');
    }

    public function pengumpulan_manajemen_risiko()
    {
        return $this->hasMany(PengumpulanManajemenRisiko::class, 'form_id', 'id');
    }

    public function menganalisis_risiko()
    {
        return $this->hasMany(MenganalisisRisiko::class, 'form_id', 'id');
    }

    public function memelihara_profil_risiko()
    {
        return $this->hasMany(MemeliharaProfilRisiko::class, 'form_id', 'id');
    }

    public function mengartikulasikan_risiko()
    {
        return $this->hasMany(MengartikulasiRisiko::class, 'form_id', 'id');
    }

    public function menentukan_portofolio_mitigasi_risiko()
    {
        return $this->hasMany(MenentukanPortofolioMitigasiRisiko::class, 'form_id', 'id');
    }

    public function menanggapi_risiko()
    {
        return $this->hasMany(MenanggapiRisiko::class, 'form_id', 'id');
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
