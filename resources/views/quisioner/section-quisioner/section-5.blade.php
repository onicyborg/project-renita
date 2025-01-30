<form action="{{ route('submit.section-5', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-5">
        <div class="card-header">
            <strong class="card-title">Section 5 (Identifikasi optimasi risiko teknologi informasi Bagian Pertama:
                Evaluasi
                Manajemen Risiko)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian pertama dari Optimasi Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi cara
                organisasi
                memahami, menilai, dan menentukan strategi pengelolaan risiko TI. Fokusnya adalah pada analisis awal dan
                identifikasi risiko TI yang relevan dengan tujuan strategis organisasi.
                <br>
                Pengisian pada kolom aktivitas dilakukan harap pilih <strong>Ya (Aktivitas dilakukan)</strong> atau
                <strong>Tidak (Aktivitas tidak dilakukan)</strong> sesuai kondisi yang berlaku di organisasi
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
                            <td>Memahami organisasi dan konteksnya yang berkaitan dengan
                                risiko Teknologi Informasi (TI).</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menentukan tingkat appetite risiko organisasi, yaitu tingkat risiko
                                TI yang bersedia diterima organisasi dalam mencapai tujuan
                                strategisnya.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menentukan tingkat toleransi risiko terhadap appetite risiko, yaitu
                                penyimpangan sementara yang masih dapat diterima dari batas
                                risiko yang telah ditentukan.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menentukan sejauh mana strategi risiko TI selaras dengan strategi
                                risiko organisasi secara keseluruhan, serta memastikan bahwa
                                appetite risiko berada di bawah kapasitas risiko organisasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_4 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_4 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Secara proaktif mengevaluasi faktor risiko TI sebelum keputusan
                                strategis dibuat, serta memastikan bahwa pertimbangan risiko
                                menjadi bagian dari proses pengambilan keputusan strategis.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_5 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_5 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengevaluasi aktivitas manajemen risiko untuk memastikan
                                kesesuaian dengan kapasitas organisasi dalam menangani
                                kerugian TI dan toleransi risiko dari pihak manajemen.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_6"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_6 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_6 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Merekrut dan mempertahankan keterampilan serta personel yang
                                diperlukan untuk manajemen risiko TI.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_7"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_7 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->pertanyaan_7 == 'Tidak' ? 'selected' : '' }}>
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
                {{ $auditee->evaluasi_manajemen_risiko != null ? $auditee->evaluasi_manajemen_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
