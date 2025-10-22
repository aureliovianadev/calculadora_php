<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacao = $_POST['operacao'];
            $resultado = 0;

            switch ($operacao) {
                case 'soma':
                    $resultado = $num1 + $num2;
                    $simbolo = '+';
                    break;
                case 'subtracao':
                    $resultado = $num1 - $num2;
                    $simbolo = '-';
                    break;
                case 'multiplicacao':
                    $resultado = $num1 * $num2;
                    $simbolo = 'x';
                    break;
                    case 'divisao':
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                            $simbolo = '÷';
                        } else {
                            echo "<h1>Erro: divisão por zero!</h1>";
                            echo "<a href='index.html'><button>Voltar</button></a>";
                            exit;
                        }
                        break;
                    default:
                        echo "<h1>Operação inválida!</h1>";
                        exit;
                }
    
                echo "<h1>Resultado:</h1>";
                echo "<p>$num1 $simbolo $num2 = <strong>$resultado</strong></p>";
            ?>
            <a href="index.html"><button>Nova operação</button></a>
        </div>
    </body>
    </html>
    