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
                                <label for="floatingInput">Nome</label>
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control phone" id="floatingInput" name="phone"
                                    placeholder="(11) 3333-2222">
                                <label for="floatingInput">Telefone</label>
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control cellphone" id="floatingInput" name="cellphone"
                                    placeholder="(11) 99999-0000">
                                <label for="floatingInput">Celular (Opcional)</label>
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email (Opcional)</label>
                            </div>
                            <div class="form-floating mb-3 col-md-4">
                                <input type="text" class="form-control" id="floatingInput" name="street"
                                    placeholder="Rua Teste">
                                <label for="floatingInput">Rua</label>
                            </div>
                            <div class="form-floating mb-3 col-md-2">
                                <input type="number" class="form-control" id="floatingInput" name="number"
                                    placeholder="1234">
                                <label for="floatingInput">Número</label>
                            </div>
                            <div class="form-floating mb-3 col-md-2">
                                <input type="text" class="form-control" id="floatingInput" name="district"
                                    placeholder="Bairro Novo">
                                <label for="floatingInput">Bairro</label>
                            </div>
                            <div class="form-floating mb-3 col-md-3">
                                <input type="text" class="form-control" id="floatingInput" name="city"
                                    placeholder="São Paulo">
                                <label for="floatingInput">Cidade</label>
                            </div>
                            <div class="form-floating mb-3 col-md-1">
                                <input type="text" class="form-control" id="floatingInput" name="state"
                                    placeholder="SP">
                                <label for="floatingInput">Estado</label>
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
