@extends('layouts.app')
@section('content')
    <div class="pt-[9rem] flex flex-col gap-[6rem]">
        <!-- Hero Section -->
        <div class="flex items-center justify-between w-full mx-auto px-[8rem]">
            <div class="flex flex-col w-1/2 gap-8">
                <h1 class="text-5xl font-bold text-[#013370]">Cybersecurity</h1>
                <p class="text-xl leading-relaxed text-gray-600">
                    Master the art of protecting digital systems, networks, and data from cyber threats. Learn ethical
                    hacking, security analysis, and defense strategies to become a cybersecurity expert.
                </p>
                <div class="flex gap-10">
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center gap-2">
                            <span class="text-3xl font-bold text-[#013370]">$1,799</span>
                            <span class="text-lg text-gray-500 line-through">$2,499</span>
                            <span class="px-2 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full w-fit">38%
                                OFF</span>
                        </div>
                        <p class="text-sm text-gray-600">One-time payment • Lifetime access</p>
                    </div>
                    <button
                        class="bg-[#013370] px-6 py-4 rounded-lg text-white hover:bg-[#185391] transition-all duration-300">
                        Enroll Now
                    </button>
                </div>
            </div>
            <div class="flex justify-end w-1/2">
                <img src="https://images.pexels.com/photos/5380642/pexels-photo-5380642.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="w-[80%] rounded-xl" alt="Cybersecurity">
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
                    <p class="text-gray-600">10-16 months</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Courses</h3>
                    <p class="text-gray-600">18 comprehensive courses</p>
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
                        <span class="text-5xl font-bold text-[#013370]">$1,799</span>
                        <div class="flex flex-col items-start">
                            <span class="text-2xl text-gray-500 line-through">$2,499</span>
                            <span class="px-3 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full">28%
                                OFF</span>
                        </div>
                    </div>
                    <p class="mb-6 text-lg text-gray-600">One-time payment • Lifetime access • No recurring fees</p>
                </div>
                <div class="mb-8 space-y-4">
                    <div class="flex items-center gap-3">
                        <i class="text-green-500 fa-solid fa-check"></i>
                        <span>18 comprehensive courses with 300+ hours of content</span>
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
                    <button
                        class="bg-[#013370] px-8 py-4 rounded-lg text-white hover:bg-[#185391] transition-all duration-300 text-lg font-semibold">
                        Enroll Now - $1,799
                    </button>
                </div>
            </div>
        </div>

        <!-- What You'll Learn -->
        <div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
            <h2 class="text-4xl font-bold text-[#013370]">What You'll Learn</h2>
            <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-2">
                <div class="p-6 bg-white shadow-lg rounded-xl">
                    <h3 class="text-2xl font-bold text-[#013370] mb-4">Offensive Security</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Penetration testing methodologies</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Vulnerability assessment and exploitation</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Social engineering techniques</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Web application security testing</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Network security analysis</span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 bg-white shadow-lg rounded-xl">
                    <h3 class="text-2xl font-bold text-[#013370] mb-4">Defensive Security</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Security architecture design</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Incident response and forensics</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Security monitoring and SIEM</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Risk management and compliance</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Security policy development</span>
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
                        [
                            'title' => 'Cybersecurity Fundamentals',
                            'duration' => '6 weeks',
                            'description' => 'Introduction to security concepts and principles',
                        ],
                        [
                            'title' => 'Network Security',
                            'duration' => '8 weeks',
                            'description' => 'Protect network infrastructure and communications',
                        ],
                        [
                            'title' => 'Web Application Security',
                            'duration' => '6 weeks',
                            'description' => 'Secure web applications and APIs',
                        ],
                        [
                            'title' => 'Penetration Testing',
                            'duration' => '8 weeks',
                            'description' => 'Ethical hacking and vulnerability assessment',
                        ],
                        [
                            'title' => 'Digital Forensics',
                            'duration' => '6 weeks',
                            'description' => 'Investigate cyber incidents and evidence',
                        ],
                        [
                            'title' => 'Security Operations',
                            'duration' => '8 weeks',
                            'description' => 'Manage security operations center',
                        ],
                    ];
                @endphp
                @foreach ($modules as $index => $module)
                    <div class="p-6 transition-all duration-300 bg-white shadow-lg rounded-xl hover:shadow-xl">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div
                                    class="bg-[#013370] text-white rounded-full w-12 h-12 flex items-center justify-center font-bold">
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
                        <i class="fa-solid fa-user-secret"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Penetration Tester</h3>
                    <p class="text-gray-600">Identify vulnerabilities in systems and networks</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-shield-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Security Analyst</h3>
                    <p class="text-gray-600">Monitor and respond to security threats</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-search"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Digital Forensics Expert</h3>
                    <p class="text-gray-600">Investigate cyber crimes and incidents</p>
                </div>
            </div>
        </div>
    </div>
@endsection
