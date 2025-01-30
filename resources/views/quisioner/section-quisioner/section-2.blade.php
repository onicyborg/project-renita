<form action="{{ route('submit.section-2', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-2">
        <div class="card-header">
            <strong class="card-title">Section 2 (Identifikasi tujuan risiko teknologi informasi organisasi)</strong>
        </div>
        <div class="card-body">
            <p class="mt-3">
                Kuisioner ini bertujuan untuk mengidentifikasi tujuan teknologi informasi
                (TI) yang diterapkan dalam organisasi. Kuisioner ini berfokus pada penilaian
                tingkat kepentingan berbagai tujuan TI yang dianggap relevan dengan kondisi
                organisasi saat ini.<br>
                Untuk setiap pernyataan yang diberikan, harap pilih angka pada skala 1
                hingga 5 untuk menunjukkan tingkat kepentingannya menurut pandangan Anda.
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
                            <th>Acuan</th>
                            <th>Tujuan Perusahaan</th>
                            <th>Tingkat Kepentingan (1-5)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EG01</td>
                            <td>Seberapa penting memastikan portofolio produk dan layanan tetap kompetitif di pasar?
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_1"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_1 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_1 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_1 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_1 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_1 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG02</td>
                            <td>Seberapa Penting pengelolaan risiko bisnis untuk memastikan stabilitas operasional?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_2"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_2 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_2 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_2 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_2 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_2 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG03</td>
                            <td>Seberapa penting kepatuhan terhadap hukum dan regulasi untuk menghindari dapak negatif?
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_3"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_3 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_3 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_3 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_3 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_3 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG04</td>
                            <td>Seberapa penting kualitas informasi keuangan untuk pengambilan keputusan strategis?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_4"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_4 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_4 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_4 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_4 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_4 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG05</td>
                            <td>Seberapa penting membangun budaya layanan yang fokus pada kebutuhan pelanggan?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_5"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_5 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_5 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_5 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_5 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_5 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG06</td>
                            <td>Seberapa penting memastikan layanan bisnis tersedia tanpa gangguan?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_6"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_6 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_6 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_6 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_6 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_6 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG07</td>
                            <td>Seberapa penting kualitas informasi manajemen dalam mendukung keputusan bisnis?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_7"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_7 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_7 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_7 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_7 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_7 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG08</td>
                            <td>Seberapa penting optimalisasi proses bisnis internal untuk mendukung efisiensi
                                operasional?
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_8"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_8 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_8 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_8 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_8 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_8 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG09</td>
                            <td>Seberapa penting optimalisasi biaya proses bisnis untuk mendukung efisiensi anggaran?
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_9"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_9 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_9 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_9 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_9 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_9 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG010</td>
                            <td>Seberapa penting keterampilan dan motivasi staff untuk meningkatkan produktivitas?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_10"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_10 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_10 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_10 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_10 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_10 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG11</td>
                            <td>Seberapa penting kepatuhan terhadap kebijakan internal dalam mendukung pertumbuhan
                                organisasi?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_11"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_11 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_11 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_11 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_11 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_11 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG12</td>
                            <td>Seberapa penting program transformasi digital untuk mendukung pertumbuhan organisasi?
                            </td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_12"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_12 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_12 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_12 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_12 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_12 == '5' ? 'selected' : '' }}>
                                        5</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>EG13</td>
                            <td>Seberapa penting inovasi produk dan bisnis dalam mendukung pencapaian tujuan jangka
                                panjang organisasi?</td>
                            <td>
                                <select class="custom-select text-center" id="custom-select" name="pertanyaan_13"
                                    required {{ $status == 'view' ? 'disabled' : '' }}>
                                    <option value="">- Pilih Skala -</option>
                                    <option value="1"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_13 == '1' ? 'selected' : '' }}>
                                        1</option>
                                    <option value="2"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_13 == '2' ? 'selected' : '' }}>
                                        2</option>
                                    <option value="3"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_13 == '3' ? 'selected' : '' }}>
                                        3</option>
                                    <option value="4"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_13 == '4' ? 'selected' : '' }}>
                                        4</option>
                                    <option value="5"
                                        {{ $auditee->tujuan_organisasi != null && $auditee->tujuan_organisasi->pertanyaan_13 == '5' ? 'selected' : '' }}>
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
                {{ $auditee->tujuan_organisasi != null ? $auditee->tujuan_organisasi->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
