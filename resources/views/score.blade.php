@extends('layouts.main')

@section('content')
    
@foreach ($ranks as $rank)

<table border="1">
    <tr>
        <td>{{$rank->nome}}</td>
        <td>{{$rank->pontos}}</td>
    </tr>
</table>

    @endforeach

@endsection