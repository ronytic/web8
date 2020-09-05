<h1>Registro de Persona</h1>


<!-- <form action="<?= base_url(); ?>datos/guardar" method="GET">
    Nombre<input type="text" name="Nombre"><br>
    Apellido<input type="text" name="Apellido"><br>
    Edad<input type="text" name="Edad"><br>
    Carnet<input type="text" name="Carnet"><br>
    <input type="submit" value="Guardar">
</form> -->

<?= form_open(base_url() . 'datos/guardar', ['method' => 'get']) ?>
Nombre:
<?php
$data = array(
    'name'          => 'Nombre',
    'id'            => 'Nombre',
    'value'         => '',
    'maxlength'     => '100',
    'size'          => '50',

);
echo form_input($data);
?>
<br>
Apellido:

<?php

$data = array(
    'name'          => 'Apellido',
    'id'            => 'Apellido',
    'value'         => '',
    'maxlength'     => '100',
    'size'          => '50',

);

echo form_input($data);
?>

<br>

Edad:

<?php

$data = array(
    'name'          => 'Edad',
    'id'            => 'Edad',
    'value'         => '',
    'maxlength'     => '100',
    'size'          => '50',

);

echo form_input($data);
?>

<br>

Carnet:

<?php

$data = array(
    'name'          => 'Carnet',
    'id'            => 'Carnet',
    'value'         => '',
    'maxlength'     => '100',
    'size'          => '50',

);

echo form_input($data);
?>

<br>
<?= form_submit("", "Guardar") ?>


<?= form_close() ?>