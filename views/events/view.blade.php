@extends('layouts.guest')

@section('content')
<section>
     @php
        $eventTitle = isset($event) ? $event->title : 'Event';
    @endphp
    
    <x-breadcrumbs :items="[
        ['label' => 'Events', 'url' => '/events'],
        ['label' => $eventTitle]
    ]" />
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="fixed bottom-4 right-4 bg-gray-800 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 transition duration-300 z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <main class=" mx-auto max-w-6xl px-4 mb-20">
    
        <h2 class="text-3xl font-bold text-gray-800 leading-tight">{{$event->title}}</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 py-5">

            
            <div class="lg:col-span-2 rounded-xl overflow-hidden ">
                
                <x-image :src="$event->image_url" :alt="$event->title" class="w-full h-auto object-cover max-h-[500px]" />

                <x-event.metabar :event="$event" />

                <div class="mb-8">
    <div id="descriptionContent" class="text-gray-600 leading-relaxed overflow-hidden transition-max-h duration-500 max-h-20">
        {{$event->description}}
    </div>


                @if($event->uploadedResources->isNotEmpty())
                    <section class="mb-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Event Resources</h3>
                        <x-masonGallery :resources="$event->uploadedResources" :columns="3" />
                    </section>
                @endif
    

</div>
            </div>


            <div>


                @if($tags->isNotEmpty())
                    <p class="text-primary font-semibold text-sm mb-4 uppercase">Tags</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($tags as $tag)
                            <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full text-sm">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                @endif


                <p class="text-primary font-semibold text-sm mb-4 uppercase">Other Events</p>

                <div class="space-y-4 mb-6">
                    @forelse($other_events as $otherEvent)
                        <a href="{{ route('events.view', $otherEvent) }}" class="block hover:bg-gray-50 rounded-lg p-2 transition-colors">
                            <div class="flex items-center ">
                                @if($otherEvent->displayPicture)
                                    <img src="{{ $otherEvent->image_url }}" 
                                        alt="{{ $otherEvent->title }}" 
                                        class="w-12 h-12 object-cover rounded-lg mr-4 flex-shrink-0">
                                @else
                                    <img src="{{ asset('svg/noimg.svg') }}" 
                                    
                             alt="{{ $otherEvent->title }}" 
                             class="w-12 h-12 object-cover rounded-lg mr-4 flex-shrink-0">
                                @endif
                                <div>
                                    <h4 class="font-semibold text-base text-gray-800 leading-snug">{{ $otherEvent->title }}</h4>
                                    
                                    @if($otherEvent->starting_at)
                                    <p class="text-xs text-gray-500 mt-0.5">{{ $otherEvent->starting_at->format('d M Y') }}</p>
                                    @endif
                                    
                                    <p>{{ $otherEvent->excerpt }}</p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p class="text-sm text-gray-500">No other events available.</p>
                    @endforelse
                </div>

                

            </div>
        </div>
    </main>


</section>


<script>
    function toggleReadMore() {
        const content = document.getElementById('descriptionContent');
        const button = document.getElementById('readMoreBtn');

        // Check if the content is currently collapsed (max-h-20 is 5rem or 80px)
        if (content.classList.contains('max-h-20')) {
            // Expand the content: set max-height to a very large value to simulate 'auto'
            content.classList.remove('max-h-20');
            content.style.maxHeight = content.scrollHeight + 'px';
            button.textContent = 'Read Less';
        } else {
            // Collapse the content: first set height explicitly, then add the max-h class
            content.style.maxHeight = content.scrollHeight + 'px';
            setTimeout(() => {
                content.classList.add('max-h-20');
                content.style.maxHeight = ''; // Remove explicit height to use the class
            }, 10);
            button.textContent = 'Read More';
        }
    }
</script>


@endsection