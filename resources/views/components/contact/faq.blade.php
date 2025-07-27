@php
    $faqs = [
        ['question' => 'How do I apply for admission?', 'answer' => 'You can apply online through our website or visit our admissions office. We accept applications year-round for most programs.'],
        ['question' => 'What are the tuition fees?', 'answer' => 'Tuition fees vary by program. Please contact our financial aid office for detailed information about costs and available scholarships.'],
        ['question' => 'Do you offer online programs?', 'answer' => 'Yes, we offer a variety of online and hybrid programs. Our platform supports both traditional and distance learning.'],
        ['question' => 'How can I get technical support?', 'answer' => 'Our IT support team is available 24/7. You can contact them through the platform or call our support hotline.'],
    ];
@endphp

<div class="flex flex-col items-center w-full gap-10 px-20 py-16 bg-gray-50">
    <h2 class="text-4xl font-bold text-[#013370]">Frequently Asked Questions</h2>
    <div class="w-full max-w-4xl space-y-4">
        @foreach ($faqs as $faq)
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-[#013370] mb-2">{{ $faq['question'] }}</h3>
                <p class="text-gray-600">{{ $faq['answer'] }}</p>
            </div>
        @endforeach
    </div>
</div> 