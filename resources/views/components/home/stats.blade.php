@php
    $stats = [
        [
            'number' => '50,000+',
            'label' => 'Active Students',
            'icon' => '<i class="fa-solid fa-users"></i>',
            'description' => 'Students enrolled across all programs'
        ],
        [
            'number' => '95%',
            'label' => 'Success Rate',
            'icon' => '<i class="fa-solid fa-chart-line"></i>',
            'description' => 'Graduation and employment success'
        ],
        [
            'number' => '200+',
            'label' => 'Online Courses',
            'icon' => '<i class="fa-solid fa-book"></i>',
            'description' => 'Courses available across disciplines'
        ],
        [
            'number' => '24/7',
            'label' => 'Platform Access',
            'icon' => '<i class="fa-solid fa-clock"></i>',
            'description' => 'Round-the-clock learning support'
        ],
        [
            'number' => '98%',
            'label' => 'Student Satisfaction',
            'icon' => '<i class="fa-solid fa-heart"></i>',
            'description' => 'Based on student feedback surveys'
        ],
        [
            'number' => '15+',
            'label' => 'Years Experience',
            'icon' => '<i class="fa-solid fa-trophy"></i>',
            'description' => 'Delivering quality education'
        ]
    ];
@endphp

<div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-white">
    <div class="text-center mb-12">
        <h1 class="text-5xl font-extrabold text-[#013370] mb-4">Our Impact</h1>
        <p class="text-xl text-gray-600">Transforming education through technology and innovation</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
        @foreach ($stats as $stat)
            <div class="bg-gray-50 rounded-xl p-8 text-center hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 border border-gray-200">
                <div class="text-4xl mb-4 text-[#013370]">
                    {!! $stat['icon'] !!}
                </div>
                <div class="text-4xl font-bold mb-2 text-[#013370]">{{ $stat['number'] }}</div>
                <div class="text-xl font-semibold mb-2 text-[#013370]">{{ $stat['label'] }}</div>
                <p class="text-sm text-gray-600">{{ $stat['description'] }}</p>
            </div>
        @endforeach
    </div>
    
    <div class="mt-12 text-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full">
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                <h3 class="text-2xl font-bold mb-2 text-[#013370]">Global Reach</h3>
                <p class="text-gray-600">Students from over 50 countries trust our platform for their education journey.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                <h3 class="text-2xl font-bold mb-2 text-[#013370]">Industry Partnerships</h3>
                <p class="text-gray-600">Collaborations with leading companies to provide real-world learning experiences.</p>
            </div>
            <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                <h3 class="text-2xl font-bold mb-2 text-[#013370]">Innovation Hub</h3>
                <p class="text-gray-600">Cutting-edge technology and research facilities for advanced learning.</p>
            </div>
        </div>
    </div>
</div> 