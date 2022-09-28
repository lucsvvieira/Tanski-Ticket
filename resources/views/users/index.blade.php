@extends('layouts.template')

@section('content')
    <section class="section d-flex justify-content-center p-5">

            <aside class="col-sm-6 mt-5">
        
        <div class="card">
        <article class="card-body">
            <h4 class="card-title text-center mb-4 mt-1">Realize o Login</h4>
            <hr>
            <form>
            <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="" class="form-control" placeholder="Digite o seu E-mail" type="email">
            </div> <!-- input-group.// -->
            </div> <!-- form-group// -->
            <div class="form-group">
            <div class="input-group mt-4 mb-5">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                 </div>
                <input class="form-control" placeholder="Digite sua senha" type="password">
            </div> <!-- input-group.// -->
            </div> <!-- form-group// -->
            <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->
            <div class="d-flex justify-content-around pt-4">
            <p><a href="#" class="btn">Esqueceu sua senha?</a></p>
            <p><a href="{{ route('users.create') }}" class="btn">Registre-se!</a></p>
            </div>
            </form>
        </article>
        </div> <!-- card.// -->
        
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
        
        </div> 
        <!--container end.//-->
    @endsection
