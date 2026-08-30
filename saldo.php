<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Linktudi - Saldo</title>

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

.titulo{
    font-size:28px;
    font-weight:bold;
}

.titulo span{
    color:#ff7a00;
}

.card{
    background:#161616;
    border:1px solid #ff7a00;
    border-radius:18px;
    padding:20px;
    margin-bottom:20px;
}

.card h3{
    color:#bdbdbd;
    margin-bottom:10px;
}

.valor{
    font-size:32px;
    font-weight:bold;
}

.botoes{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:10px;
    margin-top:20px;
}

.valor-btn{
    background:#161616;
    color:#fff;
    border:1px solid #333;
    border-radius:12px;
    padding:15px;
    text-align:center;
}

.outro{
    margin-top:20px;
}

.outro input{
    width:100%;
    padding:14px;
    border:none;
    border-radius:12px;
    background:#222;
    color:#fff;
}

.pix{
    width:100%;
    margin-top:15px;
    background:#ff7a00;
    color:#fff;
    border:none;
    border-radius:12px;
    padding:15px;
    font-size:16px;
    font-weight:bold;
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

<div class="topo">
    <div class="titulo"><span>Saldo</span></div>
</div>

<div class="card">
    <h3>Saldo atual</h3>
    <div class="valor">R$ 0,00</div>
</div>

<div class="botoes">
    <div class="valor-btn">R$ 5</div>
    <div class="valor-btn">R$ 10</div>
    <div class="valor-btn">R$ 20</div>
    <div class="valor-btn">R$ 50</div>
</div>

<div class="outro">
    <input type="number" placeholder="Digite outro valor">
</div>

<button class="pix">
    GERAR PIX
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
