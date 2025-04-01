<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>A-Risk - Login</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
</head>

<body class="light">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-4 col-md-6 col-10 mx-auto text-center" action="{{ route('token.submit', $form->id) }}" method="POST">
                @csrf
                <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                    </g>
                </svg>
                <h1 class="h4 mb-3 mt-3">IT-RiskLens - Quisioner</h1>

                <!-- Judul Kuisioner -->
                <h2 class="h5 mb-2">Survey Audit {{ $form->company_name }} Periode {{ \Carbon\Carbon::createFromFormat('Y-m', $form->periode_audit)->translatedFormat('F Y') }}</h2>
                <!-- Deskripsi Kuisioner -->
                <p class="text-muted mb-4">
                    Silakan masukkan token kuisioner Anda untuk memulai pengisian survey ini.
                </p>

                <!-- Input Token Auditee -->
                <div class="form-group">
                    <label for="auditeeToken" class="sr-only">Token Auditee Anda</label>
                    <input type="text" id="auditeeToken" name="token" class="form-control form-control-lg"
                        placeholder="Masukkan Token Auditee" required>
                </div>

                <!-- Tombol Submit -->
                <button class="btn btn-lg btn-primary btn-block" type="submit">Mulai Isi Kuisioner</button>
                <p class="mt-5 mb-3 text-muted">© 2025</p>
            </form>
        </div>
    </div>

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
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        @endif

        @if (session('error'))
            Swal.fire({
                title: 'Gagal!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
</body>

</html>
