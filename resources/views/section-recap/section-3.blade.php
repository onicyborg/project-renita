<h3 class="mt-3 text-center">Section 3 (Identifikasi Profil Risiko Teknologi Informasi)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Kuisioner ini bertujuan untuk mengidentifikasi profil risiko teknologi informasi (TI) dalam organisasi.
    Kuisioner ini berfokus pada penilaian tingkat dampak dan kemungkinan terjadi dari berbagai pernyataan terkait
    risiko TI yang dihadapi organisasi, berdasarkan kondisi dan prioritas saat ini. <br>
    Pengisian pada kolom tingkat dampak dan kemungkinan terjadi menggunakan skala 1 s.d 5
    dengan keterangan sebagai berikut:
</p>

<!-- Skala Dampak -->
<p>
    <strong>Skala Tingkat Dampak:</strong><br>
    1 = Sangat tidak penting<br>
    2 = Tidak penting<br>
    3 = Penting<br>
    4 = Cukup penting<br>
    5 = Sangat penting
</p>

<!-- Skala Kemungkinan Terjadi -->
<p>
    <strong>Skala Kemungkinan Terjadi:</strong><br>
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
                    <th rowspan="2" class="align-middle"></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
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


<div class="text-end mb-3">
    <small id="lastUpdated-section-3" class="text-muted"></small>
</div>

