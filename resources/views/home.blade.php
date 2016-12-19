@extends("layout.layout");

@section('title',"meu glog")

<div class="jumbotron">
    <div class="container">
        <h1>
            Seja Bem-Vindo(a)!
        </h1>
        <p>
            este é um projeto para estudos
        </p>
    </div>

</div>
<div class="container">
    <div class="row">
        @section('content')

            @foreach($post as $pos)

                <div class="col-md-4">
                    <h2> {{$pos["title"]}}</h2>
                    <img class="img-thumbnail" data-src="holder.js/200x200" alt="{{$pos["title"]}}"
                         style="width: 200px; height: 200px;" src="{{$pos["imagem"]}}" data-holder-rendered="true">


                    <p >   {{$pos["conteudo"]}}</p>


                </div>

            @endforeach
    </div>

    @stop
</div>