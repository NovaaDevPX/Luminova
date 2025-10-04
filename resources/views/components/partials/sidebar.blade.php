<!-- Sidebar -->
<aside class="fixed top-0 left-0 flex flex-col w-64 h-full bg-white border-r">
  <!-- Logo -->
  <div class="flex items-center gap-3 px-6 py-5 border-b">
    <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-xl">
      <i class="text-lg text-blue-600 fa-solid fa-stethoscope"></i>
    </div>
    <h1 class="text-xl font-bold text-gray-700">Luminova</h1>
  </div>

  <!-- Profile -->
  <div class="flex items-center gap-3 px-6 py-5 border-b">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Doctor" class="w-12 h-12 rounded-full">
    <div>
      <h2 class="text-sm font-semibold text-gray-700">{{ Auth::guard('doctor')->user()->name }}</h2>
      <p class="text-xs text-gray-500">{{ Auth::guard('doctor')->user()->specialization->name }}</p>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="flex-1 px-4 py-6">
    <ul class="space-y-2">
      <!-- Dashboard -->
      <li>
        <a href="{{ route('doctor.dashboard.index') }}"
          class="flex items-center gap-3 px-3 py-2 rounded-xl transition-3s font-medium
          {{ request()->routeIs('doctor.dashboard.index') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600' }}">
          <i class="fa-solid fa-house"></i>
          Dashboard
        </a>
      </li>

      <!-- Appointments -->
      <li>
        <a href="{{ route('doctor.dashboard.appointments') }}"
          class="flex items-center gap-3 px-3 py-2 rounded-xl transition-3s font-medium
          {{ request()->routeIs('doctor.dashboard.appointments') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600' }}">
          <i class="fa-regular fa-calendar-check"></i>
          Appointments
        </a>
      </li>

      <!-- Patients -->
      <li>
        <a href="{{ route('doctor.dashboard.patients') }}"
          class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium
          {{ request()->routeIs('doctor.dashboard.patients') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600' }}">
          <i class="fa-solid fa-user-group"></i>
          Patients
        </a>
      </li>

      <!-- Reviews -->
      <li>
        <a href="{{ route('doctor.dashboard.reviews') }}"
          class="flex items-center gap-3 px-3 py-2 rounded-xl font-medium
          {{ request()->routeIs('doctor.dashboard.reviews') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600' }}">
          <i class="fa-solid fa-star"></i>
          Reviews
        </a>
      </li>
    </ul>
  </nav>

  <!-- Logout -->
  <div class="px-6 py-4 border-t">
    <form method="POST" action="{{ route('doctor.logout') }}">
      @csrf
      <button type="submit"
        class="flex items-center w-full gap-3 px-3 py-2 text-left text-gray-600 rounded-xl hover:bg-red-50 hover:text-red-600">
        <i class="fa-solid fa-right-from-bracket"></i>
        Logout
      </button>
    </form>
  </div>

</aside>
