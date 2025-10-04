<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-bg">
  <x-partials.navbar class="w-full" />
  <main class="w-full h-full mx-auto">
    <!-- Alerts -->
    @if (session('success'))
      <div id="alert-success"
        class="fixed z-50 flex items-center p-4 mb-4 text-sm text-green-700 transition-opacity duration-500 bg-green-100 rounded-lg shadow-lg top-5 right-5"
        role="alert">
        <svg class="w-5 h-5 mr-2 text-green-700" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293A1 1 0 106.293 10.707l2 2a1 1 0 001.414 0l4-4z"
            clip-rule="evenodd"></path>
        </svg>
        <span>{{ session('success') }}</span>
      </div>
    @endif

    @if (session('error'))
      <div id="alert-error"
        class="fixed z-50 flex items-center p-4 mb-4 text-sm text-red-700 transition-opacity duration-500 bg-red-100 rounded-lg shadow-lg top-5 right-5"
        role="alert">
        <svg class="w-5 h-5 mr-2 text-red-700" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M18 10A8 8 0 11 2 10a8 8 0 0116 0zm-9-4a1 1 0 012 0v4a1 1 0 01-2 0V6zm1 8a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
            clip-rule="evenodd"></path>
        </svg>
        <span>{{ session('error') }}</span>
      </div>
    @endif

    @if ($errors->any())
      <div id="alert-validation"
        class="fixed z-50 p-4 mb-4 text-sm text-red-700 transition-opacity duration-500 bg-red-100 rounded-lg shadow-lg top-5 right-5"
        role="alert">
        <ul class="pl-5 space-y-1 list-none">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    {{ $slot }}
  </main>
  <x-partials.footer class="w-full" />

  <script>
    // Tutup otomatis setelah 3 detik
    setTimeout(() => {
      document.querySelectorAll('[id^="alert-"]').forEach((el) => {
        el.classList.add('opacity-0'); // animasi fade out
        setTimeout(() => el.remove(), 500); // hapus dari DOM setelah animasi
      });
    }, 3000);
  </script>
</body>

</html>
