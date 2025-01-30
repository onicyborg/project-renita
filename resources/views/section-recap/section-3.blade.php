<h3 class="mt-3 text-center">Section 3 (Identifikasi profil risiko teknologi informasi)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Kuisioner ini bertujuan untuk mengidentifikasi profil risiko teknologi informasi (TI) dalam organisasi. Kuisioner
    ini berfokus pada penilaian tingkat dampak dan kemungkinan terjadi dari berbagai pernyataan terkait risiko TI yang
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

<div class="text-end mb-3">
    <small id="lastUpdated-section-3" class="text-muted"></small>
</div>

<!-- Tabel -->
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
                    hidup program dan proyek</td>
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
                <td>Ketidakefisienan biaya dan pengawasan TI</td>
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
                    perilaku TI</td>
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
                <td>Ketidaksesuaian atau arsitektur perusahaan/TI</td>
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
                    menyebabkan gangguan atau downtime</td>
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
                    atau prosedur TI terjadi dalam organisasi</td>
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
                    lunak</td>
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
                    kelangsungan operasional TI dan INI LANJUTANNYA APA ANJENK</td>
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
                    bisnis dan kepuasan pengguna</td>
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
                    organisasi</td>
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
                    kepatuhan TI organisasi</td>
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
                    kebijakan TI yang berlaku</td>
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
                    dan strategi TI organisasi</td>
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
                    kebijakan TI dalam organisasi</td>
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
                    organisasi</td>
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
                    dan berkembang</td>
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
                <td>Isu lingkungan mempengaruhi keputusan atau kebijakan terkait TI di organisasi</td>
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
                <td>Kegagalan dalam manajemen data dan informasi yang memengaruhi operasional atau kepatuhan</td>
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
</div>

