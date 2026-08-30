<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Linktudi - Cadastro</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#0d0d0d;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.card{
    width:100%;
    max-width:420px;
    background:#161616;
    border:1px solid #ff7a00;
    border-radius:20px;
    padding:25px;
}

.logo{
    text-align:center;
    font-size:32px;
    font-weight:bold;
    color:#fff;
    margin-bottom:10px;
}

.logo span{
    color:#ff7a00;
}

.subtitulo{
    text-align:center;
    color:#bdbdbd;
    margin-bottom:25px;
}

input{
    width:100%;
    padding:14px;
    margin-bottom:12px;
    border:none;
    border-radius:12px;
    background:#222;
    color:#fff;
}

.botao{
    width:100%;
    background:#ff7a00;
    color:#fff;
    border:none;
    padding:14px;
    border-radius:12px;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
}

.login{
    text-align:center;
    margin-top:20px;
    color:#bdbdbd;
}

.login a{
    color:#ff7a00;
    text-decoration:none;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="card">

<div class="logo">
🌐 Link<span>tudi</span>
</div>

<div class="subtitulo">
Crie sua conta
</div>

<form action="login.php" method="post">

<input type="text" name="nome" placeholder="Nome completo" required>

<input type="text" name="usuario" placeholder="Usuário" required>

<input type="email" name="email" placeholder="E-mail" required>

<input type="text" name="whatsapp" placeholder="WhatsApp" required>

<input type="password" name="senha" placeholder="Senha" required>

<input type="password" name="confirmar_senha" placeholder="Confirmar senha" required>

<button class="botao" type="submit">
CRIAR CONTA
</button>

</form>

<div class="login">
Já possui conta?<br><br>
<a href="login.php">FAZER LOGIN</a>
</div>

</div>

</body>
</html>
