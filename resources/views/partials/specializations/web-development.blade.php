@extends('layouts.app')
@section('content')
    <div class="pt-[9rem] flex flex-col gap-[6rem]">
        <!-- Hero Section -->
        <div class="flex items-center justify-between w-full mx-auto px-[8rem]">
            <div class="flex flex-col w-1/2 gap-8">
                <h1 class="text-5xl font-bold text-[#013370]">Web Development</h1>
                <p class="text-xl leading-relaxed text-gray-600">
                    Master the art of creating modern, responsive websites and web applications. Learn front-end and back-end development with the latest technologies and frameworks used in the industry.
                </p>
                <div class="flex gap-10">
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center gap-2">
                            <span class="text-3xl font-bold text-[#013370]">$1,299</span>
                            <span class="text-lg text-gray-500 line-through">$1,999</span>
                            <span class="px-2 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full w-fit">35% OFF</span>
                        </div>
                        <p class="text-sm text-gray-600">One-time payment • Lifetime access</p>
                    </div>
                    <button class="bg-[#013370] px-6 py-4 rounded-lg text-white hover:bg-[#185391] transition-all duration-300">
                        Enroll Now
                    </button>
                </div>
            </div>
            <div class="flex justify-end w-1/2">
                <img src="https://images.pexels.com/photos/270348/pexels-photo-270348.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-[80%] rounded-xl" alt="Web Development">
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
                    <p class="text-gray-600">6-12 months</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-book"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Courses</h3>
                    <p class="text-gray-600">12 comprehensive courses</p>
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
                        <span class="text-5xl font-bold text-[#013370]">$1,299</span>
                        <div class="flex flex-col items-start">
                            <span class="text-2xl text-gray-500 line-through">$1,999</span>
                            <span class="px-3 py-1 text-sm font-semibold text-green-800 bg-green-100 rounded-full">35% OFF</span>
                        </div>
                    </div>
                    <p class="mb-6 text-lg text-gray-600">One-time payment • Lifetime access • No recurring fees</p>
                </div>
                <div class="mb-8 space-y-4">
                    <div class="flex items-center gap-3">
                        <i class="text-green-500 fa-solid fa-check"></i>
                        <span>12 comprehensive courses with 200+ hours of content</span>
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
                        Enroll Now - $1,299
                    </button>
                </div>
            </div>
        </div>

        <!-- What You'll Learn -->
        <div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
            <h2 class="text-4xl font-bold text-[#013370]">What You'll Learn</h2>
            <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-2">
                <div class="p-6 bg-white shadow-lg rounded-xl">
                    <h3 class="text-2xl font-bold text-[#013370] mb-4">Frontend Development</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>HTML5 & CSS3 fundamentals</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>JavaScript ES6+ and modern syntax</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>React.js and component-based architecture</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Responsive design and mobile-first approach</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>CSS frameworks (Bootstrap, Tailwind)</span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 bg-white shadow-lg rounded-xl">
                    <h3 class="text-2xl font-bold text-[#013370] mb-4">Backend Development</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Node.js and Express.js framework</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Database design and SQL/NoSQL</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>RESTful API development</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Authentication and authorization</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="text-green-500 fa-solid fa-check"></i>
                            <span>Deployment and hosting strategies</span>
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
                        ['title' => 'HTML & CSS Fundamentals', 'duration' => '4 weeks', 'description' => 'Learn the basics of web markup and styling'],
                        ['title' => 'JavaScript Programming', 'duration' => '6 weeks', 'description' => 'Master dynamic web interactions and logic'],
                        ['title' => 'React.js Development', 'duration' => '8 weeks', 'description' => 'Build modern user interfaces with React'],
                        ['title' => 'Node.js Backend', 'duration' => '6 weeks', 'description' => 'Create server-side applications'],
                        ['title' => 'Database Integration', 'duration' => '4 weeks', 'description' => 'Work with SQL and NoSQL databases'],
                        ['title' => 'Full Stack Projects', 'duration' => '8 weeks', 'description' => 'Build complete web applications']
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
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Frontend Developer</h3>
                    <p class="text-gray-600">Create user interfaces and interactive web experiences</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Backend Developer</h3>
                    <p class="text-gray-600">Build server-side logic and database systems</p>
                </div>
                <div class="p-6 text-center bg-white shadow-lg rounded-xl">
                    <div class="text-4xl text-[#013370] mb-4">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#013370] mb-2">Full Stack Developer</h3>
                    <p class="text-gray-600">Handle both frontend and backend development</p>
                </div>
            </div>
        </div>
    </div>
@endsection 