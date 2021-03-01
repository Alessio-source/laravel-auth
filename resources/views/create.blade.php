@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" id="title" placeholder="Inserisci un titolo" name="title">
            </div>

            <div class="form-group">
                <label for="text">Testo</label>
                <textarea class="form-control" id="text" name="text" rows="3" placeholder="Inserisci il testo del post"></textarea>
            </div>

            <div class="custom-file mb-5">
                <input type="file" class="custom-file-input" id="file" name="img_path">
                <label class="custom-file-label" for="file">Seleziona il file</label>
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>

          </form>
    </div>
@endsection