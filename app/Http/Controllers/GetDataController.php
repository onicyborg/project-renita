<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetDataController extends Controller
{
    public function section_1($id)
    {
        $data = DB::table('strategi_organisasi')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "1" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "2" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "3" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "4" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "5" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "1" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "2" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "3" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "4" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "5" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "1" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "2" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "3" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "4" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "5" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "1" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "2" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "3" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "4" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "5" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_5'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_1' => 0,
                'pertanyaan_1_jawaban_2' => 0,
                'pertanyaan_1_jawaban_3' => 0,
                'pertanyaan_1_jawaban_4' => 0,
                'pertanyaan_1_jawaban_5' => 0,
                'pertanyaan_2_jawaban_1' => 0,
                'pertanyaan_2_jawaban_2' => 0,
                'pertanyaan_2_jawaban_3' => 0,
                'pertanyaan_2_jawaban_4' => 0,
                'pertanyaan_2_jawaban_5' => 0,
                'pertanyaan_3_jawaban_1' => 0,
                'pertanyaan_3_jawaban_2' => 0,
                'pertanyaan_3_jawaban_3' => 0,
                'pertanyaan_3_jawaban_4' => 0,
                'pertanyaan_3_jawaban_5' => 0,
                'pertanyaan_4_jawaban_1' => 0,
                'pertanyaan_4_jawaban_2' => 0,
                'pertanyaan_4_jawaban_3' => 0,
                'pertanyaan_4_jawaban_4' => 0,
                'pertanyaan_4_jawaban_5' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_1($id)
    {
        $data = DB::table('strategi_organisasi')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_2($id)
    {
        $data = DB::table('tujuan_organisasi')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "1" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "2" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "3" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "4" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "5" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "1" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "2" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "3" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "4" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "5" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "1" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "2" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "3" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "4" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "5" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "1" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "2" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "3" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "4" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "5" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "1" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "2" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "3" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "4" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "5" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "1" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "2" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "3" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "4" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "5" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "1" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "2" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "3" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "4" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "5" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "1" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "2" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "3" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "4" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "5" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "1" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "2" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "3" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "4" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "5" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "1" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "2" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "3" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "4" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "5" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "1" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "2" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "3" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "4" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "5" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "1" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "2" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "3" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "4" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "5" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "1" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "2" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "3" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "4" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "5" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_5'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_1' => 0,
                'pertanyaan_1_jawaban_2' => 0,
                'pertanyaan_1_jawaban_3' => 0,
                'pertanyaan_1_jawaban_4' => 0,
                'pertanyaan_1_jawaban_5' => 0,
                'pertanyaan_2_jawaban_1' => 0,
                'pertanyaan_2_jawaban_2' => 0,
                'pertanyaan_2_jawaban_3' => 0,
                'pertanyaan_2_jawaban_4' => 0,
                'pertanyaan_2_jawaban_5' => 0,
                'pertanyaan_3_jawaban_1' => 0,
                'pertanyaan_3_jawaban_2' => 0,
                'pertanyaan_3_jawaban_3' => 0,
                'pertanyaan_3_jawaban_4' => 0,
                'pertanyaan_3_jawaban_5' => 0,
                'pertanyaan_4_jawaban_1' => 0,
                'pertanyaan_4_jawaban_2' => 0,
                'pertanyaan_4_jawaban_3' => 0,
                'pertanyaan_4_jawaban_4' => 0,
                'pertanyaan_4_jawaban_5' => 0,
                'pertanyaan_5_jawaban_1' => 0,
                'pertanyaan_5_jawaban_2' => 0,
                'pertanyaan_5_jawaban_3' => 0,
                'pertanyaan_5_jawaban_4' => 0,
                'pertanyaan_5_jawaban_5' => 0,
                'pertanyaan_6_jawaban_1' => 0,
                'pertanyaan_6_jawaban_2' => 0,
                'pertanyaan_6_jawaban_3' => 0,
                'pertanyaan_6_jawaban_4' => 0,
                'pertanyaan_6_jawaban_5' => 0,
                'pertanyaan_7_jawaban_1' => 0,
                'pertanyaan_7_jawaban_2' => 0,
                'pertanyaan_7_jawaban_3' => 0,
                'pertanyaan_7_jawaban_4' => 0,
                'pertanyaan_7_jawaban_5' => 0,
                'pertanyaan_8_jawaban_1' => 0,
                'pertanyaan_8_jawaban_2' => 0,
                'pertanyaan_8_jawaban_3' => 0,
                'pertanyaan_8_jawaban_4' => 0,
                'pertanyaan_8_jawaban_5' => 0,
                'pertanyaan_9_jawaban_1' => 0,
                'pertanyaan_9_jawaban_2' => 0,
                'pertanyaan_9_jawaban_3' => 0,
                'pertanyaan_9_jawaban_4' => 0,
                'pertanyaan_9_jawaban_5' => 0,
                'pertanyaan_10_jawaban_1' => 0,
                'pertanyaan_10_jawaban_2' => 0,
                'pertanyaan_10_jawaban_3' => 0,
                'pertanyaan_10_jawaban_4' => 0,
                'pertanyaan_10_jawaban_5' => 0,
                'pertanyaan_11_jawaban_1' => 0,
                'pertanyaan_11_jawaban_2' => 0,
                'pertanyaan_11_jawaban_3' => 0,
                'pertanyaan_11_jawaban_4' => 0,
                'pertanyaan_11_jawaban_5' => 0,
                'pertanyaan_12_jawaban_1' => 0,
                'pertanyaan_12_jawaban_2' => 0,
                'pertanyaan_12_jawaban_3' => 0,
                'pertanyaan_12_jawaban_4' => 0,
                'pertanyaan_12_jawaban_5' => 0,
                'pertanyaan_13_jawaban_1' => 0,
                'pertanyaan_13_jawaban_2' => 0,
                'pertanyaan_13_jawaban_3' => 0,
                'pertanyaan_13_jawaban_4' => 0,
                'pertanyaan_13_jawaban_5' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_2($id)
    {
        $data = DB::table('tujuan_organisasi')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_3($id)
    {
        $data = DB::table('profile_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_1_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_1_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_1_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_1_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_1_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_1_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_1_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_1_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_1_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_1_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_1_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_2_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_2_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_2_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_2_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_2_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_2_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_2_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_2_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_2_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_2_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_2_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_3_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_3_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_3_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_3_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_3_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_3_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_3_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_3_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_3_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_3_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_3_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_4_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_4_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_4_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_4_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_4_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_4_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_4_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_4_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_4_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_4_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_4_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_5_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_5_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_5_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_5_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_5_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_5_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_5_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_5_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_5_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_5_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_5_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_6_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_6_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_6_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_6_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_6_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_6_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_6_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_6_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_6_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_6_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_6_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_7_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_7_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_7_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_7_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_7_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_7_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_7_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_7_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_7_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_7_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_7_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_8_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_8_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_8_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_8_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_8_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_8_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_8_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_8_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_8_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_8_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_8_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_9_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_9_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_9_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_9_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_9_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_9_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_9_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_9_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_9_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_9_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_9_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_10_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_10_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_10_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_10_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_10_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_10_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_10_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_10_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_10_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_10_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_10_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_11_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_11_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_11_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_11_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_11_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_11_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_11_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_11_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_11_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_11_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_11_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_12_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_12_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_12_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_12_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_12_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_12_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_12_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_12_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_12_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_12_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_12_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_13_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_13_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_13_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_13_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_13_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_13_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_13_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_13_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_13_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_13_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_13_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_14_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_14_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_14_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_14_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_14_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_14_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_14_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_14_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_14_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_14_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_14_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_15_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_15_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_15_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_15_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_15_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_15_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_15_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_15_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_15_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_15_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_15_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_16_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_16_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_16_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_16_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_16_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_16_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_16_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_16_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_16_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_16_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_16_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_17_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_17_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_17_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_17_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_17_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_17_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_17_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_17_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_17_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_17_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_17_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_18_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_18_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_18_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_18_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_18_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_18_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_18_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_18_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_18_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_18_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_18_terjadi_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_dampak = "1" THEN 1 ELSE 0 END) as pertanyaan_19_dampak_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_dampak = "2" THEN 1 ELSE 0 END) as pertanyaan_19_dampak_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_dampak = "3" THEN 1 ELSE 0 END) as pertanyaan_19_dampak_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_dampak = "4" THEN 1 ELSE 0 END) as pertanyaan_19_dampak_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_dampak = "5" THEN 1 ELSE 0 END) as pertanyaan_19_dampak_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_terjadi = "1" THEN 1 ELSE 0 END) as pertanyaan_19_terjadi_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_terjadi = "2" THEN 1 ELSE 0 END) as pertanyaan_19_terjadi_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_terjadi = "3" THEN 1 ELSE 0 END) as pertanyaan_19_terjadi_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_terjadi = "4" THEN 1 ELSE 0 END) as pertanyaan_19_terjadi_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_19_terjadi = "5" THEN 1 ELSE 0 END) as pertanyaan_19_terjadi_jawaban_5'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_dampak_jawaban_1' => 0,
                'pertanyaan_1_dampak_jawaban_2' => 0,
                'pertanyaan_1_dampak_jawaban_3' => 0,
                'pertanyaan_1_dampak_jawaban_4' => 0,
                'pertanyaan_1_dampak_jawaban_5' => 0,
                'pertanyaan_1_terjadi_jawaban_1' => 0,
                'pertanyaan_1_terjadi_jawaban_2' => 0,
                'pertanyaan_1_terjadi_jawaban_3' => 0,
                'pertanyaan_1_terjadi_jawaban_4' => 0,
                'pertanyaan_1_terjadi_jawaban_5' => 0,
                'pertanyaan_2_dampak_jawaban_1' => 0,
                'pertanyaan_2_dampak_jawaban_2' => 0,
                'pertanyaan_2_dampak_jawaban_3' => 0,
                'pertanyaan_2_dampak_jawaban_4' => 0,
                'pertanyaan_2_dampak_jawaban_5' => 0,
                'pertanyaan_2_terjadi_jawaban_1' => 0,
                'pertanyaan_2_terjadi_jawaban_2' => 0,
                'pertanyaan_2_terjadi_jawaban_3' => 0,
                'pertanyaan_2_terjadi_jawaban_4' => 0,
                'pertanyaan_2_terjadi_jawaban_5' => 0,
                'pertanyaan_3_dampak_jawaban_1' => 0,
                'pertanyaan_3_dampak_jawaban_2' => 0,
                'pertanyaan_3_dampak_jawaban_3' => 0,
                'pertanyaan_3_dampak_jawaban_4' => 0,
                'pertanyaan_3_dampak_jawaban_5' => 0,
                'pertanyaan_3_terjadi_jawaban_1' => 0,
                'pertanyaan_3_terjadi_jawaban_2' => 0,
                'pertanyaan_3_terjadi_jawaban_3' => 0,
                'pertanyaan_3_terjadi_jawaban_4' => 0,
                'pertanyaan_3_terjadi_jawaban_5' => 0,
                'pertanyaan_4_dampak_jawaban_1' => 0,
                'pertanyaan_4_dampak_jawaban_2' => 0,
                'pertanyaan_4_dampak_jawaban_3' => 0,
                'pertanyaan_4_dampak_jawaban_4' => 0,
                'pertanyaan_4_dampak_jawaban_5' => 0,
                'pertanyaan_4_terjadi_jawaban_1' => 0,
                'pertanyaan_4_terjadi_jawaban_2' => 0,
                'pertanyaan_4_terjadi_jawaban_3' => 0,
                'pertanyaan_4_terjadi_jawaban_4' => 0,
                'pertanyaan_4_terjadi_jawaban_5' => 0,
                'pertanyaan_5_dampak_jawaban_1' => 0,
                'pertanyaan_5_dampak_jawaban_2' => 0,
                'pertanyaan_5_dampak_jawaban_3' => 0,
                'pertanyaan_5_dampak_jawaban_4' => 0,
                'pertanyaan_5_dampak_jawaban_5' => 0,
                'pertanyaan_5_terjadi_jawaban_1' => 0,
                'pertanyaan_5_terjadi_jawaban_2' => 0,
                'pertanyaan_5_terjadi_jawaban_3' => 0,
                'pertanyaan_5_terjadi_jawaban_4' => 0,
                'pertanyaan_5_terjadi_jawaban_5' => 0,
                'pertanyaan_6_dampak_jawaban_1' => 0,
                'pertanyaan_6_dampak_jawaban_2' => 0,
                'pertanyaan_6_dampak_jawaban_3' => 0,
                'pertanyaan_6_dampak_jawaban_4' => 0,
                'pertanyaan_6_dampak_jawaban_5' => 0,
                'pertanyaan_6_terjadi_jawaban_1' => 0,
                'pertanyaan_6_terjadi_jawaban_2' => 0,
                'pertanyaan_6_terjadi_jawaban_3' => 0,
                'pertanyaan_6_terjadi_jawaban_4' => 0,
                'pertanyaan_6_terjadi_jawaban_5' => 0,
                'pertanyaan_7_dampak_jawaban_1' => 0,
                'pertanyaan_7_dampak_jawaban_2' => 0,
                'pertanyaan_7_dampak_jawaban_3' => 0,
                'pertanyaan_7_dampak_jawaban_4' => 0,
                'pertanyaan_7_dampak_jawaban_5' => 0,
                'pertanyaan_7_terjadi_jawaban_1' => 0,
                'pertanyaan_7_terjadi_jawaban_2' => 0,
                'pertanyaan_7_terjadi_jawaban_3' => 0,
                'pertanyaan_7_terjadi_jawaban_4' => 0,
                'pertanyaan_7_terjadi_jawaban_5' => 0,
                'pertanyaan_8_dampak_jawaban_1' => 0,
                'pertanyaan_8_dampak_jawaban_2' => 0,
                'pertanyaan_8_dampak_jawaban_3' => 0,
                'pertanyaan_8_dampak_jawaban_4' => 0,
                'pertanyaan_8_dampak_jawaban_5' => 0,
                'pertanyaan_8_terjadi_jawaban_1' => 0,
                'pertanyaan_8_terjadi_jawaban_2' => 0,
                'pertanyaan_8_terjadi_jawaban_3' => 0,
                'pertanyaan_8_terjadi_jawaban_4' => 0,
                'pertanyaan_8_terjadi_jawaban_5' => 0,
                'pertanyaan_9_dampak_jawaban_1' => 0,
                'pertanyaan_9_dampak_jawaban_2' => 0,
                'pertanyaan_9_dampak_jawaban_3' => 0,
                'pertanyaan_9_dampak_jawaban_4' => 0,
                'pertanyaan_9_dampak_jawaban_5' => 0,
                'pertanyaan_9_terjadi_jawaban_1' => 0,
                'pertanyaan_9_terjadi_jawaban_2' => 0,
                'pertanyaan_9_terjadi_jawaban_3' => 0,
                'pertanyaan_9_terjadi_jawaban_4' => 0,
                'pertanyaan_9_terjadi_jawaban_5' => 0,
                'pertanyaan_10_dampak_jawaban_1' => 0,
                'pertanyaan_10_dampak_jawaban_2' => 0,
                'pertanyaan_10_dampak_jawaban_3' => 0,
                'pertanyaan_10_dampak_jawaban_4' => 0,
                'pertanyaan_10_dampak_jawaban_5' => 0,
                'pertanyaan_10_terjadi_jawaban_1' => 0,
                'pertanyaan_10_terjadi_jawaban_2' => 0,
                'pertanyaan_10_terjadi_jawaban_3' => 0,
                'pertanyaan_10_terjadi_jawaban_4' => 0,
                'pertanyaan_10_terjadi_jawaban_5' => 0,
                'pertanyaan_11_dampak_jawaban_1' => 0,
                'pertanyaan_11_dampak_jawaban_2' => 0,
                'pertanyaan_11_dampak_jawaban_3' => 0,
                'pertanyaan_11_dampak_jawaban_4' => 0,
                'pertanyaan_11_dampak_jawaban_5' => 0,
                'pertanyaan_11_terjadi_jawaban_1' => 0,
                'pertanyaan_11_terjadi_jawaban_2' => 0,
                'pertanyaan_11_terjadi_jawaban_3' => 0,
                'pertanyaan_11_terjadi_jawaban_4' => 0,
                'pertanyaan_11_terjadi_jawaban_5' => 0,
                'pertanyaan_12_dampak_jawaban_1' => 0,
                'pertanyaan_12_dampak_jawaban_2' => 0,
                'pertanyaan_12_dampak_jawaban_3' => 0,
                'pertanyaan_12_dampak_jawaban_4' => 0,
                'pertanyaan_12_dampak_jawaban_5' => 0,
                'pertanyaan_12_terjadi_jawaban_1' => 0,
                'pertanyaan_12_terjadi_jawaban_2' => 0,
                'pertanyaan_12_terjadi_jawaban_3' => 0,
                'pertanyaan_12_terjadi_jawaban_4' => 0,
                'pertanyaan_12_terjadi_jawaban_5' => 0,
                'pertanyaan_13_dampak_jawaban_1' => 0,
                'pertanyaan_13_dampak_jawaban_2' => 0,
                'pertanyaan_13_dampak_jawaban_3' => 0,
                'pertanyaan_13_dampak_jawaban_4' => 0,
                'pertanyaan_13_dampak_jawaban_5' => 0,
                'pertanyaan_13_terjadi_jawaban_1' => 0,
                'pertanyaan_13_terjadi_jawaban_2' => 0,
                'pertanyaan_13_terjadi_jawaban_3' => 0,
                'pertanyaan_13_terjadi_jawaban_4' => 0,
                'pertanyaan_13_terjadi_jawaban_5' => 0,
                'pertanyaan_14_dampak_jawaban_1' => 0,
                'pertanyaan_14_dampak_jawaban_2' => 0,
                'pertanyaan_14_dampak_jawaban_3' => 0,
                'pertanyaan_14_dampak_jawaban_4' => 0,
                'pertanyaan_14_dampak_jawaban_5' => 0,
                'pertanyaan_14_terjadi_jawaban_1' => 0,
                'pertanyaan_14_terjadi_jawaban_2' => 0,
                'pertanyaan_14_terjadi_jawaban_3' => 0,
                'pertanyaan_14_terjadi_jawaban_4' => 0,
                'pertanyaan_14_terjadi_jawaban_5' => 0,
                'pertanyaan_15_dampak_jawaban_1' => 0,
                'pertanyaan_15_dampak_jawaban_2' => 0,
                'pertanyaan_15_dampak_jawaban_3' => 0,
                'pertanyaan_15_dampak_jawaban_4' => 0,
                'pertanyaan_15_dampak_jawaban_5' => 0,
                'pertanyaan_15_terjadi_jawaban_1' => 0,
                'pertanyaan_15_terjadi_jawaban_2' => 0,
                'pertanyaan_15_terjadi_jawaban_3' => 0,
                'pertanyaan_15_terjadi_jawaban_4' => 0,
                'pertanyaan_15_terjadi_jawaban_5' => 0,
                'pertanyaan_16_dampak_jawaban_1' => 0,
                'pertanyaan_16_dampak_jawaban_2' => 0,
                'pertanyaan_16_dampak_jawaban_3' => 0,
                'pertanyaan_16_dampak_jawaban_4' => 0,
                'pertanyaan_16_dampak_jawaban_5' => 0,
                'pertanyaan_16_terjadi_jawaban_1' => 0,
                'pertanyaan_16_terjadi_jawaban_2' => 0,
                'pertanyaan_16_terjadi_jawaban_3' => 0,
                'pertanyaan_16_terjadi_jawaban_4' => 0,
                'pertanyaan_16_terjadi_jawaban_5' => 0,
                'pertanyaan_17_dampak_jawaban_1' => 0,
                'pertanyaan_17_dampak_jawaban_2' => 0,
                'pertanyaan_17_dampak_jawaban_3' => 0,
                'pertanyaan_17_dampak_jawaban_4' => 0,
                'pertanyaan_17_dampak_jawaban_5' => 0,
                'pertanyaan_17_terjadi_jawaban_1' => 0,
                'pertanyaan_17_terjadi_jawaban_2' => 0,
                'pertanyaan_17_terjadi_jawaban_3' => 0,
                'pertanyaan_17_terjadi_jawaban_4' => 0,
                'pertanyaan_17_terjadi_jawaban_5' => 0,
                'pertanyaan_18_dampak_jawaban_1' => 0,
                'pertanyaan_18_dampak_jawaban_2' => 0,
                'pertanyaan_18_dampak_jawaban_3' => 0,
                'pertanyaan_18_dampak_jawaban_4' => 0,
                'pertanyaan_18_dampak_jawaban_5' => 0,
                'pertanyaan_18_terjadi_jawaban_1' => 0,
                'pertanyaan_18_terjadi_jawaban_2' => 0,
                'pertanyaan_18_terjadi_jawaban_3' => 0,
                'pertanyaan_18_terjadi_jawaban_4' => 0,
                'pertanyaan_18_terjadi_jawaban_5' => 0,
                'pertanyaan_19_dampak_jawaban_1' => 0,
                'pertanyaan_19_dampak_jawaban_2' => 0,
                'pertanyaan_19_dampak_jawaban_3' => 0,
                'pertanyaan_19_dampak_jawaban_4' => 0,
                'pertanyaan_19_dampak_jawaban_5' => 0,
                'pertanyaan_19_terjadi_jawaban_1' => 0,
                'pertanyaan_19_terjadi_jawaban_2' => 0,
                'pertanyaan_19_terjadi_jawaban_3' => 0,
                'pertanyaan_19_terjadi_jawaban_4' => 0,
                'pertanyaan_19_terjadi_jawaban_5' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_3($id)
    {
        $data = DB::table('profile_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_4($id)
    {
        $data = DB::table('issue_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "1" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "2" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "3" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "4" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "5" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "1" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "2" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "3" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "4" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "5" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "1" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "2" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "3" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "4" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "5" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "1" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "2" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "3" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "4" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "5" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "1" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "2" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "3" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "4" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "5" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "1" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "2" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "3" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "4" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "5" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "1" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "2" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "3" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "4" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "5" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "1" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "2" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "3" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "4" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "5" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "1" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "2" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "3" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "4" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_9 = "5" THEN 1 ELSE 0 END) as pertanyaan_9_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "1" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "2" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "3" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "4" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_10 = "5" THEN 1 ELSE 0 END) as pertanyaan_10_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "1" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "2" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "3" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "4" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_11 = "5" THEN 1 ELSE 0 END) as pertanyaan_11_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "1" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "2" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "3" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "4" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_12 = "5" THEN 1 ELSE 0 END) as pertanyaan_12_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "1" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "2" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "3" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "4" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_13 = "5" THEN 1 ELSE 0 END) as pertanyaan_13_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_14 = "1" THEN 1 ELSE 0 END) as pertanyaan_14_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_14 = "2" THEN 1 ELSE 0 END) as pertanyaan_14_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_14 = "3" THEN 1 ELSE 0 END) as pertanyaan_14_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_14 = "4" THEN 1 ELSE 0 END) as pertanyaan_14_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_14 = "5" THEN 1 ELSE 0 END) as pertanyaan_14_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_15 = "1" THEN 1 ELSE 0 END) as pertanyaan_15_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_15 = "2" THEN 1 ELSE 0 END) as pertanyaan_15_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_15 = "3" THEN 1 ELSE 0 END) as pertanyaan_15_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_15 = "4" THEN 1 ELSE 0 END) as pertanyaan_15_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_15 = "5" THEN 1 ELSE 0 END) as pertanyaan_15_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_16 = "1" THEN 1 ELSE 0 END) as pertanyaan_16_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_16 = "2" THEN 1 ELSE 0 END) as pertanyaan_16_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_16 = "3" THEN 1 ELSE 0 END) as pertanyaan_16_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_16 = "4" THEN 1 ELSE 0 END) as pertanyaan_16_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_16 = "5" THEN 1 ELSE 0 END) as pertanyaan_16_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_17 = "1" THEN 1 ELSE 0 END) as pertanyaan_17_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_17 = "2" THEN 1 ELSE 0 END) as pertanyaan_17_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_17 = "3" THEN 1 ELSE 0 END) as pertanyaan_17_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_17 = "4" THEN 1 ELSE 0 END) as pertanyaan_17_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_17 = "5" THEN 1 ELSE 0 END) as pertanyaan_17_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_18 = "1" THEN 1 ELSE 0 END) as pertanyaan_18_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_18 = "2" THEN 1 ELSE 0 END) as pertanyaan_18_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_18 = "3" THEN 1 ELSE 0 END) as pertanyaan_18_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_18 = "4" THEN 1 ELSE 0 END) as pertanyaan_18_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_18 = "5" THEN 1 ELSE 0 END) as pertanyaan_18_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_19 = "1" THEN 1 ELSE 0 END) as pertanyaan_19_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_19 = "2" THEN 1 ELSE 0 END) as pertanyaan_19_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_19 = "3" THEN 1 ELSE 0 END) as pertanyaan_19_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_19 = "4" THEN 1 ELSE 0 END) as pertanyaan_19_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_19 = "5" THEN 1 ELSE 0 END) as pertanyaan_19_jawaban_5'),
                DB::raw('SUM(CASE WHEN pertanyaan_20 = "1" THEN 1 ELSE 0 END) as pertanyaan_20_jawaban_1'),
                DB::raw('SUM(CASE WHEN pertanyaan_20 = "2" THEN 1 ELSE 0 END) as pertanyaan_20_jawaban_2'),
                DB::raw('SUM(CASE WHEN pertanyaan_20 = "3" THEN 1 ELSE 0 END) as pertanyaan_20_jawaban_3'),
                DB::raw('SUM(CASE WHEN pertanyaan_20 = "4" THEN 1 ELSE 0 END) as pertanyaan_20_jawaban_4'),
                DB::raw('SUM(CASE WHEN pertanyaan_20 = "5" THEN 1 ELSE 0 END) as pertanyaan_20_jawaban_5'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_1' => 0,
                'pertanyaan_1_jawaban_2' => 0,
                'pertanyaan_1_jawaban_3' => 0,
                'pertanyaan_1_jawaban_4' => 0,
                'pertanyaan_1_jawaban_5' => 0,
                'pertanyaan_2_jawaban_1' => 0,
                'pertanyaan_2_jawaban_2' => 0,
                'pertanyaan_2_jawaban_3' => 0,
                'pertanyaan_2_jawaban_4' => 0,
                'pertanyaan_2_jawaban_5' => 0,
                'pertanyaan_3_jawaban_1' => 0,
                'pertanyaan_3_jawaban_2' => 0,
                'pertanyaan_3_jawaban_3' => 0,
                'pertanyaan_3_jawaban_4' => 0,
                'pertanyaan_3_jawaban_5' => 0,
                'pertanyaan_4_jawaban_1' => 0,
                'pertanyaan_4_jawaban_2' => 0,
                'pertanyaan_4_jawaban_3' => 0,
                'pertanyaan_4_jawaban_4' => 0,
                'pertanyaan_4_jawaban_5' => 0,
                'pertanyaan_5_jawaban_1' => 0,
                'pertanyaan_5_jawaban_2' => 0,
                'pertanyaan_5_jawaban_3' => 0,
                'pertanyaan_5_jawaban_4' => 0,
                'pertanyaan_5_jawaban_5' => 0,
                'pertanyaan_6_jawaban_1' => 0,
                'pertanyaan_6_jawaban_2' => 0,
                'pertanyaan_6_jawaban_3' => 0,
                'pertanyaan_6_jawaban_4' => 0,
                'pertanyaan_6_jawaban_5' => 0,
                'pertanyaan_7_jawaban_1' => 0,
                'pertanyaan_7_jawaban_2' => 0,
                'pertanyaan_7_jawaban_3' => 0,
                'pertanyaan_7_jawaban_4' => 0,
                'pertanyaan_7_jawaban_5' => 0,
                'pertanyaan_8_jawaban_1' => 0,
                'pertanyaan_8_jawaban_2' => 0,
                'pertanyaan_8_jawaban_3' => 0,
                'pertanyaan_8_jawaban_4' => 0,
                'pertanyaan_8_jawaban_5' => 0,
                'pertanyaan_9_jawaban_1' => 0,
                'pertanyaan_9_jawaban_2' => 0,
                'pertanyaan_9_jawaban_3' => 0,
                'pertanyaan_9_jawaban_4' => 0,
                'pertanyaan_9_jawaban_5' => 0,
                'pertanyaan_10_jawaban_1' => 0,
                'pertanyaan_10_jawaban_2' => 0,
                'pertanyaan_10_jawaban_3' => 0,
                'pertanyaan_10_jawaban_4' => 0,
                'pertanyaan_10_jawaban_5' => 0,
                'pertanyaan_11_jawaban_1' => 0,
                'pertanyaan_11_jawaban_2' => 0,
                'pertanyaan_11_jawaban_3' => 0,
                'pertanyaan_11_jawaban_4' => 0,
                'pertanyaan_11_jawaban_5' => 0,
                'pertanyaan_12_jawaban_1' => 0,
                'pertanyaan_12_jawaban_2' => 0,
                'pertanyaan_12_jawaban_3' => 0,
                'pertanyaan_12_jawaban_4' => 0,
                'pertanyaan_12_jawaban_5' => 0,
                'pertanyaan_13_jawaban_1' => 0,
                'pertanyaan_13_jawaban_2' => 0,
                'pertanyaan_13_jawaban_3' => 0,
                'pertanyaan_13_jawaban_4' => 0,
                'pertanyaan_13_jawaban_5' => 0,
                'pertanyaan_14_jawaban_1' => 0,
                'pertanyaan_14_jawaban_2' => 0,
                'pertanyaan_14_jawaban_3' => 0,
                'pertanyaan_14_jawaban_4' => 0,
                'pertanyaan_14_jawaban_5' => 0,
                'pertanyaan_15_jawaban_1' => 0,
                'pertanyaan_15_jawaban_2' => 0,
                'pertanyaan_15_jawaban_3' => 0,
                'pertanyaan_15_jawaban_4' => 0,
                'pertanyaan_15_jawaban_5' => 0,
                'pertanyaan_16_jawaban_1' => 0,
                'pertanyaan_16_jawaban_2' => 0,
                'pertanyaan_16_jawaban_3' => 0,
                'pertanyaan_16_jawaban_4' => 0,
                'pertanyaan_16_jawaban_5' => 0,
                'pertanyaan_17_jawaban_1' => 0,
                'pertanyaan_17_jawaban_2' => 0,
                'pertanyaan_17_jawaban_3' => 0,
                'pertanyaan_17_jawaban_4' => 0,
                'pertanyaan_17_jawaban_5' => 0,
                'pertanyaan_18_jawaban_1' => 0,
                'pertanyaan_18_jawaban_2' => 0,
                'pertanyaan_18_jawaban_3' => 0,
                'pertanyaan_18_jawaban_4' => 0,
                'pertanyaan_18_jawaban_5' => 0,
                'pertanyaan_19_jawaban_1' => 0,
                'pertanyaan_19_jawaban_2' => 0,
                'pertanyaan_19_jawaban_3' => 0,
                'pertanyaan_19_jawaban_4' => 0,
                'pertanyaan_19_jawaban_5' => 0,
                'pertanyaan_20_jawaban_1' => 0,
                'pertanyaan_20_jawaban_2' => 0,
                'pertanyaan_20_jawaban_3' => 0,
                'pertanyaan_20_jawaban_4' => 0,
                'pertanyaan_20_jawaban_5' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_4($id)
    {
        $data = DB::table('issue_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_5($id)
    {
        $data = DB::table('evaluasi_manajemen_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'pertanyaan_4_jawaban_ya' => 0,
                'pertanyaan_4_jawaban_tidak' => 0,
                'pertanyaan_5_jawaban_ya' => 0,
                'pertanyaan_5_jawaban_tidak' => 0,
                'pertanyaan_6_jawaban_ya' => 0,
                'pertanyaan_6_jawaban_tidak' => 0,
                'pertanyaan_7_jawaban_ya' => 0,
                'pertanyaan_7_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_5($id)
    {
        $data = DB::table('evaluasi_manajemen_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_6($id)
    {
        $data = DB::table('arahan_manajemen_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'pertanyaan_4_jawaban_ya' => 0,
                'pertanyaan_4_jawaban_tidak' => 0,
                'pertanyaan_5_jawaban_ya' => 0,
                'pertanyaan_5_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_6($id)
    {
        $data = DB::table('arahan_manajemen_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_7($id)
    {
        $data = DB::table('pemantauan_manajemen_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'pertanyaan_4_jawaban_ya' => 0,
                'pertanyaan_4_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_7($id)
    {
        $data = DB::table('pemantauan_manajemen_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_8($id)
    {
        $data = DB::table('pengumpulan_manajemen_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'pertanyaan_4_jawaban_ya' => 0,
                'pertanyaan_4_jawaban_tidak' => 0,
                'pertanyaan_5_jawaban_ya' => 0,
                'pertanyaan_5_jawaban_tidak' => 0,
                'pertanyaan_6_jawaban_ya' => 0,
                'pertanyaan_6_jawaban_tidak' => 0,
                'pertanyaan_7_jawaban_ya' => 0,
                'pertanyaan_7_jawaban_tidak' => 0,
                'pertanyaan_8_jawaban_ya' => 0,
                'pertanyaan_8_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_8($id)
    {
        $data = DB::table('pengumpulan_manajemen_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_9($id)
    {
        $data = DB::table('menganalisis_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_8 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_8_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'pertanyaan_4_jawaban_ya' => 0,
                'pertanyaan_4_jawaban_tidak' => 0,
                'pertanyaan_5_jawaban_ya' => 0,
                'pertanyaan_5_jawaban_tidak' => 0,
                'pertanyaan_6_jawaban_ya' => 0,
                'pertanyaan_6_jawaban_tidak' => 0,
                'pertanyaan_7_jawaban_ya' => 0,
                'pertanyaan_7_jawaban_tidak' => 0,
                'pertanyaan_8_jawaban_ya' => 0,
                'pertanyaan_8_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_9($id)
    {
        $data = DB::table('menganalisis_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_10($id)
    {
        $data = DB::table('memelihara_profil_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_6 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_6_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_7 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_7_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'pertanyaan_4_jawaban_ya' => 0,
                'pertanyaan_4_jawaban_tidak' => 0,
                'pertanyaan_5_jawaban_ya' => 0,
                'pertanyaan_5_jawaban_tidak' => 0,
                'pertanyaan_6_jawaban_ya' => 0,
                'pertanyaan_6_jawaban_tidak' => 0,
                'pertanyaan_7_jawaban_ya' => 0,
                'pertanyaan_7_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_10($id)
    {
        $data = DB::table('memelihara_profil_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_11($id)
    {
        $data = DB::table('mengartikulasikan_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'pertanyaan_4_jawaban_ya' => 0,
                'pertanyaan_4_jawaban_tidak' => 0,
                'pertanyaan_5_jawaban_ya' => 0,
                'pertanyaan_5_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_11($id)
    {
        $data = DB::table('mengartikulasikan_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_12($id)
    {
        $data = DB::table('menentukan_portofolio_mitigasi_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_12($id)
    {
        $data = DB::table('menentukan_portofolio_mitigasi_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }

    public function section_13($id)
    {
        $data = DB::table('menanggapi_risiko')
            ->select(
                'form_id',
                DB::raw('COUNT(*) as total_responses'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_1 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_1_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_2 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_2_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_3 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_3_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_4 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_4_jawaban_tidak'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Ya" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_ya'),
                DB::raw('SUM(CASE WHEN pertanyaan_5 = "Tidak" THEN 1 ELSE 0 END) as pertanyaan_5_jawaban_tidak'),
                DB::raw('MAX(updated_at) as last_updated_at'),
            )
            ->where('form_id', $id)
            ->groupBy('form_id')
            ->first();

        // Handle empty data
        if (!$data) {
            $data = (object)[
                'form_id' => $id,
                'total_responses' => 0,
                'pertanyaan_1_jawaban_ya' => 0,
                'pertanyaan_1_jawaban_tidak' => 0,
                'pertanyaan_2_jawaban_ya' => 0,
                'pertanyaan_2_jawaban_tidak' => 0,
                'pertanyaan_3_jawaban_ya' => 0,
                'pertanyaan_3_jawaban_tidak' => 0,
                'pertanyaan_4_jawaban_ya' => 0,
                'pertanyaan_4_jawaban_tidak' => 0,
                'pertanyaan_5_jawaban_ya' => 0,
                'pertanyaan_5_jawaban_tidak' => 0,
                'last_updated_at' => null
            ];
        }

        $total_auditee = DB::table('auditee')->where('form_id', $id)->count();
        $data->total_auditee = $total_auditee == null ? 0 : $total_auditee;
        // Kirim data ke view
        return response()->json($data);
    }

    public function kritik_saran_section_13($id)
    {
        $data = DB::table('menanggapi_risiko')
            ->select('kritik_saran')
            ->where('form_id', $id)
            ->get();

        // Handle empty data
        if ($data->isEmpty()) {
            return response()->json(['kritik_saran' => 'Tidak ada kritik dan saran']);
        }

        // Kirim data ke view
        return response()->json($data);
    }
}
