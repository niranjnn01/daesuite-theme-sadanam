@extends('layouts.guest')
@section('content')
<body > 
    <x-system::breadcrumbs :items="[
        ['label' => 'Events']
    ]" />
    <!-- Scroll-to-Top Button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="fixed bottom-4 right-4 bg-gray-800 text-white p-3 rounded-full shadow-lg hover:bg-gray-700 transition duration-300 z-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <x-system::container>

        <main class="mx-auto px-4 mb-20">
        
            <!-- 2. Upcoming Events Section -->
            <section class="mb-20">
                <h2 class="text-2xl font-bold text-primary mb-2">Upcoming Events</h2>
                <p class="text-gray-500 mb-10">These are just some of the numerous reasons to choose us.</p>

                @if($featuredEvents && count($featuredEvents) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($featuredEvents as $event)
                    <a href="{{ route('events.view', $event->slug) }}" class="rounded-xl shadow-xl overflow-hidden text-white relative h-64 transform hover:-translate-y-1 transition duration-300 group block">
                        <img src="{{ $event->image_url ?? 'https://via.placeholder.com/600x400' }}" 
                            alt="{{ $event->title }}" 
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-[1.05] transition duration-500">
                        <div class="absolute inset-0 bg-primary hover:bg-primary/10 flex flex-col justify-end p-6">
                            <p class="text-4xl font-extrabold mb-1">{{ $event->starting_at->format('jS') }}</p>
                            <p class="text-sm font-semibold opacity-70 mb-3">{{ $event->starting_at->format('M Y') }}</p>
                            <h3 class="text-xl font-bold mb-2 leading-tight">{{ $event->title }}</h3>
                            <div class="flex items-center space-x-2 text-sm opacity-80">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span>{{ $event->time ?? 'TBD' }}</span>
                            </div>
                            <div class="flex items-center space-x-2 text-sm opacity-80">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                <span>{{ $event->location ?? 'Location TBD' }}</span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                @else
                <p class="text-gray-500 text-center mb-10">No upcoming events.</p>
                @endif
                </section>

            <!-- 3 & 4. Event Categories and FAQ Section -->
            <!-- <section class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16 mb-20">
                
                <div class="lg:col-span-2">
                    <h2 class="text-2xl font-bold text-primary mb-2">Event Categories</h2>
                    <p class="text-gray-500 mb-10">Sort through the best events</p>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <a href="#" class="flex flex-col items-center group">
                            <div class="w-36 h-36 rounded-full overflow-hidden shadow-lg border-4 !border-primary transform hover:scale-105 transition duration-300 relative">
                                <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=200&auto=format&fit=crop" alt="Concert" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition"></div>
                            </div>
                            <span class="mt-4 text-lg font-semibold text-gray-700 group-hover:text-primary transition">Concert</span>
                        </a>
                        <a href="#" class="flex flex-col items-center group">
                            <div class="w-36 h-36 rounded-full overflow-hidden shadow-lg border-4 !border-primary transform hover:scale-105 transition duration-300 relative">
                                <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?ixlib=rb-4.1.0&auto=format&fit=crop&q=60&w=500" alt="Conference" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition"></div>
                            </div>
                            <span class="mt-4 text-lg font-semibold text-gray-700 group-hover:text-primary transition">Conference</span>
                        </a>
                        <a href="#" class="flex flex-col items-center group">
                            <div class="w-36 h-36 rounded-full overflow-hidden shadow-lg border-4 !border-primary transform hover:scale-105 transition duration-300 relative">
                                <img src="https://images.unsplash.com/photo-1562329265-95a6d7a83440?ixlib=rb-4.1.0&auto=format&fit=crop&q=60&w=500" alt="Theater" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition"></div>
                            </div>
                            <span class="mt-4 text-lg font-semibold text-gray-700 group-hover:text-primary transition">Theater</span>
                        </a>
                        <a href="#" class="flex flex-col items-center group">
                            <div class="w-36 h-36 rounded-full overflow-hidden shadow-lg border-4 !border-primary transform hover:scale-105 transition duration-300 relative">
                                <img src="https://plus.unsplash.com/premium_photo-1685366454253-cb705836c5a8?ixlib=rb-4.1.0&auto=format&fit=crop&q=60&w=500" alt="Sport" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition"></div>
                            </div>
                            <span class="mt-4 text-lg font-semibold text-gray-700 group-hover:text-primary transition">Sport</span>
                        </a>
                    </div>
                </div>

                
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 !border-primary">
                        <h3 class="text-xl font-bold text-gray-800 mb-1">FAQ</h3>
                        <p class="text-sm text-gray-500 mb-6">Having difficulties? Get expert advice</p>
                        <ul class="space-y-4">
                            <li class="border-b pb-2 cursor-pointer text-gray-700 hover:text-primary transition">Who Should Attend Event -</li>
                            <li class="border-b pb-2 cursor-pointer text-gray-700 hover:text-primary transition">How Can I Sponsor Event? -</li>
                            <li class="border-b pb-2 cursor-pointer text-gray-700 hover:text-primary transition">How Can I Attend Event? -</li>
                            <li class="border-b pb-2 cursor-pointer text-gray-700 hover:text-primary transition">When Is Event Starting? -</li>
                            <li class="pb-2 cursor-pointer text-gray-700 hover:text-primary transition">What Ticket Is Available -</li>
                        </ul>
                    </div>
                </div>
            </section> -->


            <!-- ========================================== -->
            <!-- 5. NEW SECTION: Latest Events       -->
            <!-- ========================================== -->
            <section class="mb-20">
                
                <!-- Header with Title (Left) and Pagination (Right) -->
                <div class="flex flex-wrap justify-between items-end mb-10 gap-y-4">
                    <div>
                        <h2 class="text-3xl font-bold text-primary mb-2">Latest Events</h2>
                        <p class="text-gray-500">showing latest and important events.</p>
                    </div>
                    
                    <!-- Pagination Controls -->
                    <div class="flex gap-3 mt-4 md:mt-0" id="pagination-controls">
                        <a href="{{ $events->previousPageUrl() }}" 
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-primary hover:text-white hover:border-primary transition duration-300 {{ $events->onFirstPage() ? 'opacity-50 cursor-not-allowed' : '' }}"
                        {{ $events->onFirstPage() ? 'disabled' : '' }}
                        id="prev-page">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                        <a href="{{ $events->nextPageUrl() }}" 
                        class="w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-primary hover:text-white hover:border-primary transition duration-300 {{ !$events->hasMorePages() ? 'opacity-50 cursor-not-allowed' : '' }}"
                        {{ !$events->hasMorePages() ? 'disabled' : '' }}
                        id="next-page">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Grid Content -->
                <!-- Grid Content -->
                @if($events->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($events as $event)
                            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                                <div class="relative h-48 overflow-hidden">
                                    <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                                    <div class="absolute top-4 right-4 bg-primary text-white text-xs font-semibold px-3 py-1 rounded-full">
                                        {{ $event->event_type }}
                                    </div>
                                </div>
                                <div class="p-6">
                                    @if($event->starting_at)
                                    <div class="text-sm text-gray-500 mb-2">
                                        <i class="far fa-calendar-alt mr-2"></i>
                                        {{ $event->starting_at->format('M d, Y') }}
                                    </div>
                                    @endif
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                                        <a href="{{ route('events.view', $event->slug) }}" class="hover:text-primary transition">
                                            {{ $event->title }}
                                        </a>
                                    </h3>
                                    <p class="text-gray-600 mb-4">
                                        {{ $event->excerpt }}
                                    </p>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        {{ $event->venue }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    
                    <x-empty-state 
                        title="No Events Found"
                        message="We're currently planning exciting new events for our school community. Stay tuned for announcements or check back soon!"
                        icon="heroicon-o-calendar"
                    />
                @endif

                @push('scripts')
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const prevBtn = document.getElementById('prev-page');
                        const nextBtn = document.getElementById('next-page');
                        
                        // Handle previous page click
                        prevBtn.addEventListener('click', function(e) {
                            if (this.hasAttribute('disabled')) {
                                e.preventDefault();
                            }
                        });
                        
                        // Handle next page click
                        nextBtn.addEventListener('click', function(e) {
                            if (this.hasAttribute('disabled')) {
                                e.preventDefault();
                            }
                        });
                        
                        // Add smooth scroll to top when paginating
                        document.querySelectorAll('.pagination a').forEach(link => {
                            link.addEventListener('click', function(e) {
                                e.preventDefault();
                                window.scrollTo({
                                    top: 0,
                                    behavior: 'smooth'
                                });
                                // Allow time for scroll before navigation
                                setTimeout(() => {
                                    window.location.href = this.href;
                                }, 500);
                            });
                        });
                    });
                </script>
                @endpush
            </section>

        </main>


    </x-system::container>
    

</body>
@endsection