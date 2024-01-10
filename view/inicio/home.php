<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/inicio.css">
    <link rel="stylesheet" href="../estilo/popup.css">
    <title>checklist</title>
</head>
<body>
    <div class="topo">
        <img src="../imagens/logo.png" alt="" srcset="" class="logo">
        <img src="../imagens/titulo.png" alt="" srcset="">
    </div>

    <p class="intro">
        <pre>
       Faça o controle das suas
       listas e tarefas, e Faça
    ficar fácil, usando o checklist
        </pre>
    </p>

    <div class="popup-geral">
        <div class="popup">
            <button class="sair">X</button>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="" class="titulo">
            <br>
            <label for="tarefa">Tarefa:</label>
            <textarea name="tarefa" id="" cols="30" rows="10">

            </textarea>
            <br>
            <button class="adicionar-2">add</button>
        </div>
    </div>

    <button class="adicionar-1">add</button>

    <div class="area-tarefa">
        <h2>titulo</h2>
        <br>
        <div class="tarefa">
            <button class="excluir" name="excluir"><img src="../imagens/lixeira.png" alt=""></button>
            <button class="excluir" name="excluir"><img src="../imagens/lixeira.png" alt=""></button>
        </div>
    </div>

    <div class="rodape">
        <p class="direito">
            &#xa9;direito reservado
        </p>
        <p class="ciador">
            Criador: Antônio Máximo Silva Júnior
        </p>
    </div>
    <script src="script.js"></script>
</body>
</html>