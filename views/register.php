<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div>
        <h2>Cadastro de Usuario</h2>
        <action="" method="index.php?action=login">
            <label for="nome"></label>
            <input type="text" name ="nome" id="nome"required>
            <label for="email">email</label> 
            <input type="email"name= "email" id="email"required>
            <label for="senha">senha</label>
            <input type="password"name="senha" id="senha"required>
            <label for="=perfil">perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">colaborador</option>
             </select>
             <button type="submit">Cadastrar</button>
</form>
<a href="index.php?action=login">Voltar ao Login</a>
    </div>   
</body>
</html>