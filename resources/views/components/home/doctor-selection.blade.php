<x-padding.section-padding class="py-16 bg-bg">
  <div class="container px-4 mx-auto">
    <h2 class="mb-4 text-3xl font-bold text-center text-text">Dokter dan Spesialis Pilihan</h2>
    <p class="max-w-2xl mx-auto mb-12 text-center text-gray-600">Temui tim dokter profesional dan berpengalaman siap
      memberikan perawatan terbaik untuk Anda</p>

    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
      <!-- Doctor 1 -->
      <div class="overflow-hidden bg-white shadow-md doctor-card rounded-xl">
        <img
          src="https://placeholder-image-service.onrender.com/image/400x300?prompt=Professional female doctor in white coat with stethoscope&id=c8614bbe-1f82-4b35-a7d4-2ec650353254"
          alt="Dokter wanita profesional dengan jas putih dan stetoskop" class="object-cover w-full h-56" />
        <div class="p-6">
          <h3 class="mb-1 text-xl font-bold">Dr. Sari Indah, Sp.PD</h3>
          <p class="mb-3 text-primary">Dokter Spesialis Penyakit Dalam</p>
          <div class="flex items-center mb-3">
            <div class="flex text-yellow-400">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="ml-2 text-gray-600">4.8 (127 reviews)</span>
          </div>
          <p class="mb-4 text-gray-600">RS Metropolitan Medical Center</p>
          <a href="#" class="block py-2 font-medium text-center text-white rounded-lg btn-primary">Lihat
            Jadwal</a>
        </div>
      </div>

      <!-- Doctor 2 -->
      <div class="overflow-hidden bg-white shadow-md doctor-card rounded-xl">
        <img
          src="https://placeholder-image-service.onrender.com/image/400x300?prompt=Professional male doctor with friendly smile and white coat&id=c8614bbe-1f82-4b35-a7d4-2ec650353254"
          alt="Dokter pria profesional dengan senyum ramah dan jas putih" class="object-cover w-full h-56" />
        <div class="p-6">
          <h3 class="mb-1 text-xl font-bold">Dr. Ahmad Wijaya, Sp.A</h3>
          <p class="mb-3 text-primary">Dokter Spesialis Anak</p>
          <div class="flex items-center mb-3">
            <div class="flex text-yellow-400">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="ml-2 text-gray-600">4.9 (98 reviews)</span>
          </div>
          <p class="mb-4 text-gray-600">Klinik Anak Sehat Terpadu</p>
          <a href="#" class="block py-2 font-medium text-center text-white rounded-lg btn-primary">Lihat
            Jadwal</a>
        </div>
      </div>

      <!-- Doctor 3 -->
      <div class="overflow-hidden bg-white shadow-md doctor-card rounded-xl">
        <img
          src="https://placeholder-image-service.onrender.com/image/400x300?prompt=Senior female doctor with glasses and professional appearance&id=c8614bbe-1f82-4b35-a7d4-2ec650353254"
          alt="Dokter wanita senior berkacamata dengan penampilan profesional" class="object-cover w-full h-56" />
        <div class="p-6">
          <h3 class="mb-1 text-xl font-bold">Dr. Rina Hartati, Sp.OG</h3>
          <p class="mb-3 text-primary">Dokter Spesialis Kandungan</p>
          <div class="flex items-center mb-3">
            <div class="flex text-yellow-400">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <span class="ml-2 text-gray-600">5.0 (156 reviews)</span>
          </div>
          <p class="mb-4 text-gray-600">RSIA Bunda Sejahtera</p>
          <a href="#" class="block py-2 font-medium text-center text-white rounded-lg btn-primary">Lihat
            Jadwal</a>
        </div>
      </div>
    </div>

    <div class="mt-12 text-center">
      <a href="{{ route('doctor.all-doctor') }}"
        class="inline-flex items-center font-semibold transition-colors text-primary hover:text-secondary">
        Lihat Semua Dokter <i class="ml-2 fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</x-padding.section-padding>
