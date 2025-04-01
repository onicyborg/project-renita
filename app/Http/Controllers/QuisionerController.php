<?php

namespace App\Http\Controllers;

use App\Models\Auditee;
use Illuminate\Http\Request;

class QuisionerController extends Controller
{
    public function submit_section_1(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->strategi_organisasi) {
            $auditee->strategi_organisasi()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->strategi_organisasi()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 1 berhasil disimpan!')->with('scrollTo', 'section-1');
    }

    public function submit_section_2(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->tujuan_organisasi) {
            $auditee->tujuan_organisasi()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'pertanyaan_8' => $request->pertanyaan_8,
                'pertanyaan_9' => $request->pertanyaan_9,
                'pertanyaan_10' => $request->pertanyaan_10,
                'pertanyaan_11' => $request->pertanyaan_11,
                'pertanyaan_12' => $request->pertanyaan_12,
                'pertanyaan_13' => $request->pertanyaan_13,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->tujuan_organisasi()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'pertanyaan_8' => $request->pertanyaan_8,
                'pertanyaan_9' => $request->pertanyaan_9,
                'pertanyaan_10' => $request->pertanyaan_10,
                'pertanyaan_11' => $request->pertanyaan_11,
                'pertanyaan_12' => $request->pertanyaan_12,
                'pertanyaan_13' => $request->pertanyaan_13,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 2 berhasil disimpan!')->with('scrollTo', 'section-2');
    }