<!-- Tabel -->
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
                    TI, definisi dan portofolio <span class="badge" id="risk-badge-1">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Kegagalan atau penundaan manajemen siklus
                    hidup program dan proyek <span class="badge" id="risk-badge-2">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ketidakefisienan biaya dan pengawasan TI <span class="badge" id="risk-badge-3">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Kurangnya keahlian, keterampilan, dan
                    perilaku TI <span class="badge" id="risk-badge-4">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_4"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_4"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ketidaksesuaian atau arsitektur perusahaan/TI <span class="badge" id="risk-badge-5">N/A</span>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_5"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_5"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Insiden infrastruktur operasional TI yang
                    menyebabkan gangguan atau downtime <span class="badge" id="risk-badge-6">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_6"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_6"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Tindakan yang tidak sesuai dengan kebijakan
                    atau prosedur TI terjadi dalam organisasi <span class="badge" id="risk-badge-7">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_7"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_7"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Masalah adopsi atau penggunaan perangkat
                    lunak <span class="badge" id="risk-badge-8">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_8"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_8"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Insiden terkait perangkat keras terhadap
                    kelangsungan operasional TI <span class="badge" id="risk-badge-9">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_9"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_9"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Kegagalan perangkat lunak terhadap operasi
                    bisnis dan kepuasan pengguna <span class="badge" id="risk-badge-10">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_10"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_10"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>11</td>
                <td>Serangan logis (peretasan, malware, dll.)
                    terhadap keamanan data dan reputasi
                    organisasi <span class="badge" id="risk-badge-11">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_11"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_11"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>12</td>
                <td>Insiden yang melibatkan pemasok atau pihak
                    ketiga terhadap kelancaran operasional dan
                    kepatuhan TI organisasi <span class="badge" id="risk-badge-12">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_12"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_12"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>13</td>
                <td>Ketidakpatuhan terhadap regulasi atau
                    kebijakan TI yang berlaku <span class="badge" id="risk-badge-13">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_13"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_13"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>14</td>
                <td>Isu geopolitik terhadap kestabilan operasional
                    dan strategi TI organisasi <span class="badge" id="risk-badge-14">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_14"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_14"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>15</td>
                <td>Faktor industri mempengaruhi keputusan atau
                    kebijakan TI dalam organisasi <span class="badge" id="risk-badge-15">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_15"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_15"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>16</td>
                <td>Faktor alam (misalnya, bencana alam, cuaca
                    ekstrem) terhadap infrastruktur dan operasi TI
                    organisasi <span class="badge" id="risk-badge-16">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_16"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_16"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>17</td>
                <td>Inovasi berbasis teknologi terhadap
                    kemampuan organisasi untuk berkompetisi
                    dan berkembang <span class="badge" id="risk-badge-17">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_17"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_17"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>18</td>
                <td>Isu lingkungan mempengaruhi keputusan atau kebijakan terkait TI di organisasi <span class="badge"
                        id="risk-badge-18">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_18"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_18"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>19</td>
                <td>Kegagalan dalam manajemen data dan informasi yang memengaruhi operasional atau kepatuhan <span
                        class="badge" id="risk-badge-19">N/A</span></td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="dampak_19"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="terjadi_19"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #FF6384;">1</span>
                        <span class="badge" style="background-color: #36A2EB;">2</span>
                        <span class="badge" style="background-color: #FFCE56;">3</span>
                        <span class="badge" style="background-color: #4BC0C0;">4</span>
                        <span class="badge" style="background-color: #9966FF;">5</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <h4 class="mt-4 text-center">Kritik dan Saran Section 3</h4>
    <div id="kritikSaranCarousel-section-3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="kritikSaranContent-section-3">
            <div class="carousel-item active">
            </div>
        </div>
        <a class="carousel-control-prev" href="#kritikSaranCarousel-section-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#kritikSaranCarousel-section-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@push('scripts')
    <script>
        function calculateRiskLevel(dampakData, terjadiData) {
            // Hitung rata-rata dampak
            let totalNilaiDampak = 0;
            let totalRespondenDampak = 0;

            dampakData.forEach((jumlahResponden, index) => {
                const nilai = index + 1; // nilai 1-5
                totalNilaiDampak += jumlahResponden * nilai;
                totalRespondenDampak += jumlahResponden;
            });

            const dampakAvg = totalRespondenDampak > 0 ? totalNilaiDampak / totalRespondenDampak : 0;

            // Hitung rata-rata terjadi
            let totalNilaiTerjadi = 0;
            let totalRespondenTerjadi = 0;

            terjadiData.forEach((jumlahResponden, index) => {
                const nilai = index + 1; // nilai 1-5
                totalNilaiTerjadi += jumlahResponden * nilai;
                totalRespondenTerjadi += jumlahResponden;
            });

            const terjadiAvg = totalRespondenTerjadi > 0 ? totalNilaiTerjadi / totalRespondenTerjadi : 0;

            // Hitung total score
            const score = dampakAvg * terjadiAvg;

            console.log(`Dampak: (${totalNilaiDampak})/${totalRespondenDampak} = ${dampakAvg}`);
            console.log(`Terjadi: (${totalNilaiTerjadi})/${totalRespondenTerjadi} = ${terjadiAvg}`);
            console.log(`Score: ${dampakAvg} * ${terjadiAvg} = ${score}`);

            // Tentukan risk level
            if (score >= 13) {
                return {
                    level: 'Very High',
                    class: 'badge-danger'
                };
            } else if (score >= 9) {
                return {
                    level: 'High',
                    class: 'badge-warning'
                };
            } else if (score > 4) {
                return {
                    level: 'Normal',
                    class: 'badge-info'
                };
            } else {
                return {
                    level: 'Low',
                    class: 'badge-success'
                };
            }
        }

        // Store all chart instances
        const charts = {
            dampak: {},
            terjadi: {}
        };

        // Helper function to create chart
        function createChart(canvasId, data) {
            const ctx = document.getElementById(canvasId).getContext("2d");
            return new Chart(ctx, {
                type: "pie",
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        }

        // Update chart data helper
        function updateChartData(chart, newData) {
            chart.data.datasets[0].data = newData;
            chart.update();
        }

        // Fetch and update data
        async function fetchData_section_3(formId) {
            try {
                const response = await fetch(`/data-section-3/${formId}`);
                const data = await response.json();

                if (data) {
                    // Update all charts
                    for (let i = 1; i <= 19; i++) {
                        const dampakData = [
                            parseInt(data[`pertanyaan_${i}_dampak_jawaban_1`]) || 0,
                            parseInt(data[`pertanyaan_${i}_dampak_jawaban_2`]) || 0,
                            parseInt(data[`pertanyaan_${i}_dampak_jawaban_3`]) || 0,
                            parseInt(data[`pertanyaan_${i}_dampak_jawaban_4`]) || 0,
                            parseInt(data[`pertanyaan_${i}_dampak_jawaban_5`]) || 0
                        ];

                        const terjadiData = [
                            parseInt(data[`pertanyaan_${i}_terjadi_jawaban_1`]) || 0,
                            parseInt(data[`pertanyaan_${i}_terjadi_jawaban_2`]) || 0,
                            parseInt(data[`pertanyaan_${i}_terjadi_jawaban_3`]) || 0,
                            parseInt(data[`pertanyaan_${i}_terjadi_jawaban_4`]) || 0,
                            parseInt(data[`pertanyaan_${i}_terjadi_jawaban_5`]) || 0
                        ];

                        // Update charts
                        updateChartData(charts.dampak[i], dampakData);
                        updateChartData(charts.terjadi[i], terjadiData);

                        // Calculate and update risk level badge
                        const riskLevel = calculateRiskLevel(dampakData, terjadiData);
                        const badge = document.querySelector(`#risk-badge-${i}`);
                        if (badge) {
                            badge.className = `badge ${riskLevel.class}`;
                            badge.textContent = riskLevel.level;
                        }
                    }

                    // Update metadata
                    const totalResponses = data.total_responses ?? 0;
                    const totalAuditee = data.total_auditee ?? 0;
                    const lastUpdated = data.last_updated_at ?
                        `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                        'Belum ada data';

                    document.getElementById('lastUpdated-section-3').textContent =
                        `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                }
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }

        // Initialize charts
        document.addEventListener('DOMContentLoaded', function() {
            // Create all charts
            for (let i = 1; i <= 19; i++) {
                charts.dampak[i] = createChart(`dampak_${i}`, {
                    ...dataTemplate
                });
                charts.terjadi[i] = createChart(`terjadi_${i}`, {
                    ...dataTemplate
                });
            }

            // Fetch initial data
            fetchData_section_3('{{ $form->id }}');
        });

        // Handle kritik & saran
        $(document).ready(function() {
            $.ajax({
                url: `/kritik-saran-section-3/{{ $form->id }}`,
                method: "GET",
                success: function(data) {
                    let container = $("#kritikSaranContent-section-3");
                    container.empty();

                    if (data.kritik_saran === "Tidak ada kritik dan saran") {
                        container.append(`
                        <div class="carousel-item active">
                            <div class="card shadow-sm p-3">
                                <p class="text-dark text-center">Tidak ada kritik dan saran tersedia</p>
                            </div>
                        </div>
                    `);
                        return;
                    }

                    data.forEach((item, index) => {
                        container.append(`
                        <div class="carousel-item ${index === 0 ? 'active' : ''}">
                            <div class="card shadow-sm p-4">
                                <p class="text-primary font-weight-bold text-center"
                                   style="font-size: 1.2rem;">"${item.kritik_saran}"</p>
                            </div>
                        </div>
                    `);
                    });

                    $('#kritikSaranCarousel-section-3').carousel();
                },
                error: function() {
                    console.error("Error mengambil data");
                }
            });
        });
    </script>
@endpush
