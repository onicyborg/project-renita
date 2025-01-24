<form action="{{ route('submit.section-12', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-12">
        <div class="card-header">
            <strong class="card-title">Section 12 (Identifikasi pengelolaan risiko teknologi informasi Bagian Kelima:
                Menentukan
                Portofolio Tindakan Manajemen Risiko TI)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian kelima dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi
                bagaimana
                organisasi
                menentukan tindakan yang diperlukan untuk mengelola risiko TI. Kuisioner ini berfokus pada strategi dan
                rencana
                tindakan yang disusun untuk menangani risiko.
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
                            <td>Memelihara daftar aktivitas kontrol yang ada untuk mengurangi risiko dan memungkinkan
                                pengambilan risiko sesuai appetite dan toleransi risiko. Mengklasifikasikan aktivitas
                                kontrol dan memetakannya ke skenario risiko TI.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menentukan_portofolio_mitigasi_risiko != null && $auditee->menentukan_portofolio_mitigasi_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menentukan_portofolio_mitigasi_risiko != null && $auditee->menentukan_portofolio_mitigasi_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menentukan apakah setiap unit organisasi memantau risiko dan bertanggung jawab atas
                                operasional sesuai dengan tingkat toleransi risiko individu dan portofolio.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menentukan_portofolio_mitigasi_risiko != null && $auditee->menentukan_portofolio_mitigasi_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menentukan_portofolio_mitigasi_risiko != null && $auditee->menentukan_portofolio_mitigasi_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menyusun proposal proyek yang seimbang untuk mengurangi risiko atau mendukung peluang
                                strategis, dengan mempertimbangkan biaya, manfaat, dampak pada profil risiko saat ini,
                                dan
                                regulasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menentukan_portofolio_mitigasi_risiko != null && $auditee->menentukan_portofolio_mitigasi_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menentukan_portofolio_mitigasi_risiko != null && $auditee->menentukan_portofolio_mitigasi_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
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
                {{ $auditee->menentukan_portofolio_mitigasi_risiko != null ? $auditee->menentukan_portofolio_mitigasi_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div> <!-- /. card -->
</form>
