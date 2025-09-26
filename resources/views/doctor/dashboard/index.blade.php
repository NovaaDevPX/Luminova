<x-app-layout title="Doctor Dashboard">

  <div class="min-h-screen bg-gray-50">
    <!-- Sidebar -->
    <aside class="fixed top-0 left-0 flex flex-col w-64 h-full bg-white border-r">
      <!-- Logo -->
      <div class="flex items-center gap-3 px-6 py-5 border-b">
        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-xl">
          <i class="text-lg text-blue-600 fa-solid fa-stethoscope"></i>
        </div>
        <h1 class="text-xl font-bold text-gray-700">MediCare</h1>
      </div>

      <!-- Profile -->
      <div class="flex items-center gap-3 px-6 py-5 border-b">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Doctor" class="w-12 h-12 rounded-full">
        <div>
          <h2 class="text-sm font-semibold text-gray-700">Dr. John Doe</h2>
          <p class="text-xs text-gray-500">Cardiologist</p>
        </div>
      </div>

      <!-- Navigation -->
      <nav class="flex-1 px-4 py-6">
        <ul class="space-y-2">
          <li>
            <a href="#" class="flex items-center gap-3 px-3 py-2 font-medium text-blue-600 rounded-xl bg-blue-50">
              <i class="fa-solid fa-house"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#"
              class="flex items-center gap-3 px-3 py-2 text-gray-600 rounded-xl hover:bg-blue-50 hover:text-blue-600">
              <i class="fa-regular fa-calendar-check"></i>
              Appointments
            </a>
          </li>
          <li>
            <a href="#"
              class="flex items-center gap-3 px-3 py-2 text-gray-600 rounded-xl hover:bg-blue-50 hover:text-blue-600">
              <i class="fa-solid fa-user-group"></i>
              Patients
            </a>
          </li>
          <li>
            <a href="#"
              class="flex items-center gap-3 px-3 py-2 text-gray-600 rounded-xl hover:bg-blue-50 hover:text-blue-600">
              <i class="fa-solid fa-prescription"></i>
              Prescriptions
            </a>
          </li>
          <li>
            <a href="#"
              class="flex items-center gap-3 px-3 py-2 text-gray-600 rounded-xl hover:bg-blue-50 hover:text-blue-600">
              <i class="fa-solid fa-flask"></i>
              Lab Results
            </a>
          </li>
        </ul>
      </nav>

      <!-- Logout -->
      <div class="px-6 py-4 border-t">
        <a href="#"
          class="flex items-center gap-3 px-3 py-2 text-gray-600 rounded-xl hover:bg-red-50 hover:text-red-600">
          <i class="fa-solid fa-right-from-bracket"></i>
          Logout
        </a>
      </div>
    </aside>

    <!-- Tambahkan Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>



    <!-- Main Content -->
    <main class="p-8 ml-64">
      <!-- Header -->
      <div class="flex items-center justify-between mb-8">
        <h1 class="text-2xl font-bold text-gray-700">Dashboard Overview</h1>
        <button class="px-4 py-2 text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700">+ Add
          Appointment</button>
      </div>

      <!-- Stats Cards -->
      <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2 lg:grid-cols-4">
        <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
          <h2 class="text-sm text-gray-500">Today's Appointments</h2>
          <p class="text-2xl font-semibold text-blue-600">12</p>
        </div>
        <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
          <h2 class="text-sm text-gray-500">Total Patients</h2>
          <p class="text-2xl font-semibold text-green-600">248</p>
        </div>
        <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
          <h2 class="text-sm text-gray-500">Prescriptions</h2>
          <p class="text-2xl font-semibold text-purple-600">76</p>
        </div>
        <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
          <h2 class="text-sm text-gray-500">Pending Lab Results</h2>
          <p class="text-2xl font-semibold text-red-600">5</p>
        </div>
      </div>

      <!-- Recent Appointments -->
      <div class="p-6 bg-white border rounded-2xl">
        <h2 class="mb-4 text-lg font-semibold text-gray-700">Recent Appointments</h2>
        <table class="w-full text-left">
          <thead>
            <tr class="text-sm text-gray-500 border-b">
              <th class="py-3">Patient</th>
              <th>Email</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="text-sm text-gray-600">
            <tr class="border-b hover:bg-gray-50">
              <td class="py-3">Jane Doe</td>
              <td>jane@example.com</td>
              <td>22 Sep 2025</td>
              <td><span class="px-2 py-1 text-green-600 bg-green-100 rounded-lg">Completed</span></td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="py-3">Michael Lee</td>
              <td>michael@example.com</td>
              <td>22 Sep 2025</td>
              <td><span class="px-2 py-1 text-yellow-600 bg-yellow-100 rounded-lg">Pending</span></td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="py-3">Sarah Smith</td>
              <td>sarah@example.com</td>
              <td>21 Sep 2025</td>
              <td><span class="px-2 py-1 text-blue-600 bg-blue-100 rounded-lg">Scheduled</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</x-app-layout>
