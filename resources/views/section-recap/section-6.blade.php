<h3 class="mt-3 text-center">Section 6 (Identifikasi optimasi risiko teknologi informasi Bagian Kedua: Arahan Manajemen
    Risiko)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Bagian kedua dari Optimasi Risiko Teknologi Informasi (TI) ini bertujuan untuk mengidentifikasi bagaimana organisasi
    mengarahkan dan mengintegrasikan pengelolaan risiko TI ke dalam praktik operasional. Kuisioner ini berfokus pada
    penilaian pendekatan strategis, termasuk komunikasi risiko, eskalasi, dan implementasi mekanisme pengelolaan risiko.

    <br>
    Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong> sesuai dengan kondisi yang berlaku di organisasi
    Anda.
</p>

<div class="text-end mb-3">
    <small id="lastUpdated-section-6" class="text-muted"></small>
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
                <td>Mengarahkan penerjemahan dan integrasi strategi risiko TI ke
                    dalam praktik manajemen risiko dan kegiatan operasional.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_6_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mengarahkan pengembangan rencana komunikasi risiko yang
                    mencakup seluruh level organisasi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_6_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mengarahkan implementasi mekanisme yang tepat untuk
                    merespons perubahan risiko dengan cepat dan melaporkannya
                    secara langsung ke tingkat manajemen yang sesuai, didukung oleh
                    prinsip-prinsip eskalasi yang telah disepakati (apa yang harus
                    dilaporkan, kapan, di mana, dan bagaimana).</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_6_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mengarahkan agar risiko, peluang, masalah, dan kekhawatiran
                    dapat diidentifikasi dan dilaporkan oleh siapa saja kepada pihak
                    yang sesuai kapan saja. Risiko harus dikelola sesuai dengan
                    kebijakan dan prosedur yang telah dipublikasikan, serta
                    diekskalasi kepada pengambil keputusan yang relevan.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_6_4"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mengidentifikasi tujuan utama dan metrik dari proses tata kelola
                    dan manajemen risiko yang perlu dipantau, serta menyetujui
                    pendekatan, metode, teknik, dan proses untuk mengumpulkan dan
                    melaporkan informasi pengukuran.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_6_5"></canvas>
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
        let section_6_1, section_6_2, section_6_3, section_6_4, section_6_5;

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
        async function fetchData_section_6(formId) {
            try {
                const response = await fetch(`/data-section-6/${formId}`);
                const data = await response.json();

                if (data) {
                    section_6_1.data.datasets[0].data = [
                        data.pertanyaan_1_jawaban_ya,
                        data.pertanyaan_1_jawaban_tidak,
                    ];
                    section_6_1.update();

                    section_6_2.data.datasets[0].data = [
                        data.pertanyaan_2_jawaban_ya,
                        data.pertanyaan_2_jawaban_tidak,
                    ];
                    section_6_2.update();

                    section_6_3.data.datasets[0].data = [
                        data.pertanyaan_3_jawaban_ya,
                        data.pertanyaan_3_jawaban_tidak,
                    ];
                    section_6_3.update();

                    section_6_4.data.datasets[0].data = [
                        data.pertanyaan_4_jawaban_ya,
                        data.pertanyaan_4_jawaban_tidak,
                    ];
                    section_6_4.update();

                    section_6_5.data.datasets[0].data = [
                        data.pertanyaan_5_jawaban_ya,
                        data.pertanyaan_5_jawaban_tidak,
                    ];
                    section_6_5.update();


                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-6').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-6').textContent =
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
            section_6_1 = createChart("section_6_1", {
                ...dataTemplate2
            });

            section_6_2 = createChart("section_6_2", {
                ...dataTemplate2
            });

            section_6_3 = createChart("section_6_3", {
                ...dataTemplate2
            });

            section_6_4 = createChart("section_6_4", {
                ...dataTemplate2
            });

            section_6_5 = createChart("section_6_5", {
                ...dataTemplate2
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_6('{{ $form->id }}');
        });
    </script>
@endpush
