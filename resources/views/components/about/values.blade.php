@php
    $values = [
        ['icon' => 'fa-solid fa-graduation-cap', 'title' => 'Excellence', 'description' => 'We strive for academic excellence in all our programs and activities.'],
        ['icon' => 'fa-solid fa-users', 'title' => 'Diversity', 'description' => 'We celebrate and embrace diversity in all its forms.'],
        ['icon' => 'fa-solid fa-lightbulb', 'title' => 'Innovation', 'description' => 'We encourage creative thinking and innovative solutions.'],
        ['icon' => 'fa-solid fa-handshake', 'title' => 'Integrity', 'description' => 'We maintain the highest standards of ethical behavior.'],
    ];
@endphp

<div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
    <h1 class="text-5xl font-extrabold text-[#013370]">Our Core Values</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 w-full">
        @foreach ($values as $value)
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-4xl text-[#013370] mb-4">
                    <i class="{{ $value['icon'] }}"></i>
                </div>
                <h3 class="text-xl font-bold text-[#013370] mb-3">{{ $value['title'] }}</h3>
                <p class="text-gray-600">{{ $value['description'] }}</p>
            </div>
        @endforeach
    </div>
</div> 