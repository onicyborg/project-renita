<h3 class="mt-3 text-center">Section 12 (Identifikasi pengelolaan risiko teknologi informasi Bagian Kelima: Menentukan
    Portofolio Tindakan Manajemen Risiko TI)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Bagian kelima dari Pengelolaan Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi bagaimana organisasi
    menentukan tindakan yang diperlukan untuk mengelola risiko TI. Kuisioner ini berfokus pada strategi dan rencana
    tindakan yang disusun untuk menangani risiko.
    <br>
    Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong> sesuai dengan
    kondisi yang berlaku di organisasi Anda.
</p>

<div class="text-end mb-3">
    <small id="lastUpdated-section-12" class="text-muted"></small>
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
                <td>Memelihara daftar aktivitas kontrol yang ada untuk mengurangi risiko dan memungkinkan pengambilan
                    risiko sesuai appetite dan toleransi risiko. Mengklasifikasikan aktivitas kontrol dan memetakannya
                    ke skenario risiko TI.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_12_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menentukan apakah setiap unit organisasi memantau risiko dan bertanggung jawab atas operasional
                    sesuai dengan tingkat toleransi risiko individu dan portofolio.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_12_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menyusun proposal proyek yang seimbang untuk mengurangi risiko atau mendukung peluang strategis,
                    dengan mempertimbangkan biaya, manfaat, dampak pada profil risiko saat ini, dan regulasi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_12_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <h4 class="mt-4 text-center">Kritik dan Saran Section 12</h4>
    <div id="kritikSaranCarousel-section-12" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="kritikSaranContent-section-12">
            <div class="carousel-item active">
            </div>
        </div>
        <a class="carousel-control-prev" href="#kritikSaranCarousel-section-12" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#kritikSaranCarousel-section-12" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


@push('scripts')
    <script>
        // Chart instances
        let section_12_1, section_12_2, section_12_3;

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
        async function fetchData_section_12(formId) {
            try {
                const response = await fetch(`/data-section-12/${formId}`);
                const data = await response.json();

                if (data) {
                    section_12_1.data.datasets[0].data = [
                        data.pertanyaan_1_jawaban_ya,
                        data.pertanyaan_1_jawaban_tidak,
                    ];
                    section_12_1.update();

                    section_12_2.data.datasets[0].data = [
                        data.pertanyaan_2_jawaban_ya,
                        data.pertanyaan_2_jawaban_tidak,
                    ];
                    section_12_2.update();

                    section_12_3.data.datasets[0].data = [
                        data.pertanyaan_3_jawaban_ya,
                        data.pertanyaan_3_jawaban_tidak,
                    ];
                    section_12_3.update();


                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-12').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-12').textContent =
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
            section_12_1 = createChart("section_12_1", {
                ...dataTemplate2
            });

            section_12_2 = createChart("section_12_2", {
                ...dataTemplate2
            });

            section_12_3 = createChart("section_12_3", {
                ...dataTemplate2
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_12('{{ $form->id }}');
        });

        $(document).ready(function() {
            let formId = '{{ $form->id }}'; // Ganti dengan ID form yang sesuai
            $.ajax({
                url: `/kritik-saran-section-12/${formId}`,
                method: "GET",
                success: function(data) {
                    let container = $("#kritikSaranContent-section-12");
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
                    $('#kritikSaranCarousel-section-12').carousel();
                },
                error: function() {
                    console.error("Error mengambil data");
                }
            });
        });
    </script>
@endpush
