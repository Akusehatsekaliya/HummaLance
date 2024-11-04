<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>

  <body>
    <div class="no-1">
      <style>
        /* Sa-Container spacing */
        .sa-container {
          padding: 1rem;
        }

        .sa-alert {
          width: max-content;
          border-width: 0;
          border-style: solid;
          padding: 0.5rem;
          padding-right: 10px;
          border-left-width: 4px;
          border-radius: 0.5rem;
          display: flex;
          align-items: center;
          transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
          cursor: pointer;
        }

        .sa-alert:hover {
          transform: scale(1.05);
        }

        /* Success sa-alert */
        .sa-alert-success {
          background-color: #d1fae5;
          /* bg-green-100 */
          border-color: #10b981;
          /* border-green-500 */
          /* color: #065f46; */
          /* text-green-900 */
        }

        .sa-alert-success:hover {
          background-color: #a7f3d0;
          /* hover:bg-green-200 */
        }

        /* Info sa-alert */
        .sa-alert-info {
          background-color: #bfdbfe;
          /* bg-blue-100 */
          border-color: #3b82f6;
          /* border-blue-500 */
          /* color: #1e3a8a; */
          /* text-blue-900 */
        }

        .sa-alert-info:hover {
          background-color: #93c5fd;
          /* hover:bg-blue-200 */
        }

        /* Warning sa-alert */
        .sa-alert-warning {
          background-color: #fef3c7;
          /* bg-yellow-100 */
          border-color: #f59e0b;
          /* border-yellow-500 */
          /* color: #78350f; */
          /* text-yellow-900 */
        }

        .sa-alert-warning:hover {
          background-color: #fde68a;
          /* hover:bg-yellow-200 */
        }

        /* Error sa-alert */
        .sa-alert-error {
          background-color: #fee2e2;
          /* bg-red-100 */
          border-color: #ef4444;
          /* border-red-500 */
          /* color: #7f1d1d; */
          /* text-red-900 */
        }

        .sa-alert-error:hover {
          background-color: #fecaca;
          /* hover:bg-red-200 */
        }

        /* SVG Icon */
        .sa-alert svg {
          height: 1.25rem;
          width: 1.25rem;
          flex-shrink: 0;
          margin-right: 0.5rem;
        }

        .icon-success {
          color: #059669;
          /* text-green-600 */
        }

        .icon-info {
          color: #2563eb;
          /* text-blue-600 */
        }

        .icon-warning {
          color: #d97706;
          /* text-yellow-600 */
        }

        .icon-error {
          color: #dc2626;
          /* text-red-600 */
        }

        /* Text styling */
        .sa-alert p {
          font-size: 0.75rem;
          font-weight: 600;
        }
      </style>
      <div class="sa-container">
        <div class="sa-alert sa-alert-success" role="alert">
          <svg class="icon-success" stroke="currentColor" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round"
              stroke-linecap="round"></path>
          </svg>
          <p class="mt-2 mb-2">Success - Everything went smoothly!</p>
        </div>

        <div class="sa-alert sa-alert-info" role="alert">
          <svg class="icon-info" stroke="currentColor" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round"
              stroke-linecap="round"></path>
          </svg>
          <p class="mt-2 mb-2">Info - This is some information for you.</p>
        </div>

        <div class="sa-alert sa-alert-warning" role="alert">
          <svg class="icon-warning" stroke="currentColor" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round"
              stroke-linecap="round"></path>
          </svg>
          <p class="mt-2 mb-2">Warning - Be careful with this next step.</p>
        </div>

        <div class="sa-alert sa-alert-error" role="alert">
          <svg class="icon-error" stroke="currentColor" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round"
              stroke-linecap="round"></path>
          </svg>
          <p class="mt-2 mb-2">Error - Something went wrong.</p>
        </div>
      </div>


    </div>


  </body>

</html>
