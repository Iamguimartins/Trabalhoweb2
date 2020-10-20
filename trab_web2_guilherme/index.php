<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<style>
    form {border:1px solid #000; padding: 25px; margin-top:20px; font:14px Arial, Helvetica, sans-serif;color:#000000;}
    form input{padding:4px; width:300px; display:flex;}
    form textarea{width:304px; display:flex}
    form button{width:130px; cursor:pointer;}
    div form{align-items: left; justify-content: left; }
</style>

<body>
    <div class="Formulário" align="center">

        <form action="mkdir.php" method="post">
            <label for="form">Codigo:</label>
            <input name="codigo" placeholder="Digite seu codigo" type="text"><br>
            <label for="nom_arquivo">Nome do Arquivo:</label>
            <input name="arqv" placeholder="Digite o nome do Arquivo" type="text"><br>
            <label for="form" placeholder="Insira o Texto Aqui">Texto:</label>
            <textarea id="position" name="desc" placeholder="Insira o Texto Aqui" rows="10" cols="50"></textarea><br>
            <button nome="botao" type="submit">Criar</button>
        </form>



        
        <div>
            <ul>
                <?php
                    $diretorio = 'newfolder';
                    $ponteiro = opendir($diretorio);

                    while ($nome_itens = readdir($ponteiro)){
                        $itens[] = $nome_itens;
                    }

                    sort($itens);

                    foreach($itens as $listar){
                        if ($listar != '.' && $listar != '..'){
                            $pastas[] = $listar;
                        }
                    }

                    if ($pastas != '') {
                        foreach($pastas as $listar){
                            echo "<li>$listar - <a href=\"rmdir.php?dir=$listar\">(x)excluir</a></li>";
                        }
                    }
                ?>
            </ul>
        </div>
</body>
</html>