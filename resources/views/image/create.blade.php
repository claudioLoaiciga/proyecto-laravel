{{--Heredamos un layout--}}
@extends('layouts.app')
{{--Seccion de contenido--}}
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subir nueva imagen</div>
                {{--contendor de la caja del formulario--}}
            <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    {{--campo para subir imagen--}}
                    <div class="form-group row">
                       <label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
                       <div class="col-md-7">
                           <input id="image_path" type="file" name="image_path" class="form-control" required>
                           @if ($errors->has('image_path'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$errors->firts('image_path')}}</strong>
                                </span>
                           @endif
                       </div>
                    </div>
                    {{--campo para la descripcion--}}
                    <div class="form-group row">
                        <label for="description" class="col-md-3 col-form-label text-md-right">Descripcion</label>
                        <div class="col-md-7">
                            <textarea id="description"  name="description" class="form-control" required> </textarea>
                            @if ($errors->has('description'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{$errors->firts('description')}}</strong>
                                 </span>
                            @endif
                        </div>
                     </div>
                     {{--campo para boton subir imagen--}}
                     <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                            <input type="submit" class="btn btn-primary" value="subir imagen">
                        </div>
                     </div>
                </form>
            </div>

            </div>
        </div>
    </div>
</div>


{{--Sierre de la seccion de contenido--}}
@endsection
