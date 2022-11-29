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
                    <h5 class="card-title">Cadastrar na Agenda</h5>
                    <form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row g-3 cold-sm-12">
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control" id="floatingInput" name="name"
                                    placeholder="João Gomes">
                                <label for="floatingInput">Nome*</label>
                                @error('name')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control phone" id="floatingInput" name="phone"
                                    placeholder="(11) 3333-2222">
                                <label for="floatingInput">Telefone*</label>
                                @error('phone')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control cellphone" id="floatingInput" name="cellphone"
                                    placeholder="(11) 99999-0000">
                                <label for="floatingInput">Celular (Opcional)</label>
                                @error('cellphone')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email (Opcional)</label>
                                @error('email')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="text" class="form-control" id="floatingInput" name="street"
                                    placeholder="Rua Teste">
                                <label for="floatingInput">Rua*</label>
                                @error('street')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-2">
                                <input type="number" class="form-control" id="floatingInput" name="number"
                                    placeholder="1234">
                                <label for="floatingInput">Número*</label>
                                @error('number')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-2">
                                <input type="text" class="form-control" id="floatingInput" name="district"
                                    placeholder="Bairro Novo">
                                <label for="floatingInput">Bairro*</label>
                                @error('district')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control" id="floatingInput" name="city"
                                    placeholder="São Paulo">
                                <label for="floatingInput">Cidade*</label>
                                @error('city')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 col-md-1">
                                <select class="form-select" name="state" id="floatingSelect" aria-label="UF">
                                    @foreach ($states as $state)
                                        <option selected hidden> UF </option>
                                        <option value="{{ $state }}">
                                            {{ $state }}</option>
                                    @endforeach

                                </select>
                                <label for="floatingSelect">UF*</label>
                                @error('state')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                        <a class="btn btn-outline-danger" href="{{ route('agenda.index') }}">Cancelar</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
