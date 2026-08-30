    <!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Linktudi - Painel</title>

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

.topo{
    margin-bottom:25px;
}

.logo{
    font-size:28px;
    font-weight:bold;
}

.logo span{
    color:#ff7a00;
}

.boasvindas{
    color:#bdbdbd;
    margin-top:8px;
}

.saldo{
    background:#161616;
    border:1px solid #ff7a00;
    border-radius:18px;
    padding:20px;
    margin-bottom:20px;
}

.saldo h3{
    color:#bdbdbd;
    margin-bottom:10px;
}

.valor{
    font-size:30px;
    font-weight:bold;
}

.cards{
    display:grid;
    gap:12px;
    margin-bottom:20px;
}

.card{
    background:#161616;
    border-radius:18px;
    padding:18px;
}

.card h4{
    color:#bdbdbd;
    margin-bottom:8px;
}

.numero{
    font-size:24px;
    font-weight:bold;
}

.acoes{
    margin-top:20px;
}

.acao{
    display:block;
    text-decoration:none;
    background:#161616;
    color:#fff;
    padding:16px;
    border-radius:15px;
    margin-bottom:12px;
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

<div class="topo">
    <div class="logo">🌐 Link<span>tudi</span></div>
    <div class="boasvindas">Olá, Cliente 👋</div>
</div>

<div class="saldo">
    <h3>Saldo disponível</h3>
    <div class="valor">R$ 0,00</div>
</div>

<div class="cards">

    <div class="card">
        <h4>Total de pedidos</h4>
        <div class="numero">0</div>
    </div>

    <div class="card">
        <h4>Pedidos concluídos</h4>
        <div class="numero">0</div>
    </div>

</div>

<div class="acoes">
    <a class="acao" href="novo-pedido.php">🛒 Novo Pedido</a>
    <a class="acao" href="pedidos.php">📦 Meus Pedidos</a>
    <a class="acao" href="saldo.php">💰 Adicionar Saldo</a>
    <a class="acao" href="perfil.php">👤 Meu Perfil</a>
</div>

<div class="menu">
    <a href="painel.php">🏠<br>Início</a>
    <a href="novo-pedido.php">🛒<br>Pedido</a>
    <a href="saldo.php">💰<br>Saldo</a>
    <a href="perfil.php">👤<br>Perfil</a>
</div>

</body>
</html>
