<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Linktudi - Perfil</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#0d0d0d;
    color:#fff;
    padding:20px;
    padding-bottom:90px;
}

.titulo{
    font-size:28px;
    font-weight:bold;
    margin-bottom:20px;
}

.titulo span{
    color:#ff7a00;
}

.card{
    background:#161616;
    border-radius:15px;
    padding:18px;
    margin-bottom:15px;
}

.label{
    color:#bdbdbd;
    font-size:14px;
    margin-bottom:5px;
}

.valor{
    font-size:16px;
}

.botao{
    width:100%;
    background:#ff7a00;
    color:#fff;
    border:none;
    border-radius:12px;
    padding:15px;
    font-size:16px;
    font-weight:bold;
    margin-top:10px;
    cursor:pointer;
}

.sair{
    width:100%;
    background:#222;
    color:#fff;
    border:none;
    border-radius:12px;
    padding:15px;
    font-size:16px;
    margin-top:10px;
    cursor:pointer;
}

.menu{
    position:fixed;
    bottom:0;
    left:0;
    width:100%;
    background:#161616;
    border-top:1px solid #2a2a2a;
    display:flex;
    justify-content:space-around;
    padding:12px 0;
}

.menu a{
    color:#fff;
    text-decoration:none;
    font-size:13px;
    text-align:center;
}
</style>
</head>

<body>

<div class="titulo">
<span>Meu Perfil</span>
</div>

<div class="card">
    <div class="label">Nome</div>
    <div class="valor">Cliente Exemplo</div>
</div>

<div class="card">
    <div class="label">E-mail</div>
    <div class="valor">cliente@email.com</div>
</div>

<div class="card">
    <div class="label">WhatsApp</div>
    <div class="valor">(00) 00000-0000</div>
</div>

<button class="botao">
Alterar Senha
</button>

<button class="sair">
Sair
</button>

<div class="menu">
    <a href="painel.php">Início</a>
    <a href="novo-pedido.php">Pedido</a>
    <a href="saldo.php">Saldo</a>
    <a href="pedidos.php">Pedidos</a>
    <a href="perfil.php">Perfil</a>
</div>

</body>
</html>
