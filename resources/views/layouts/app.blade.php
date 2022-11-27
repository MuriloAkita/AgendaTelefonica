@extends('layouts.layout')

@section('content')
    {{-- Conteúdo --}}
    <div class="page-body">
        @yield('content_header')
        @yield('content_body')
    </div>
@endsection
