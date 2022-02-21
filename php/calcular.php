<html>

<?php 

    $cateto1 = $_POST["c1"];
    $cateto2 = $_POST["c2"];

    if(isset($cateto1) && isset($cateto2) && is_numeric($cateto1) && is_numeric($cateto2)){
        $hipotenusa = ($cateto1 * $cateto1) + ($cateto2 * $cateto2);
    } else {
        $hipotenusa = "Datos erróneos. Solo se permiten números";
    }

    
?>

<body>
    <p>El valor de la hipotenusa es: <?php echo $hipotenusa; ?></p>    
</body>

</html>