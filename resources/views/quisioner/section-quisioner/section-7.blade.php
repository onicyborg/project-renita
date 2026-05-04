<form action="{{ route('submit.section-7', ['id' => $form->id, 'token' => $token]) }}" class="needs-validation"
    method="post">
    @csrf
    <div class="card shadow mb-4" id="section-7">
        <div class="card-header">
            <strong class="card-title">Section 7 (Monitoring &amp; Review ISMS)</strong>
        </div>
        <div class="card-body">
            @php
                $questions = [
                    'Apakah organisasi melakukan peninjauan berkala terhadap efektivitas ISMS?',
                    'Apakah peninjauan tersebut mencakup kesesuaian dengan kebijakan dan tujuan ISMS?',
                    'Apakah organisasi melakukan evaluasi terhadap praktik keamanan dan privasi?',
                    'Apakah audit ISMS dilakukan secara berkala sesuai rencana?',
                    'Apakah manajemen melakukan tinjauan terhadap ISMS secara rutin?',
                    'Apakah tinjauan manajemen memastikan bahwa ruang lingkup ISMS tetap relevan?',
                    'Apakah organisasi mengidentifikasi peluang perbaikan dari hasil tinjauan ISMS?',
                    'Apakah tindakan dan kejadian yang berdampak pada ISMS dicatat dan didokumentasikan?',
                    'Apakah hasil monitoring dan review digunakan sebagai masukan dalam perbaikan rencana keamanan?',
                    'Apakah organisasi melakukan perbaikan berkelanjutan terhadap ISMS berdasarkan hasil evaluasi?',
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
                                $value = data_get($auditee->pemantauan_manajemen_risiko, 'pertanyaan_' . $no);
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
                    <textarea class="form-control" id="kritik_saran" name="kritik_saran" rows="4" {{ $status == 'view' ? 'readonly' : '' }}>{{ $auditee->pemantauan_manajemen_risiko != null && $auditee->pemantauan_manajemen_risiko->kritik_saran != null ? $auditee->pemantauan_manajemen_risiko->kritik_saran : '' }}</textarea>
                </div>
            </div>
        </div> <!-- /. card-body -->
        <div class="card-footer d-flex justify-content-between align-items-center">
            <small class="text-muted">Terakhir diperbarui:
                {{ $auditee->pemantauan_manajemen_risiko != null ? $auditee->pemantauan_manajemen_risiko->updated_at->diffForHumans() : 'Belum Disimpan' }}</small>
            @if ($status != 'view')
                <button type="submit" class="btn btn-primary">Save</button>
            @endif
        </div>
    </div> <!-- /. card -->
</form>
