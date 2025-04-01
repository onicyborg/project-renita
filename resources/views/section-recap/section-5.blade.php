<h3 class="mt-3 text-center">Section 5 (Identifikasi optimasi risiko teknologi informasi Bagian Pertama: Evaluasi
    Manajemen Risiko)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Bagian pertama dari Optimasi Risiko Teknologi Informasi (TI) ini bertujuan untuk mengevaluasi cara organisasi
    memahami, menilai, dan menentukan strategi pengelolaan risiko TI. Fokusnya adalah pada analisis awal dan
    identifikasi risiko TI yang relevan dengan tujuan strategis organisasi.
    <br>
    Pengisian pada kolom aktivitas dilakukan harap pilih <strong>Ya (Aktivitas dilakukan)</strong> atau
    <strong>Tidak (Aktivitas tidak dilakukan)</strong> sesuai kondisi yang berlaku di organisasi
</p>

<div class="text-end mb-3">
    <small id="lastUpdated-section-5" class="text-muted"></small>
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
                <td>Memahami organisasi dan konteksnya yang berkaitan dengan
                    risiko Teknologi Informasi (TI).</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_5_1"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menentukan tingkat appetite risiko organisasi, yaitu tingkat risiko
                    TI yang bersedia diterima organisasi dalam mencapai tujuan
                    strategisnya.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_5_2"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menentukan tingkat toleransi risiko terhadap appetite risiko, yaitu
                    penyimpangan sementara yang masih dapat diterima dari batas
                    risiko yang telah ditentukan.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_5_3"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Menentukan sejauh mana strategi risiko TI selaras dengan strategi
                    risiko organisasi secara keseluruhan, serta memastikan bahwa
                    appetite risiko berada di bawah kapasitas risiko organisasi.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_5_4"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Secara proaktif mengevaluasi faktor risiko TI sebelum keputusan
                    strategis dibuat, serta memastikan bahwa pertimbangan risiko
                    menjadi bagian dari proses pengambilan keputusan strategis.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_5_5"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Mengevaluasi aktivitas manajemen risiko untuk memastikan
                    kesesuaian dengan kapasitas organisasi dalam menangani
                    kerugian TI dan toleransi risiko dari pihak manajemen.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_5_6"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Merekrut dan mempertahankan keterampilan serta personel yang
                    diperlukan untuk manajemen risiko TI.</td>
                <td>
                    <div style="width: 120px; height: 120px; margin: auto;">
                        <canvas id="section_5_7"></canvas>
                    </div>
                    <div class="mt-2 text-center">
                        <span class="badge" style="background-color: #36A2EB;">Ya</span>
                        <span class="badge" style="background-color: #FF6384;">Tidak</span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <h4 class="mt-4 text-center">Kritik dan Saran Section 5</h4>
    <div id="kritikSaranCarousel-section-5" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="kritikSaranContent-section-5">
            <div class="carousel-item active">
            </div>
        </div>
        <a class="carousel-control-prev" href="#kritikSaranCarousel-section-5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#kritikSaranCarousel-section-5" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


@push('scripts')
    <script>
        // Chart instances
        let section_5_1, section_5_2, section_5_3, section_5_4, section_5_5, section_5_6, section_5_7;

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
        async function fetchData_section_5(formId) {
            try {
                const response = await fetch(`/data-section-5/${formId}`);
                const data = await response.json();

                if (data) {
                    section_5_1.data.datasets[0].data = [
                        data.pertanyaan_1_jawaban_ya,
                        data.pertanyaan_1_jawaban_tidak,
                    ];
                    section_5_1.update();

                    section_5_2.data.datasets[0].data = [
                        data.pertanyaan_2_jawaban_ya,
                        data.pertanyaan_2_jawaban_tidak,
                    ];
                    section_5_2.update();

                    section_5_3.data.datasets[0].data = [
                        data.pertanyaan_3_jawaban_ya,
                        data.pertanyaan_3_jawaban_tidak,
                    ];
                    section_5_3.update();

                    section_5_4.data.datasets[0].data = [
                        data.pertanyaan_4_jawaban_ya,
                        data.pertanyaan_4_jawaban_tidak,
                    ];
                    section_5_4.update();

                    section_5_5.data.datasets[0].data = [
                        data.pertanyaan_5_jawaban_ya,
                        data.pertanyaan_5_jawaban_tidak,
                    ];
                    section_5_5.update();

                    section_5_6.data.datasets[0].data = [
                        data.pertanyaan_6_jawaban_ya,
                        data.pertanyaan_6_jawaban_tidak,
                    ];
                    section_5_6.update();

                    section_5_7.data.datasets[0].data = [
                        data.pertanyaan_7_jawaban_ya,
                        data.pertanyaan_7_jawaban_tidak,
                    ];
                    section_5_7.update();


                    // Update last updated timestamp if needed
                    if (data) {
                        const totalResponses = data.total_responses ?? 0;
                        const totalAuditee = data.total_auditee ?? 0;
                        const lastUpdated = data.last_updated_at ?
                            `Terakhir diperbarui: ${new Date(data.last_updated_at).toLocaleString('id-ID')}` :
                            'Belum ada data';

                        document.getElementById('lastUpdated-section-5').textContent =
                            `Total Responden: ${totalResponses} Orang dari ${totalAuditee} Auditee, ${lastUpdated}`;
                    } else {
                        document.getElementById('lastUpdated-section-5').textContent =
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
            section_5_1 = createChart("section_5_1", {
                ...dataTemplate2
            });

            section_5_2 = createChart("section_5_2", {
                ...dataTemplate2
            });

            section_5_3 = createChart("section_5_3", {
                ...dataTemplate2
            });

            section_5_4 = createChart("section_5_4", {
                ...dataTemplate2
            });

            section_5_5 = createChart("section_5_5", {
                ...dataTemplate2
            });

            section_5_6 = createChart("section_5_6", {
                ...dataTemplate2
            });

            section_5_7 = createChart("section_5_7", {
                ...dataTemplate2
            });

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_5('{{ $form->id }}');
        });

        $(document).ready(function() {
            let formId = '{{ $form->id }}'; // Ganti dengan ID form yang sesuai
            $.ajax({
                url: `/kritik-saran-section-5/${formId}`,
                method: "GET",
                success: function(data) {
                    let container = $("#kritikSaranContent-section-5");
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
                    $('#kritikSaranCarousel-section-5').carousel();
                },
                error: function() {
                    console.error("Error mengambil data");
                }
            });
        });
    </script>
@endpush
