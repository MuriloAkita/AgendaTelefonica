@php
    $states = App\Models\Agenda::STATES;
@endphp

@extends('layouts.app')

@section('content_header')
@endsection

@section('content_body')
    <div class="container">
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Editar Contato</h5>
                    <form action="{{ route('agenda.update', $agenda->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row g-3 cold-sm-12">
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control" name="name" value="{{ $agenda->name }}"
                                    placeholder="João Gomes">
                                <label for="floatingInput">Nome</label>
                                @error('name')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control phone" name="phone" value="{{ $agenda->phone }}"
                                    placeholder="(11) 3333-2222">
                                <label for="floatingInput">Telefone</label>
                                @error('phone')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control cellphone" name="cellphone"
                                    value="{{ $agenda->cellphone }}" placeholder="(11) 99999-0000">
                                <label for="floatingInput">Celular (Opcional)</label>
                                @error('cellphone')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="email" class="form-control" name="email" value="{{ $agenda->email }}"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email (Opcional)</label>
                                @error('email')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="text" class="form-control" name="street" value="{{ $agenda->address[0] }}"
                                    placeholder="Rua Teste">
                                <label for="floatingInput">Rua</label>
                                @error('street')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-2">
                                <input type="number" class="form-control" name="number"
                                    value="{{ (int) $agenda->address[1] }}" placeholder="1234">
                                <label for="floatingInput">Número</label>
                                @error('number')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-2">
                                <input type="text" class="form-control" name="district"
                                    value="{{ $agenda->address[2] }}" placeholder="Bairro Novo">
                                <label for="floatingInput">Bairro</label>
                                @error('district')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control" name="city" value="{{ $agenda->city }}"
                                    placeholder="São Paulo">
                                <label for="floatingInput">Cidade</label>
                                @error('city')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-1">
                                <select class="form-select" name="state" id="floatingSelect" aria-label="UF">
                                    @foreach ($states as $state)
                                        <option value="{{ $state }}"
                                            {{ $agenda->state == $state ? 'selected' : '' }}>
                                            {{ $state }}</option>
                                    @endforeach

                                </select>
                                <label for="floatingSelect">UF</label>
                                @error('state')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Editar</button>
                        <a class="btn btn-outline-danger" href="{{ route('agenda.index') }}">Cancelar</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
