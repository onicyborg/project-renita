<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Auditee extends Model
{
    use HasFactory;
    protected $table = 'auditee';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name',
        'jabatan',
        'token',
        'form_id',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }

    public function strategi_organisasi()
    {
        return $this->hasOne(StrategiOrganisasi::class, 'auditee_id', 'id');
    }

    public function tujuan_organisasi()
    {
        return $this->hasOne(TujuanOrganisasi::class, 'auditee_id', 'id');
    }

    public function profile_resiko()
    {
        return $this->hasOne(ProfileRisiko::class, 'auditee_id', 'id');
    }

    public function issue_risiko()
    {
        return $this->hasOne(IssueRisiko::class, 'auditee_id', 'id');
    }

    public function evaluasi_manajemen_risiko()
    {
        return $this->hasOne(EvaluasiManajemenRisiko::class, 'auditee_id', 'id');
    }

    public function arahan_manajemen_risiko()
    {
        return $this->hasOne(ArahanManajemenRisiko::class, 'auditee_id', 'id');
    }

    public function pemantauan_manajemen_risiko()
    {
        return $this->hasOne(PemantauanManajemenRisiko::class, 'auditee_id', 'id');
    }

    public function pengumpulan_manajemen_risiko()
    {
        return $this->hasOne(PengumpulanManajemenRisiko::class, 'auditee_id', 'id');
    }

    public function menganalisis_risiko()
    {
        return $this->hasOne(MenganalisisRisiko::class, 'auditee_id', 'id');
    }

    public function memelihara_profil_risiko()
    {
        return $this->hasOne(MemeliharaProfilRisiko::class, 'auditee_id', 'id');
    }

    public function mengartikulasikan_risiko()
    {
        return $this->hasOne(MengartikulasiRisiko::class, 'auditee_id', 'id');
    }

    public function menentukan_portofolio_mitigasi_risiko()
    {
        return $this->hasOne(MenentukanPortofolioMitigasiRisiko::class, 'auditee_id', 'id');
    }

    public function menanggapi_risiko()
    {
        return $this->hasOne(MenanggapiRisiko::class, 'auditee_id', 'id');
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
