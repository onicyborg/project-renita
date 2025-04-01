<?php

namespace App\Http\Controllers;

use App\Models\Auditee;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class AuditController extends Controller
{
    public function index()
    {
        $forms = Form::orderBy('created_at', 'desc')->get();

        return view('master-audit', compact('forms'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'company_name' => 'required|string|max:255',
            'periode_audit'  => 'required',
            'deskripsi'    => 'required|string',
        ]);

        $newForm = new Form();
        $newForm->company_name = $request->company_name;
        $newForm->periode_audit = $request->periode_audit;
        $newForm->deskripsi = $request->deskripsi;
        $newForm->user_id = Auth::id();

        $newForm->save();

        return redirect()->route('master-audit')->with('success', 'Form successfully created!');
    }

    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        // Check if form has auditees
        if ($form->auditee()->exists()) {
            return back()->with('error', 'Form tidak dapat dihapus karena masih memiliki auditee!');
        }
        $form->delete();

        return redirect()->route('master-audit')->with('success', 'Form successfully deleted!');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'company_name' => 'required|string|max:255',
            'periode_audit'  => 'required',
            'deskripsi'    => 'required|string',
        ]);

        $form = Form::findOrFail($id);
        $form->company_name = $request->company_name;
        $form->periode_audit = $request->periode_audit;
        $form->deskripsi = $request->deskripsi;

        $form->save();

        return redirect()->route('master-audit')->with('success', 'Form successfully updated!');
    }

    public function show($id)
    {
        $form = Form::findOrFail($id);
        $auditees = Auditee::where('form_id', $form->id)->orderBy('created_at', 'desc')->get(); // Mengambil semua auditee terkait form

        // Menambahkan total_respon untuk setiap auditee
        $auditees->each(function ($auditee) {
            $auditee->total_respon = collect([
                $auditee->strategi_organisasi,
                $auditee->tujuan_organisasi,
                $auditee->profile_resiko,
                $auditee->issue_risiko,
                $auditee->evaluasi_manajemen_risiko,
                $auditee->arahan_manajemen_risiko,
                $auditee->pemantauan_manajemen_risiko,
                $auditee->pengumpulan_manajemen_risiko,
                $auditee->menganalisis_risiko,
                $auditee->memelihara_profil_risiko,
                $auditee->mengartikulasikan_risiko,
                $auditee->menentukan_portofolio_mitigasi_risiko,
                $auditee->menanggapi_risiko,
            ])->filter()->count();
        });

        // dd($auditees);

        return view('detail-audit', compact('form', 'auditees'));
    }


    public function create_auditee(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $form = Form::findOrFail($id);

        $form->auditee()->create([
            'name'    => $request->name,
            'jabatan' => $request->jabatan,
            'token'   => Uuid::uuid4()->toString(),
        ]);

        return redirect()->back()->with('success', 'Auditee successfully created!');
    }

    public function edit_auditee(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $auditee = Auditee::findOrFail($id);
        $auditee->name = $request->name;
        $auditee->jabatan = $request->jabatan;

        $auditee->save();

        return redirect()->back()->with('success', 'Auditee successfully updated!');
    }

    public function delete_auditee($id)
    {
        $auditee = Auditee::findOrFail($id);

        $tables = [
            'strategi_organisasi',
            'tujuan_organisasi',
            'profile_risiko',
            'issue_risiko',
            'evaluasi_manajemen_risiko',
            'arahan_manajemen_risiko',
            'pemantauan_manajemen_risiko',
            'pengumpulan_manajemen_risiko',
            'menganalisis_risiko',
            'memelihara_profil_risiko',
            'mengartikulasikan_risiko',
            'menentukan_portofolio_mitigasi_risiko',
            'menanggapi_risiko'
        ];

        // Check each table for existing data
        foreach ($tables as $table) {
            $exists = DB::table($table)
                ->where('auditee_id', $auditee->id)
                ->exists();

            if ($exists) {
                return back()
                    ->with('error', 'Auditee sudah memberikan respon, anda tidak dapat menghapus auditee yang sudah memberi respon')
                    ->withInput();
            }
        }

        $auditee->delete();

        return redirect()->back()->with('success', 'Auditee successfully deleted!');
    }

    public function quisioner($id)
    {
        $form = Form::findOrFail($id);

        return view('quisioner.index', compact('form'));
    }

    public function token_submit(Request $request, $id)
    {
        // Cari form berdasarkan ID
        $form = Form::findOrFail($id);

        // Cari auditee berdasarkan token yang dikirimkan
        $auditee = $form->auditee()->where('token', $request->token)->first();

        // Jika auditee tidak ditemukan, kembalikan pesan error
        if (!$auditee) {
            return redirect()->back()->with('error', 'Token not found!');
        }

        // Simpan status token valid di sesi
        session(['token_valid_' . $form->id => $request->token]);

        // Redirect ke halaman quisioner
        return redirect()->route('form.quisioner', ['id' => $form->id]);
    }


    public function form_quisioner($id)
    {
        // Cek apakah token valid di sesi
        if (!session('token_valid_' . $id)) {
            return redirect()->route('quisioner', ['id' => $id])->with('error', 'Anda harus memasukkan token terlebih dahulu!');
        }

        // Ambil data form
        $form = Form::findOrFail($id);
        $token = session('token_valid_' . $id);

        $auditee = $form->auditee()->where('token', $token)->with('strategi_organisasi', 'tujuan_organisasi', 'profile_resiko', 'issue_risiko', 'evaluasi_manajemen_risiko', 'arahan_manajemen_risiko', 'pemantauan_manajemen_risiko', 'pengumpulan_manajemen_risiko', 'menganalisis_risiko', 'memelihara_profil_risiko', 'mengartikulasikan_risiko', 'menentukan_portofolio_mitigasi_risiko', 'menanggapi_risiko')->first();

        $status = 'create';
        // dd($auditee->tujuan_organisasi);

        // Tampilkan halaman kuisioner
        return view('quisioner.form', compact('form', 'token', 'auditee', 'status'));
    }

    public function check_response($id)
    {

        $auditee = Auditee::where('id', $id)->with('strategi_organisasi', 'tujuan_organisasi', 'profile_resiko', 'issue_risiko', 'evaluasi_manajemen_risiko', 'arahan_manajemen_risiko', 'pemantauan_manajemen_risiko', 'pengumpulan_manajemen_risiko', 'menganalisis_risiko', 'memelihara_profil_risiko', 'mengartikulasikan_risiko', 'menentukan_portofolio_mitigasi_risiko', 'menanggapi_risiko')->first();
        $form = Form::findOrFail($auditee->form_id);
        $token = $auditee->token;
        $status = 'view';
        // dd($auditee->tujuan_organisasi);

        // Tampilkan halaman kuisioner
        return view('quisioner.form', compact('form', 'token', 'auditee', 'status'));
    }
}
