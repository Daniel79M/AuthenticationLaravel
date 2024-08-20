@extends('extend.links')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
</head>
<body class="bg" >
    <section class="doc">
        <div class="input_form">
            <a href="{{ route('registration') }}"><button class="btn">S'inscrire</button></a>
            <form action="{{ route('login.process') }}" method="POST" class="login">
                @csrf
                {{-- <a href="{{ route('') }}"><button class="btn">S'inscrire</button></a><br /><br /> --}}
                
                @if ($errors->any())
                <div class="error">
                    <ul class="alert alert-danger">
                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </ul>
                </div>
                @endif 
                @if ($message = Session::get('error'))
                <div class="error">{{ $message }}</div><br />
                @endif
                <br />
                <h1>Connexion</h1>
                <label for="email">Email</label><br />
                <input type="text" name="email" id="email" placeholder="Saisir l'e-mail ici ..."><br /><br />
        
                <label for="password">Mot de passe</label><br />
                <input type="password" name="password" id="password" placeholder="Saisir le mot de pass ici ..."><br /><br />
        
                <a href="{{ route('forgottenPassword') }}">Mot de passe oublier</a><br /><br />
        
                <button type="submit" class="btnSumbit">Soumettre</button>
            </form>
        </div>
    </section>
    
</body>
</html>