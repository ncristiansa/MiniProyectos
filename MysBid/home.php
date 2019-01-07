<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Seguimiento sBid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    body {
        margin:0;
    }
    .contenedor {
        float:left;
        padding:2%;
        margin-left:30%;
    }
    .show-info {
        padding:2%;
    }
</style>
<body>
    <?php 
        $server = "localhost";
        $user = "root";
        $pass = "funky";
        $bbdd = "sBidDB";
        $connect = mysqli_connect($server, $user, $pass, $bbdd);
    ?>
    <div class="contenedor">
        <h2>Seguimiento de sBid</h2>
        <form method="post">
            
            <label>Horas:</label> <br>
            <input type="number" name="horas"> <br>
            <label>ID Usuario: </label> <br>
            <input type="number" name="iduser"> <br>
            <label>Dia: </label> <br>
            <input type="text" name="fecha"> <br>
            <input type="submit" value="Guardar" name="enviar">
        </form>
    <?php
    $hora = $_POST["horas"];
    $idusr = $_POST["iduser"];
    $day = $_POST["fecha"];
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["enviar"])){
            $addDay = ("INSERT INTO Time (hours, userid, fecha) VALUES ($hora, $idusr, '$day');");
            if(mysqli_query($connect, $addDay)){
                header("Location: home.php");
            }
        }
    }

    ?>
    </div>
    <div class="show-info">
        <h2>Días realizados:</h2>
        <table border="1">
            <td bgcolor="Aquamarine">Horas</td>
            <td bgcolor="Aquamarine">Fecha</td>
            <?php
            $info = ("SELECT * FROM Time");
            $resultado = mysqli_query($connect, $info);
                while($consulta = mysqli_fetch_assoc($resultado)){
                    echo"\t<tr>\n";
                        echo"\t\t<td>".$consulta["hours"]."</td>\n";
                        echo"\t\t<td>".$consulta["fecha"]."</td>\n";
                    echo"\t</tr>\n";
                }
            ?>
        </table>
            
    </div>
    

    <footer>Cristian Salinas Andia</footer>
</body>
</html>