@push('scripts')
    <script>
        // Chart instances
        let dampak_1, terjadi_1, dampak_2, terjadi_2, dampak_3, terjadi_3, dampak_4, terjadi_4, dampak_5, terjadi_5, dampak_6, terjadi_6, dampak_7, terjadi_7, dampak_8, terjadi_8, dampak_9, terjadi_9, dampak_10, terjadi_10, dampak_11, terjadi_11, dampak_12, terjadi_12, dampak_13, terjadi_13, dampak_14, terjadi_14, dampak_15, terjadi_15, dampak_16, terjadi_16, dampak_17, terjadi_17, dampak_18, terjadi_18, dampak_19, terjadi_19;

        // Fungsi untuk inisialisasi chart
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
                            display: false,
                        },
                    },
                },
            });
        }

        // Fetch and update data
        async function fetchData_section_3(formId) {
            try {
                const response = await fetch(`/data-section-3/${formId}`);
                const data = await response.json();

                if (data) {
                    dampak_1.data.datasets[0].data = [
                        data.pertanyaan_1_dampak_jawaban_1,
                        data.pertanyaan_1_dampak_jawaban_2,
                        data.pertanyaan_1_dampak_jawaban_3,
                        data.pertanyaan_1_dampak_jawaban_4,
                        data.pertanyaan_1_dampak_jawaban_5
                    ];
                    dampak_1.update();

                    terjadi_1.data.datasets[0].data = [
                        data.pertanyaan_1_terjadi_jawaban_1,
                        data.pertanyaan_1_terjadi_jawaban_2,
                        data.pertanyaan_1_terjadi_jawaban_3,
                        data.pertanyaan_1_terjadi_jawaban_4,
                        data.pertanyaan_1_terjadi_jawaban_5
                    ];
                    terjadi_1.update();

                    dampak_2.data.datasets[0].data = [
                        data.pertanyaan_2_dampak_jawaban_1,
                        data.pertanyaan_2_dampak_jawaban_2,
                        data.pertanyaan_2_dampak_jawaban_3,
                        data.pertanyaan_2_dampak_jawaban_4,
                        data.pertanyaan_2_dampak_jawaban_5
                    ];
                    dampak_2.update();

                    terjadi_2.data.datasets[0].data = [
                        data.pertanyaan_2_terjadi_jawaban_1,
                        data.pertanyaan_2_terjadi_jawaban_2,
                        data.pertanyaan_2_terjadi_jawaban_3,
                        data.pertanyaan_2_terjadi_jawaban_4,
                        data.pertanyaan_2_terjadi_jawaban_5
                    ];
                    terjadi_2.update();

                    dampak_3.data.datasets[0].data = [
                        data.pertanyaan_3_dampak_jawaban_1,
                        data.pertanyaan_3_dampak_jawaban_2,
                        data.pertanyaan_3_dampak_jawaban_3,
                        data.pertanyaan_3_dampak_jawaban_4,
                        data.pertanyaan_3_dampak_jawaban_5
                    ];
                    dampak_3.update();

                    terjadi_3.data.datasets[0].data = [
                        data.pertanyaan_3_terjadi_jawaban_1,
                        data.pertanyaan_3_terjadi_jawaban_2,
                        data.pertanyaan_3_terjadi_jawaban_3,
                        data.pertanyaan_3_terjadi_jawaban_4,
                        data.pertanyaan_3_terjadi_jawaban_5
                    ];
                    terjadi_3.update();

                    dampak_4.data.datasets[0].data = [
                        data.pertanyaan_4_dampak_jawaban_1,
                        data.pertanyaan_4_dampak_jawaban_2,
                        data.pertanyaan_4_dampak_jawaban_3,
                        data.pertanyaan_4_dampak_jawaban_4,
                        data.pertanyaan_4_dampak_jawaban_5
                    ];
                    dampak_4.update();

                    terjadi_4.data.datasets[0].data = [
                        data.pertanyaan_4_terjadi_jawaban_1,
                        data.pertanyaan_4_terjadi_jawaban_2,
                        data.pertanyaan_4_terjadi_jawaban_3,
                        data.pertanyaan_4_terjadi_jawaban_4,
                        data.pertanyaan_4_terjadi_jawaban_5
                    ];
                    terjadi_4.update();

                    dampak_5.data.datasets[0].data = [
                        data.pertanyaan_5_dampak_jawaban_1,
                        data.pertanyaan_5_dampak_jawaban_2,
                        data.pertanyaan_5_dampak_jawaban_3,
                        data.pertanyaan_5_dampak_jawaban_4,
                        data.pertanyaan_5_dampak_jawaban_5
                    ];
                    dampak_5.update();

                    terjadi_5.data.datasets[0].data = [
                        data.pertanyaan_5_terjadi_jawaban_1,
                        data.pertanyaan_5_terjadi_jawaban_2,
                        data.pertanyaan_5_terjadi_jawaban_3,
                        data.pertanyaan_5_terjadi_jawaban_4,
                        data.pertanyaan_5_terjadi_jawaban_5
                    ];
                    terjadi_5.update();

                    dampak_6.data.datasets[0].data = [
                        data.pertanyaan_6_dampak_jawaban_1,
                        data.pertanyaan_6_dampak_jawaban_2,
                        data.pertanyaan_6_dampak_jawaban_3,
                        data.pertanyaan_6_dampak_jawaban_4,
                        data.pertanyaan_6_dampak_jawaban_5
                    ];
                    dampak_6.update();

                    terjadi_6.data.datasets[0].data = [
                        data.pertanyaan_6_terjadi_jawaban_1,
                        data.pertanyaan_6_terjadi_jawaban_2,
                        data.pertanyaan_6_terjadi_jawaban_3,
                        data.pertanyaan_6_terjadi_jawaban_4,
                        data.pertanyaan_6_terjadi_jawaban_5
                    ];
                    terjadi_6.update();

                    dampak_7.data.datasets[0].data = [
                        data.pertanyaan_7_dampak_jawaban_1,
                        data.pertanyaan_7_dampak_jawaban_2,
                        data.pertanyaan_7_dampak_jawaban_3,
                        data.pertanyaan_7_dampak_jawaban_4,
                        data.pertanyaan_7_dampak_jawaban_5
                    ];
                    dampak_7.update();

                    terjadi_7.data.datasets[0].data = [
                        data.pertanyaan_7_terjadi_jawaban_1,
                        data.pertanyaan_7_terjadi_jawaban_2,
                        data.pertanyaan_7_terjadi_jawaban_3,
                        data.pertanyaan_7_terjadi_jawaban_4,
                        data.pertanyaan_7_terjadi_jawaban_5
                    ];
                    terjadi_7.update();

                    dampak_8.data.datasets[0].data = [
                        data.pertanyaan_8_dampak_jawaban_1,
                        data.pertanyaan_8_dampak_jawaban_2,
                        data.pertanyaan_8_dampak_jawaban_3,
                        data.pertanyaan_8_dampak_jawaban_4,
                        data.pertanyaan_8_dampak_jawaban_5
                    ];
                    dampak_8.update();

                    terjadi_8.data.datasets[0].data = [
                        data.pertanyaan_8_terjadi_jawaban_1,
                        data.pertanyaan_8_terjadi_jawaban_2,
                        data.pertanyaan_8_terjadi_jawaban_3,
                        data.pertanyaan_8_terjadi_jawaban_4,
                        data.pertanyaan_8_terjadi_jawaban_5
                    ];
                    terjadi_8.update();

                    dampak_9.data.datasets[0].data = [
                        data.pertanyaan_9_dampak_jawaban_1,
                        data.pertanyaan_9_dampak_jawaban_2,
                        data.pertanyaan_9_dampak_jawaban_3,
                        data.pertanyaan_9_dampak_jawaban_4,
                        data.pertanyaan_9_dampak_jawaban_5
                    ];
                    dampak_9.update();

                    terjadi_9.data.datasets[0].data = [
                        data.pertanyaan_9_terjadi_jawaban_1,
                        data.pertanyaan_9_terjadi_jawaban_2,
                        data.pertanyaan_9_terjadi_jawaban_3,
                        data.pertanyaan_9_terjadi_jawaban_4,
                        data.pertanyaan_9_terjadi_jawaban_5
                    ];
                    terjadi_9.update();

                    dampak_10.data.datasets[0].data = [
                        data.pertanyaan_10_dampak_jawaban_1,
                        data.pertanyaan_10_dampak_jawaban_2,
                        data.pertanyaan_10_dampak_jawaban_3,
                        data.pertanyaan_10_dampak_jawaban_4,
                        data.pertanyaan_10_dampak_jawaban_5
                    ];
                    dampak_10.update();

                    terjadi_10.data.datasets[0].data = [
                        data.pertanyaan_10_terjadi_jawaban_1,
                        data.pertanyaan_10_terjadi_jawaban_2,
                        data.pertanyaan_10_terjadi_jawaban_3,
                        data.pertanyaan_10_terjadi_jawaban_4,
                        data.pertanyaan_10_terjadi_jawaban_5
                    ];
                    terjadi_10.update();

                    dampak_11.data.datasets[0].data = [
                        data.pertanyaan_11_dampak_jawaban_1,
                        data.pertanyaan_11_dampak_jawaban_2,
                        data.pertanyaan_11_dampak_jawaban_3,
                        data.pertanyaan_11_dampak_jawaban_4,
                        data.pertanyaan_11_dampak_jawaban_5
                    ];
                    dampak_11.update();

                    terjadi_11.data.datasets[0].data = [
                        data.pertanyaan_11_terjadi_jawaban_1,
                        data.pertanyaan_11_terjadi_jawaban_2,
                        data.pertanyaan_11_terjadi_jawaban_3,
                        data.pertanyaan_11_terjadi_jawaban_4,
                        data.pertanyaan_11_terjadi_jawaban_5
                    ];
                    terjadi_11.update();

                    dampak_12.data.datasets[0].data = [
                        data.pertanyaan_12_dampak_jawaban_1,
                        data.pertanyaan_12_dampak_jawaban_2,
                        data.pertanyaan_12_dampak_jawaban_3,
                        data.pertanyaan_12_dampak_jawaban_4,
                        data.pertanyaan_12_dampak_jawaban_5
                    ];
                    dampak_12.update();

                    terjadi_12.data.datasets[0].data = [
                        data.pertanyaan_12_terjadi_jawaban_1,
                        data.pertanyaan_12_terjadi_jawaban_2,
                        data.pertanyaan_12_terjadi_jawaban_3,
                        data.pertanyaan_12_terjadi_jawaban_4,
                        data.pertanyaan_12_terjadi_jawaban_5
                    ];
                    terjadi_12.update();

                    dampak_13.data.datasets[0].data = [
                        data.pertanyaan_13_dampak_jawaban_1,
                        data.pertanyaan_13_dampak_jawaban_2,
                        data.pertanyaan_13_dampak_jawaban_3,
                        data.pertanyaan_13_dampak_jawaban_4,
                        data.pertanyaan_13_dampak_jawaban_5
                    ];
                    dampak_13.update();

                    terjadi_13.data.datasets[0].data = [
                        data.pertanyaan_13_terjadi_jawaban_1,
                        data.pertanyaan_13_terjadi_jawaban_2,
                        data.pertanyaan_13_terjadi_jawaban_3,
                        data.pertanyaan_13_terjadi_jawaban_4,
                        data.pertanyaan_13_terjadi_jawaban_5
                    ];
                    terjadi_13.update();

                    dampak_14.data.datasets[0].data = [
                        data.pertanyaan_14_dampak_jawaban_1,
                        data.pertanyaan_14_dampak_jawaban_2,
                        data.pertanyaan_14_dampak_jawaban_3,
                        data.pertanyaan_14_dampak_jawaban_4,
                        data.pertanyaan_14_dampak_jawaban_5
                    ];
                    dampak_14.update();

                    terjadi_14.data.datasets[0].data = [
                        data.pertanyaan_14_terjadi_jawaban_1,
                        data.pertanyaan_14_terjadi_jawaban_2,
                        data.pertanyaan_14_terjadi_jawaban_3,
                        data.pertanyaan_14_terjadi_jawaban_4,
                        data.pertanyaan_14_terjadi_jawaban_5
                    ];
                    terjadi_14.update();

                    dampak_15.data.datasets[0].data = [
                        data.pertanyaan_15_dampak_jawaban_1,
                        data.pertanyaan_15_dampak_jawaban_2,
                        data.pertanyaan_15_dampak_jawaban_3,
                        data.pertanyaan_15_dampak_jawaban_4,
                        data.pertanyaan_15_dampak_jawaban_5
                    ];
                    dampak_15.update();

                    terjadi_15.data.datasets[0].data = [
                        data.pertanyaan_15_terjadi_jawaban_1,
                        data.pertanyaan_15_terjadi_jawaban_2,
                        data.pertanyaan_15_terjadi_jawaban_3,
                        data.pertanyaan_15_terjadi_jawaban_4,
                        data.pertanyaan_15_terjadi_jawaban_5
                    ];
                    terjadi_15.update();

                    dampak_16.data.datasets[0].data = [
                        data.pertanyaan_16_dampak_jawaban_1,
                        data.pertanyaan_16_dampak_jawaban_2,
                        data.pertanyaan_16_dampak_jawaban_3,
                        data.pertanyaan_16_dampak_jawaban_4,
                        data.pertanyaan_16_dampak_jawaban_5
                    ];
                    dampak_16.update();

                    terjadi_16.data.datasets[0].data = [
                        data.pertanyaan_16_terjadi_jawaban_1,
                        data.pertanyaan_16_terjadi_jawaban_2,
                        data.pertanyaan_16_terjadi_jawaban_3,
                        data.pertanyaan_16_terjadi_jawaban_4,
                        data.pertanyaan_16_terjadi_jawaban_5
                    ];
                    terjadi_16.update();

                    dampak_17.data.datasets[0].data = [
                        data.pertanyaan_17_dampak_jawaban_1,
                        data.pertanyaan_17_dampak_jawaban_2,
                        data.pertanyaan_17_dampak_jawaban_3,
                        data.pertanyaan_17_dampak_jawaban_4,
                        data.pertanyaan_17_dampak_jawaban_5
                    ];
                    dampak_17.update();

                    terjadi_17.data.datasets[0].data = [
                        data.pertanyaan_17_terjadi_jawaban_1,
                        data.pertanyaan_17_terjadi_jawaban_2,
                        data.pertanyaan_17_terjadi_jawaban_3,
                        data.pertanyaan_17_terjadi_jawaban_4,
                        data.pertanyaan_17_terjadi_jawaban_5
                    ];
                    terjadi_17.update();

                    dampak_18.data.datasets[0].data = [
                        data.pertanyaan_18_dampak_jawaban_1,
                        data.pertanyaan_18_dampak_jawaban_2,
                        data.pertanyaan_18_dampak_jawaban_3,
                        data.pertanyaan_18_dampak_jawaban_4,
                        data.pertanyaan_18_dampak_jawaban_5
                    ];
                    dampak_18.update();

                    terjadi_18.data.datasets[0].data = [
                        data.pertanyaan_18_terjadi_jawaban_1,
                        data.pertanyaan_18_terjadi_jawaban_2,
                        data.pertanyaan_18_terjadi_jawaban_3,
                        data.pertanyaan_18_terjadi_jawaban_4,
                        data.pertanyaan_18_terjadi_jawaban_5
                    ];
                    terjadi_18.update();

                    dampak_19.data.datasets[0].data = [
                        data.pertanyaan_19_dampak_jawaban_1,
                        data.pertanyaan_19_dampak_jawaban_2,
                        data.pertanyaan_19_dampak_jawaban_3,
                        data.pertanyaan_19_dampak_jawaban_4,
                        data.pertanyaan_19_dampak_jawaban_5
                    ];
                    dampak_19.update();

                    terjadi_19.data.datasets[0].data = [
                        data.pertanyaan_19_terjadi_jawaban_1,
                        data.pertanyaan_19_terjadi_jawaban_2,
                        data.pertanyaan_19_terjadi_jawaban_3,
                        data.pertanyaan_19_terjadi_jawaban_4,
                        data.pertanyaan_19_terjadi_jawaban_5
                    ];
                    terjadi_19.update();

                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-3').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-3').textContent =
                            'Belum ada data tersedia';
                    }
                }
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }

        // Initialize charts
        document.addEventListener('DOMContentLoaded', function() {
            // Create charts
            dampak_1 = createChart("dampak_1", {
                ...dataTemplate
            });

            terjadi_1 = createChart("terjadi_1", {
                ...dataTemplate
            });

            dampak_2 = createChart("dampak_2", {
                ...dataTemplate
            });

            terjadi_2 = createChart("terjadi_2", {
                ...dataTemplate
            });

            dampak_3 = createChart("dampak_3", {
                ...dataTemplate
            });

            terjadi_3 = createChart("terjadi_3", {
                ...dataTemplate
            });

            dampak_4 = createChart("dampak_4", {
                ...dataTemplate
            });

            terjadi_4 = createChart("terjadi_4", {
                ...dataTemplate
            });

            dampak_5 = createChart("dampak_5", {
                ...dataTemplate
            });

            terjadi_5 = createChart("terjadi_5", {
                ...dataTemplate
            });

            dampak_6 = createChart("dampak_6", {
                ...dataTemplate
            });

            terjadi_6 = createChart("terjadi_6", {
                ...dataTemplate
            });

            dampak_7 = createChart("dampak_7", {
                ...dataTemplate
            });

            terjadi_7 = createChart("terjadi_7", {
                ...dataTemplate
            });

            dampak_8 = createChart("dampak_8", {
                ...dataTemplate
            });

            terjadi_8 = createChart("terjadi_8", {
                ...dataTemplate
            });

            dampak_9 = createChart("dampak_9", {
                ...dataTemplate
            });

            terjadi_9 = createChart("terjadi_9", {
                ...dataTemplate
            });

            dampak_10 = createChart("dampak_10", {
                ...dataTemplate
            });

            terjadi_10 = createChart("terjadi_10", {
                ...dataTemplate
            });

            dampak_11 = createChart("dampak_11", {
                ...dataTemplate
            });

            terjadi_11 = createChart("terjadi_11", {
                ...dataTemplate
            });

            dampak_12 = createChart("dampak_12", {
                ...dataTemplate
            });

            terjadi_12 = createChart("terjadi_12", {
                ...dataTemplate
            });

            dampak_13 = createChart("dampak_13", {
                ...dataTemplate
            });

            terjadi_13 = createChart("terjadi_13", {
                ...dataTemplate
            });

            dampak_14 = createChart("dampak_14", {
                ...dataTemplate
            });

            terjadi_14 = createChart("terjadi_14", {
                ...dataTemplate
            });

            dampak_15 = createChart("dampak_15", {
                ...dataTemplate
            });

            terjadi_15 = createChart("terjadi_15", {
                ...dataTemplate
            });

            dampak_16 = createChart("dampak_16", {
                ...dataTemplate
            });

            terjadi_16 = createChart("terjadi_16", {
                ...dataTemplate
            });

            dampak_17 = createChart("dampak_17", {
                ...dataTemplate
            });

            terjadi_17 = createChart("terjadi_17", {
                ...dataTemplate
            });

            dampak_18 = createChart("dampak_18", {
                ...dataTemplate
            });

            terjadi_18 = createChart("terjadi_18", {
                ...dataTemplate
            });

            dampak_19 = createChart("dampak_19", {
                ...dataTemplate
            });

            terjadi_19 = createChart("terjadi_19", {
                ...dataTemplate
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_3('{{ $form->id }}');
        });
    </script>
@endpush
