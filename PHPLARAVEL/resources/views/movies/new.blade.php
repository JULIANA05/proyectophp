@extends('layouts.app')
@section('content')

    <section class="container">
        <div class="row">
            <article class="col_md-10 col-md-offset-1">
                    <form action="{{route('movie.store')}}" method="post" novalidate>
                    @csrf 
                        <div class="form_group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form_group">
                            <label>Descripción</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form_group">
                            <button type="submit" class="btn btn-succes">Enviar</button>
                        </div>
                    </form>
            </article>
        </div>
    </section>
@endsection