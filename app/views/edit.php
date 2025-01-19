<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form action="/update/<?= $user['id'] ?>" method="POST">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" value="<?= $user['name'] ?>" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?= $user['email'] ?>" required><br><br>
        
        <button type="submit">Atualizar</button>
        <a href="/">Voltar</a>
    </form>
</body>
</html>