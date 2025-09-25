@props([
    'name' => '',
    'specialist' => '',
    'description' => '',
    'rating' => 0,
    'reviews' => 0,
    'image' => '',
    'link' => '#',
])

<div
  class="flex flex-col justify-between p-6 transition-shadow duration-200 bg-white border border-gray-100 shadow-sm rounded-2xl hover:shadow-md">
  <div class="">
    <div class="mb-4 text-center">
      <img src="{{ $image }}" alt="{{ $name }}"
        class="object-cover w-20 h-20 mx-auto border-2 border-gray-100 rounded-full shadow-md">
    </div>
    <h3 class="mb-1 text-xl font-semibold text-center text-gray-800">{{ $name }}</h3>
    <p class="mb-3 font-medium text-center text-blue-500">{{ $specialist }}</p>
    <div class="flex items-center justify-center mb-3">
      <i class="text-sm text-yellow-400 fas fa-star"></i>
      <i class="text-sm text-yellow-400 fas fa-star"></i>
      <i class="text-sm text-yellow-400 fas fa-star"></i>
      <i class="text-sm text-yellow-400 fas fa-star"></i>
      <i class="text-sm text-yellow-400 fas fa-star"></i>
      <span class="ml-1 text-sm font-medium text-gray-600">{{ $rating }} ({{ $reviews }} ulasan)</span>
    </div>
    <p class="mb-4 text-sm leading-relaxed text-center text-gray-600">{{ $description }}</p>
  </div>
  <a href="{{ $link }}"
    class="w-full py-3 font-medium text-center text-white transition btn-primary rounded-xl hover:opacity-90">
    <i class="mr-2 fas fa-calendar-check"></i> Buat Janji
  </a>
</div>
