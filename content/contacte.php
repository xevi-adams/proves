<form class="col-md-4" action="?seccio=contacte" method="post" enctype="multipart/form-data">

<h1>Pagina de contacte</h1>
    <h2>Formulari de Contacte</h2>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon glyphicon glyphicon-user"></div>
            <input class="form-control" type="text" name="user" placeholder="Nom o Rao Social">
        </div>
        <div class="input-group">
            <div class="input-group-addon glyphicon glyphicon-envelope"></div>
            <input class="form-control" type="email" name="mail" placeholder="Mail">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon glyphicon glyphicon-credit-card"></div>
            <input class="form-control" type="text" name="assumpte" placeholder="Assumpte">
        </div>
        <div class="input-group">
            <div class="input-group-addon glyphicon glyphicon-pencil"></div>
            <textarea class="form-control" rows="4" placeholder="Missatge"></textarea>
        </div>
    </div>
    <div class="input-group form-group">
        <div class="input-group-addon glyphicon glyphicon-upload"></div>
        <input id="exampleInputFile" type="file" name="arxiu">
    </div>

    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Enviar</button>
    <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancel·lar</button>

</form>

<?php


?>
