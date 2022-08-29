@extends('layouts.main')

@section('content')
    <main>
        <form action="/criar_conta" method="post">
        @csrf

    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="pontos" placeholder="Pontos">
    <input type="submit" value="Enviar">

        </form>
    </main>
@endsection