@extends('app')

@section('title', 'Services')

@section('content')
<h1>wel-come to laravel 6 from Service.</h1>

<p>This is service view.</p>
<form action="/service" method="POST">

    <input type="text" name="name" autocomplete="off">
    @csrf
    <button>Add Service</button>
</form>
<p style="color:red;">@error('name'){{$message}}@enderror
<ul>
    @forelse ($services as $service)
        <li>{{ $service->name}}</li>
        @empty
        <li>No services available</li>
    @endforelse
</ul>
@endsection
