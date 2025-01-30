<form action="{{ route('submit.section-1', ['id' => $form->id, 'token' => $token]) }}" method="post">
    @csrf
    <div class="card shadow mb-4" id="section-1">
        <div class="card-header">
            <strong class="card-title">Section 1 (Identifikasi Strategi Risiko Teknologi Informasi Organisasi)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Kuisioner ini bertujuan untuk mengidentifikasi strategi teknologi informasi
                (TI) yang digunakan oleh organisasi.
                Kuisioner ini berfokus pada penilaian tingkat kepentingan berbagai strategi
                TI dalam organisasi Anda,
                berdasarkan kondisi dan prioritas saat ini.<br>
                Untuk setiap pernyataan yang diberikan, harap pilih angka pada skala 1
                hingga 5 untuk menunjukkan tingkat
                kepentingannya menurut pandangan Anda.
            </p>
            <p>
                <strong>Skala kepentingan:</strong><br>
                1 = Sangat tidak penting<br>
                2 = Tidak penting<br>
                3 = Penting<br>
                4 = Cukup penting<br>
                5 = Sangat penting
            </p>

            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Pola Dasar Strategi</th>
                            <th>Penjelasan</th>
                            <th>Tingkat Kepentingan (1-5)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Growth/Acquisition</td>
                            <td>Seberapa penting bagi organisasi, berfokus pada pertumbuhan
                                dan peningkatan pendapatan dalam jangka panjang?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_1 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_1 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_1 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_1 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_1 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Innovation/Differentiation</td>
                            <td>Seberapa penting inovasi dan diferensiasi untuk menciptakan
                                nilai tambah dan keunggulan kompetitif?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_2 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_2 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_2 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_2 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_2 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Cost Leadership</td>
                            <td>Seberapa penting pengelolaan biaya untuk memastikan
                                efisiensi operasional dan daya saing?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_3 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_3 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_3 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_3 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_3 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Client Service/Stability</td>
                            <td>Seberapa penting memastikan stabilitas layanan dan orientasi
                                pada kebutuhan klien?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_4 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_4 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_4 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_4 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->strategi_organisasi != null && $auditee->strategi_organisasi->pertanyaan_4 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> <!-- /. card-body -->
        <div class="card-footer d-flex justify-content-between align-items-center">
            <small class="text-muted">Terakhir diperbarui:
                {{ $auditee->strategi_organisasi != null ? $auditee->strategi_organisasi->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->

</form>
