@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="card-body">
        <div class="form-group text-center">
            <p><b><h3> Créer mon compte <h3></b></p>
        </div>
        <br>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-6">

                    <label for="email">{{ __('Adresse mail :') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">

                    <label for="phone">Téléphone :</label>
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                </div>
            </div> 

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="password">{{ __('Mot de passe :') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="password-confirm">{{ __('Confirmation :') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">{{ __('Nom :') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="prenom">Prénom :</label>
                    <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="birth">Date de naissance :</label>
                    <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="birth" value="2000-01-01" required autocomplete="birth" autofocus>
                </div>

                <div class="form-group col-md-6">
                    <label for="adresse">Adresse :</label>
                    <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ville">Ville :</label>
                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                </div>

                <div class="form-group col-md-6">
                    <label for="Pays">Pays :</label>
                    <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>
               </div>
            </div>  
            <br>

            <div class="text-center">
                <button type="submit" class="btn btn-dark">{{ __('Créer mon compte') }}</button>
            </div> 
        </div>
    </form>
</div>
@endsection


                    