<form action="{{ route('submit.section-7', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-7">
        <div class="card-header">
            <strong class="card-title">Section 7 (Identifikasi optimasi risiko teknologi informasi Bagian Ketiga:
                Pemantauan
                Manajemen Risiko)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian ketiga dari Optimasi Risiko Teknologi Informasi (TI) ini bertujuan untuk mengidentifikasi
                bagaimana
                organisasi memantau efektivitas pengelolaan risiko TI. Kuisioner ini berfokus pada evaluasi proses
                pemantauan,
                termasuk pengukuran, pelaporan, dan tindakan korektif terkait risiko TI.
                <br>
                Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong>
                sesuai
                dengan kondisi yang berlaku di organisasi
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
                            <td>Melaporkan setiap isu manajemen risiko kepada dewan direksi
                                atau komite eksekutif.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Memantau sejauh mana profil risiko dikelola sesuai dengan
                                appetite risiko dan batas toleransi risiko organisasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Memantau tujuan utama dan metrik dari tata kelola dan proses
                                manajemen risiko terhadap target, menganalisis penyebab
                                penyimpangan, dan mengambil tindakan perbaikan untuk
                                mengatasi penyebab utamanya.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Memungkinkan pemangku kepentingan utama untuk meninjau
                                kemajuan organisasi dalam mencapai tujuan yang telah
                                ditetapkan.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->pertanyaan_4 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->pertanyaan_4 == 'Tidak' ? 'selected' : '' }}>
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
                {{ $auditee->pemantauan_manajemen_risiko != null ? $auditee->pemantauan_manajemen_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div> <!-- /. card -->
</form>
