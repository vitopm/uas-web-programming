@extends('layout.main')

@section('container')

<div class='font-monospace' style="height: 50vh; width: 100%; border-radius: 50%;
display: inline-block; border-image: linear-gradient(#ffaa00, #73ff00) 30; border-width: 4px; border-style: solid;">
    <div style="height: inherit; display: flex; justify-content: center;align-items: center; flex-direction:column">
        <h1>
            @lang('index.title')
        </h1>
        <h5>@lang('index.subtitle')</h5>
    </div>
</div>

@endsection
