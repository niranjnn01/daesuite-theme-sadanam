
@if ($attributes->get('page_heading'))
    <div {{ $attributes->merge(['class' => 'py-8']) }}>
        <h1 class="text-3xl font-brand font-bold">
            {{ $attributes->get('page_heading') }}
        </h1>
    </div>
@endif