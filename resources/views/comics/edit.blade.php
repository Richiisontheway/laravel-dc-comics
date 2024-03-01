@extends('layouts.app')

@section('page-title', 'Comics-create')

@section('main-content')
<h1>
    Comics create
</h1>

<h2>
    <div class="row">
        <div class="col col py-4 ">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna all'index dei comics
                </a>
            </div>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

                <div class="mb-3">
                    <label for="thumb" class="form-label">SRC</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la SRC..." maxlength="1024">
                </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="64" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="16" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">prezzo</label>
                <input type="string" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo...">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
                <input type="string" class="form-control" id="series" name="series" placeholder="Inserisci la serie..." required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">data di vendita</label>
                <textarea class="form-control" id="sale_date" name="sale_date" rows="3" placeholder="Inserisci la data di vendita..."></textarea>
            </div>
            <div class="mb-3">
                <label for="artists" class="form-label">artisti </label>
                <textarea class="form-control" id="artists" name="artists" rows="3" placeholder="Inserisci gli artisti..."></textarea>
            </div><div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea class="form-control" id="writers" name="writers" rows="3" placeholder="Inserisci gli scrittori..."></textarea>
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci gli scrittori..."></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-success w-100">
                    + Aggiungi
                </button>
            </div>

        </form>
        </div>
    </div> 
</h2>
@endsection