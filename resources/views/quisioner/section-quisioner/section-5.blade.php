<form action="{{ route('submit.section-5', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-5">
        <div class="card-header">
            <strong class="card-title">Section 5 (ISMS (Establish &amp; Maintain))</strong>
        </div>
        <div class="card-body">
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
                                $value = data_get($auditee->evaluasi_manajemen_risiko, 'pertanyaan_' . $no);
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
                    <textarea class="form-control" id="kritik_saran" name="kritik_saran" rows="4" {{ $status == 'view' ? 'readonly' : '' }}>{{ $auditee->evaluasi_manajemen_risiko != null && $auditee->evaluasi_manajemen_risiko->kritik_saran != null ? $auditee->evaluasi_manajemen_risiko->kritik_saran : '' }}</textarea>
                </div>
            </div>
        </div> <!-- /. card-body -->
        <div class="card-footer d-flex justify-content-between align-items-center">
            <small class="text-muted">Terakhir diperbarui:
                {{ $auditee->evaluasi_manajemen_risiko != null ? $auditee->evaluasi_manajemen_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
