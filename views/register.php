<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
    <div>
        <h2>Cadastro de Usuario</h2>
        < action="" method="post">
            <label for="nome"></label>
            <input type="text" name ="nome" id="nome"required>
            <label for="email">email</label> 
            <input type="email"name= "senha" id="senha"required>
            <label for="senha">senha</label>
            <input type="passwor"name="senha" id="senha"required>
            <label for="=perfil">perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">colaborador</option>
             </select>
             <button type="submit">Cadastrar</button>
</form>
<a href="">Voltar ao Login</a>
    </div>   
</body>
</html>