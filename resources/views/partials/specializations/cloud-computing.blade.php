@extends('layouts.app')
@section('content')
    <div class="pt-[9rem] flex flex-col gap-[6rem]">
        <!-- Hero Section -->
        <div class="flex items-center justify-between w-full mx-auto px-[8rem]">
            <div class="flex flex-col w-1/2 gap-8">
                <h1 class="text-5xl font-bold text-[#013370]">Cloud Computing</h1>
                <p class="text-xl leading-relaxed text-gray-600">
                    Master cloud infrastructure, services, and deployment strategies. Learn to design, build, and manage scalable cloud solutions using AWS, Azure, and Google Cloud platforms.
                </p>
                <div class="flex gap-10">
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center gap-2">
                            <span class="text-3xl font-bold text-[#013370]">$1,599</span>
                            <span class="text-lg text-gray-500 line-through">$2,299</span>
                            <span class="px-2 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full w-fit">30% OFF</span>
                        </div>
                        <p class="text-sm text-gray-600">One-time payment • Lifetime access</p>
                    </div>
                    <button class="bg-[#013370] px-6 py-4 rounded-lg text-white hover:bg-[#185391] transition-all duration-300">
                        Enroll Now
                    </button>
                </div>
            </div>
            <div class="flex justify-end w-1/2">
                <img src="https://images.pexels.com/photos/5380642/pexels-photo-5380642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-[80%] rounded-xl" alt="Cloud Computing">
            </div>
        </div>

        <!-- Course Overview -->
        <div class="flex flex-col items-center w-full gap-10 px-20">
            <h2 class="text-4xl font-bold text-[#013370]">Course Overview</h2>
            <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-3">
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Duration</h3>
                    <p class="text-gray-600">8-14 months</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Courses</h3>
                    <p class="text-gray-600">16 comprehensive courses</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Level</h3>
                    <p class="text-gray-600">Beginner to Advanced</p>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
            <h2 class="text-4xl font-bold text-[#013370]">Investment in Your Future</h2>
            <div class="max-w-2xl p-8 bg-white shadow-xl rounded-2xl">
                <div class="mb-8 text-center">
                    <div class="flex items-center justify-center gap-4 mb-4">
                        <span class="text-5xl font-bold text-[#013370]">$1,599</span>
                        <div class="flex flex-col items-start">
                            <span class="text-2xl text-gray-500 line-through">$2,299</span>
                            <span class="px-3 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full">30% OFF</span>
                        </div>
                    </div>
                    <p class="mb-6 text-lg text-gray-600">One-time payment • Lifetime access • No recurring fees</p>
                </div>
                <div class="mb-8 space-y-4">
                    <div class="flex items-center gap-3">
                        <i class="text-green-500 fa-solid fa-check"></i>
                        <span>16 comprehensive courses with 280+ hours of content</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="text-green-500 fa-solid fa-check"></i>
                        <span>Lifetime access to all course materials</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="text-green-500 fa-solid fa-check"></i>
                        <span>Certificate of completion</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="text-green-500 fa-solid fa-check"></i>
                        <span>1-on-1 mentoring sessions</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="text-green-500 fa-solid fa-check"></i>
                        <span>Job placement assistance</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="text-green-500 fa-solid fa-check"></i>
                        <span>30-day money-back guarantee</span>
                    </div>
                </div>
                <div class="text-center">
                    <button class="bg-[#013370] px-8 py-4 rounded-lg text-white hover:bg-[#185391] transition-all duration-300 text-lg font-semibold">
                        Enroll Now - $1,599
                    </button>
                </div>
            </div>
        </div>

        <!-- What You'll Learn -->
        <div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
            <h2 class="text-4xl font-bold text-[#013370]">What You'll Learn</h2>
            <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-2">
                <div class="p-6 bg-white shadow-lg rounded-xl">
                    <h3 class="text-2xl font-bold text-[#013370] mb-4">Cloud Infrastructure</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Virtual machines and containers</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Networking and security</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Storage and database services</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Load balancing and auto-scaling</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Monitoring and logging</span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 bg-white shadow-lg rounded-xl">
                    <h3 class="text-2xl font-bold text-[#013370] mb-4">Cloud Services</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>AWS, Azure, and Google Cloud</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Serverless computing</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Microservices architecture</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>DevOps and CI/CD pipelines</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Cost optimization strategies</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Course Modules -->
        <div class="flex flex-col items-center w-full gap-10 px-20">
            <h2 class="text-4xl font-bold text-[#013370]">Course Modules</h2>
            <div class="w-full space-y-4">
                @php
                    $modules = [
                        ['title' => 'Cloud Computing Fundamentals', 'duration' => '4 weeks', 'description' => 'Introduction to cloud concepts and models'],
                        ['title' => 'AWS Core Services', 'duration' => '8 weeks', 'description' => 'Master Amazon Web Services platform'],
                        ['title' => 'Azure Cloud Platform', 'duration' => '6 weeks', 'description' => 'Learn Microsoft Azure services'],
                        ['title' => 'Google Cloud Platform', 'duration' => '6 weeks', 'description' => 'Explore Google Cloud services'],
                        ['title' => 'Containerization & Kubernetes', 'duration' => '6 weeks', 'description' => 'Docker and container orchestration'],
                        ['title' => 'Cloud Security & Compliance', 'duration' => '4 weeks', 'description' => 'Secure cloud deployments']
                    ];
                @endphp
                @foreach ($modules as $index => $module)
                    <div class="p-6 transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center font-bold">
                                    {{ $index + 1 }}
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-[#013370]">{{ $module['title'] }}</h3>
                                    <p class="text-gray-600">{{ $module['description'] }}</p>
                                </div>
                            </div>
                            <span class="font-semibold text-gray-500">{{ $module['duration'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Career Opportunities -->
        <div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
            <h2 class="text-4xl font-bold text-[#013370]">Career Opportunities</h2>
            <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-3">
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-cloud"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Cloud Architect</h3>
                    <p class="text-gray-600">Design and implement cloud solutions</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Cloud Engineer</h3>
                    <p class="text-gray-600">Build and maintain cloud infrastructure</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Cloud Security Specialist</h3>
                    <p class="text-gray-600">Secure cloud environments and data</p>
                </div>
            </div>
        </div>
    </div>
@endsection 