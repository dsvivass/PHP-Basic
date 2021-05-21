<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>

    <?php

        // Mensaje
        echo "<h3>Hola mundo</h3>";

        // Variable
        $nombre = "Daniel";

        // el punto . hace las veces de + para concatenar
        echo "Mi nombre es: " . $nombre . "<br/>";

        // Integer float String Boolean array Object

        // Para crear una constante
        define("Pi", 3.151596);

        echo "El valor de pi es: " . Pi;

        // Operaciones

        echo "6 + 4 = " . (6 + 4) . "<br/>";
        echo "6 - 4 = " . (6 - 4) . "<br/>";
        echo "6 * 4 = " . (6 * 4) . "<br/>";
        echo "6 / 4 = " . (6 / 4) . "<br/>";
        echo "6 % 4 = " . (6 % 4) . "<br/>";

        // Crear referencias
        $miNumero = 6;

        $refNumero = &$miNumero;

        $miNumero = 20;

        echo $refNumero . "<br/>";

        // Condicionales 
        // == === < > <= >= != !==

        $miEdad = 11;
        $analizar = true;

        if (($miEdad > 10) && (!$analizar)){
            echo "Mi edad es mayor a 10 <br/>";
        } else if (($miEdad <= 10) || ($analizar)){
            echo "Tienes menos de 10 anos <br/>";
        } else {
            echo "No se tu edad <br/>";
        };

        // Operador ternario ?

        $niNumber = 20;

        $resultado = ($miNumero < 40) ? "Tu numero es menor a 40 <br/>" : "Tu numero es mayor a 40 <br/>";

        echo $resultado;

        // Switch

        $user = "Daniel";

        switch ($user){
            case "Daniel":
                echo "Hola Daniel <br/>";
                break;
            case "Luis":
                echo "Hola Luis <br/>";
                break;
            default:
                echo "Ningun nombre concuerda";
                break;
        }

        // Ciclos

        $numero = 0;

        while ($numero < 10){
            echo $numero . "<br/>";
            $numero++;
        }

        for ($num=1; $num <= 10; $num++){
            echo $num + 2 . "<br/>";
        }

        // Arreglo, coleccion de datos

        $personas = array("Henry", "Carlos", "Lilia", "Jose", "Daniel");

        print_r($personas); // Imprime con el numero del indice
        echo count($personas);

        foreach ($personas as $persona){
            echo $persona . "<br/>";
        }

        // Objetos (o parecido)
        $people = array("Luis" => 20, "Beto" => 10);

        echo $people["Luis"] . "<br/>";

        foreach ($people as $k => $v){

            echo "$k tiene como valor: $v <br/>";

        }

        $cadena = "        Los colores          ";
        echo strlen($cadena) . "<br/>";
        echo strlen(ltrim($cadena)) . "<br/>";
        echo strlen(rtrim($cadena)) . "<br/>";
        echo strlen(trim($cadena)) . "<br/>";

        // Funciones

        function myFunc($number){
            return "Saludo Daniel " . $number;
        }

        echo myFunc(10);

    ?>

</body>
</html>
