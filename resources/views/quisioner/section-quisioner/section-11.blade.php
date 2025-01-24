<form action="{{ route('submit.section-11', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-11">
        <div class="card-header">
            <strong class="card-title">Section 11 (Identifikasi pengelolaan risiko teknologi informasi Bagian Keempat:
                Mengartikulasikan Risiko TI)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian keempat dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi
                bagaimana
                organisasi mengomunikasikan risiko TI kepada pemangku kepentingan. Kuisioner ini berfokus pada cara
                organisasi
                menyampaikan informasi risiko, termasuk tingkat risiko dan dampaknya.
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
                            <td>Melaporkan hasil analisis risiko kepada semua pemangku kepentingan yang terdampak dalam
                                format yang mendukung pengambilan keputusan, termasuk probabilitas dan rentang
                                kerugian/keuntungan serta tingkat kepercayaan.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Memberikan pemahaman kepada pengambil keputusan tentang skenario terburuk, skenario
                                paling
                                mungkin, potensi kerugian TI, serta dampak pada reputasi, hukum, dan regulasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Melaporkan profil risiko saat ini kepada semua pemangku kepentingan, termasuk
                                efektivitas
                                proses manajemen risiko, kontrol, kesenjangan, dan status perbaikan.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Secara berkala mengidentifikasi peluang terkait TI yang memungkinkan penerimaan risiko
                                lebih
                                besar untuk mendukung pertumbuhan dan keuntungan.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_4 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_4 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Meninjau hasil penilaian pihak ketiga independen, audit internal, dan tinjauan kualitas.
                                Memasukkan hasil ini ke dalam profil risiko untuk menentukan kebutuhan analisis
                                tambahan.
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_5 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->mengartikulasikan_risiko != null && $auditee->mengartikulasikan_risiko->pertanyaan_5 == 'Tidak' ? 'selected' : '' }}>
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
                {{ $auditee->mengartikulasikan_risiko != null ? $auditee->mengartikulasikan_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div> <!-- /. card -->
</form>
