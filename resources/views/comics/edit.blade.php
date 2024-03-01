@extends('layouts.app')

@section('page-title', $comic->title.' Edit')

@section('main-content')
<h1>
    Comics {{$comic->title}}
</h1>

<h2>
    <div class="row">
        <div class="col col py-4 ">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna all'index dei comics
                </a>
            </div>
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="thumb" class="form-label">SRC</label>
                    <input value="{{$comic->thumb}}" type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la SRC..." maxlength="1024">
                </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                <input value="{{$comic->title}}" type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="64" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
                <input value="{{$comic->type}}" type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="16" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input value="{{$comic->price}}" type="string" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo...">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
                <input value="{{$comic->series}}" type="string" class="form-control" id="series" name="series" placeholder="Inserisci la serie..." required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">data di vendita</label>
                <textarea value="{{$comic->sale_date}}" class="form-control" id="sale_date" name="sale_date" rows="3" placeholder="Inserisci la data di vendita..."> {{$comic->sale_date}}</textarea>
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label"> Artisti </label>
                <textarea  class="form-control" id="artists" name="artists" rows="3" placeholder="Inserisci gli artisti...">{{$comic->artist}}</textarea>
            </div><div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea class="form-control" id="writers" name="writers" rows="3" placeholder="Inserisci gli scrittori...">{{$comic->writers}}</textarea>
                <label for="description">Descrizione</label>
                <textarea  class="form-control" id="description" name="description" rows="3" placeholder="Inserisci gli scrittori...">{{$comic->description}}</textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-success w-100">
                    Aggiorna
                </button>
            </div>

        </form>
        </div>
    </div> 
</h2>
@endsection