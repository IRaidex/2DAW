<!doctype html>

<html lang="es">

<head>
    <meta charset="utf-8">

    <title>Test</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <main role="main" class="container" style="margin-top:60px;">
        <div class="row">
            <h3>Test Card</h3>
            <select id="category" class="form-control mg-btm-10 category" name="category">
                <option value="null">Selecciona una categoria</option>
            <?php
            foreach ($data['arrayKeys'] as $key => $value) {
                echo '<option value="' . $value . '">' . $value . '</option>';
            }
            ?>
            </select>
        </div>
        <div class="row">
            <div id="tablecontainer" class="col-xs-12" style="width:100%; margin-top:2em;">
                <!--Aqui va la tabla que sale de elegir la categoria
                cargala dinámicamente con ajax-->
            </div>
        </div>
        

    </main>
    <!-- /.container -->

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


<script>
        $( document ).ready(function() {
            $('#category').change(function() {
                cargaTabla($(this).val());
            });
        });
        function cargaTabla(id){
            //coge el elemento seleccionado
            $.ajax({
            type: "POST",
            url: '/',
            data: {'idtotable':id},
            success: function (result) {
                $('#tablecontainer')[0].innerHTML = result;
                console.log(result);
            },
            error: function (e) {
                $('#tablecontainer')[0].innerHTML ="ERROR:: Aqui deberia cambiar el contenido y mostrar la tabla"
            }
            });
        }
    </script>
</body>

</html>