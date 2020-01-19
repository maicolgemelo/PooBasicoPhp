<?php
    
    if(isset($_POST["btncalcular"])){
      require_once 'Moneda.php';
        $objmoneda = new Moneda();

        $valor = $_POST["txtvalorpesos"];
        $objmoneda-> setValorpesos($valor);

        //echo "lo que hay en el atributo valor pesos es " . $objmoneda->getValorpesos();
        echo "La conversion de ". $valor . " es ". $objmoneda->calcularConversion();

    }else{
        echo "Eres un hacker, he capturado tu ip.";
    }










?>