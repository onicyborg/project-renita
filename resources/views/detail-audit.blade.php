@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body py-4 mb-1">
                            <div class="row">
                                <div class="col-2">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                            href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">Rekap Respon</a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                            href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">Manage Auditee</a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                            href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                            aria-selected="false">Respon Perorangan</a>
                                    </div>
                                </div>
                                <div class="col-10">
                                    {{-- rekap respon --}}
                                    <div class="tab-content mb-4" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <!-- Section 1 -->
                                            @include('section-recap.section-1')

                                            <!-- Section 2 -->
                                            @include('section-recap.section-2')

                                            <!-- Section 3 -->
                                            @include('section-recap.section-3')

                                            <!-- Section 4 -->
                                            @include('section-recap.section-4')

                                            <!-- Section 5 -->
                                            @include('section-recap.section-5')

                                            <!-- Section 6 -->
                                            @include('section-recap.section-6')

                                            <!-- Section 7 -->
                                            @include('section-recap.section-7')

                                            <!-- Section 8 -->
                                            @include('section-recap.section-8')

                                            <!-- Section 9 -->
                                            @include('section-recap.section-9')

                                            <!-- Section 10 -->
                                            @include('section-recap.section-10')

                                            <!-- Section 11 -->
                                            @include('section-recap.section-11')

                                            <!-- Section 12 -->
                                            @include('section-recap.section-12')

                                            <!-- Section 13 -->
                                            @include('section-recap.section-13')
                                        </div>

                                        <div class="tab-pane fade mb-4" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            @include('section-auditee.master-auditee')
                                        </div>
                                        <div class="tab-pane fade mb-4" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab"> Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                            single-origin coffee nulla assumenda shoreditch et. </div>
                                        <div class="tab-pane fade mb-4" id="v-pills-settings" role="tabpanel"
                                            aria-labelledby="v-pills-settings-tab"> Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                            single-origin coffee nulla assumenda shoreditch et. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
    @stack('styles')
    <style>
        /* Membuat konten tab scrollable */
        .tab-content {
            max-height: 70vh;
            /* Tinggi maksimum, 70% dari tinggi viewport */
            overflow-y: auto;
            /* Mengaktifkan scroll hanya pada arah vertikal */
        }
    </style>
@endpush

@push('scripts')
    <script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>
    <script src='{{ asset('js/dataTables.bootstrap4.min.js') }}'></script>
    @stack('scripts')
    <script>
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

        document.addEventListener('DOMContentLoaded', function() {
            const tabLinks = document.querySelectorAll('#v-pills-tab .nav-link');

            // Simpan ID tab aktif ke localStorage saat tab diklik
            tabLinks.forEach(tab => {
                tab.addEventListener('click', function() {
                    localStorage.setItem('activeTab', this.id);
                });
            });

            // Cek apakah ada tab aktif di localStorage
            const activeTabId = localStorage.getItem('activeTab');
            if (activeTabId) {
                // Matikan tab pertama
                tabLinks.forEach(tab => {
                    tab.classList.remove('active');
                    tab.setAttribute('aria-selected', 'false');
                });

                // Aktifkan tab yang tersimpan
                const activeTab = document.getElementById(activeTabId);
                if (activeTab) {
                    activeTab.classList.add('active');
                    activeTab.setAttribute('aria-selected', 'true');

                    // Tampilkan konten tab yang sesuai
                    const tabContentId = activeTab.getAttribute('href');
                    document.querySelectorAll('.tab-pane').forEach(content => {
                        content.classList.remove('show', 'active');
                    });
                    document.querySelector(tabContentId).classList.add('show', 'active');
                }
            }else{
                // Jika tidak ada tab yang tersimpan, aktifkan tab pertama
                tabLinks[0].classList.add('active');
                tabLinks[0].setAttribute('aria-selected', 'true');
                document.querySelector(tabLinks[0].getAttribute('href')).classList.add('show', 'active');
            }
        });
    </script>
@endpush
