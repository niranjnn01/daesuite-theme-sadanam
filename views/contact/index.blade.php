@extends('theme::layouts.guest')

@section('content')

@php
$main_branch = array_shift($branches);
@endphp

    <x-system::layout.container class="my-10 ">

        <div class="flex flex-col lg:flex-row py-5 gap-10">

            <div class="flex-1">

                <x-forms.contact heading=""/>

            </div>
            <div class="flex-1">
                

                <x-cards.map class="flex-1" :title="$main_branch['title']">
                            
                    <x-slot:iframe>
                        <div class="mb-4">
                            <x-google-map :map="$main_branch['address']['google_map']" />
                        </div>
                        
                    </x-slot:iframe>
                    
                    <x-slot:body>
                        <div class="flex flex-col gap-3">
                            
                            <div>
                                <h4 class="text-lg font-bold">Phone</h4>
                                <p class="text-xl">{{ $main_branch['phone_numbers'][0]['number'] }}</p>
                            </div>

                            <div>
                                <h4 class="text-xl font-bold">Address</h4>
                                <p class=" text-xl">
                                    {{ $main_branch['address']['address_line_1'] }}, {{ $main_branch['address']['address_line_2'] }}<br>
                                    {{ $main_branch['address']['city'] }}, {{ $main_branch['address']['state'] }}
                                    {{ $main_branch['address']['postal_code'] }}
                                </p>
                            </div>

                        </div>
                    </x-slot:body>

                </x-cards.map>


            </div>
            
        </div>

    </x-system::layout.container>
    
    <x-system::layout.container class="my-10">

    
        <div class="flex flex-col lg:flex-row  gap-3">

        
            @foreach($branches AS $branch)

                <x-cards.map class="flex-1" :title="$branch['title']">
                    
                    <x-slot:iframe>
                        <div class="mb-4">
                            <x-google-map :map="$branch['address']['google_map']" />
                        </div>
                        
                    </x-slot:iframe>
                    
                    <x-slot:body>
                        <div class="flex flex-col gap-3">
                            
                            <div>
                                <h4 class="text-lg font-bold">Phone</h4>
                                <p class="text-xl">{{ $branch['phone_numbers'][0]['number'] }}</p>
                            </div>

                            <div>
                                <h4 class="text-xl font-bold">Address</h4>
                                <p class=" text-xl">
                                    {{ $branch['address']['address_line_1'] }}, {{ $branch['address']['address_line_2'] }}<br>
                                    {{ $branch['address']['city'] }}, {{ $branch['address']['state'] }}
                                    {{ $branch['address']['postal_code'] }}
                                </p>
                            </div>

                        </div>
                    </x-slot:body>

                </x-cards.map>

                
            @endforeach

        </div>
    

    </x-system::layout.container>

@endsection