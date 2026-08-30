<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Linktudi - Meus Pedidos</title>

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

.filtros{
    display:flex;
    gap:8px;
    overflow-x:auto;
    margin-bottom:20px;
}

.filtro{
    background:#161616;
    padding:10px 15px;
    border-radius:10px;
    white-space:nowrap;
}

.pedido{
    background:#161616;
    border-radius:15px;
    padding:15px;
    margin-bottom:12px;
}

.pedido h3{
    margin-bottom:8px;
}

.info{
    color:#bdbdbd;
    font-size:14px;
    margin-bottom:5px;
}

.status{
    margin-top:10px;
    font-weight:bold;
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
📋 <span>Meus Pedidos</span>
</div>

<div class="filtros">
    <div class="filtro">Todos</div>
    <div class="filtro">Em andamento</div>
    <div class="filtro">Concluídos</div>
    <div class="filtro">Cancelados</div>
</div>

<div class="
