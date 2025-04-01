<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    @if ($status == 'view')
        <title>IT-RiskLens - Response {{ $auditee->name }} ({{ $auditee->jabatan }})</title>
    @else
        <title>IT-RiskLens - Quisioner</title>
    @endif
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
</head>

<body class="light">
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12 my-4">

                    <div class="mb-4">
                        @if ($status == 'view')
                            <h2 class="text-center">
                                Quisioner Audit {{ $auditee->form->company_name }} Periode
                                {{ \Carbon\Carbon::createFromFormat('Y-m', $auditee->form->periode_audit)->translatedFormat('F Y') }}
                            </h2>
                            <p class="text-center text-muted">
                                {{ $auditee->form->deskripsi }}
                            </p>
                            <p class="text-center text-bold">
                                Auditee : {{ $auditee->name }} ({{ $auditee->jabatan }})
                            </p>
                        @else
                            <h2 class="text-center">
                                Quisioner Audit {{ $form->company_name }} Periode
                                {{ \Carbon\Carbon::createFromFormat('Y-m', $auditee->form->periode_audit)->translatedFormat('F Y') }}
                            </h2>
                            <p class="text-center text-muted">
                                {{ $form->deskripsi }}
                            </p>
                        @endif
                    </div>


                    {{-- section-1 --}}
                    @include('quisioner.section-quisioner.section-1')

                    {{-- section-2 --}}
                    @include('quisioner.section-quisioner.section-2')

                    {{-- section-3 --}}
                    @include('quisioner.section-quisioner.section-3')

                    {{-- section-4 --}}
                    @include('quisioner.section-quisioner.section-4')

                    {{-- section-5 --}}
                    @include('quisioner.section-quisioner.section-5')

                    {{-- section-6 --}}
                    @include('quisioner.section-quisioner.section-6')

                    {{-- section-7 --}}
                    @include('quisioner.section-quisioner.section-7')

                    {{-- section-8 --}}
                    @include('quisioner.section-quisioner.section-8')

                    {{-- section-9 --}}
                    @include('quisioner.section-quisioner.section-9')

                    {{-- section-10 --}}
                    @include('quisioner.section-quisioner.section-10')

                    {{-- section-11 --}}
                    @include('quisioner.section-quisioner.section-11')

                    {{-- section-12 --}}
                    @include('quisioner.section-quisioner.section-12')

                    {{-- section-13 --}}
                    @include('quisioner.section-quisioner.section-13')

                </div> <!-- /. col -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/apps.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- Flash Messages -->
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

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
                title: 'Gagal!',
                text: 'Terjadi kesalahan. Silakan cek kembali.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
    @stack('scripts')

    @if (session('scrollTo'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elementId = '{{ session('scrollTo') }}';
                var element = document.getElementById(elementId);
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        </script>
    @endif
</body>

</html>
