@extends('system::frames.guest')

@section('frame')
  
    <x-theme::header />
        <!-- Main Body -->
        <main class="body">
        
            @if($page_heading)
            <x-system::container>
                <x-theme::page-heading :page_heading="$page_heading"/>
            </x-system::container>
            @endif
            
            @yield('content')
            
        </main>
    <x-theme::footer />  


@endsection