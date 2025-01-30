<h3 class="mt-3 text-center">Section 11 (Identifikasi pengelolaan risiko teknologi informasi Bagian Keempat:
    Mengartikulasikan Risiko TI)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Bagian keempat dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi bagaimana
    organisasi mengomunikasikan risiko TI kepada pemangku kepentingan. Kuisioner ini berfokus pada cara organisasi
    menyampaikan informasi risiko, termasuk tingkat risiko dan dampaknya.
    <br>
    Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong> sesuai dengan
    kondisi yang berlaku di organisasi Anda.
</p>

<div class="text-end mb-3">
    <small id="lastUpdated-section-11" class="text-muted"></small>
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
                <td>Melaporkan hasil analisis risiko kepada semua pemangku kepentingan yang terdampak dalam format yang mendukung pengambilan keputusan, termasuk probabilitas dan rentang kerugian/keuntungan serta tingkat kepercayaan.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_11_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Memberikan pemahaman kepada pengambil keputusan tentang skenario terburuk, skenario paling mungkin, potensi kerugian TI, serta dampak pada reputasi, hukum, dan regulasi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_11_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Melaporkan profil risiko saat ini kepada semua pemangku kepentingan, termasuk efektivitas proses manajemen risiko, kontrol, kesenjangan, dan status perbaikan.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_11_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Secara berkala mengidentifikasi peluang terkait TI yang memungkinkan penerimaan risiko lebih besar untuk mendukung pertumbuhan dan keuntungan.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_11_4"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Meninjau hasil penilaian pihak ketiga independen, audit internal, dan tinjauan kualitas. Memasukkan hasil ini ke dalam profil risiko untuk menentukan kebutuhan analisis tambahan.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_11_5"></canvas>
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
        let section_11_1, section_11_2, section_11_3, section_11_4, section_11_5;

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
        async function fetchData_section_11(formId) {
            try {
                const response = await fetch(`/data-section-11/${formId}`);
                const data = await response.json();

                if (data) {
                    section_11_1.data.datasets[0].data = [
                        data.pertanyaan_1_jawaban_ya,
                        data.pertanyaan_1_jawaban_tidak,
                    ];
                    section_11_1.update();

                    section_11_2.data.datasets[0].data = [
                        data.pertanyaan_2_jawaban_ya,
                        data.pertanyaan_2_jawaban_tidak,
                    ];
                    section_11_2.update();

                    section_11_3.data.datasets[0].data = [
                        data.pertanyaan_3_jawaban_ya,
                        data.pertanyaan_3_jawaban_tidak,
                    ];
                    section_11_3.update();

                    section_11_4.data.datasets[0].data = [
                        data.pertanyaan_4_jawaban_ya,
                        data.pertanyaan_4_jawaban_tidak,
                    ];
                    section_11_4.update();

                    section_11_5.data.datasets[0].data = [
                        data.pertanyaan_5_jawaban_ya,
                        data.pertanyaan_5_jawaban_tidak,
                    ];
                    section_11_5.update();


                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-11').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-11').textContent =
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
            section_11_1 = createChart("section_11_1", {
                ...dataTemplate2
            });

            section_11_2 = createChart("section_11_2", {
                ...dataTemplate2
            });

            section_11_3 = createChart("section_11_3", {
                ...dataTemplate2
            });

            section_11_4 = createChart("section_11_4", {
                ...dataTemplate2
            });

            section_11_5 = createChart("section_11_5", {
                ...dataTemplate2
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_11('{{ $form->id }}');
        });
    </script>
@endpush
