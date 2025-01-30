<form action="{{ route('submit.section-10', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-10">
        <div class="card-header">
            <strong class="card-title">Section 10 (Identifikasi pengelolaan risiko teknologi informasi Bagian Ketiga:
                Memelihara
                Profil Risiko TI)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian ketiga dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi
                bagaimana
                organisasi
                memelihara profil risiko TI. Kuisioner ini berfokus pada pembaruan dan pengelolaan profil risiko untuk
                mencerminkan
                kondisi risiko yang terbaru.
                <br>
                Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong>
                sesuai
                dengan
                kondisi yang berlaku di organisasi Anda.
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Aktifitas</th>
                            <th>Aktifitas Dilakukan (Ya/Tidak)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mendata proses bisnis dan mendokumentasikan ketergantungannya pada proses manajemen
                                layanan
                                TI dan
                                sumber daya infrastruktur TI. Termasuk, Mengidentifikasi personel pendukung, aplikasi,
                                infrastruktur, fasilitas, catatan manual, vendor, dan pemasok.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menentukan dan menyepakati layanan TI serta sumber daya infrastruktur yang penting untuk
                                kelangsungan proses bisnis. Termasuk, menganalisis ketergantungan dan mengidentifikasi
                                kelemahan.
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengelompokkan skenario risiko saat ini berdasarkan kategori, lini bisnis, dan area
                                fungsional.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Secara rutin mengumpulkan semua informasi profil risiko dan mengonsolidasikannya menjadi
                                profil
                                risiko terintegrasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_4 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_4 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mencatat status rencana aksi risiko untuk dimasukkan ke dalam profil risiko TI
                                organisasi.
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_5 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_5 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Berdasarkan data profil risiko, mendefinisikan indikator risiko untuk identifikasi cepat
                                dan
                                pemantauan tren risiko.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_6"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_6 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_6 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mencatat informasi tentang kejadian risiko TI yang telah terjadi untuk dimasukkan ke
                                dalam
                                profil
                                risiko TI organisasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_7"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_7 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->memelihara_profil_risiko != null && $auditee->memelihara_profil_risiko->pertanyaan_7 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> <!-- /. card-body -->
        <div class="card-footer d-flex justify-content-between align-items-center">
            <small class="text-muted">Terakhir diperbarui:
                {{ $auditee->memelihara_profil_risiko != null ? $auditee->memelihara_profil_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
