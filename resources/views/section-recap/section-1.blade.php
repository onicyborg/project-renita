<h3 class="mt-3 text-center">Section 1 (Identifikasi Strategi Risiko Teknologi Informasi Organisasi)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Kuisioner ini bertujuan untuk mengidentifikasi strategi teknologi informasi (TI) yang digunakan oleh organisasi.
    Kuisioner ini berfokus pada penilaian tingkat kepentingan berbagai strategi TI dalam organisasi Anda,
    berdasarkan kondisi dan prioritas saat ini.<br>
    Untuk setiap pernyataan yang diberikan, harap pilih angka pada skala 1 hingga 5 untuk menunjukkan tingkat
    kepentingannya menurut pandangan Anda.
</p>
<p>
    <strong>Skala kepentingan:</strong><br>
    1 = Sangat tidak penting<br>
    2 = Tidak penting<br>
    3 = Penting<br>
    4 = Cukup penting<br>
    5 = Sangat penting
</p>

<div class="text-end mb-3">
    <small id="lastUpdated-section-1" class="text-muted"></small>
</div>

<!-- Tabel -->
<div class="table-responsive mt-4">
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Pola Dasar Strategi</th>
                <th>Penjelasan</th>
                <th>Tingkat Kepentingan (1-5)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Growth/Acquisition</td>
                <td>Seberapa penting bagi organisasi, berfokus pada pertumbuhan dan peningkatan pendapatan dalam jangka
                    panjang?</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="chartGrowth"></canvas>
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
                <td>Innovation/Differentiation</td>
                <td>Seberapa penting inovasi dan diferensiasi untuk menciptakan nilai tambah dan keunggulan kompetitif?
                </td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="chartInnovation"></canvas>
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
                <td>Cost Leadership</td>
                <td>Seberapa penting pengelolaan biaya untuk memastikan efisiensi operasional dan daya saing?</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="chartCost"></canvas>
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
                <td>Client Service/Stability</td>
                <td>Seberapa penting memastikan stabilitas layanan dan orientasi pada kebutuhan klien?</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="chartClient"></canvas>
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
    <h4 class="mt-4 text-center">Kritik dan Saran Section 1</h4>
    <div id="kritikSaranCarousel-section-1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="kritikSaranContent-section-1">
            <div class="carousel-item active">
            </div>
        </div>
        <a class="carousel-control-prev" href="#kritikSaranCarousel-section-1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#kritikSaranCarousel-section-1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@push('scripts')
    <script>
        // Chart instances
        let chartGrowth, chartInnovation, chartCost, chartClient;

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
        async function fetchData_section_1(formId) {
            try {
                const response = await fetch(`/data-section-1/${formId}`);
                const data = await response.json();

                if (data) {
                    // Update Growth chart (pertanyaan_1)
                    chartGrowth.data.datasets[0].data = [
                        data.pertanyaan_1_jawaban_1,
                        data.pertanyaan_1_jawaban_2,
                        data.pertanyaan_1_jawaban_3,
                        data.pertanyaan_1_jawaban_4,
                        data.pertanyaan_1_jawaban_5
                    ];
                    chartGrowth.update();

                    // Update Innovation chart (pertanyaan_2)
                    chartInnovation.data.datasets[0].data = [
                        data.pertanyaan_2_jawaban_1,
                        data.pertanyaan_2_jawaban_2,
                        data.pertanyaan_2_jawaban_3,
                        data.pertanyaan_2_jawaban_4,
                        data.pertanyaan_2_jawaban_5
                    ];
                    chartInnovation.update();

                    // Update Cost chart (pertanyaan_3)
                    chartCost.data.datasets[0].data = [
                        data.pertanyaan_3_jawaban_1,
                        data.pertanyaan_3_jawaban_2,
                        data.pertanyaan_3_jawaban_3,
                        data.pertanyaan_3_jawaban_4,
                        data.pertanyaan_3_jawaban_5
                    ];
                    chartCost.update();

                    // Update Client chart (pertanyaan_4)
                    chartClient.data.datasets[0].data = [
                        data.pertanyaan_4_jawaban_1,
                        data.pertanyaan_4_jawaban_2,
                        data.pertanyaan_4_jawaban_3,
                        data.pertanyaan_4_jawaban_4,
                        data.pertanyaan_4_jawaban_5
                    ];
                    chartClient.update();

                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-1').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-1').textContent =
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
            chartGrowth = createChart("chartGrowth", {
                ...dataTemplate
            });
            chartInnovation = createChart("chartInnovation", {
                ...dataTemplate
            });
            chartCost = createChart("chartCost", {
                ...dataTemplate
            });
            chartClient = createChart("chartClient", {
                ...dataTemplate
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_1('{{ $form->id }}');
        });

        $(document).ready(function() {
            let formId = '{{ $form->id }}'; // Ganti dengan ID form yang sesuai
            $.ajax({
                url: `/kritik-saran-section-1/${formId}`,
                method: "GET",
                success: function(data) {
                    let container = $("#kritikSaranContent-section-1");
                    container.empty(); // Kosongkan kontainer sebelum menambahkan data baru

                    if (data.kritik_saran === "Tidak ada kritik dan saran") {
                        container.append(`<div class="carousel-item active">
                        <div class="card shadow-sm p-3">
                            <p class="text-dark text-center">Tidak ada kritik dan saran tersedia</p>
                        </div>
                    </div>`);
                        return;
                    }

                    $.each(data, function(index, item) {
                        let isActive = index === 0 ? "active" : "";
                        container.append(`<div class="carousel-item ${isActive}">
                        <div class="card shadow-sm p-4">
                            <p class="text-primary font-weight-bold text-center"
                            style="font-size: 1.2rem;">"${item.kritik_saran}"</p>
                        </div>
                    </div>`);
                    });

                    // Aktifkan carousel setelah data dimuat
                    $('#kritikSaranCarousel-section-1').carousel();
                },
                error: function() {
                    console.error("Error mengambil data");
                }
            });
        });
    </script>
@endpush
