@extends('layouts.app')

@section('content')

<div class="container text-center">
    <h1 class="h3 mb-3 font-weight-normal">S'identifier </h1>
        <form method="POST" action="{{ route('login') }}" style="width: 100%; max-width: 330px; padding: 15px; margin: auto;">
            @csrf
                    <input placeholder="Saisissez votre adresse mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>Identifiant ou mot de passe incorrect</strong>
                        </span>
                    @enderror
            <br>        
                    <input placeholder="Saisissez votre mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>Identifiant ou mot de passe incorrect</strong>
                        </span>
                    @enderror
                    <br>
                    <button type="submit" class="btn btn-lg btn-dark btn-block">
                        {{ __('Se connecter') }}
                    </button>
                    <br>
                    <button class="btn btn-lg btn-dark btn-block" onclick="window.location.href='{{ route('register') }}'" >Créer mon compte</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié ?') }}
                        </a>
                    @endif
        </form>        
</div>
@endsection
