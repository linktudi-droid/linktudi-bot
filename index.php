<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Linktudi</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#0d0d0d;
    color:#fff;
}

header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px;
    border-bottom:1px solid #222;
}

.logo{
    font-size:24px;
    font-weight:bold;
    color:#ff7a00;
}

.menu{
    font-size:24px;
}

.hero{
    padding:40px 20px;
    text-align:center;
}

.hero h1{
    font-size:32px;
    margin-bottom:15px;
}

.hero p{
    color:#cfcfcf;
    line-height:1.6;
}

.card{
    background:#161616;
    margin:20px;
    padding:20px;
    border-radius:20px;
    border:1px solid #2a2a2a;
}

.card h2{
    margin-bottom:15px;
}

.input{
    width:100%;
    padding:15px;
    margin-bottom:12px;
    border:none;
    border-radius:12px;
    background:#222;
    color:#fff;
}

.btn{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#ff7a00;
    color:#fff;
    font-size:16px;
    font-weight:bold;
}

.features{
    padding:20px;
}

.feature{
    background:#161616;
    padding:18px;
    margin-bottom:12px;
    border-radius:15px;
}

footer{
    text-align:center;
    padding:30px 20px;
    color:#999;
}

</style>
</head>
<body>

<header>
    <div class="logo">LINKTUDI</div>
    <div class="menu">☰</div>
</header>

<section class="hero">
    <h1>Serviços digitais em um só lugar</h1>
    <p>
        Escolha o serviço desejado, informe os dados necessários
        e acompanhe seus pedidos diretamente pela plataforma.
    </p>
</section>

<div class="card">

    <h2>Novo Pedido</h2>

    <input class="input" type="text" placeholder="Pesquisar serviço">

    <select class="input">
        <option>Selecione uma categoria</option>
        <option>Instagram</option>
        <option>TikTok</option>
        <option>YouTube</option>
        <option>Telegram</option>
    </select>

    <select class="input">
        <option>Selecione um serviço</option>
    </select>

    <input class="input" type="text" placeholder="Cole o link">

    <input class="input" type="number" placeholder="Quantidade">

    <button class="btn">
        Continuar
    </button>

</div>

<section class="features">

    <div class="feature">
        📦 Acompanhe seus pedidos em tempo real.
    </div>

    <div class="feature">
        ⚡ Processamento automatizado.
    </div>

    <div class="feature">
        🔒 Plataforma segura.
    </div>

    <div class="feature">
        💬 Suporte ao cliente.
    </div>

</section>

<footer>
    © 2026 Linktudi - Todos os direitos reservados
</footer>

</body>
</html>
