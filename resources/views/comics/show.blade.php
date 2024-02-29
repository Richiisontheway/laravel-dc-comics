@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{$comic->title}}
</h1>

<h2>
    <div class="row">
        <div class="card">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <p>
                Descrizione:
                {{$comic->description}}
            </p>
            <ul>
                <li>
                    Artisti:
                    {{$comic->artist}}
                </li>
                <li>
                    Scrittori:
                    {{$comic->writers}}
                </li>
            </ul>
        </div>
    </div>
</h2>
@endsection