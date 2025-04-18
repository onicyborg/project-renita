<form action="{{ route('submit.section-3', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-3">
        <div class="card-header">
            <strong class="card-title">Section 3 (Identifikasi profil risiko teknologi informasi)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Kuisioner ini bertujuan untuk mengidentifikasi profil risiko teknologi informasi (TI) dalam organisasi.
                Kuisioner
                ini berfokus pada penilaian tingkat dampak dan kemungkinan terjadi dari berbagai pernyataan terkait
                risiko
                TI yang
                dihadapi organisasi, berdasarkan kondisi dan prioritas saat ini. <br>
                Pengisian pada kolom tingkat dampak dan kemungkinan terjadi menggunakan skala 1 s.d 5
                dengan keterangan sebagai berikut:
            </p>
            <p>
                <strong>Skala tingkat dampak : </strong><br>
                1 = Sangat tidak penting<br>
                2 = Tidak penting<br>
                3 = Penting<br>
                4 = Cukup penting<br>
                5 = Sangat penting
            </p>
            <p>
                <strong>Skala kemungkinan terjadi : </strong><br>
                1 = Sangat jarang terjadi<br>
                2 = Jarang terjadi<br>
                3 = Cukup<br>
                4 = Sering terjadi<br>
                5 = Sangat sering terjadi
            </p>

            <!-- Matriks Risiko COBIT -->
            <div class="mt-4">
                <h5 class="text-center">Matriks Risiko COBIT</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table">
                            <tr>
                                <td rowspan="2" class="align-middle"></th>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td><span class="badge badge-success">L</span></td>
                                <td><span class="badge badge-success">L</span></td>
                                <td><span class="badge badge-success">L</span></td>
                                <td><span class="badge badge-success">L</span></td>
                                <td><span class="badge badge-info">N</span></td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td><span class="badge badge-success">L</span></td>
                                <td><span class="badge badge-success">L</span></td>
                                <td><span class="badge badge-info">N</span></td>
                                <td><span class="badge badge-warning">H</span></td>
                                <td><span class="badge badge-warning">H</span></td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td><span class="badge badge-success">L</span></td>
                                <td><span class="badge badge-info">N</span></td>
                                <td><span class="badge badge-warning">H</span></td>
                                <td><span class="badge badge-warning">H</span></td>
                                <td><span class="badge badge-danger">VH</span></td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td><span class="badge badge-success">L</span></td>
                                <td><span class="badge badge-info">N</span></td>
                                <td><span class="badge badge-warning">H</span></td>
                                <td><span class="badge badge-danger">VH</span></td>
                                <td><span class="badge badge-danger">VH</span></td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td><span class="badge badge-info">N</span></td>
                                <td><span class="badge badge-warning">H</span></td>
                                <td><span class="badge badge-danger">VH</span></td>
                                <td><span class="badge badge-danger">VH</span></td>
                                <td><span class="badge badge-danger">VH</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="mt-3"><strong>Keterangan Kategori Risiko:</strong></p>
                <ul>
                    <li><strong>Low</strong>: x ≤ 4</li>
                    <li><strong>Normal</strong>: 5 ≤ x ≤ 8</li>
                    <li><strong>High</strong>: 9 ≤ x ≤ 12</li>
                    <li><strong>Very High</strong>: 15 ≤ x ≤ 25</li>
                </ul>
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Acuan</th>
                            <th>Kategori Risiko</th>
                            <th>Tingkat Dampak (1-5)</th>
                            <th>Kemungkinan Terjadi (1-5)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kegagalan pengambilan keputusan investasi
                                TI, definisi dan portofolio <span id="risk-badge-1">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1_dampak"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1_terjadi"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_1_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kegagalan atau penundaan manajemen siklus
                                hidup program dan proyek <span id="risk-badge-2">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2_dampak"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2_terjadi"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_2_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ketidakefisienan biaya dan pengawasan TI <span id="risk-badge-3">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3_dampak"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3_terjadi"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_3_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Kurangnya keahlian, keterampilan, dan
                                perilaku TI <span id="risk-badge-4">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_4_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_4_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_4_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ketidaksesuaian atau arsitektur perusahaan/TI <span id="risk-badge-5">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_5_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_5_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_5_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Insiden infrastruktur operasional TI yang
                                menyebabkan gangguan atau downtime <span id="risk-badge-6">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_6_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_6_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_6_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Tindakan yang tidak sesuai dengan kebijakan
                                atau prosedur TI terjadi dalam organisasi <span id="risk-badge-7">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_7_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_7_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_7_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Masalah adopsi atau penggunaan perangkat
                                lunak <span id="risk-badge-8">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_8_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_8_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_8_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Insiden terkait perangkat keras terhadap
                                kelangsungan operasional TI <span id="risk-badge-9">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_9_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_9_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_9_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Kegagalan perangkat lunak terhadap operasi
                                bisnis dan kepuasan pengguna <span id="risk-badge-10">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_10_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_10_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_10_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Serangan logis (peretasan, malware, dll.)
                                terhadap keamanan data dan reputasi
                                organisasi <span id="risk-badge-11">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_11_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_11_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_11_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Insiden yang melibatkan pemasok atau pihak
                                ketiga terhadap kelancaran operasional dan
                                kepatuhan TI organisasi <span id="risk-badge-12">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_12_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_12_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_12_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Ketidakpatuhan terhadap regulasi atau
                                kebijakan TI yang berlaku <span id="risk-badge-13">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_13_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_13_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_13_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Isu geopolitik terhadap kestabilan operasional
                                dan strategi TI organisasi <span id="risk-badge-14">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_14_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_14_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_14_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Faktor industri mempengaruhi keputusan atau
                                kebijakan TI dalam organisasi <span id="risk-badge-15">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_15_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_15_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_15_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Faktor alam (misalnya, bencana alam, cuaca
                                ekstrem) terhadap infrastruktur dan operasi TI
                                organisasi <span id="risk-badge-16">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_16_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_16_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_16_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Inovasi berbasis teknologi terhadap
                                kemampuan organisasi untuk berkompetisi
                                dan berkembang <span id="risk-badge-17">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_17_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_17_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_17_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Isu lingkungan mempengaruhi keputusan atau kebijakan terkait TI di organisasi
                                <span id="risk-badge-18">N/A</span></td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_18_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_18_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_18_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Kegagalan dalam manajemen data dan informasi yang memengaruhi operasional atau kepatuhan
                                <span id="risk-badge-19">N/A</span>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_19_dampak" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Dampak -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_dampak == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_dampak == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_dampak == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_dampak == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_dampak == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select"
                                    name="pertanyaan_19_terjadi" required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala Terjadi -</option>
                                    <option value="1"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_terjadi == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_terjadi == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_terjadi == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_terjadi == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->profile_resiko != null && $auditee->profile_resiko->pertanyaan_19_terjadi == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group mt-4">
                    <label for="kritik_saran"><strong>Kritik dan Saran</strong></label>
                    <textarea class="form-control" id="kritik_saran" name="kritik_saran" rows="4"
                        {{ $status == 'view' ? 'readonly' : '' }}>{{ $auditee->profile_resiko != null && $auditee->profile_resiko->kritik_saran != null ? $auditee->profile_resiko->kritik_saran : '' }}</textarea>
                </div>
            </div>
        </div> <!-- /. card-body -->
        <div class="card-footer d-flex justify-content-between align-items-center">
            <small class="text-muted">Terakhir diperbarui:
                {{ $auditee->profile_resiko != null ? $auditee->profile_resiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>

@push('scripts')
    <script>
        // Fungsi untuk menghitung dan mengembalikan badge berdasarkan nilai dampak dan terjadi
        function calculateRiskBadge(dampak, terjadi) {
            const score = dampak * terjadi;

            if (score >= 13) {
                return `<span class="badge badge-danger">Very High</span>`;
            } else if (score >= 9) {
                return `<span class="badge badge-warning">High</span>`;
            } else if (score > 4) {
                return `<span class="badge badge-info">Normal</span>`;
            } else if (score > 0) {
                return `<span class="badge badge-success">Low</span>`;
            }
            return `<span class="badge badge-secondary">N/A</span>`;
        }

        // Event listener untuk perubahan nilai
        document.addEventListener('DOMContentLoaded', function() {
            // Loop through all questions (1-19)
            for (let i = 1; i <= 19; i++) {
                const dampakSelect = document.querySelector(`select[name="pertanyaan_${i}_dampak"]`);
                const terjadiSelect = document.querySelector(`select[name="pertanyaan_${i}_terjadi"]`);
                const badgeContainer = document.querySelector(`#risk-badge-${i}`);

                if (dampakSelect && terjadiSelect) {
                    // Function to update badge
                    function updateBadge() {
                        const dampakValue = parseInt(dampakSelect.value) || 0;
                        const terjadiValue = parseInt(terjadiSelect.value) || 0;

                        // Find and replace the existing badge
                        const existingBadge = badgeContainer.querySelector('.badge');
                        if (existingBadge) {
                            existingBadge.outerHTML = calculateRiskBadge(dampakValue, terjadiValue);
                        } else {
                            // If no badge exists, append new one
                            badgeContainer.innerHTML += ' ' + calculateRiskBadge(dampakValue, terjadiValue);
                        }
                    }

                    // Add event listeners for both selects
                    dampakSelect.addEventListener('change', updateBadge);
                    terjadiSelect.addEventListener('change', updateBadge);

                    // Initial calculation
                    updateBadge();
                }
            }
        });
    </script>
@endpush
