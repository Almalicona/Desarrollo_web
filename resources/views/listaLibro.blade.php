
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

<div class="container mt-3">
        <div class="row justify-content-center">
            <div class="cold-md-11">
                <h1 class="text-center mb-5">
                    <i class="fas fa-user-graduate">Bienvenidos</i>
                </h1>
                <a class="btn btn-primary  mb-1" href="{{url('/formLibro')}}">
                    <i class="fas fa-user-plus"> AGREGAR</i>
                </a>
                <a class="btn btn-primary  mb-1" href="{{url('/')}}" role="button">
                    <i  class="fas fa-arrow-left"> Regresar</i>
                </a>

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>

                        <th>Nombre Libro</th>
                        <th>Fecha Apertura</th>
                        <th>Nombre Autor</th>
                        <th>Numero Serie</th>
                        <th>acciones</th>
                      

                    </tr>
                    </thead>

                    <tbody>

                        @foreach($libro as $libros)
                            <tr>


                                <td>{{$libros->nombre}}</td>
                                <td>{{$libros->fecha_apertura}}</td>
                                <td>{{$libros->nombre_autor}}</td>
                                <td>{{$libros->numro_serie}}</td>

                                <td width="10px">
                                    <a href="{{route('editformLibro', $libros->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-pencil-alt"> Editar</i>
                                    </a>

                                </td>
                                

                                <td width="10px">
                                    <form action="{{route('deleteLibro', $libros->id)}}"  method="POST" class="Alert-eliminar">
                                        @csrf @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"> Eliminar</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>

            <!--paginas-->
            {{ $libro->onEachSide(3)->links() }}

        </div>
    </div>
    </div>
