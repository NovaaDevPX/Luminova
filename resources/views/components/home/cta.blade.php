<x-padding.section-padding class="relative overflow-hidden bg-gradient-to-r from-primary to-[#2a52a8] text-white">
  <div class="container mx-auto px-6 py-20 grid md:grid-cols-2 items-center gap-12 relative z-10">

    <!-- Text Content -->
    <div class="text-center md:text-left">
      <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
        Mulai Buat Janji Medis <br class="hidden md:block" /> dengan Mudah
      </h2>
      <p class="text-white/90 text-lg max-w-xl mb-8">
        Jangan tunda kesehatan Anda. Dapatkan pelayanan medis terbaik dengan mudah, cepat, dan terpercaya melalui <span
          class="font-semibold">Luminova</span>.
      </p>
      <a href="#"
        class="inline-block bg-white text-primary font-semibold px-10 py-4 rounded-xl shadow-lg hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
        Buat Janji Sekarang
      </a>
    </div>

    <!-- Illustration -->
    <div class="flex justify-center md:justify-end">
      <img src="{{ asset('assets/ilustrations/medicine-ilus.svg') }}" alt="Doctor Consultation"
        class="w-[320px] md:w-[400px] lg:w-[460px] drop-shadow-2xl">
    </div>
  </div>

  <!-- Decorative elements -->
  <div class="absolute inset-0 bg-[url('{{ asset('assets/patterns/medical-bg.svg') }}')] opacity-10"></div>
  <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
  <div class="absolute -bottom-10 -left-10 w-56 h-56 bg-blue-400/20 rounded-full blur-3xl"></div>
</x-padding.section-padding>
