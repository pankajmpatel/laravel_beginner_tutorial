@extends('app')

@section('title', 'Contact Us Page')

@section('content')
<h1>wel-come to laravel 6 from Contact Us</h1>

<ul>
    @forelse ($services as $service)
        <?php
             // {{ dd($service->name)}}
        ?>

        <li>{{ $service->name}}</li>
        @empty
        <li>No services available</li>
    @endforelse
</ul>
@endsection
