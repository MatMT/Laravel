<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <title>Formulario</title>
    <link rel="stylesheet" href="{{asset('normalize.css')}}">
    <link rel="stylesheet" href="{{asset('forms.css')}}">
</head>

<body>
    <form id="personal-data" action="{{'formulario'}}" method="POST">
        <h1 class="no-margin centrar-texto">Formulario</h1>
        <hr>
        <div id="datos_form">

            {{ csrf_field() }}

            <div class="datos">
                <label for="NameType">Nombre</label>
                <br>
                <input type="text" name="NameType" placeholder="  Ingrese su nombre" class="nombre" id="NameType">
            </div>
            <div class="datos">
                <label for="AgeType">Edad</label>
                <br>
                <input type="number" name="AgeType" min="0" max="120" placeholder="  0" id="AgeType">
            </div>
            <div class="datos">
                <label for="CountryType">País</label>
                <br>
                <input type="text" name="CountryType" placeholder="  País donde vives" id="CountryType">
            </div>
            <div class="datos">
                <label for="TelType">Número de teléfono </label>
                <br>
                <input type="text" name="TelType" placeholder="  22774455" id="TelType">
            </div>
            <div class="datos">
                <label for="EmailType">Email</label>
                <br>
                <input type="email" name="EmailType" placeholder="  email@example.com" class="nombre" id="EmailType">
            </div>
            <div class="datos">
                <label for="WorkType">Profesión</label>
                <br>
                <input type="text" name="WorkType" placeholder="  Desarrollo de Software" id="WorkType">
            </div>
            <hr>
            <div id="botones">
                <input type="submit" value="Enviar" class="boton">
                <input type="reset" value="Borrar" class="boton">
            </div>
        </div>
    </form>
</body>

</html>