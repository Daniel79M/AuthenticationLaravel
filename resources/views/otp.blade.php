@extends('extend.links')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
</head>

<body>
    @include('components.appBar')
    <section class="doc">
        <p>
            Un code de confirmation a été envoyé à votre e-mail. Saisisser-le dans le champs pour continuer.
        </p><br /><br />
        <div class="input_form">
        
            <form action="" method="" class="login">
                @csrf
                <h1>Code de confirmation</h1>
        
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
        
                <label for="code">Code de confirmation</label>
                <input type="hidden" name="email" id="email" value="{{ session()->get('email') }}">
                <input type="text" name="code" id="code" autocomplete="off" placeholder="Saisir le code ici ..."><br /><br />
        
                <button type="submit" class="btnSumbit">Soumettre</button>
            </form>
        </div>
    </section>
</body>

</html>
