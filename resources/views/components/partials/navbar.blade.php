<header class="sticky top-0 z-50 bg-white shadow-sm">
  <div class="container px-4 py-4 mx-auto">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <a href="{{ route('patient.index') }}" class="flex items-end gap-3">
        <div class="w-[35px] h-[35px]">
          <img src="{{ asset('assets/logos/Luminova.png') }}" alt="" class="w-full h-full">
        </div>
        <div class="-mb-1 text-2xl font-bold text-accent">Luminova</div>
      </a>

      <nav class="hidden space-x-8 md:flex">
        <a href="{{ route('patient.index') }}" class="text-gray-600 hover:text-primary transition-3s">Beranda</a>
        <a href="{{ route('doctor.all-doctor') }}" class="text-gray-600 hover:text-primary transition-3s">Dokter</a>
        <a href="#" class="text-gray-600 hover:text-primary transition-3s">Klinik</a>
        <a href="{{ route('patient.about-we') }}" class="text-gray-600 hover:text-primary transition-3s">Tentang
          Kami</a>
        <a href="{{ route('patient.contact-we') }}" class="text-gray-600 hover:text-primary transition-3s">Kontak</a>
      </nav>

      <!-- Social Icons -->
      <div class="flex space-x-4 text-xl text-gray-600">
        <a href="#" class="hover:text-accent transition-3s">
          <i class="fa-brands fa-facebook fa-thin"></i>
        </a>
        <a href="#" class="hover:text-accent transition-3s">
          <i class="fa-brands fa-instagram fa-thin"></i>
        </a>
        <a href="#" class="hover:text-accent transition-3s">
          <i class="fa-brands fa-twitter fa-thin"></i>
        </a>
        <a href="#" class="hover:text-accent transition-3s">
          <i class="fa-brands fa-linkedin fa-thin"></i>
        </a>
      </div>
    </div>
  </div>
</header>
