@extends('layouts.app')

@section('page-title', 'Comics-show')

@section('main-content')
<h1>
    Comics Show
</h1>

<h2>
    <div class="row">
        <table class="table">
            <div class="thead">
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Titolo</th>
                    {{-- <th scope="col">Descrizione</th> --}}
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di vendita</th>
                    <th scope="col">Tipo</th>
                    {{-- <th scope="col">Artisti</th> --}}
                    <th scope="col">Scrittori</th>
                </tr>
            </div>
            <div class="tbody">
                {{-- la variabile comics la prende dal compact che ho nel controller --}}
                @foreach ($comics as $comic)
                    <tr>
                        {{-- <td scope="row"> 
                            {{$comic->$id}} 
                        </td> --}}

                        <td>{{$comic->title}}</td>
                        {{-- <td>{{$comic->description}}</td> --}}
                        {{-- <td>{{$comic->thumb}}</td> --}}
                        <td>${{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        <td>{{$comic->writers}}</td>
                    </tr>
                @endforeach
            </div>
        </div>
    </div>
</h2>
@endsection