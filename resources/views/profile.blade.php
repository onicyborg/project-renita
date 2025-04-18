@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <h2 class="h3 mb-4 page-title">Settings</h2>
                <div class="my-4">
                    <form id="profileForm" action="/update-profile" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mt-5 align-items-center">
                            <div class="col-md-3 text-center mb-5">
                                <div class="avatar avatar-xl">
                                    <img src="{{ asset('assets/images/default_profile.png') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                                        <p class="small mb-3"><span class="badge badge-dark">{{ Auth::user()->username }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-group">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="inputEmail4" value="{{ old('email', Auth::user()->email) }}" placeholder="mail@mail.com"
                                disabled>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', Auth::user()->name) }}" placeholder="John Doe" disabled>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username"
                                    class="form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username', Auth::user()->username) }}" placeholder="johndoe" disabled>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phone_number">Phone Number</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                    </div>
                                    <input type="text" name="phone_number" id="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        placeholder="81234567890"
                                        value="{{ old('phone_number', Auth::user()->phone_number) }}" disabled>
                                    @error('phone_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="4"
                                    disabled>{{ old('address', Auth::user()->address) }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-primary" id="editBtn">Update Profile</button>
                            <button type="button" class="btn btn-secondary" id="changePasswordBtn" data-toggle="modal"
                                data-target="#changePasswordModal">Change Password</button>
                            <button type="submit" class="btn btn-success d-none" id="saveBtn">Save</button>
                            <button type="button" class="btn btn-danger d-none" id="cancelBtn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog"
        aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/change-password" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="old_password">Old Password</label>
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                id="old_password" name="old_password" required>
                            @error('old_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                id="new_password" name="new_password" required>
                            @error('new_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="new_password_confirmation">Confirm New Password</label>
                            <input type="password" class="form-control" id="new_password_confirmation"
                                name="new_password_confirmation" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('profileForm');
            const editBtn = document.getElementById('editBtn');
            const saveBtn = document.getElementById('saveBtn');
            const cancelBtn = document.getElementById('cancelBtn');
            const changePasswordBtn = document.getElementById('changePasswordBtn');
            const formInputs = form.querySelectorAll('input, textarea');

            // Function to toggle edit mode
            function toggleEditMode(enabled) {
                formInputs.forEach(input => {
                    input.disabled = !enabled;
                });

                if (enabled) {
                    editBtn.classList.add('d-none');
                    changePasswordBtn.classList.add('d-none');
                    saveBtn.classList.remove('d-none');
                    cancelBtn.classList.remove('d-none');
                } else {
                    editBtn.classList.remove('d-none');
                    changePasswordBtn.classList.remove('d-none');
                    saveBtn.classList.add('d-none');
                    cancelBtn.classList.add('d-none');
                }
            }

            // Edit button click handler
            editBtn.addEventListener('click', () => {
                toggleEditMode(true);
            });

            // Cancel button click handler
            cancelBtn.addEventListener('click', () => {
                form.reset();
                toggleEditMode(false);
            });
        });

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
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}',
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
