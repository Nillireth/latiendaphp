@extends('layouts.principal')

@section('contenido')

    <div class="row"> 
        <h3>Catálogo de productos</h3>
    </div>

        @foreach($productos as $producto)
        <div class="row">
            <div class="col s12 m2">
            <div class="card">
                <div class="card-image">
                <img src="{{asset('img/'.$producto->imagen)}}">
                </div>
                <div class="card-content">
                <span class="card-title">{{$producto -> nombre}}</span>
                <p>{{$producto -> desc}}</p>
                <ul>
                <li><strong>Marca:</strong>  {{$producto ->marca->nombre}} </li>
                <li><strong>Categoria:</strong>  {{$producto ->categoria->nombre}} </li>
                <li><strong>Precio:</strong>  ${{$producto->precio}}</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        @endforeach

@endsection 