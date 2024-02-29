@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1>
    Comics 1
</h1>

<h2>
    <div class="row">
        <div class="col">
            <div class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Img</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di vendita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Artisti</th>
                    <th scope="col">Scrittori</th>
                </tr>
            </div>
            <div class="tbody">
                {{-- la variabile comics la prende dal compact che ho nel controller --}}
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row"> {{$comic->$id}} </th>
                        <td>{{}} </td>
                    </tr>
                @endforeach
            </div>
        </div>
    </div> 
</h2>
@endsection