<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form
    method="POST" action="{{ url("buscar") }}" class="form-horizontal">
    @csrf
        <fieldset>

        <!-- Form Name -->
        <center>
        <legend>Búsqueda en varios motores</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="termino">1.Ingrese el termino de busqueda</label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>


        <!-- Multiple Checkboxes -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="Motores">2.Seleccione el botón de búsqueda</label>
          <div class="col-md-4">
          <div class="checkbox">
            <label for="Motores-0">
              <input type="checkbox" name="Motores" id="Motores-0" value="1">
              Google
            </label>
            </div>
          </div>
        </div>



        <div class="center">
          <div class="checkbox">
            <label for="Motores-1">
              <input type="checkbox" name="Motores" id="Motores-1" value="2">
              Bing
            </label>
            </div>
          </div>



        <div class="checkbox">
            <label for="Motores-2">
              <input type="checkbox" name="Motores" id="Motores-1" value="3">
              Ethicle
            </label>
            </div>
          </div>



          <div class="checkbox">
            <label for="Motores-3">
              <input type="checkbox" name="Motores" id="Motores-1" value="4">
              Lilo
            </label>
            </div>
          </div>


        <div class="checkbox">
            <label for="Motores-4">
              <input type="checkbox" name="Motores" id="Motores-1" value="5">
              DuckDuckGo
            </label>
            </div>
          </div>



        <div class="checkbox">
            <label for="Motores-5">
              <input type="checkbox" name="Motores" id="Motores-1" value="6">
              swisscoows
            </label>
            </div>
          </div>




        <div class="checkbox">
            <label for="Motores-6">
              <input type="checkbox" name="Motores" id="Motores-1" value="7">
              Seekweb
            </label>
            </div>
          </div>



        <div class="checkbox">
            <label for="Motores-6">
              <input type="checkbox" name="Motores" id="Motores-1" value="8">
              Yandex
            </label>
            </div>
        </div>




        <div class="checkbox">
            <label for="Motores-7">
              <input type="checkbox" name="Motores" id="Motores-1" value="9">
             Facebook
            </label>
            </div>
          </div>










          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button id="singlebutton" name="singlebutton" class="btn btn-success">Buscar</button>
            </div>
          </div>


        </fieldset>
        </form>
    </center>
</body>
</html>
