@extends('theme::layouts.guest')

@section('content')


    <x-system::layout.container class=" my-10 ">

        <div class="flex p-5 gap-5">

            <div class="flex-1">

                <x-forms.contact heading=""/>

            </div>
            <div class="flex-1">
                

                <x-cards.map class="flex-1" :title="$branches[0]['title']">
                            
                    <x-slot:iframe>
                        <div class="mb-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7891.970620529932!2d76.94351819357911!3d8.500806400000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05bbb763351743%3A0xe58b04390cebe8c2!2sSNV%20Sadanam%20Main%20Hostel!5e0!3m2!1sen!2sin!4v1788105451945!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                        
                    </x-slot:iframe>
                    
                    <x-slot:body>
                        <div class="flex flex-col gap-3">
                            
                            <div>
                                <h4 class="text-lg font-bold">Phone</h4>
                                <p class="text-xl">+91 9898 9898 98</p>
                            </div>

                            <div>
                                <h4 class="text-xl font-bold">Address</h4>
                                <p class=" text-xl">
                                    19 Street, X Cross<br>
                                    Lamba Beta, way, Illonios
                                </p>
                            </div>

                        </div>
                    </x-slot:body>

                </x-cards.map>


            </div>
            
        </div>

    </x-system::layout.container>
    
    <x-system::layout.container class=" my-10">

    
        <div class="flex  gap-3">

        
        @foreach($branches AS $branch)

            <x-cards.map class="flex-1" :title="$branch['title']">
                
                <x-slot:iframe>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7891.970620529932!2d76.94351819357911!3d8.500806400000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05bbb763351743%3A0xe58b04390cebe8c2!2sSNV%20Sadanam%20Main%20Hostel!5e0!3m2!1sen!2sin!4v1788105451945!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                    
                </x-slot:iframe>
                
                <x-slot:body>
                    <div class="flex flex-col gap-3">
                        
                        <div>
                            <h4 class="text-lg font-bold">Phone</h4>
                            <p class="text-xl">+91 9898 9898 98</p>
                        </div>

                        <div>
                            <h4 class="text-xl font-bold">Address</h4>
                            <p class=" text-xl">
                                19 Street, X Cross<br>
                                Lamba Beta, way, Illonios
                            </p>
                        </div>

                    </div>
                </x-slot:body>

            </x-cards.map>

            
        @endforeach

        </div>
    

    </x-system::layout.container>

@endsection