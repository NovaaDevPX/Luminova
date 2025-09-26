<x-guest-layout title="Tentang Kami">
  <x-padding.section-padding class="py-16 bg-gray-50">
    <!-- Hero Section -->
    <div class="max-w-4xl mx-auto mb-16 text-center">
      <div class="flex flex-col items-center justify-center gap-6 md:flex-row">
        <div class="md:w-1/2">
          <h1 class="text-4xl font-bold text-accent">Tentang Kami</h1>
          <p class="mt-4 text-gray-600">
            Luminova hadir untuk memberikan pengalaman layanan kesehatan yang lebih mudah, cepat, dan terpercaya.
          </p>
        </div>
        <div class="md:w-1/2">
          <img src="{{ asset('assets/ilustrations/Doctors-pana.svg') }}" alt="Doctor Illustration"
            class="w-[300px] mx-auto">
        </div>
      </div>
    </div>

    <!-- Visi & Misi -->
    <div class="grid grid-cols-1 gap-10 mb-20 md:grid-cols-2">
      <div class="p-8 text-center bg-white shadow-sm rounded-2xl">
        <i class="mb-4 text-4xl text-blue-600 fa-solid fa-eye"></i>
        <h2 class="mb-4 text-2xl font-bold text-gray-800">Visi</h2>
        <p class="leading-relaxed text-gray-600">
          Menjadi platform kesehatan digital terpercaya yang memberikan kemudahan bagi pasien dalam mengakses layanan
          medis berkualitas.
        </p>
      </div>
      <div class="p-8 text-center bg-white shadow-sm rounded-2xl">
        <i class="mb-4 text-4xl text-blue-600 fa-solid fa-list-check"></i>
        <h2 class="mb-4 text-2xl font-bold text-gray-800">Misi</h2>
        <ul class="pl-6 space-y-2 text-left text-gray-600 list-disc">
          <li>Menghubungkan pasien dengan dokter terpercaya.</li>
          <li>Memberikan akses cepat untuk membuat janji medis.</li>
          <li>Menciptakan pengalaman layanan kesehatan yang nyaman dan modern.</li>
        </ul>
      </div>
    </div>

    <!-- Kenapa Luminova -->
    <div class="mb-20">
      <h2 class="mb-12 text-3xl font-bold text-center text-accent">Kenapa Memilih Luminova?</h2>
      <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
        <div class="p-8 text-center bg-white shadow-sm rounded-2xl">
          <i class="mb-4 text-3xl text-blue-600 fa-solid fa-bolt"></i>
          <h3 class="text-lg font-semibold text-gray-800">Cepat</h3>
          <p class="mt-2 text-gray-600">Buat janji medis hanya dalam hitungan menit.</p>
        </div>
        <div class="p-8 text-center bg-white shadow-sm rounded-2xl">
          <i class="mb-4 text-3xl text-blue-600 fa-solid fa-shield-heart"></i>
          <h3 class="text-lg font-semibold text-gray-800">Terpercaya</h3>
          <p class="mt-2 text-gray-600">Dokter dan klinik dengan reputasi yang terjamin.</p>
        </div>
        <div class="p-8 text-center bg-white shadow-sm rounded-2xl">
          <i class="mb-4 text-3xl text-blue-600 fa-solid fa-hand-holding-medical"></i>
          <h3 class="text-lg font-semibold text-gray-800">Nyaman</h3>
          <p class="mt-2 text-gray-600">Antarmuka modern, bersih, dan mudah digunakan.</p>
        </div>
      </div>
    </div>

    <!-- Call To Action -->
    <div class="px-6 py-12 text-center text-white bg-blue-600 rounded-2xl">
      <h2 class="mb-4 text-3xl font-bold">Siap Buat Janji Medis Anda?</h2>
      <p class="mb-6 text-blue-100">Mulai perjalanan kesehatan Anda bersama Luminova sekarang juga</p>
      <a href="#"
        class="inline-block px-6 py-3 font-semibold text-blue-600 transition bg-white shadow rounded-xl hover:bg-gray-100">
        Buat Janji Sekarang
      </a>
    </div>
  </x-padding.section-padding>
</x-guest-layout>
