@extends('layouts.guest')

@section('title', 'Frequently Asked Questions')

@section('content')
<div class="py-16">
    <div class="container max-w-4xl mx-auto px-6">
        <!-- Header -->
         <x-headings.two class="text-gray-900 mb-4">
            Frequently Asked Questions
        </x-headings.two>
        <div class="mb-5">
            
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Find answers to common questions about Sree Narayana English Medium School. 
                Can't find what you're looking for? Feel free to contact us.
            </p>
        </div>

        <!-- FAQ Items -->
        <div class="space-y-4">
            @foreach($faqs as $index => $faq)
            <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
                <button 
                    x-data="{ open: @if($loop->first) true @else false @endif }"
                    @click="open = !open"
                    class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200"
                >
                    <span class="font-semibold text-gray-900">{{ $faq['question'] }}</span>
                    <div class="flex-shrink-0 ml-4">
                        <svg 
                            x-show="!open"
                            class="w-5 h-5 text-gray-500 transition-transform duration-200"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <svg 
                            x-show="open"
                            class="w-5 h-5 text-gray-500 transition-transform duration-200"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                        </svg>
                    </div>
                </button>
                
                <div 
                    x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2"
                    class="px-6 pb-4"
                >
                    <div class="text-gray-600 leading-relaxed">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
