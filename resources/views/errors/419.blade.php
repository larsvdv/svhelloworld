@extends('layouts.master')
@section('title', 'Pagina is verlopen')

@section('content')
	<p>Oeps! De pagina die je probeert te bezoeken is verlopen. Ga naar de <a href="{{ route('index') }}">startpagina</a>.</p>
@endsection
