<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Linktudi - Login</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#0d0d0d;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    padding:20px;
}

.card{
    width:100%;
    max-width:400px;
    background:#161616;
    border:1px solid #ff7a00;
    border-radius:20px;
    padding:25px;
}

.logo{
    text-align:center;
    color:#fff;
    font-size:32px;
    font-weight:bold;
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
    margin-bottom:15px;
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
}

.cadastro{
    text-align:center;
    margin-top:20px;
    color:#bdbdbd;
}

.cadastro a{
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
Bem-vindo de volta
</div>

<form>

<input type="email" placeholder="E-mail">

<input type="password" placeholder="Senha">

<button class="botao" type="submit">
ENTRAR
</button>

</form>

<div class="cadastro">
Não tem conta?<br><br>
<a href="#">CRIAR CONTA</a>
</div>

</div>

</body>
</html>
