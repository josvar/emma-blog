@extends('backend.master')

@section('content')


<div class="row">
  <div class="columns">
    <label>Ingrese nombre del pokemon
      <input type="text" placeholder="Nombre del pokemon" name="name" value="">
    </label>
  </div>
</div>
<div class="row">
  <div class="columns">
    <label>Posicion
      <input type="text" name="name" value="">
    </label>
  </div>
</div>
<div class="row">
  <div class="columns">
    <label>Altura
      <input type="text" name="name" value="">
    </label>
  </div>
</div>
<div class="row">
  <div class="columns">
    <label>Peso
      <input type="text" name="name" value="">
      </label>
  </div>
</div>
<div class="row">
  <div class="columns">
    <label>Imagen del pokemon
      <input type="file">
    </label>
  </div>
</div>
<div class="row">
  <div class="columns">
    <label>Descripcion
      <textarea></textarea>
    </label>
  </div>
</div>
<!-- <div class="row">
  <div class="columns">
    <label>Tipo pokemon
      <input type="text" name="name" value="">
    </label>
    <label>Tipo 2(opcional)
      <input type="text" name="name" value="">
    </label>
  </div>
</div>
<div class="row">
  <div class="columns">
    <label>Debilidades
      <input type="text" name="name" value="">
    </label>
  </div>
</div> -->
<div class="row">
  <div class="columns">
    <input class="button expand" type="submit" name="name" value="Guardar">
  </div>
</div>




@endsection
