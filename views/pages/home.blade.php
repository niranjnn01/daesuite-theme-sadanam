@extends('theme::layouts.guest')

@section('content')

    


    <x-heros.lead-capture>

        School ERP for the Modern Institution

        <x-slot:description>
            Admissions, HR, Finance, Academics and more —
            all in one integrated platform. XXXX
        </x-slot:description>

        <x-slot:actions>
            <x-button variant="primary" size="xl">Book Demo</x-button>
            <x-button variant="secondary" size="xl">Learn More</x-button>
        </x-slot:actions>

        <x-slot:form>
            <x-forms.enquiry />
        </x-slot:form>

    </x-heros.lead-capture>
    

@endsection