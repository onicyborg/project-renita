<h3 class="mt-3 text-center">Master Data Auditee</h3>

<!-- Deskripsi -->
<p class="mt-3">
    Manage responden yang akan dijadikan auditee dalam proses audit di Kuisioner ini
</p>

<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalCreateForm">
    Create New Auditee
</button>

<!-- Tabel -->
<div class="table-responsive mt-4">
    <table class="table table-bordered" id="master-auditee">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Token</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($auditee as $no => $item)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>
                        <span id="token-{{ $item->id }}">{{ $item->token }}
                            <button class="btn btn-sm btn-link" onclick="copyToClipboard('{{ $item->token }}')">
                                <i class="fe fe-copy fe-16"></i> <!-- Ikon Salin -->
                            </button>
                        </span>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" data-toggle="modal"
                                data-target="#modalEditForm-{{ $item->id }}">
                                Edit
                            </button>
                            <button class="dropdown-item" data-toggle="modal"
                                data-target="#modalDeleteForm-{{ $item->id }}">
                                Remove
                            </button>
                        </div>
                    </td>
                </tr>


                <div class="modal fade" id="modalEditForm-{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="modalEditFormLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEditFormLabel">Edit Auditee</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('auditee.edit', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan"
                                            value="{{ $item->jabatan }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="token">Token</label>
                                        <input type="text" class="form-control" name="token"
                                            value="{{ $item->token }}" readonly>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Delete -->
                <div class="modal fade" id="modalDeleteForm-{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="modalDeleteFormLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDeleteFormLabel">Delete
                                    Confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this auditee?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form action="{{ route('auditee.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="modalCreateForm" tabindex="-1" role="dialog" aria-labelledby="modalCreateFormLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateFormLabel">Create New Auditee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('auditee.create', $form->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Auditee</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="copyAlert" class="alert alert-success alert-dismissible fade d-none" role="alert" style="position: fixed; bottom: 1rem; right: 1rem; z-index: 1050; width: 400px;">
    <span class="fe fe-alert-circle fe-16 mr-2"></span>
    Berhasil! Token berhasil disalin ke clipboard.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>



@push('scripts')
    <script>
        $('#master-auditee').DataTable({
            columnDefs: [{
                    width: "3%",
                    targets: 0
                }, // No
                {
                    width: "20%",
                    targets: 1
                }, // Nama
                {
                    width: "20%",
                    targets: 2
                }, // Jabatan
                {
                    width: "47%",
                    targets: 3
                }, // Token
                {
                    width: "10%",
                    targets: 4
                }, // Action
            ],
            autoWidth: false, // Nonaktifkan penghitungan otomatis
        });


        function copyToClipboard(text) {
            // Buat elemen sementara untuk menyimpan teks
            const tempInput = document.createElement('input');
            tempInput.value = text;
            document.body.appendChild(tempInput);

            // Salin teks ke clipboard
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            // Tampilkan alert di bagian bawah kanan
            const alertEl = document.getElementById('copyAlert');
            alertEl.classList.remove('d-none'); // Tampilkan alert
            alertEl.classList.add('show'); // Tambahkan animasi fade-in
            setTimeout(() => {
                alertEl.classList.remove('show'); // Hilangkan animasi fade-in
                alertEl.classList.add('d-none'); // Sembunyikan alert setelah 3 detik
            }, 3000);
        }
    </script>
@endpush
