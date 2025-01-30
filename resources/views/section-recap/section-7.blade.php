<h3 class="mt-3 text-center">Section 7 (Identifikasi optimasi risiko teknologi informasi Bagian Ketiga: Pemantauan
    Manajemen Risiko)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Bagian ketiga dari Optimasi Risiko Teknologi Informasi (TI) ini bertujuan untuk mengidentifikasi bagaimana
    organisasi memantau efektivitas pengelolaan risiko TI. Kuisioner ini berfokus pada evaluasi proses pemantauan,
    termasuk pengukuran, pelaporan, dan tindakan korektif terkait risiko TI.
    <br>
    Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong> sesuai dengan kondisi yang berlaku di organisasi
    Anda.
</p>

<div class="text-end mb-3">
    <small id="lastUpdated-section-7" class="text-muted"></small>
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
                <td>Melaporkan setiap isu manajemen risiko kepada dewan direksi
                    atau komite eksekutif.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_7_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Memantau sejauh mana profil risiko dikelola sesuai dengan
                    appetite risiko dan batas toleransi risiko organisasi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_7_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Memantau tujuan utama dan metrik dari tata kelola dan proses
                    manajemen risiko terhadap target, menganalisis penyebab
                    penyimpangan, dan mengambil tindakan perbaikan untuk
                    mengatasi penyebab utamanya.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_7_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Memungkinkan pemangku kepentingan utama untuk meninjau
                    kemajuan organisasi dalam mencapai tujuan yang telah
                    ditetapkan.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_7_4"></canvas>
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
        let section_7_1, section_7_2, section_7_3, section_7_4;

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
        async function fetchData_section_7(formId) {
            try {
                const response = await fetch(`/data-section-7/${formId}`);
                const data = await response.json();

                if (data) {
                    section_7_1.data.datasets[0].data = [
                        data.pertanyaan_1_jawaban_ya,
                        data.pertanyaan_1_jawaban_tidak,
                    ];
                    section_7_1.update();

                    section_7_2.data.datasets[0].data = [
                        data.pertanyaan_2_jawaban_ya,
                        data.pertanyaan_2_jawaban_tidak,
                    ];
                    section_7_2.update();

                    section_7_3.data.datasets[0].data = [
                        data.pertanyaan_3_jawaban_ya,
                        data.pertanyaan_3_jawaban_tidak,
                    ];
                    section_7_3.update();

                    section_7_4.data.datasets[0].data = [
                        data.pertanyaan_4_jawaban_ya,
                        data.pertanyaan_4_jawaban_tidak,
                    ];
                    section_7_4.update();


                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-7').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-7').textContent =
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
            section_7_1 = createChart("section_7_1", {
                ...dataTemplate2
            });

            section_7_2 = createChart("section_7_2", {
                ...dataTemplate2
            });

            section_7_3 = createChart("section_7_3", {
                ...dataTemplate2
            });

            section_7_4 = createChart("section_7_4", {
                ...dataTemplate2
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_7('{{ $form->id }}');
        });
    </script>
@endpush
