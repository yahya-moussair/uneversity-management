@php
    $features = [
        [
            'icon' => '<i class="fa-solid fa-pen-to-square"></i>',
            'title' => 'Simple Registration',
            'description' => 'Our streamlined registration process makes getting started effortless. Upload your documents, complete your profile, and begin your educational journey in just a few minutes. No complicated forms or lengthy procedures - we\'ve simplified everything for your convenience.',
            'image' => 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        [
            'icon' => '<i class="fa-solid fa-circle-check"></i>',
            'title' => 'Admin Approval',
            'description' => 'Every account undergoes a thorough verification process by our dedicated admin team. This ensures the highest standards of academic integrity and maintains a secure learning environment. Rest assured, your application will be reviewed promptly and professionally.',
            'image' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=2126&q=80'
        ],
        [
            'icon' => '<i class="fa-solid fa-credit-card"></i>',
            'title' => 'Secure Payments',
            'description' => 'Experience worry-free transactions with our enterprise-grade payment security. Multiple payment options are available, and all transactions are encrypted and protected. Pay your fees securely before accessing premium courses and advanced learning materials.',
            'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80'
        ],
        [
            'icon' => '<i class="fa-solid fa-brain"></i>',
            'title' => 'Online Exams',
            'description' => 'Take your assessments with confidence using our advanced online examination system. Choose between QCM or written exams, receive instant results, and track your progress in real-time. Our platform ensures a fair and secure testing environment for all students.',
            'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2022&q=80'
        ],
        [
            'icon' => '<i class="fa-solid fa-calendar-days"></i>',
            'title' => 'Smart Calendar',
            'description' => 'Never miss an important date with our intelligent calendar system. View class schedules, exam dates, and deadlines at a glance. Receive personalized reminders and notifications to stay on track with your academic commitments and learning goals.',
            'image' => 'https://images.pexels.com/photos/210660/pexels-photo-210660.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
        ],
        [
            'icon' => '<i class="fa-solid fa-file"></i>',
            'title' => 'Certificates',
            'description' => 'Generate professional certificates, receipts, and attestations instantly in PDF format. All documents are digitally signed and can be easily downloaded, printed, or shared. Maintain a complete record of your academic achievements and transactions.',
            'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=2011&q=80'
        ],
    ];
@endphp
<div class="flex flex-col items-center w-full gap-10 px-20">
    <h1 class="text-5xl font-extrabold text-[#013370]">Features</h1>
    <div class="flex flex-col items-center gap-5">
        <h1 class="text-xl font-semibold text-[#013370]">Why Choose Our Platform?</h1>
        <p class="mb-12 text-[#013370]">Everything students, teachers, and admins need in one powerful system.</p>
        <div class="grid w-full grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($features as $feature)
                <div class="overflow-hidden transition-all duration-300 transform bg-white shadow-lg rounded-xl hover:shadow-xl hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ $feature['image'] }}" alt="{{ $feature['title'] }}" class="object-cover w-full h-full">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl text-[#013370]">{!! $feature['icon'] !!}</span>
                            <h3 class="text-xl font-bold text-[#013370]">{{ $feature['title'] }}</h3>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-600">{{ $feature['description'] }}</p>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">No features available</p>
            @endforelse
        </div>
    </div>
</div>
