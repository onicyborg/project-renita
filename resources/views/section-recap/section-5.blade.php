@php
    $questions = [
        'Apakah organisasi telah menetapkan ruang lingkup dan batasan ISMS yang mencakup organisasi, lokasi, aset, dan teknologi?',
        'Apakah terdapat dokumentasi yang menjelaskan pengecualian ruang lingkup ISMS beserta alasannya?',
        'Apakah ISMS telah ditetapkan sesuai dengan kebijakan dan konteks operasional organisasi?',
        'Apakah ISMS telah diselaraskan dengan pendekatan pengelolaan keamanan secara keseluruhan di organisasi?',
        'Apakah terdapat persetujuan manajemen dalam implementasi, operasional, atau perubahan ISMS?',
        'Apakah organisasi memiliki dokumen statement of applicability yang menggambarkan ruang lingkup ISMS?',
        'Apakah dokumen statement of applicability tersebut diperbarui secara berkala?',
        'Apakah peran dan tanggung jawab dalam manajemen keamanan informasi telah ditentukan dengan jelas?',
        'Apakah peran dan tanggung jawab tersebut telah dikomunikasikan kepada pihak terkait?',
        'Apakah pendekatan ISMS telah dikomunikasikan kepada seluruh pemangku kepentingan?',
    ];
@endphp

<h3 class="mt-3 text-center">ISMS (Establish &amp; Maintain)</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong> sesuai dengan
    kondisi yang berlaku di organisasi Anda.
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
            @foreach ($questions as $i => $question)
                <tr>
                    <td>{{ $question }}</td>
                    <td>
                        <div style="width: 120px; height: 120px; margin: auto;">
                            <canvas id="section_5_{{ $i + 1 }}"></canvas>
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
    <h4 class="mt-4 text-center">Kritik dan Saran ISMS (Establish &amp; Maintain)</h4>
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
        let section_5_charts = [];

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
                    for (let i = 1; i <= {{ count($questions) }}; i++) {
                        const chart = section_5_charts[i - 1];
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
            for (let i = 1; i <= {{ count($questions) }}; i++) {
                section_5_charts.push(createChart(`section_5_${i}`, {
                    ...dataTemplate2
                }));
            }

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
