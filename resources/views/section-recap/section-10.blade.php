<h3 class="mt-3 text-center">Section 10 (Identifikasi pengelolaan risiko teknologi informasi Bagian Ketiga: Memelihara
    Profil Risiko TI)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Bagian ketiga dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi bagaimana organisasi
    memelihara profil risiko TI. Kuisioner ini berfokus pada pembaruan dan pengelolaan profil risiko untuk mencerminkan
    kondisi risiko yang terbaru.
    <br>
    Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong> sesuai dengan
    kondisi yang berlaku di organisasi Anda.
</p>

<div class="text-end mb-3">
    <small id="lastUpdated-section-10" class="text-muted"></small>
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
                <td>Mendata proses bisnis dan mendokumentasikan ketergantungannya pada proses manajemen layanan TI dan
                    sumber daya infrastruktur TI. Termasuk, Mengidentifikasi personel pendukung, aplikasi,
                    infrastruktur, fasilitas, catatan manual, vendor, dan pemasok.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_10_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menentukan dan menyepakati layanan TI serta sumber daya infrastruktur yang penting untuk
                    kelangsungan proses bisnis. Termasuk, menganalisis ketergantungan dan mengidentifikasi kelemahan.
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_10_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mengelompokkan skenario risiko saat ini berdasarkan kategori, lini bisnis, dan area fungsional.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_10_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Secara rutin mengumpulkan semua informasi profil risiko dan mengonsolidasikannya menjadi profil
                    risiko terintegrasi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_10_4"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mencatat status rencana aksi risiko untuk dimasukkan ke dalam profil risiko TI organisasi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_10_5"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Berdasarkan data profil risiko, mendefinisikan indikator risiko untuk identifikasi cepat dan
                    pemantauan tren risiko.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_10_6"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mencatat informasi tentang kejadian risiko TI yang telah terjadi untuk dimasukkan ke dalam profil
                    risiko TI organisasi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_10_7"></canvas>
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
        let section_10_1, section_10_2, section_10_3, section_10_4, section_10_5, section_10_6, section_10_7;

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
        async function fetchData_section_10(formId) {
            try {
                const response = await fetch(`/data-section-10/${formId}`);
                const data = await response.json();

                if (data) {
                    section_10_1.data.datasets[0].data = [
                        data.pertanyaan_1_jawaban_ya,
                        data.pertanyaan_1_jawaban_tidak,
                    ];
                    section_10_1.update();

                    section_10_2.data.datasets[0].data = [
                        data.pertanyaan_2_jawaban_ya,
                        data.pertanyaan_2_jawaban_tidak,
                    ];
                    section_10_2.update();

                    section_10_3.data.datasets[0].data = [
                        data.pertanyaan_3_jawaban_ya,
                        data.pertanyaan_3_jawaban_tidak,
                    ];
                    section_10_3.update();

                    section_10_4.data.datasets[0].data = [
                        data.pertanyaan_4_jawaban_ya,
                        data.pertanyaan_4_jawaban_tidak,
                    ];
                    section_10_4.update();

                    section_10_5.data.datasets[0].data = [
                        data.pertanyaan_5_jawaban_ya,
                        data.pertanyaan_5_jawaban_tidak,
                    ];
                    section_10_5.update();

                    section_10_6.data.datasets[0].data = [
                        data.pertanyaan_6_jawaban_ya,
                        data.pertanyaan_6_jawaban_tidak,
                    ];
                    section_10_6.update();

                    section_10_7.data.datasets[0].data = [
                        data.pertanyaan_7_jawaban_ya,
                        data.pertanyaan_7_jawaban_tidak,
                    ];
                    section_10_7.update();


                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-10').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-10').textContent =
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
            section_10_1 = createChart("section_10_1", {
                ...dataTemplate2
            });

            section_10_2 = createChart("section_10_2", {
                ...dataTemplate2
            });

            section_10_3 = createChart("section_10_3", {
                ...dataTemplate2
            });

            section_10_4 = createChart("section_10_4", {
                ...dataTemplate2
            });

            section_10_5 = createChart("section_10_5", {
                ...dataTemplate2
            });

            section_10_6 = createChart("section_10_6", {
                ...dataTemplate2
            });

            section_10_7 = createChart("section_10_7", {
                ...dataTemplate2
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_10('{{ $form->id }}');
        });
    </script>
@endpush
