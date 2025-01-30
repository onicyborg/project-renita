<form action="{{ route('submit.section-13', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-13">
        <div class="card-header">
            <strong class="card-title">Section 13 (Identifikasi pengelolaan risiko teknologi informasi Bagian Keenam:
                Menanggapi
                Risiko TI)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian keenam dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi
                bagaimana
                organisasi
                menanggapi risiko TI yang telah diidentifikasi. Kuisioner ini berfokus pada langkah-langkah yang diambil
                untuk
                mengurangi, mentransfer, atau menerima risiko.
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
                            <td>Menyiapkan, memelihara, dan menguji rencana yang mendokumentasikan langkah spesifik saat
                                kejadian risiko menyebabkan insiden dengan dampak bisnis serius. Memastikan rencana
                                mencakup
                                jalur eskalasi di seluruh organisasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menerapkan rencana respons yang sesuai untuk meminimalkan dampak ketika insiden risiko
                                terjadi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengkategorikan insiden dan membandingkan potensi kerugian terkait TI dengan batas
                                toleransi
                                risiko. Serta, mengomunikasikan dampak bisnis kepada pengambil keputusan dan memperbarui
                                profil risiko.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Memeriksa kejadian buruk/kerugian atau peluang yang terlewat di masa lalu untuk
                                menentukan
                                penyebab utama.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_4 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_4 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengomunikasikan penyebab utama, kebutuhan tanggapan risiko tambahan, dan perbaikan
                                proses
                                kepada
                                pengambil keputusan yang relevan, serta memastikan informasi ini dimasukkan dalam proses
                                tata kelola
                                risiko.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_5 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->menanggapi_risiko != null && $auditee->menanggapi_risiko->pertanyaan_5 == 'Tidak' ? 'selected' : '' }}>
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
                {{ $auditee->menanggapi_risiko != null ? $auditee->menanggapi_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
