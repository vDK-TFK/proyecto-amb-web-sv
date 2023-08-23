<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <center><h1>Categorias</h1></center>
    <div class="row">
        <div class="col-sm-4">     
    
<a class="catelectronico" href="productosCategoria_mujer.php?categoria=<?php echo 'Mujer'?>">
Mujer
</a>
        </div>
        </div>  
    <div class="row">   
<div class="col-sm-4">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'Hombre'?>">
Hombre
</a>
</div>  
</div>
<div class="row">
<div class="col-sm-4">
<a class="catfarmaceutico" href="productosCategoria_niño.php?categoria=<?php echo 'Niños'?>">
Niños
</a>
</div>  
</div>
<!-- <div class="row">
<div class="col-sm-4">
<a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'Bebes'?>">
Bebes
</a>
</div>

</div> -->
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>

</body>
<?php require '../../includes/_footer.php' ?>
</html>