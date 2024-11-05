@push('links')
  <link rel="stylesheet" href="{{ asset('assets/css/alert.css') }}">
@endpush

@push('contents')
  <div class="alert-container">
    <div class="alert alert-success" role="alert">
      <svg class="icon-success" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round"
          stroke-linecap="round"></path>
      </svg>
      <p class="mt-2 mb-2">Success - Everything went smoothly!</p>
    </div>

    <div class="alert alert-info" role="alert">
      <svg class="icon-info" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round"
          stroke-linecap="round"></path>
      </svg>
      <p class="mt-2 mb-2">Info - This is some information for you.</p>
    </div>

    <div class="alert alert-warning" role="alert">
      <svg class="icon-warning" stroke="currentColor" viewBox="0 0 24 24" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round"
          stroke-linecap="round"></path>
      </svg>
      <p class="mt-2 mb-2">Warning - Be careful with this next step.</p>
    </div>

    <div class="alert alert-error" role="alert">
      <svg class="icon-error" stroke="currentColor" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round"
          stroke-linecap="round"></path>
      </svg>
      <p class="mt-2 mb-2">Error - Something went wrong.</p>
    </div>
  </div>
@endpush

@push('scripts')
  <script src="{{ asset('assets/js/alert.js') }}"></script>
@endpush
