@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Editer & Modifier
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
      <form method="post" action="{{ route('characters.update', $character->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nom</label>
              <input type="text" class="form-control" name="name" value="{{ $character->name }}"/>
          </div>
          <div class="form-group">
              <label for="creation_year">Année de création</label>
              <input type="text" class="form-control" name="creation_year" value="{{ $character->creation_year }}"/>
          </div>
          <div class="form-group">
              <label for="affiliate_comic">Apparait dans</label>
              <input type="text" class="form-control" name="affiliate_comic" value="{{ $character->affiliate_comic }}"/>
          </div>
          <div class="form-group">
              <label for="cartoonist">Dessinateur</label>
              <input type="text" class="form-control" name="cartoonist" value="{{ $character->cartoonist }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Modifier personnage</button>
      </form>
  </div>
</div>
@endsection