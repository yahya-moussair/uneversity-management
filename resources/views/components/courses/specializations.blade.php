@php
    $specializations = [
        [
            'title' => 'Web Development',
            'description' => 'Master front-end and back-end development with modern frameworks and technologies.',
            'icon' => '<i class="fa-solid fa-code"></i>',
            'image' => 'https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'courses' => 12,
            'duration' => '6-12 months',
            'level' => 'Beginner to Advanced',
            'route' => 'app.web-development'
        ],
        [
            'title' => 'Mobile Development',
            'description' => 'Build iOS and Android apps using native and cross-platform technologies.',
            'icon' => '<i class="fa-solid fa-mobile-screen"></i>',
            'image' => 'https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'courses' => 8,
            'duration' => '8-14 months',
            'level' => 'Intermediate to Advanced',
            'route' => 'app.mobile-development'
        ],
        [
            'title' => 'Cybersecurity',
            'description' => 'Learn to protect systems, networks, and programs from digital attacks.',
            'icon' => '<i class="fa-solid fa-shield-halved"></i>',
            'image' => 'https://images.pexels.com/photos/5380642/pexels-photo-5380642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'courses' => 10,
            'duration' => '6-10 months',
            'level' => 'Intermediate to Advanced',
            'route' => 'app.cybersecurity'
        ],
        [
            'title' => 'Data Science',
            'description' => 'Analyze and interpret complex data to help organizations make better decisions.',
            'icon' => '<i class="fa-solid fa-chart-line"></i>',
            'image' => 'https://images.pexels.com/photos/5905709/pexels-photo-5905709.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'courses' => 15,
            'duration' => '8-16 months',
            'level' => 'Intermediate to Advanced',
            'route' => 'app.data-science'
        ],
        [
            'title' => 'Cloud Computing',
            'description' => 'Master AWS, Azure, and Google Cloud platforms for scalable solutions.',
            'icon' => '<i class="fa-solid fa-cloud"></i>',
            'image' => 'https://images.pexels.com/photos/5380642/pexels-photo-5380642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'courses' => 9,
            'duration' => '6-12 months',
            'level' => 'Intermediate to Advanced',
            'route' => 'app.cloud-computing'
        ],
        [
            'title' => 'DevOps',
            'description' => 'Learn automation, CI/CD, and infrastructure as code practices.',
            'icon' => '<i class="fa-solid fa-gears"></i>',
            'image' => 'https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'courses' => 11,
            'duration' => '7-13 months',
            'level' => 'Intermediate to Advanced',
            'route' => 'app.devops'
        ]
    ];
@endphp

<div class="flex flex-col items-center w-full gap-10 px-20 pb-20">
    <h1 class="text-5xl font-extrabold text-[#013370]">Our Specializations</h1>
    <p class="max-w-3xl text-xl text-center text-gray-600">
        Choose from our comprehensive IT specializations designed to prepare you for the digital workforce
    </p>
    <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($specializations as $spec)
            <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-lg rounded-xl hover:shadow-xl hover:-translate-y-2">
                <div class="h-48 overflow-hidden">
                    <img src="{{ $spec['image'] }}" alt="{{ $spec['title'] }}" class="object-cover w-full h-full">
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-2xl text-[#013370]">{!! $spec['icon'] !!}</span>
                        <h3 class="text-xl font-bold text-[#013370]">{{ $spec['title'] }}</h3>
                    </div>
                    <p class="mb-4 text-gray-600">{{ $spec['description'] }}</p>
                    <div class="space-y-2 text-sm text-gray-500">
                        <div class="flex justify-between">
                            <span>Courses:</span>
                            <span class="font-semibold">{{ $spec['courses'] }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Duration:</span>
                            <span class="font-semibold">{{ $spec['duration'] }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Level:</span>
                            <span class="font-semibold">{{ $spec['level'] }}</span>
                        </div>
                    </div>
                    <a href="{{ route($spec['route']) }}" class="block w-full mt-4 bg-[#013370] text-white py-3 px-4 rounded-lg hover:bg-[#185391] transition-all duration-300 text-center">
                        Learn More
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div> 