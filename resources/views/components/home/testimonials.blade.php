@php
    $testimonials = [
        [
            'name' => 'Sarah Johnson',
            'role' => 'Computer Science Graduate',
            'image' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'quote' => 'The platform made my entire university experience seamless. From registration to graduation, everything was organized and accessible. The online exams were smooth and the instant results helped me track my progress.',
            'rating' => 5
        ],
        [
            'name' => 'Ahmed Hassan',
            'role' => 'Engineering Student',
            'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'quote' => 'As an international student, the secure payment system and document upload feature saved me so much time. The admin approval process was quick and transparent.',
            'rating' => 5
        ],
        [
            'name' => 'Maria Rodriguez',
            'role' => 'Business Administration',
            'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'quote' => 'The smart calendar feature is a game-changer! I never missed a class or exam. The reminders and notifications kept me on track throughout my studies.',
            'rating' => 5
        ],
        [
            'name' => 'David Chen',
            'role' => 'Medical Student',
            'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
            'quote' => 'The certificate generation feature is excellent. I could easily download my receipts and attestations for my records. The platform is truly student-friendly.',
            'rating' => 5
        ]
    ];
@endphp

<div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
    <div class="text-center mb-8">
        <h1 class="text-5xl font-extrabold text-[#013370] mb-4">Student Testimonials</h1>
        <p class="text-xl text-gray-600">Hear from our successful graduates and current students</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 w-full">
        @foreach ($testimonials as $testimonial)
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center mb-4">
                    <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" 
                         class="w-12 h-12 rounded-full object-cover mr-4">
                    <div>
                        <h3 class="font-bold text-[#013370]">{{ $testimonial['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $testimonial['role'] }}</p>
                    </div>
                </div>
                
                <div class="flex mb-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <i class="fa-solid fa-star text-yellow-400 {{ $i <= $testimonial['rating'] ? '' : 'text-gray-300' }}"></i>
                    @endfor
                </div>
                
                <p class="text-gray-700 italic">"{{ $testimonial['quote'] }}"</p>
            </div>
        @endforeach
    </div>
    
    <div class="mt-12 text-center">
        <button class="bg-[#013370] text-white px-8 py-3 rounded-lg hover:bg-[#185391] transition-all duration-300">
            View More Testimonials
        </button>
    </div>
</div> 