    public function submit_section_3(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->profile_resiko) {
            $auditee->profile_resiko()->create([
                'pertanyaan_1_dampak' => $request->pertanyaan_1_dampak,
                'pertanyaan_1_terjadi' => $request->pertanyaan_1_terjadi,
                'pertanyaan_2_dampak' => $request->pertanyaan_2_dampak,
                'pertanyaan_2_terjadi' => $request->pertanyaan_2_terjadi,
                'pertanyaan_3_dampak' => $request->pertanyaan_3_dampak,
                'pertanyaan_3_terjadi' => $request->pertanyaan_3_terjadi,
                'pertanyaan_4_dampak' => $request->pertanyaan_4_dampak,
                'pertanyaan_4_terjadi' => $request->pertanyaan_4_terjadi,
                'pertanyaan_5_dampak' => $request->pertanyaan_5_dampak,
                'pertanyaan_5_terjadi' => $request->pertanyaan_5_terjadi,
                'pertanyaan_6_dampak' => $request->pertanyaan_6_dampak,
                'pertanyaan_6_terjadi' => $request->pertanyaan_6_terjadi,
                'pertanyaan_7_dampak' => $request->pertanyaan_7_dampak,
                'pertanyaan_7_terjadi' => $request->pertanyaan_7_terjadi,
                'pertanyaan_8_dampak' => $request->pertanyaan_8_dampak,
                'pertanyaan_8_terjadi' => $request->pertanyaan_8_terjadi,
                'pertanyaan_9_dampak' => $request->pertanyaan_9_dampak,
                'pertanyaan_9_terjadi' => $request->pertanyaan_9_terjadi,
                'pertanyaan_10_dampak' => $request->pertanyaan_10_dampak,
                'pertanyaan_10_terjadi' => $request->pertanyaan_10_terjadi,
                'pertanyaan_11_dampak' => $request->pertanyaan_11_dampak,
                'pertanyaan_11_terjadi' => $request->pertanyaan_11_terjadi,
                'pertanyaan_12_dampak' => $request->pertanyaan_12_dampak,
                'pertanyaan_12_terjadi' => $request->pertanyaan_12_terjadi,
                'pertanyaan_13_dampak' => $request->pertanyaan_13_dampak,
                'pertanyaan_13_terjadi' => $request->pertanyaan_13_terjadi,
                'pertanyaan_14_dampak' => $request->pertanyaan_14_dampak,
                'pertanyaan_14_terjadi' => $request->pertanyaan_14_terjadi,
                'pertanyaan_15_dampak' => $request->pertanyaan_15_dampak,
                'pertanyaan_15_terjadi' => $request->pertanyaan_15_terjadi,
                'pertanyaan_16_dampak' => $request->pertanyaan_16_dampak,
                'pertanyaan_16_terjadi' => $request->pertanyaan_16_terjadi,
                'pertanyaan_17_dampak' => $request->pertanyaan_17_dampak,
                'pertanyaan_17_terjadi' => $request->pertanyaan_17_terjadi,
                'pertanyaan_18_dampak' => $request->pertanyaan_18_dampak,
                'pertanyaan_18_terjadi' => $request->pertanyaan_18_terjadi,
                'pertanyaan_19_dampak' => $request->pertanyaan_19_dampak,
                'pertanyaan_19_terjadi' => $request->pertanyaan_19_terjadi,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->profile_resiko()->update([
                'pertanyaan_1_dampak' => $request->pertanyaan_1_dampak,
                'pertanyaan_1_terjadi' => $request->pertanyaan_1_terjadi,
                'pertanyaan_2_dampak' => $request->pertanyaan_2_dampak,
                'pertanyaan_2_terjadi' => $request->pertanyaan_2_terjadi,
                'pertanyaan_3_dampak' => $request->pertanyaan_3_dampak,
                'pertanyaan_3_terjadi' => $request->pertanyaan_3_terjadi,
                'pertanyaan_4_dampak' => $request->pertanyaan_4_dampak,
                'pertanyaan_4_terjadi' => $request->pertanyaan_4_terjadi,
                'pertanyaan_5_dampak' => $request->pertanyaan_5_dampak,
                'pertanyaan_5_terjadi' => $request->pertanyaan_5_terjadi,
                'pertanyaan_6_dampak' => $request->pertanyaan_6_dampak,
                'pertanyaan_6_terjadi' => $request->pertanyaan_6_terjadi,
                'pertanyaan_7_dampak' => $request->pertanyaan_7_dampak,
                'pertanyaan_7_terjadi' => $request->pertanyaan_7_terjadi,
                'pertanyaan_8_dampak' => $request->pertanyaan_8_dampak,
                'pertanyaan_8_terjadi' => $request->pertanyaan_8_terjadi,
                'pertanyaan_9_dampak' => $request->pertanyaan_9_dampak,
                'pertanyaan_9_terjadi' => $request->pertanyaan_9_terjadi,
                'pertanyaan_10_dampak' => $request->pertanyaan_10_dampak,
                'pertanyaan_10_terjadi' => $request->pertanyaan_10_terjadi,
                'pertanyaan_11_dampak' => $request->pertanyaan_11_dampak,
                'pertanyaan_11_terjadi' => $request->pertanyaan_11_terjadi,
                'pertanyaan_12_dampak' => $request->pertanyaan_12_dampak,
                'pertanyaan_12_terjadi' => $request->pertanyaan_12_terjadi,
                'pertanyaan_13_dampak' => $request->pertanyaan_13_dampak,
                'pertanyaan_13_terjadi' => $request->pertanyaan_13_terjadi,
                'pertanyaan_14_dampak' => $request->pertanyaan_14_dampak,
                'pertanyaan_14_terjadi' => $request->pertanyaan_14_terjadi,
                'pertanyaan_15_dampak' => $request->pertanyaan_15_dampak,
                'pertanyaan_15_terjadi' => $request->pertanyaan_15_terjadi,
                'pertanyaan_16_dampak' => $request->pertanyaan_16_dampak,
                'pertanyaan_16_terjadi' => $request->pertanyaan_16_terjadi,
                'pertanyaan_17_dampak' => $request->pertanyaan_17_dampak,
                'pertanyaan_17_terjadi' => $request->pertanyaan_17_terjadi,
                'pertanyaan_18_dampak' => $request->pertanyaan_18_dampak,
                'pertanyaan_18_terjadi' => $request->pertanyaan_18_terjadi,
                'pertanyaan_19_dampak' => $request->pertanyaan_19_dampak,
                'pertanyaan_19_terjadi' => $request->pertanyaan_19_terjadi,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 3 berhasil disimpan!')->with('scrollTo', 'section-3');
    }

    public function submit_section_4(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->issue_risiko) {
            $auditee->issue_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'pertanyaan_8' => $request->pertanyaan_8,
                'pertanyaan_9' => $request->pertanyaan_9,
                'pertanyaan_10' => $request->pertanyaan_10,
                'pertanyaan_11' => $request->pertanyaan_11,
                'pertanyaan_12' => $request->pertanyaan_12,
                'pertanyaan_13' => $request->pertanyaan_13,
                'pertanyaan_14' => $request->pertanyaan_14,
                'pertanyaan_15' => $request->pertanyaan_15,
                'pertanyaan_16' => $request->pertanyaan_16,
                'pertanyaan_17' => $request->pertanyaan_17,
                'pertanyaan_18' => $request->pertanyaan_18,
                'pertanyaan_19' => $request->pertanyaan_19,
                'pertanyaan_20' => $request->pertanyaan_20,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->issue_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'pertanyaan_8' => $request->pertanyaan_8,
                'pertanyaan_9' => $request->pertanyaan_9,
                'pertanyaan_10' => $request->pertanyaan_10,
                'pertanyaan_11' => $request->pertanyaan_11,
                'pertanyaan_12' => $request->pertanyaan_12,
                'pertanyaan_13' => $request->pertanyaan_13,
                'pertanyaan_14' => $request->pertanyaan_14,
                'pertanyaan_15' => $request->pertanyaan_15,
                'pertanyaan_16' => $request->pertanyaan_16,
                'pertanyaan_17' => $request->pertanyaan_17,
                'pertanyaan_18' => $request->pertanyaan_18,
                'pertanyaan_19' => $request->pertanyaan_19,
                'pertanyaan_20' => $request->pertanyaan_20,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 4 berhasil disimpan!')->with('scrollTo', 'section-4');
    }

    public function submit_section_5(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->evaluasi_manajemen_risiko) {
            $auditee->evaluasi_manajemen_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->evaluasi_manajemen_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 5 berhasil disimpan!')->with('scrollTo', 'section-5');
    }

    public function submit_section_6(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->arahan_manajemen_risiko) {
            $auditee->arahan_manajemen_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->arahan_manajemen_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 6 berhasil disimpan!')->with('scrollTo', 'section-6');
    }

    public function submit_section_7(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->pemantauan_manajemen_risiko) {
            $auditee->pemantauan_manajemen_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->pemantauan_manajemen_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 7 berhasil disimpan!')->with('scrollTo', 'section-7');
    }

    public function submit_section_8(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->pengumpulan_manajemen_risiko) {
            $auditee->pengumpulan_manajemen_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'pertanyaan_8' => $request->pertanyaan_8,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->pengumpulan_manajemen_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'pertanyaan_8' => $request->pertanyaan_8,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 8 berhasil disimpan!')->with('scrollTo', 'section-8');
    }

    public function submit_section_9(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->menganalisis_risiko) {
            $auditee->menganalisis_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'pertanyaan_8' => $request->pertanyaan_8,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->menganalisis_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'pertanyaan_8' => $request->pertanyaan_8,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 9 berhasil disimpan!')->with('scrollTo', 'section-9');
    }

    public function submit_section_10(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->memelihara_profil_risiko) {
            $auditee->memelihara_profil_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->memelihara_profil_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'pertanyaan_6' => $request->pertanyaan_6,
                'pertanyaan_7' => $request->pertanyaan_7,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 10 berhasil disimpan!')->with('scrollTo', 'section-10');
    }

    public function submit_section_11(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->mengartikulasikan_risiko) {
            $auditee->mengartikulasikan_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->mengartikulasikan_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 11 berhasil disimpan!')->with('scrollTo', 'section-11');
    }

    public function submit_section_12(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->menentukan_portofolio_mitigasi_risiko) {
            $auditee->menentukan_portofolio_mitigasi_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->menentukan_portofolio_mitigasi_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 12 berhasil disimpan!')->with('scrollTo', 'section-12');
    }

    public function submit_section_13(Request $request, $id, $token)
    {
        $auditee = Auditee::where('token', $token)->first();

        if (!$auditee->menanggapi_risiko) {
            $auditee->menanggapi_risiko()->create([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        } else {
            $auditee->menanggapi_risiko()->update([
                'pertanyaan_1' => $request->pertanyaan_1,
                'pertanyaan_2' => $request->pertanyaan_2,
                'pertanyaan_3' => $request->pertanyaan_3,
                'pertanyaan_4' => $request->pertanyaan_4,
                'pertanyaan_5' => $request->pertanyaan_5,
                'kritik_saran' => $request->kritik_saran,
                'form_id' => $id,
            ]);
        }

        return redirect()->back()->with('success', 'Respon anda di section 12 berhasil disimpan!')->with('scrollTo', 'section-13');
    }
}
