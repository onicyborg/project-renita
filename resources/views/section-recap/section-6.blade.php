@php
    $questions = [
        'Apakah organisasi memiliki rencana penanganan risiko keamanan informasi yang terdokumentasi?',
        'Apakah rencana tersebut selaras dengan tujuan strategis organisasi?',
        'Apakah rencana tersebut selaras dengan arsitektur perusahaan?',
        'Apakah rencana tersebut mencakup praktik manajemen dan solusi keamanan yang tepat?',
        'Apakah rencana tersebut menetapkan sumber daya, tanggung jawab, dan prioritas dalam pengelolaan risiko?',
        'Apakah organisasi memiliki inventaris komponen solusi yang digunakan untuk mengelola risiko keamanan?',
        'Apakah proposal implementasi keamanan didukung oleh business case yang telah disetujui?',
        'Apakah proposal tersebut mencakup perencanaan pendanaan dan pembagian tanggung jawab?',
        'Apakah organisasi memberikan masukan dalam desain dan pengembangan solusi keamanan?',
        'Apakah organisasi menyelenggarakan pelatihan keamanan informasi dan privasi secara berkala?',
        'Apakah organisasi melakukan program peningkatan kesadaran (awareness) keamanan informasi?',
        'Apakah prosedur keamanan telah diintegrasikan dalam perencanaan, desain, implementasi, dan monitoring sistem?',
        'Apakah organisasi memiliki mekanisme untuk pencegahan insiden keamanan?',
        'Apakah organisasi memiliki mekanisme untuk deteksi kejadian keamanan?',
        'Apakah organisasi memiliki mekanisme untuk respons terhadap insiden keamanan?',
        'Apakah organisasi telah menetapkan cara untuk mengukur efektivitas pengelolaan keamanan?',
        'Apakah hasil pengukuran digunakan untuk mengevaluasi dan meningkatkan efektivitas keamanan?',
    ];
@endphp

<h3 class="mt-3 text-center">Risk Treatment Plan</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong> sesuai dengan
    kondisi yang berlaku di organisasi Anda.
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
            @foreach ($questions as $i => $question)
                <tr>
                    <td>{{ $question }}</td>
                    <td>
                        <div style="width: 120px; height: 120px; margin: auto;">
                            <canvas id="section_6_{{ $i + 1 }}"></canvas>
                        </div>
                        <div class="mt-2 text-center">
                            <span class="badge" style="background-color: #36A2EB;">Ya</span>
                            <span class="badge" style="background-color: #FF6384;">Tidak</span>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h4 class="mt-4 text-center">Kritik dan Saran Risk Treatment Plan</h4>
    <div id="kritikSaranCarousel-section-6" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="kritikSaranContent-section-6">
            <div class="carousel-item active">
            </div>
        </div>
        <a class="carousel-control-prev" href="#kritikSaranCarousel-section-6" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#kritikSaranCarousel-section-6" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@push('scripts')
    <script>
        // Chart instances
        let section_6_charts = [];

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
                    for (let i = 1; i <= {{ count($questions) }}; i++) {
                        const chart = section_6_charts[i - 1];
                        if (!chart) continue;
                        chart.data.datasets[0].data = [
                            data[`pertanyaan_${i}_jawaban_ya`],
                            data[`pertanyaan_${i}_jawaban_tidak`],
                        ];
                        chart.update();
                    }


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
            for (let i = 1; i <= {{ count($questions) }}; i++) {
                section_6_charts.push(createChart(`section_6_${i}`, {
                    ...dataTemplate2
                }));
            }

            // Fetch initial data (replace 1 with your actual form_id)
            fetchData_section_6('{{ $form->id }}');
        });

        $(document).ready(function() {
            let formId = '{{ $form->id }}'; // Ganti dengan ID form yang sesuai
            $.ajax({
                url: `/kritik-saran-section-6/${formId}`,
                method: "GET",
                success: function(data) {
                    let container = $("#kritikSaranContent-section-6");
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
                    $('#kritikSaranCarousel-section-6').carousel();
                },
                error: function() {
                    console.error("Error mengambil data");
                }
            });
        });
    </script>
@endpush
