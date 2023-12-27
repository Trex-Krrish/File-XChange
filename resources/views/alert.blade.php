@if (session()->has('error'))
    <div class="error-alert-container alert-body">
        <i class="fa-duotone fa-triangle-exclamation main-icon"></i>
        <p class="alert">{{ Session::get('error') }}</p>
        <i class="fa-regular fa-xmark close-icon"></i>
    </div>
@endif

@if (session()->has('success'))
    <div class="success-alert-container alert-body">
        <i class="fa-duotone fa-circle-check main-icon"></i>
        <p class="alert">{{ session('success')  }} </p>
        <i class="fa-regular fa-xmark close-icon"></i>
    </div>
@endif
