@extends('layouts/main')

@section('container')

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="container">
		<div class="container-login">
			<div class="wrap-login">
				<form class="login-form">
					<span class="login-form-title">
						Faça o cadastro
					</span>

					<div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="nome" autocomplete="off">
						<span class="focus-input-form" data-placeholder="Nome"></span>
					</div>

                    <div class="wrap-input margin-top-35 margin-bottom-35">
						<input class="input-form" type="text" name="email" autocomplete="off">
						<span class="focus-input-form" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input margin-bottom-35">
						<input class="input-form" type="password" name="password">
						<span class="focus-input-form" data-placeholder="Senha"></span>
					</div>

                    <div class="wrap-input margin-bottom-35">
						<input class="input-form" type="password" name="confirmar">
						<span class="focus-input-form" data-placeholder="Confirmar senha"></span>
					</div>

					<div class="container-login-form-btn">
						<button class="login-form-btn">
							Criar conta
						</button>
					</div>

					<ul class="login-utils">
						
						<li>
							<span class="text1">
								Já tem conta?
							</span>

							<a href="/login" class="text2">
								Logar
							</a>
						</li>
					</ul>
				</form>
			</div>
			<img src="{{ asset('img/login.png') }}" width="300" height="300" class="margin-left-50" />
		</div>
	</div>

	<script>
		let inputs = document.getElementsByClassName('input-form');
		for (let input of inputs) {
			input.addEventListener("blur", function() {
				if(input.value.trim() != ""){
					input.classList.add("has-val");
				} else {
					input.classList.remove("has-val");
				}
			});
		}
	</script>

</body>
</html>

@endsection