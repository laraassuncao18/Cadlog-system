<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Entrar</title>
</head>
 
<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
    <main>
        <h1>***🍉***</h1>
        <h1>Tela De Login</h1>
    <form method="post" action="index.php?acion=login">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Login</button>
    </form>
    <!-- Define o destino do link e leva à opção de cadastro -->
    <a href="index.php?action=register">Cadastrar-se</a>
    </main>
 
</body>
 
</html>
