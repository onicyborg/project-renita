<form action="{{ route('submit.section-6', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-6">
        <div class="card-header">
            <strong class="card-title">Section 6 (Identifikasi optimasi risiko teknologi informasi Bagian Kedua: Arahan
                Manajemen
                Risiko)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian kedua dari Optimasi Risiko Teknologi Informasi (TI) ini bertujuan untuk mengidentifikasi
                bagaimana
                organisasi
                mengarahkan dan mengintegrasikan pengelolaan risiko TI ke dalam praktik operasional. Kuisioner ini
                berfokus
                pada
                penilaian pendekatan strategis, termasuk komunikasi risiko, eskalasi, dan implementasi mekanisme
                pengelolaan
                risiko.

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
                            <td>Mengarahkan penerjemahan dan integrasi strategi risiko TI ke
                                dalam praktik manajemen risiko dan kegiatan operasional.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengarahkan pengembangan rencana komunikasi risiko yang
                                mencakup seluruh level organisasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengarahkan implementasi mekanisme yang tepat untuk
                                merespons perubahan risiko dengan cepat dan melaporkannya
                                secara langsung ke tingkat manajemen yang sesuai, didukung oleh
                                prinsip-prinsip eskalasi yang telah disepakati (apa yang harus
                                dilaporkan, kapan, di mana, dan bagaimana).</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengarahkan agar risiko, peluang, masalah, dan kekhawatiran
                                dapat diidentifikasi dan dilaporkan oleh siapa saja kepada pihak
                                yang sesuai kapan saja. Risiko harus dikelola sesuai dengan
                                kebijakan dan prosedur yang telah dipublikasikan, serta
                                diekskalasi kepada pengambil keputusan yang relevan.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_4 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_4 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengidentifikasi tujuan utama dan metrik dari proses tata kelola
                                dan manajemen risiko yang perlu dipantau, serta menyetujui
                                pendekatan, metode, teknik, dan proses untuk mengumpulkan dan
                                melaporkan informasi pengukuran.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_5 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->pertanyaan_5 == 'Tidak' ? 'selected' : '' }}>
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
                {{ $auditee->arahan_manajemen_risiko != null ? $auditee->arahan_manajemen_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
