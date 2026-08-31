<!-- Footer -->
    <footer class="footer text-black">
        <div class="bg-primary min-h-3 p-10 pb-0 relative overflow-clip">
            <div class="container mx-auto px-4 md:px-15">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-5 relative z-10 justify-between">
                    
                    <!-- Organization Info -->
                    <div class="w-full lg:w-auto">
                        <span class="text-foreground text-2xl font-bold">{{ $organization->name }}</span>
                        <address class="text-black not-italic mt-5 mb-5 text-small">
                            {{ $organization->primaryAddress->address_line_1 }}, <br />
                            {{ $organization->primaryAddress->address_line_2 }}, <br />
                            postal code : {{ $organization->primaryAddress->postal_code }}
                        </address>
                        <div class="text-black text-small font-semibold">
                            Ph : {{ $organization->primaryPhoneNumber?->number }}
                        </div>
                    </div>

                    <!-- Links Section -->
                    <div class="w-full lg:w-1/3 flex flex-col sm:flex-row justify-evenly gap-5">
                        <div>
                            <h4 class="text-2xl font-bold mb-5 text-foreground">About</h4>
                            <div class="flex flex-col gap-2 text-black">
                                @foreach($footerLinks as $link)
                                <a href="{{ $link['url'] }}" class="hover:text-black/50">{{ $link['text'] }}</a>
                                @endforeach
                                
                            </div>
                        </div>

                        <div>
                            <h4 class="text-2xl font-bold mb-5 text-foreground">Legal</h4>
                            <div class="flex flex-col gap-2 text-black">
                                @foreach($footerLinksLegal as $link)
                                <a href="{{ $link['url'] }}" class="hover:text-black/50">{{ $link['text'] }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="w-full lg:w-1/3">
                        <h4 class="text-2xl font-bold mb-5 text-foreground">Explore Us Even Further</h4>
                        <p class="mb-5">
                            To know more about us, and to keep posted on the latest information, follow us on your favourite social media.
                        </p>
                        <div class="flex gap-10">
                            @foreach($social_media as $social)
                                <a href="{{ $social->link }}" target="_blank" class="hover:opacity-75">
                                    @svg("phosphor-{$social->icon}", "h-6 w-6 relative z-10")
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <x-layout.footer-attribution />
        </div>
    </footer>