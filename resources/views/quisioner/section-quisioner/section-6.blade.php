<form action="{{ route('submit.section-6', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-6">
        <div class="card-header">
            <strong class="card-title">Section 6 (Risk Treatment Plan)</strong>
        </div>
        <div class="card-body">
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
            <p class="mt-3">
                Untuk setiap pernyataan yang diberikan, harap pilih <strong>Ya</strong> atau <strong>Tidak</strong>
                sesuai dengan kondisi yang berlaku di organisasi Anda.
            </p>

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
                            @php
                                $no = $i + 1;
                                $value = data_get($auditee->arahan_manajemen_risiko, 'pertanyaan_' . $no);
                            @endphp
                            <tr>
                                <td>{{ $question }}</td>
                                <td>
                                    <select class="custom-select text-center" id="custom-select"
                                        name="pertanyaan_{{ $no }}" required {{ $status == 'view' ? 'disabled' : '' }}>
                                        <option value="">- Pilih -</option>
                                        <option value="Ya" {{ $value === 'Ya' ? 'selected' : '' }}>Ya</option>
                                        <option value="Tidak" {{ $value === 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                    </select>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="form-group mt-4">
                    <label for="kritik_saran"><strong>Kritik dan Saran</strong></label>
                    <textarea class="form-control" id="kritik_saran" name="kritik_saran" rows="4" {{ $status == 'view' ? 'readonly' : '' }}>{{ $auditee->arahan_manajemen_risiko != null && $auditee->arahan_manajemen_risiko->kritik_saran != null ? $auditee->arahan_manajemen_risiko->kritik_saran : '' }}</textarea>
                </div>
            </div>
        </div> <!-- /. card-body -->
        <div class="card-footer d-flex justify-content-between align-items-center">
            <small class="text-muted">Terakhir diperbarui:
                {{ $auditee->arahan_manajemen_risiko != null ? $auditee->arahan_manajemen_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
