<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Linktudi - Novo Pedido</title>

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

.busca{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:#222;
    color:#fff;
    margin-bottom:20px;
}

.categoria{
    background:#161616;
    border-radius:15px;
    padding:18px;
    margin-bottom:12px;
    border:1px solid #222;
}

.categoria h3{
    margin-bottom:5px;
}

.categoria p{
    color:#bdbdbd;
    font-size:14px;
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
<span>Novo Pedido</span>
</div>

<input
type="text"
class="busca"
placeholder="Buscar serviço">

<div class="categoria">
    <h3>Instagram</h3>
    <p>Ver serviços disponíveis</p>
</div>

<div class="categoria">
    <h3>TikTok</h3>
    <p>Ver serviços disponíveis</p>
</div>

<div class="categoria">
    <h3>YouTube</h3>
    <p>Ver serviços disponíveis</p>
</div>

<div class="categoria">
    <h3>Telegram</h3>
    <p>Ver serviços disponíveis</p>
</div>

<div class="categoria">
    <h3>Facebook</h3>
    <p>Ver serviços disponíveis</p>
</div>

<div class="categoria">
    <h3>X</h3>
    <p>Ver serviços disponíveis</p>
</div>

<div class="menu">
    <a href="painel.php">Início</a>
    <a href="novo-pedido.php">Pedido</a>
    <a href="saldo.php">Saldo</a>
    <a href="pedidos.php">Pedidos</a>
    <a href="perfil.php">Perfil</a>
</div>

</body>
</html>
