<form action="{{ route('submit.section-8', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-8">
        <div class="card-header">
            <strong class="card-title">Section 8 (Identifikasi pengelolaan risiko teknologi informasi Bagian Pertama:
                Pengumpulan
                Data Risiko TI)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Bagian pertama dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi
                bagaimana
                organisasi mengumpulkan data terkait risiko TI. Kuisioner ini berfokus pada identifikasi sumber data,
                keakuratan,
                dan kelengkapan data yang digunakan dalam manajemen risiko.
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
                            <td>Menyusun dan memelihara metode untuk mengumpulkan,
                                mengklasifikasikan, dan menganalisis data yang terkait dengan
                                risiko Teknologi Informasi (TI).</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_1 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_1 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mencatat data risiko TI yang relevan dan signifikan berdasarkan
                                lingkungan operasional internal dan eksternal organisasi.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_2 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_2 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengadopsi atau mendefinisikan taksonomi risiko untuk
                                memastikan konsistensi dalam mendefinisikan skenario risiko
                                serta kategori dampak dan kemungkinan.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_3 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_3 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mencatat data tentang kejadian risiko yang telah atau mungkin
                                menyebabkan dampak bisnis, sesuai dengan kategori dampak
                                yang telah didefinisikan dalam taksonomi risiko. Mengumpulkan
                                data relevan dari masalah, insiden, dan investigasi terkait.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_4 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_4 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menganalisis data historis risiko TI dan pengalaman kerugian dari
                                sumber eksternal seperti tren industri, log peristiwa, database, dan
                                kesepakatan bersama.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_5 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_5 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mengorganisasi data yang dikumpulkan untuk kejadian serupa
                                dan menyoroti faktor penyebab utama. Menentukan faktor umum
                                yang memengaruhi berbagai kejadian.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_6"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_6 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_6 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Menentukan kondisi tertentu yang ada atau tidak ada saat kejadian
                                risiko terjadi dan bagaimana kondisi tersebut memengaruhi
                                frekuensi kejadian serta besarnya kerugian.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_7"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_7 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_7 == 'Tidak' ? 'selected' : '' }}>
                                        Tidak</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Melakukan analisis berkala terhadap kejadian dan faktor risiko
                                untuk mengidentifikasi masalah risiko baru dan memahami faktor
                                risiko internal serta eksternal terkait.</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_8"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih -</option>
                                    <option value="Ya"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_8 == 'Ya' ? 'selected' : '' }}>
                                        Ya</option>
                                    <option value="Tidak"
                                        {{ $auditee->pengumpulan_manajemen_risiko != null && $auditee->pengumpulan_manajemen_risiko->pertanyaan_8 == 'Tidak' ? 'selected' : '' }}>
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
                {{ $auditee->pengumpulan_manajemen_risiko != null ? $auditee->pengumpulan_manajemen_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
