<x-app-layout title="Doctor Dashboard">
  <!-- Main Content -->
  <x-padding.dashboard-main-section-padding>
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
      <h1 class="text-2xl font-bold text-gray-700">Dashboard Overview</h1>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2 lg:grid-cols-4">
      <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
        <h2 class="text-sm text-gray-500">Today's Appointments</h2>
        <p class="text-2xl font-semibold text-blue-600">12</p>
      </div>
      <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
        <h2 class="text-sm text-gray-500">All Appointments</h2>
        <p class="text-2xl font-semibold text-purple-600">76</p>
      </div>
      <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
        <h2 class="text-sm text-gray-500">Total Patients</h2>
        <p class="text-2xl font-semibold text-green-600">248</p>
      </div>
      <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
        <h2 class="text-sm text-gray-500">Reviews Patient</h2>
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
  </x-padding.dashboard-main-section-padding>
</x-app-layout>
