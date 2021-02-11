<!-- Site wrapper - Contenedor del Sitio -->
<div class="wrapper">
    <?php 
        //---------------------------------------//
        include "navbar.php"; //barra de navegación.
        //---------------------------------------//
        include "sidebar.php"; //barra lateral.
        //---------------------------------------//
        if(isset($_GET["ruta"])){
            if( $_GET["ruta"] == "home"         ||
                $_GET["ruta"] == "users"        ||
                $_GET["ruta"] == "categories"   ||
                $_GET["ruta"] == "products"     ||
                $_GET["ruta"] == "manage-sales" ||
                $_GET["ruta"] == "create-sales" ||
                $_GET["ruta"] == "sales-report")
                {
                    include "crud/".$_GET["ruta"].".php";   
                }
                else {
                    //se incluye codigo de archivos de otras carpetas 
                    //esto permite reciclar codigo
                    include_once "controllers/404.controller.php";

                    $template = new ControllerTemplate();
                    $template -> ctrTemplate();
                }
        } //contenido de la pagina.
        //---------------------------------------//
        include "footer.php"; //pie de pagina.
        //---------------------------------------//
    ?>
</div>

