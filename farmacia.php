<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Clientes - Farmácias A, B, C, D</title>
</head>
<body>
    <form action="processa_cadastro.php" method="post">
        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome"><br>
 
        <label for="rg">RG:</label><br>
        <input type="text" id="rg" name="rg"><br>
 
        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br>
 
        <label for="plano_saude">Plano de Saúde:</label><br>
        Sim <input type="radio" name="plano_saude" value="Sim">
        Não <input type="radio" name="plano_saude" value="Não"><br>
 
        <label for="qual_plano">Qual Plano?</label><br>
        <input type="text" id="qual_plano" name="qual_plano"><br>
 
        <label for="farmacia_popular">Uso de Farmácia Popular:</label><br>
        Sim <input type="radio" name="farmacia_popular" value="Sim">
        Não <input type="radio" name="farmacia_popular" value="Não"><br>
 
        <label for="qual_produto">Qual Produto?</label><br>
        <input type="text" id="qual_produto" name="qual_produto"><br>
 
        <label for="farmacia">Escolha a Farmácia:</label><br>
        A <input type="radio" name="farmacia" value="A">
        B <input type="radio" name="farmacia" value="B">
        C <input type="radio" name="farmacia" value="C">
        D <input type="radio" name="farmacia" value="D"><br>
 
        <input type="submit" value="Cadastrar"><br>
    </form>

    <div>
        <br><button class="bnt-index"><a class="a-index" href="index.php">Voltar</a></button>
    </div>
</body>
</html>