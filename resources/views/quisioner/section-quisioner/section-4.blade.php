<form action="{{ route('submit.section-4', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-4">
        <div class="card-header">
            <strong class="card-title">Section 4 (Identifikasi isu terkait risiko teknologi informasi
                organisasi)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Kuisioner ini bertujuan untuk mengidentifikasi isu terkait risiko teknologi informasi (TI)
                yang dihadapi oleh organisasi Anda. Kuisioner ini berfokus pada penilaian tingkat
                kepentingan dari berbagai isu yang berkaitan dengan risiko TI, berdasarkan kondisi dan
                prioritas saat ini. Penilaian Anda akan membantu dalam mengidentifikasi area yang perlu
                mendapat perhatian lebih dalam pengelolaan risiko TI di organisasi.<br>
                Pengisian pada kolom tingkat kepentingan menggunakan skala 1 s.d 5 dengan keterangan
                sebagai berikut:
            </p>
            <p>
                <strong>Skala tingkat kepentingan : </strong><br>
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
                            <th>Acuan</th>
                            <th>Deskripsi</th>
                            <th>Tingkat Kepentingan (1-5)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A</td>
                            <td>Kegagalan antara entitas TI yang berbeda di seluruh organisasi
                                karena persepsi kontribusi yang rendah terhadap nilai bisnis</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_1 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_1 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_1 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_1 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_1 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>Kegagalan antara departemen bisnis (yaitu, pelanggan TI) dan
                                departemen TI karena gagalnya inisiatif atau persepsi kontribusi
                                yang rendah terhadap nilai bisnis</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_2 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_2 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_2 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_2 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_2 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>Insiden berkaitan dengan TI yang signifikan, seperti kehilangan
                                data, pelanggaran keamanan, kegagalan proyek, kesalahan
                                aplikasi, yang terkait dengan TI</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_3 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_3 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_3 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_3 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_3 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td>Permasalahan terkait pengiriman layanan oleh pihak outsourcing
                                TI</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_4 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_4 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_4 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_4 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_4 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>E</td>
                            <td>Kegagalan dalam pemenuhan persyaratan peraturan atau kontrak
                                terkait TI</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_5 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_5 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_5 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_5 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_5 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>F</td>
                            <td>Temuan audit rutin atau laporan penilaian lainnya terkait kinerja
                                TI yang buruk atau masalah kualitas TI atau layanan TI yang
                                dilaporkan</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_6"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_6 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_6 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_6 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_6 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_6 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>G</td>
                            <td>Pengeluaran TI yang signifikan dan dilakukan secara
                                tersembunyi, yaitu pengeluaran TI oleh departemen pengguna di
                                luar kontrol mekanisme pengambilan keputusan investasi TI yang
                                normal dan anggaran yang disetujui</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_7"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_7 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_7 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_7 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_7 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_7 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>H</td>
                            <td>Penggandaan atau tumpang tindih antara berbagai inisiatif, atau
                                bentuk lain pemborosan sumber daya</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_8"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_8 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_8 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_8 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_8 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_8 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>Sumber daya TI yang tidak mencukupi, staf dengan keterampilan
                                yang tidak memadai, atau staf yang mengalami kelelahan atau
                                ketidakpuasan</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_9"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_9 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_9 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_9 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_9 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_9 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>J</td>
                            <td>Perubahan atau proyek yang didukung oleh TI sering gagal
                                memenuhi kebutuhan bisnis dan seringkali terlambat atau
                                melebihi anggaran</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_10"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_10 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_10 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_10 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_10 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_10 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>K</td>
                            <td>Keraguan oleh anggota dewan, eksekutif, atau manajemen senior
                                untuk terlibat dengan TI, atau kurangnya sponsor bisnis yang
                                komitmen terhadap TI</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_11"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_11 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_11 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_11 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_11 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_11 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>Model operasional TI yang kompleks dan/atau mekanisme
                                pengambilan keputusan yang tidak jelas untuk Keputusan yang
                                berkaitan dengan TI</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_12"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_12 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_12 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_12 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_12 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_12 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>Biaya TI yang terlalu tinggi</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_13"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_13 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_13 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_13 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_13 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_13 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>N</td>
                            <td>Implementasi inisiatif atau inovasi baru yang gagal atau gagal
                                yang disebabkan oleh arsitektur dan sistem TI saat ini
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_14"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_14 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_14 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_14 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_14 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_14 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>O</td>
                            <td>Kesenjangan antara pengetahuan bisnis dan teknis yang
                                mengarah pada pengguna bisnis dan spesialis TI atau teknologi
                                yang digunakan</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_15"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_15 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_15 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_15 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_15 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_15 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>P</td>
                            <td>Permasalahan yang berkaitan dengan data dan integrasi data di
                                berbagai sumber</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_16"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_16 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_16 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_16 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_16 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_16 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Q</td>
                            <td>Level komputasi end-user yang tinggi, menciptakan masalah
                                yaitu kurangnya pengawasan dan kontrol kualitas atas aplikasi
                                yang sedang dikembangkan dan dioperasikan</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_17"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_17 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_17 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_17 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_17 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_17 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>R</td>
                            <td>Departemen bisnis yang menerapkan solusi informasi mereka
                                sendiri dengan sedikit atau tanpa keterlibatan departemen IT
                                perusahaan (terkait dengan komputasi pengguna akhir, yang
                                sering kali berasal dari ketidakpuasan terhadap solusi dan layanan
                                IT)</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_18"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_18 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_18 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_18 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_18 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_18 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>Ketidaktahuan atau ketidakpatuhan terhadap peraturan keamanan
                                dan privasi</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_19"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_19 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_19 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_19 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_19 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_19 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>T</td>
                            <td>Ketidakmampuan untuk mengeksploitasi teknologi baru atau
                                berinovasi menggunakan I&T</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_20"
                                    required>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_20 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_20 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_20 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_20 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->issue_risiko != null && $auditee->issue_risiko->pertanyaan_20 == '5' ? 'selected' : '' }}>
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
                {{ $auditee->issue_risiko != null ? $auditee->issue_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div> <!-- /. card -->
</form>
