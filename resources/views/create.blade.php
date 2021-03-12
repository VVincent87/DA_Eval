@extends('layout')

@section('content')

<style>
    .container {
      max-width: 800px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Ajouter Personnage
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('characters.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="creation_year">Année de création</label>
              <input type="number" class="form-control" name="year"/>
          </div>
          <div class="form-group">
              <label for="affiliate_comic">Apparait dans</label>
              <input type="text" class="form-control" name="comic"/>
          </div>
          <div class="form-group">
              <label for="cartoonist">Dessinateur</label>
              <input type="text" class="form-control" name="cartoonist"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Créer le Personnage</button>
      </form>
  </div>
</div>
@endsection