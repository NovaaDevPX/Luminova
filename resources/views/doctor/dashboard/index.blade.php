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
        <p class="text-2xl font-semibold text-purple-600">{{ $all_appointments }}</p>
      </div>
      <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
        <h2 class="text-sm text-gray-500">Total Patients ( Unique )</h2>
        <p class="text-2xl font-semibold text-green-600">{{ $unique_patients }}</p>
      </div>
      <div class="p-6 transition bg-white border rounded-2xl hover:shadow-lg">
        <h2 class="text-sm text-gray-500">Average Reviews Patient</h2>
        <p
          class="text-2xl font-semibold {{ $average_rating <= 2 ? 'text-red-600' : ($average_rating == 3 ? 'text-yellow-500' : 'text-green-600') }}">
          {{ number_format($average_rating, 1) }}
        </p>

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
            <th class="w-[300px]">Reviews</th>
          </tr>
        </thead>
        <tbody class="text-sm text-gray-600">
          @forelse ($appointments as $appointment)
            <tr class="border-b hover:bg-gray-50">
              <td class="py-3">{{ $appointment->patient->name }}</td>
              <td>{{ $appointment->patient->email }}</td>
              <td>{{ $appointment->appointment_date->format('d M Y') }}</td>
              <td>
                @if ($appointment->status === 'pending')
                  <span class="px-2 py-1 text-yellow-600 bg-yellow-100 rounded-lg">Pending</span>
                @elseif ($appointment->status === 'confirmed')
                  <span class="px-2 py-1 text-blue-600 bg-blue-100 rounded-lg">Confirmed</span>
                @elseif ($appointment->status === 'completed')
                  <span class="px-2 py-1 text-green-600 bg-green-100 rounded-lg">Completed</span>
                @elseif ($appointment->status === 'canceled')
                  <span class="px-2 py-1 text-red-600 bg-red-100 rounded-lg">Canceled</span>
                @endif
              </td>
              <td>
                @if ($appointment->review)
                  <div class="flex items-center gap-2 w-[350px]">
                    <span class="font-semibold text-yellow-500">
                      ⭐ {{ number_format($appointment->review->rating, 1) }}
                    </span>
                    <span class="italic text-gray-500">“{{ Str::limit($appointment->review->comment, 40) }}”</span>
                  </div>
                @else
                  <span class="italic text-gray-400 w-[350px]">No review yet</span>
                @endif
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" class="py-3 text-center text-gray-500">No recent appointments found.</td>
            </tr>
          @endforelse
        </tbody>

      </table>
    </div>
  </x-padding.dashboard-main-section-padding>
</x-app-layout>
