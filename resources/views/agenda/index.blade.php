@extends('layouts.app')

@section('content_header')
@endsection

@section('content_body')
    <div class="mb-5 ml-2">
        <a class="btn btn-primary" href="{{ route('agenda.create') }}">Cadastrar</a>
    </div>

    <div class="col-md-12">
        <livewire:agendas />
    </div>
@endsection
