<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wagner games | PC </title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../img/favicon/favicon-16x16.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <?php include_once '../header.php'?>

    <menu>
        <div class="pc_table">
            <table>

                <?php include_once 'pc_dados.php'?>

                    <?php 
                        $i = 0;
                        foreach ($pc["0"]["preco"] as $valor) {
                            $valor = $pc["0"]["preco"][$i];
                            $pc["0"]["preco"][$i] = number_format($valor, 2 , "," , ".");
                            $i += 1;
                        }
                        $i = 0;
                        foreach($assesorios["0"]["preco"] as $valor) {
                            $valor = $assesorios["0"]["preco"][$i];
                            $assesorios["0"]["preco"][$i] = number_format($valor, 2 , "," , ".");
                            $i += 1;
                        }
                        $i = 0;
                        foreach($games_pc["0"]["preco"] as $valor) {
                            $valor = $games_pc["0"]["preco"][$i];
                            $games_pc["0"]["preco"][$i] = number_format($valor, 2 , "," , ".");
                            $i += 1;
                        }
                    ?>

                <tr>
                    <th>PCS PRONTOS</th>
                    <th>ASSESORIOS</th>
                    <th>GAMES</th>
                </tr>

                <tr>
                    <td>
                        <div class="pc">
                            <h3><?=$pc["0"]["nome"]?></h3>
                            <img src="<?=$pc["0"]["img"]?>" alt="logo pc">
                            <p>Entre R$<?=$pc["0"]["preco"]["0"]?> até R$<?=$pc["0"]["preco"]["1"]?></p>
                            <p><?=$pc["0"]["descricao"]?></p>
                        </div>
                    </td>

                    <td>
                        <div class="assesorios">
                            assesorios
                        </div>
                    </td>

                    <td>
                        <div class="games_pc">
                            games-pc
                        </div>
                    </td>
                </tr>

            </table>
        </div>
    </menu>

    <script defer src="../../js/fechar-anuncio.js"></script>
    <script defer src="../../js/pesquisa_home.js"></script>
<hr>
    <footer>
        <?php include_once '../rodape.php' ?>
    </footer>

</body>
</html>