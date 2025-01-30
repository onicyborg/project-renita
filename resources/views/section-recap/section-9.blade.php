<h3 class="mt-3 text-center">Section 9 (Identifikasi pengelolaan risiko teknologi informasi Bagian Kedua: Menganalisis
    Risiko TI)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Bagian kedua dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengidentifikasi bagaimana
    organisasi menganalisis risiko TI. Kuisioner ini berfokus pada proses evaluasi risiko, termasuk penilaian dampak dan
    kemungkinan terjadinya risiko.
    <br>
    Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong> sesuai dengan
    kondisi yang berlaku di organisasi
    Anda.
</p>

<div class="text-end mb-3">
    <small id="lastUpdated-section-9" class="text-muted"></small>
</div>

<!-- Tabel -->
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
                <td>Menentukan ruang lingkup yang tepat untuk upaya analisis risiko,
                    dengan mempertimbangkan semua faktor risiko dan tingkat
                    pentingnya aset bisnis.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_9_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menyusun dan memperbarui skenario risiko TI secara rutin,
                    termasuk potensi kerugian, risiko reputasi, dan skenario gabungan
                    dari berbagai jenis ancaman dan kejadian.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_9_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Memperkirakan frekuensi (kemungkinan) dan besarnya kerugian
                    atau keuntungan dari skenario risiko TI dengan
                    mempertimbangkan faktor risiko yang relevan dan kontrol
                    operasional yang diketahui.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_9_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Membandingkan risiko saat ini (potensi kerugian terkait TI)
                    dengan appetite risiko dan toleransi risiko yang dapat diterima.
                    Mengidentifikasi risiko yang tidak dapat diterima atau berisiko
                    tinggi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_9_4"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mengusulkan tanggapan risiko untuk risiko yang melebihi
                    appetite dan toleransi risiko.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_9_5"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menentukan kebutuhan utama untuk proyek atau program yang
                    akan menjalankan tanggapan risiko yang dipilih, termasuk
                    langkah-langkah kontrol penting untuk mitigasi risiko.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_9_6"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Memvalidasi hasil analisis risiko dan analisis dampak bisnis (BIA)
                    sebelum digunakan dalam pengambilan keputusan. Memastikan
                    analisis sesuai dengan kebutuhan organisasi dan estimasi telah
                    diperiksa untuk bias.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_9_7"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menganalisis biaya/manfaat dari berbagai opsi tanggapan risiko
                    seperti menghindari, mengurangi, mentransfer, menerima, atau
                    memanfaatkan risiko, serta memastikan tanggapan risiko yang
                    optimal.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_9_8"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        // Chart instances
        let section_9_1, section_9_2, section_9_3, section_9_4, section_9_5, section_9_6, section_9_7, section_9_8;

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
        async function fetchData_section_9(formId) {
            try {
                const response = await fetch(`/data-section-9/${formId}`);
                const data = await response.json();

                if (data) {
                    section_9_1.data.datasets[0].data = [
                        data.pertanyaan_1_jawaban_ya,
                        data.pertanyaan_1_jawaban_tidak,
                    ];
                    section_9_1.update();

                    section_9_2.data.datasets[0].data = [
                        data.pertanyaan_2_jawaban_ya,
                        data.pertanyaan_2_jawaban_tidak,
                    ];
                    section_9_2.update();

                    section_9_3.data.datasets[0].data = [
                        data.pertanyaan_3_jawaban_ya,
                        data.pertanyaan_3_jawaban_tidak,
                    ];
                    section_9_3.update();

                    section_9_4.data.datasets[0].data = [
                        data.pertanyaan_4_jawaban_ya,
                        data.pertanyaan_4_jawaban_tidak,
                    ];
                    section_9_4.update();

                    section_9_5.data.datasets[0].data = [
                        data.pertanyaan_5_jawaban_ya,
                        data.pertanyaan_5_jawaban_tidak,
                    ];
                    section_9_5.update();

                    section_9_6.data.datasets[0].data = [
                        data.pertanyaan_6_jawaban_ya,
                        data.pertanyaan_6_jawaban_tidak,
                    ];
                    section_9_6.update();

                    section_9_7.data.datasets[0].data = [
                        data.pertanyaan_7_jawaban_ya,
                        data.pertanyaan_7_jawaban_tidak,
                    ];
                    section_9_7.update();

                    section_9_8.data.datasets[0].data = [
                        data.pertanyaan_8_jawaban_ya,
                        data.pertanyaan_8_jawaban_tidak,
                    ];
                    section_9_8.update();


                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-9').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-9').textContent =
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
            section_9_1 = createChart("section_9_1", {
                ...dataTemplate2
            });

            section_9_2 = createChart("section_9_2", {
                ...dataTemplate2
            });

            section_9_3 = createChart("section_9_3", {
                ...dataTemplate2
            });

            section_9_4 = createChart("section_9_4", {
                ...dataTemplate2
            });

            section_9_5 = createChart("section_9_5", {
                ...dataTemplate2
            });

            section_9_6 = createChart("section_9_6", {
                ...dataTemplate2
            });

            section_9_7 = createChart("section_9_7", {
                ...dataTemplate2
            });

            section_9_8 = createChart("section_9_8", {
                ...dataTemplate2
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_9('{{ $form->id }}');
        });
    </script>
@endpush
