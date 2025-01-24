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

            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Acuan</th>
                            <th>Tujuan Perusahaan</th>
                            <th>Tingkat Dampak (1-5)</th>
                            <th>Kemungkinan Terjadi (1-5)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kegagalan pengambilan keputusan investasi
                                TI, definisi dan portofolio</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1_dampak"
                                    required>
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
                                    required>
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
                                hidup program dan proyek</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_2_dampak"
                                        required>
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
                                        required>
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
                            <td>Ketidakefisienan biaya dan pengawasan TI</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3_dampak"
                                    required>
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
                                    required>
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
                                perilaku TI</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_4_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_4_terjadi"
                                        required>
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
                            <td>Ketidaksesuaian atau arsitektur perusahaan/TI</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5_dampak"
                                    required>
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
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5_terjadi"
                                    required>
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
                                menyebabkan gangguan atau downtime</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_6_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_6_terjadi"
                                        required>
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
                                atau prosedur TI terjadi dalam organisasi</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_7_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_7_terjadi"
                                        required>
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
                                lunak</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_8_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_8_terjadi"
                                        required>
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
                                kelangsungan operasional TI dan INI LANJUTANNYA APA ANJENK</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_9_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_9_terjadi"
                                        required>
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
                                bisnis dan kepuasan pengguna</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_10_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_10_terjadi"
                                        required>
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
                                organisasi</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_11_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_11_terjadi"
                                        required>
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
                                kepatuhan TI organisasi</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_12_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_12_terjadi"
                                        required>
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
                                kebijakan TI yang berlaku</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_13_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_13_terjadi"
                                        required>
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
                                dan strategi TI organisasi</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_14_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_14_terjadi"
                                        required>
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
                                kebijakan TI dalam organisasi</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_15_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_15_terjadi"
                                        required>
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
                                organisasi</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_16_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_16_terjadi"
                                        required>
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
                                dan berkembang</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_17_dampak"
                                        required>
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
                                    <select class="custom-select text-center" id="custom-select" name="pertanyaan_17_terjadi"
                                        required>
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
                            <td>Isu lingkungan mempengaruhi keputusan atau kebijakan terkait TI di organisasi</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_18_dampak"
                                    required>
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
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_18_terjadi"
                                    required>
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
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_19_dampak"
                                    required>
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
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_19_terjadi"
                                    required>
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
            </div>
        </div> <!-- /. card-body -->
        <div class="card-footer d-flex justify-content-between align-items-center">
            <small class="text-muted">Terakhir diperbarui: {{ $auditee->profile_resiko != null ? $auditee->profile_resiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div> <!-- /. card -->
</form>
