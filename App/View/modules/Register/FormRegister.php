<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <form action="/register/auth" method="POST">
            <p><input type="text" name="email" id="email" placeholder="Seu Email" autofocus=""/></p>
            <input type="password" name="senha1" id="senha1" placeholder="Sua Senha"/>
            <input type="password" name="senha2" id="senha2" placeholder="Confirma sua Senha"/>
            <p><button type="submit">Sign in</button>
            <p><a href="/login/form">Back</a>
        </form>
</body>
</html>