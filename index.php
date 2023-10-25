<!-- 1. Construa um algoritmo que leia o valor de uma conta de luz (CL) e, caso o valor seja maior que R$ 150,00 apresente a mensagem: “Você está gastando muito”. Caso contrário exiba a mensagem: “Seu gasto foi normal”. -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisões em PHP</title>
 </head>
 <body>
    <form action="">
        <label for="">Valor da conta de luz</label>
        <input type="text" name="conta">
        <input type="submit" value="Confirmar">
        
        <?php 
            if (isset($_GET["conta"])) {

                $conta = $_GET["conta"];

                if ($conta > 150.00) {
                    echo "Você está gastando muito";
                } else {
                    echo "Seu gasto foi normal";
                }
            }
        ?>
    </form>
    
    <form action="">
        <label for="">Informe seu peso:</label>
        <input type="text" name="peso" placeholder="Insira o seu peso">

        <label for="">Informe sua altura:</label>
        <input type="text" name="altura" placeholder="Insira a sua altura">

        <button type="submit">Confirmar</button>

        <?php
            if(isset($_GET["peso"]) && isset($_GET["altura"])) {
                $peso = $_GET["peso"];
                $altura = $_GET["altura"];

                $imc = round($peso / ($altura * $altura), 2);

                if ($imc < 18.5) {
                    echo "Baixo peso";
                } else if ($imc >= 18.5 && $imc < 25) {
                    echo "Normal";
                } else if ($imc >= 25 && $imc < 30) {
                    echo "Sobrepeso";
                } else {
                    echo "Obesidade";
                }
            }
        ?>
    </form>
    
    <form action="">
        <label for="">Informe sua altura:</label>
        <input type="text" name="altura" placeholder="Insira a sua altura">

        <label for="">Informe seu sexo (M ou F): </label>
        <select name="select">
            <option value="0"></option>
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select>

        <button type="submit">Confirmar</button>

        <?php
            if(isset($_GET["altura"]) && isset($_GET["select"])) {
                $altura = $_GET["altura"];
                $sexo = $_GET["select"];

                if ($sexo == 0) {
                    echo "Informe todos os campos";
                } else if ($sexo == "m") {
                    $pesoIdeal = (72.7 * $altura) - 58;
                    echo $pesoIdeal;
                } else {
                    $pesoIdeal = (62.1 * $altura) - 44.7;
                    echo $pesoIdeal;
                }
            }
        ?>
    </form>
 </body>
 </html>