@extends('backend.master')

@section('app_id')
id="tipos"
@endsection

@section('content')

<div class="formulario panel" v-show="primerPanel">
  <h3 class="tituloPaso">Crear Tipo - 1/2</h3>
  <fieldset>
    <legend>Ingresando Tipo</legend>
    <div class="row">
      <div class="columns">
        <label>Nombre del tipo
          <input type="text" name="name" value="" v-model="tipo.nombre">
        </label>
      </div>
      <div class="columns">
        <label>Imagen del tipo
          <input type="file" name="name" value="">
        </label>
      </div>
    </div>
    <div class="row">
      <div class="columns small-6">
        <input class="button small" type="button" name="name" value="Cancelar">
      </div>
      <div class="columns small-6">
        <input class="button small" type="button" name="name" value="Siguiente" v-on="click:pasarSiguiente">
      </div>
    </div>
  </fieldset>
</div>

<div class="formulario segundo panel" v-if="segundoPanel">
  <h3 class="tituloPaso">Efectividades - 2/2</h3>
  <h5>Nuevo tipo: @{{tipo.nombre}}</h5>
  <fieldset>
    <legend>Efectividad contra el oponente</legend>
    <div class="row">
      <div class="columns">
        <label>Tipo del oponente
          <select v-model="tipoContraOponente" options="listaTipo">
          </select>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="columns">
        <label>Multiplicador de daño
          <select v-model="multContraOponente" options="multiplicadores">
          </select>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="columns small-6">
        <input class="button small" type="button" name="name" value="Cancelar">
      </div>
      <div class="columns small-6">
        <input class="button small" type="button" name="name" value="Agregar" v-on="click:agregarEfectividadContraOponente">
      </div>
    </div>
    <div class="row">
      <div class="columns">
        <ul class="inline-list lista-efectividad">
          <li v-repeat="efectividadesContraOponente">
            @{{text}}: @{{efectividad}}
          </li>
        </ul>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>Efectividad del oponente</legend>
    <div class="row">
      <div class="columns">
        <label>Tipo del oponente
          <select v-model="tipoDelOponente" options="listaTipo">
          </select>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="columns">
        <label>Multiplicador de daño
          <select v-model="multDelOponente" options="multiplicadores">
          </select>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="columns small-6">
        <input class="button small" type="button" name="name" value="Cancelar">
      </div>
      <div class="columns small-6">
        <input class="button small" type="button" name="name" value="Agregar" v-on="click: agregarEfectividadDelOponente">
      </div>
    </div>
    <div class="row">
      <div class="columns">
        <ul class="inline-list lista-efectividad">
          <li v-repeat="efectividadesDelOponente">
            @{{text}}: @{{efectividad}}
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="columns small-6">
        <input class="button" type="button" name="name" value="Atras" v-on="click:volverPanelAnterior">
      </div>
      <div class="columns small-6">
        <input class="button" type="button" name="name" value="Finalizar">
      </div>
    </div>
  </fieldset>



  <!-- <div class="row">
    <div class="columns small-4">
      <input class="button" type="button" name="name" value="Atras">
    </div>
    <div class="columns small-4">
      <input class="button" type="button" name="name" value="Cancelar">
    </div>
    <div class="columns small-4">
      <input class="button" type="button" name="name" value="Siguiente">
    </div>
  </div> -->
</div>





@endsection
