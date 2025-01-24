@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">List Form Audit</h5>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalCreateForm">
                                    Create New Form
                                </button>
                            </div>
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Company Name</th>
                                            <th>Year of Audit</th>
                                            <th>Description</th>
                                            <th>Created At</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($forms as $no => $item)
                                            <tr>
                                                <td>{{ $no + 1 }}</td>
                                                <td>{{ $item->company_name }}</td>
                                                <td>{{ $item->tahun_audit }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>{{ $item->created_at->diffForHumans() }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-sm text-muted"
                                                        onclick="copyToClipboard('{{ url($item->id . '/quisioner') }}')">
                                                        <i class="fe fe-link fe-16"></i> <!-- Ikon Salin -->
                                                    </button>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
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
                                                        <a class="dropdown-item"
                                                            href="{{ route('form.detail', $item->id) }}">
                                                            Detail
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="modalEditForm-{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modalEditFormLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalEditFormLabel">Edit Form</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('form.update', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="company_name">Company Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_name"
                                                                        value="{{ $item->company_name }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tahun_audit">Year of Audit</label>
                                                                    <input type="number" class="form-control"
                                                                        name="tahun_audit" value="{{ $item->tahun_audit }}"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="deskripsi">Description</label>
                                                                    <textarea class="form-control" name="deskripsi" rows="3" required>{{ $item->deskripsi }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Delete -->
                                            <div class="modal fade" id="modalDeleteForm-{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modalDeleteFormLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalDeleteFormLabel">Delete
                                                                Confirmation</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure you want to delete this form?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('form.delete', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

    <!-- Modal Create Form -->
    <div class="modal fade" id="modalCreateForm" tabindex="-1" role="dialog" aria-labelledby="modalCreateFormLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCreateFormLabel">Create New Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('form.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" name="company_name" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun_audit">Year of Audit</label>
                            <input type="number" class="form-control" name="tahun_audit" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Description</label>
                            <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="copyAlert" class="alert alert-success alert-dismissible fade d-none" role="alert"
        style="position: fixed; bottom: 1rem; right: 1rem; z-index: 1050; width: 400px;">
        <span class="fe fe-alert-circle fe-16 mr-2"></span>
        Berhasil! Link Kuisioner Berhasil Disalin.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
@endpush

@push('scripts')
    <script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>
    <script src='{{ asset('js/dataTables.bootstrap4.min.js') }}'></script>
    <script>
        function copyToClipboard(link) {
            // Membuat elemen input sementara
            const tempInput = document.createElement('input');
            tempInput.value = link; // Isi elemen dengan teks yang akan disalin
            document.body.appendChild(tempInput);

            // Menyalin teks ke clipboard
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            // Menampilkan alert notifikasi
            const alertEl = document.getElementById('copyAlert');
            alertEl.classList.remove('d-none'); // Tampilkan alert
            alertEl.classList.add('show'); // Tambahkan animasi fade-in
            setTimeout(() => {
                alertEl.classList.remove('show'); // Hilangkan animasi fade-in
                alertEl.classList.add('d-none'); // Sembunyikan alert setelah 3 detik
            }, 3000);
        }

        const activeTabId = localStorage.getItem('activeTab');
        if (activeTabId) {
            localStorage.removeItem('activeTab');
        }

        $('#dataTable-1').DataTable({
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        @endif

        @if ($errors->any())
            Swal.fire({
                title: 'Error!',
                html: `
                <ul style="text-align: left;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            `,
                icon: 'error',
                confirmButtonText: 'Try Again'
            });
        @endif
    </script>
@endpush
