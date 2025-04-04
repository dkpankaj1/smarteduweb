@extends('layouts.admin')

@section('title', 'Email Configuration')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Email Configuration</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#testEmailModal">
                            <i class="fas fa-paper-plane me-2"></i>Test Configuration
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.email-configurations.update') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        
                        <div class="row g-4">
                            <!-- Mail Driver -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mail Driver</label>
                                    <select name="mail_driver" class="form-select @error('mail_driver') is-invalid @enderror">
                                        <option value="smtp" {{ old('mail_driver', $config->mail_driver ?? '') == 'smtp' ? 'selected' : '' }}>SMTP</option>
                                        <option value="mail" {{ old('mail_driver', $config->mail_driver ?? '') == 'mail' ? 'selected' : '' }}>Mail</option>
                                        <option value="sendmail" {{ old('mail_driver', $config->mail_driver ?? '') == 'sendmail' ? 'selected' : '' }}>Sendmail</option>
                                    </select>
                                    @error('mail_driver')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Mail Host -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mail Host</label>
                                    <input type="text" name="mail_host" class="form-control @error('mail_host') is-invalid @enderror" 
                                           value="{{ old('mail_host', $config->mail_host ?? '') }}" placeholder="smtp.mailtrap.io">
                                    @error('mail_host')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Mail Port -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mail Port</label>
                                    <input type="text" name="mail_port" class="form-control @error('mail_port') is-invalid @enderror" 
                                           value="{{ old('mail_port', $config->mail_port ?? '') }}" placeholder="2525">
                                    @error('mail_port')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Mail Username -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mail Username</label>
                                    <input type="text" name="mail_username" class="form-control @error('mail_username') is-invalid @enderror" 
                                           value="{{ old('mail_username', $config->mail_username ?? '') }}">
                                    @error('mail_username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Mail Password -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mail Password</label>
                                    <div class="input-group">
                                        <input type="password" name="mail_password" class="form-control @error('mail_password') is-invalid @enderror" 
                                               value="{{ old('mail_password', $config->mail_password ?? '') }}">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('mail_password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Mail Encryption -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mail Encryption</label>
                                    <select name="mail_encryption" class="form-select @error('mail_encryption') is-invalid @enderror">
                                        <option value="tls" {{ old('mail_encryption', $config->mail_encryption ?? '') == 'tls' ? 'selected' : '' }}>TLS</option>
                                        <option value="ssl" {{ old('mail_encryption', $config->mail_encryption ?? '') == 'ssl' ? 'selected' : '' }}>SSL</option>
                                        <option value="null" {{ old('mail_encryption', $config->mail_encryption ?? '') == 'null' ? 'selected' : '' }}>None</option>
                                    </select>
                                    @error('mail_encryption')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- From Address -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">From Address</label>
                                    <input type="email" name="mail_from_address" class="form-control @error('mail_from_address') is-invalid @enderror" 
                                           value="{{ old('mail_from_address', $config->mail_from_address ?? '') }}">
                                    @error('mail_from_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- From Name -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">From Name</label>
                                    <input type="text" name="mail_from_name" class="form-control @error('mail_from_name') is-invalid @enderror" 
                                           value="{{ old('mail_from_name', $config->mail_from_name ?? '') }}">
                                    @error('mail_from_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Active Status -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" name="is_active" class="form-check-input" id="isActive" 
                                               {{ old('is_active', $config->is_active ?? true) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="isActive">Active Configuration</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Save Configuration
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Test Email Modal -->
<div class="modal fade" id="testEmailModal" tabindex="-1" aria-labelledby="testEmailModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testEmailModalLabel">Test Email Configuration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.email-configurations.test') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Test Email Address</label>
                        <input type="email" name="test_email" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane me-2"></i>Send Test Email
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Password toggle functionality
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('input[name="mail_password"]');

    togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye');
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script>
@endpush

@push('styles')
<style>
.card {
    border: none;
    border-radius: 10px;
}

.card-header {
    border-bottom: 1px solid rgba(0,0,0,.125);
    border-radius: 10px 10px 0 0 !important;
}

.form-control, .form-select {
    border-radius: 8px;
    padding: 0.5rem 1rem;
    border: 1px solid #dee2e6;
}

.form-control:focus, .form-select:focus {
    border-color: #86b7fe;
    box-shadow: 0 0 0 0.25rem rgba(13,110,253,.25);
}

.btn {
    border-radius: 8px;
    padding: 0.5rem 1.5rem;
}

.form-check-input:checked {
    background-color: #0d6efd;
    border-color: #0d6efd;
}

.modal-content {
    border-radius: 10px;
}

.modal-header {
    border-bottom: 1px solid rgba(0,0,0,.125);
}

.modal-footer {
    border-top: 1px solid rgba(0,0,0,.125);
}
</style>
@endpush
@endsection 