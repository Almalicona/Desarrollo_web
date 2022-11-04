
<!DOCTYPE html>
<html lang="es">
<head>
<title>DESARROLLO WEB</title>
<meta charset="utf-8"/>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--Se agrega Boostrap a traves de el CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Para agragar el icono de basurero-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--Para iconoz-->

    <script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-mutate-approach="sync"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<div style="height: 20px;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg p-3 mb-5 bg-white ">
                    <div class="card-header">Ingresar Libro</div>
                    <div class="card-body">

                        <form action="{{ route('Libro.save')}}" method="POST" enctype="multipart/form-data" class="alerta">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-5 mb-4">
                                    <label for="nombre" >Nombre</label>
                                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre "  required>
                                </div>

                                <div class="col-md-5 mb-4">
                                    <label for="fecha" >Fecha Apertura</label>
                                    <input type="text" name="fecha_apertura" class="form-control" placeholder="10/5/2020"  required >
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-5 mb-4">
                                    <label for="nombre"> Nombre Autor</label>
                                    <input type="text" name="nombre_autor" class="form-control" placeholder="Jose Mendez"  required>
                                </div>

                                <div class="col-md-5 mb-4 ">
                                    <label for="nuero">Numero Serie</label>
                                    <input type="number" name="numro_serie" class="form-control" placeholder="23424"  required>
                                </div>
                            </div>
                            


                            <button type="submit" class="btn btn-primary "  >
                                <i class="fas fa-plus">  Guardar</i>
                            </button>
                            <a class="btn btn-primary  offset-2" href="{{url('/')}}" role="button">
                                <i  class="fas fa-arrow-left"> Regresar</i>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>