<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="" alt="">
        <h1>LOGOTIPO</h1>            
    </header>

    <?php
        include "views/modules/navegacion.php";
    ?>

    <section>
    
    <?php
        $mvc = new MvcController();
        $mvc -> enlacesPaginasController();
    
    ?>
    
    </section>
</body>
</html>

<!-- esta bien esta identacion? --> 