<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando PHP,AJX Y MySQL</title>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <style>
    .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {

        padding-right: 2px;
        padding-left: 2px;
    }
    </style>
 </head>
<body>
<div class="container">
   <h1 class="main_title">Usando Ajax con PHP MySQL</h1>
   <div class="content">
     <div class="panel panel-default">
       <div class="panel-body">
         <h3> Agregar Alumnos</h3>
         <form>
           <div class="form-group">
             <div class="col-sm-2">
               <input type="text" id="nombres" class="form-control" placeholder="Nombres">
             </div>
             <div class="col-sm-2">
               <input type="text" id="apellidos" class="form-control" placeholder="Apellidos">
             </div>
             <div class="col-sm-2">
               <input type="text" id="email" class="form-control" placeholder="Email">
             </div>
             <div class="col-sm-2">
               <input type="text" id="telefono" class="form-control" placeholder="Telefono">
             </div>
             <div class="col-sm-1">
               <input type="button" class="btn btn-primary" value="Agregar" onclick="add_member()">
             </div>
       
           </div>
         </form>
         <div style="clear:both"></div>
       </div>
     </div>
     <hr>
     <div class="panel panel-default">
       <div class="panel-body">
         <h3> Lista de alumnos</h3>
         <div id="list_container">
           <?php 
                        // inlcuimos la conexion con el servidor
                        include('conexion.php');
                        $pdo = connect();
                        // Incluir para ver la totalidad de alumnos
                        include('lista_alumnos.php'); 
                    ?>
         </div>
         <!-- lista_contenedor --> 
       </div>
        </div>
        </div>
    </div>
</body>
</html>