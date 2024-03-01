@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1>
    Comics Index
</h1>

<h2>
    <div class="row">
        <table class="table">
        <div class="mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-success w-100 fs-5">
                + Aggiungi
            </a>
        </div>
            <div class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    {{-- <th scope="col">Descrizione</th> --}}
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di vendita</th>
                    <th scope="col">Tipo</th>
                    {{-- <th scope="col">Artisti</th> --}}
                    {{-- <th scope="col">Scrittori</th> --}}
                    <th scoper='col'>button</th>
                </tr>
            </div>
            <div class="tbody">
                {{-- la variabile comics la prende dal compact che ho nel controller --}}
                @foreach ($comics as $comic)
                    <tr>
                         <td scope="row"> 
                            {{$comic->id}} 
                        </td> 

                        <td>{{$comic->title}}</td>
                        {{-- <td>{{$comic->description}}</td> --}}
                        {{-- <td>{{$comic->thumb}}</td> --}}
                        <td>${{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                        {{-- <td>{{$comic->writers}}</td> --}}
                        <td>
                            <a href="{{ route('comics.show', ['comic'=> $comic->id]) }}" class="btn btn-primary">Vai a</a>
                            <a href="{{ route('comics.edit', ['comic'=> $comic->id]) }}" class="btn btn-warning">Modifica</a>

                        </td>
                        
                    </tr>
                    
                @endforeach
            </div>
        </div>
    </div> 
</h2>
@endsection