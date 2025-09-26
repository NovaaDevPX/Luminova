<x-guest-layout title="Kontak Kami">
  <x-padding.section-padding class="py-16 bg-gray-50">
    <!-- Hero Section -->
    <div class="max-w-3xl mx-auto mb-16 text-center">
      <h1 class="text-4xl font-bold text-accent">Kontak Kami</h1>
      <p class="mt-4 text-gray-600">
        Ada pertanyaan atau butuh bantuan? Tim Luminova siap membantu Anda.
        Silakan isi formulir di bawah ini dan kami akan segera menghubungi Anda.
      </p>
    </div>

    <!-- Contact Section -->
    <div class="grid items-center grid-cols-1 gap-12 md:grid-cols-2">
      <!-- Left Illustration -->
      <div class="flex justify-center">
        <img src="{{ asset('assets/ilustrations/Email capture-amico.svg') }}" alt="Contact Illustration"
          class="w-[350px] mx-auto">
      </div>

      <!-- Right Contact Form -->
      <div class="p-8 bg-white shadow-sm rounded-2xl">
        <h2 class="mb-6 text-2xl font-bold text-gray-800">Hubungi Kami 🩺</h2>
        <form action="#" method="POST" class="space-y-5">
          <!-- Name -->
          <div>
            <label class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="name" placeholder="Nama Lengkap"
              class="w-full px-4 py-2 mt-1 border border-gray-200 outline-none rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-transparent">
          </div>

          <!-- Email -->
          <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" placeholder="you@example.com"
              class="w-full px-4 py-2 mt-1 border border-gray-200 outline-none rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-transparent">
          </div>

          <!-- Phone -->
          <div>
            <label class="block text-sm font-medium text-gray-700">No Telepon</label>
            <input type="tel" name="phone" placeholder="+62 812 3456 7890"
              class="w-full px-4 py-2 mt-1 border border-gray-200 outline-none rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-transparent">
          </div>

          <!-- Message -->
          <div>
            <label class="block text-sm font-medium text-gray-700">Pesan</label>
            <textarea name="message" rows="4" placeholder="Tulis pesan Anda..."
              class="w-full px-4 py-2 mt-1 border border-gray-200 outline-none rounded-xl focus:ring-1 focus:ring-blue-500 focus:border-transparent"></textarea>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full py-3 font-semibold text-white transition rounded-xl bg-accent hover:bg-accent-hover">
            Kirim Pesan
          </button>
        </form>
      </div>
    </div>
  </x-padding.section-padding>
</x-guest-layout>
