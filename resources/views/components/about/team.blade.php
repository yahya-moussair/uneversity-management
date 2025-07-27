@php
    $team = [
        [
            'name' => 'Dr. Sarah Johnson',
            'role' => 'President',
            'image' =>
                'https://images.pexels.com/photos/3777946/pexels-photo-3777946.jpeg?_gl=1*1aq3dsk*_ga*NjUzNTQ2MTYuMTc1MzU3NjU5OQ..*_ga_8JE65Q40S6*czE3NTM1NzY1OTgkbzEkZzEkdDE3NTM1Nzc2MjIkajI0JGwwJGgw',
        ],
        [
            'name' => 'Prof. Michael Chen',
            'role' => 'Vice President',
            'image' =>
                'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
        ],
        [
            'name' => 'Dr. Maria Rodriguez',
            'role' => 'Dean of Academics',
            'image' =>
                'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
        ],
    ];
@endphp

<div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
    <h1 class="text-5xl font-extrabold text-[#013370]">Leadership Team</h1>
    <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($team as $member)
            <div
                class="overflow-hidden transition-all duration-300 transform bg-white shadow-lg rounded-xl hover:shadow-xl hover:-translate-y-2">
                <div class="h-64 overflow-hidden">
                    <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="object-cover w-full h-full">
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold text-[#013370] mb-2">{{ $member['name'] }}</h3>
                    <p class="text-gray-600">{{ $member['role'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
