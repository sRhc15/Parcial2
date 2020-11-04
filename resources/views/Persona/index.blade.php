@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Personas</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('persona.create') }}" class="btn btn-info" >Añadir Persona</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               
               
             </thead>
             <tbody>
              @if($personas->count())  
              @foreach($personas as $persona)  
              <tr>
                <td>{{$persona->nombre}}</td>
                
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $personas->links() }}
    </div>
  </div>
</section>

@endsection

