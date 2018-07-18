@extends('layouts.layout')

@section('content')

<ul>

@foreach($menus as $menu)

	<li><a href="{{ $menu->path() }}">{{ $menu->name }}</li>

@endforeach

</ul>

@endsection