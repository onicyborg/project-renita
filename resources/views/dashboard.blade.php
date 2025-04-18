@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h3 page-title mb-4">Welcome back, {{ Auth::user()->name }}!</h2>

                <div class="row">
                    <!-- DateTime Card -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="h5 mb-0">Current Date & Time</h3>
                                        <p class="small text-muted mb-0">{{ now()->format('l, d F Y') }}</p>
                                        <span class="h3 mb-0 text-primary" id="clockDisplay"></span>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fe fe-clock fe-24 text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Audit Card -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="h5 mb-0">Total Audits</h3>
                                        <p class="small text-muted mb-0">Overall audits created</p>
                                        <span class="h3 mb-0 text-success">{{ Auth::user()->form->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fe fe-file-text fe-24 text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Access Card -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h3 class="h5 mb-0">Quick Access</h3>
                                <p class="small text-muted mb-0">Manage your audits</p>
                                <a href="{{ route('master-audit') }}" class="btn btn-primary btn-sm mt-2">
                                    <i class="fe fe-plus fe-16 mr-2"></i>Manage Audit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- System Introduction Card -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <h3 class="h5 mb-0">About Our Audit System</h3>
                                <hr>
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <p class="text-muted">
                                            Welcome to our comprehensive IT Audit Management System, a sophisticated
                                            platform
                                            designed to streamline and enhance your organization's audit processes. Our
                                            system
                                            empowers companies to conduct thorough IT audits with precision and efficiency,
                                            ensuring compliance with industry standards while identifying areas for
                                            improvement
                                            and risk mitigation.
                                        </p>
                                        <p class="text-muted">
                                            With our intuitive interface and structured approach, you can easily manage
                                            audit
                                            cycles, track findings, and generate detailed reports. Whether you're conducting
                                            internal assessments or preparing for external audits, our system provides the
                                            tools and insights you need to maintain robust IT governance.
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('assets/images/ilustrasi_audit.png') }}"
                                            alt="Audit Illustration" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .fe {
            vertical-align: middle;
        }

        .card {
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Real-time clock function
        function showTime() {
            const clockElement = document.getElementById('clockDisplay');
            const now = new Date();
            clockElement.textContent = now.toLocaleTimeString('en-US', {
                hour12: false,
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
        }

        // Update clock every second
        setInterval(showTime, 1000);
        showTime(); // Initial display
    </script>
@endpush
