<form action="{{ route('submit.section-9', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-9">
        <div class="card-header">
            <strong class="card-title">Section 9 (Identifikasi pengelolaan risiko teknologi informasi Bagian Kedua:
                Menganalisis
                Risiko TI)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian kedua dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengidentifikasi
                bagaimana
                organisasi menganalisis risiko TI. Kuisioner ini berfokus pada proses evaluasi risiko, termasuk
                penilaian
                dampak dan
                kemungkinan terjadinya risiko.
                <br>
                Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong>
                sesuai
                dengan
                kondisi yang berlaku di organisasi
                Anda.
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
                            <td>Menentukan ruang lingkup yang tepat untuk upaya analisis risiko,
                                dengan mempertimbangkan semua faktor risiko dan tingkat
                                pentingnya aset bisnis.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menyusun dan memperbarui skenario risiko TI secara rutin,
                                termasuk potensi kerugian, risiko reputasi, dan skenario gabungan
                                dari berbagai jenis ancaman dan kejadian.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Memperkirakan frekuensi (kemungkinan) dan besarnya kerugian
                                atau keuntungan dari skenario risiko TI dengan
                                mempertimbangkan faktor risiko yang relevan dan kontrol
                                operasional yang diketahui.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Membandingkan risiko saat ini (potensi kerugian terkait TI)
                                dengan appetite risiko dan toleransi risiko yang dapat diterima.
                                Mengidentifikasi risiko yang tidak dapat diterima atau berisiko
                                tinggi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_4 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_4 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengusulkan tanggapan risiko untuk risiko yang melebihi
                                appetite dan toleransi risiko.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_5 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_5 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menentukan kebutuhan utama untuk proyek atau program yang
                                akan menjalankan tanggapan risiko yang dipilih, termasuk
                                langkah-langkah kontrol penting untuk mitigasi risiko.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_6"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_6 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_6 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Memvalidasi hasil analisis risiko dan analisis dampak bisnis (BIA)
                                sebelum digunakan dalam pengambilan keputusan. Memastikan
                                analisis sesuai dengan kebutuhan organisasi dan estimasi telah
                                diperiksa untuk bias.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_7"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_7 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_7 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menganalisis biaya/manfaat dari berbagai opsi tanggapan risiko
                                seperti menghindari, mengurangi, mentransfer, menerima, atau
                                memanfaatkan risiko, serta memastikan tanggapan risiko yang
                                optimal.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_8"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_8 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menganalisis_risiko != null && $auditee->menganalisis_risiko->pertanyaan_8 == 'Tidak' ? 'selected' : '' }}>
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
                {{ $auditee->menganalisis_risiko != null ? $auditee->menganalisis_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div> <!-- /. card -->
</form>
