@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BEM VINDO À SUA LISTA DE CONTATOS !!! <a href="{{ url('contatos/add') }}" class="btn btn-primary btn-sm float-right">Novo</a> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif    

                       
         <div class="row">
            <form action="{{ url('/contatos/busca') }}" method="post">
          <div style="margin-top: 25px" class="col-sm-16 input-group">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="criterio" placeholder="Buscar...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">ok</button>
            </span>
          </div>
        </form>
    </div>
           


            </div>

        </div>
    </div>
</div>
@endsection
