@extends('layouts.app2')

@section('contenido')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>lista Usuarios</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{url('admin/admin/create')}}" class="btn btn-primary"> Agregar nuevo User</a>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Email</th>
                  <th>Opciones</th>
                </tr>
              </thead>
             
                @foreach ($user as $us )
                  
                
                <tr>
                  <td>{{$us->id}}</td>
                  <td>{{$us->name}}</td>
                  <td>{{$us->email}}</td>
                  <td>
                    
                      <a href="{{route('admin.edit',$us->id)}}" class="btn btn-primary col start "> editar</a>

                    
                      <form action="{{ route('admin.destroy', $us->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        
                           {{-- <button type="submit" class="btn btn-primary">eliminarr</button> --}}
                           <a href="#" onclick="this.closest('form').submit()" class="btn btn-warning  col start ">eliminar</a>
                        
                    </form>
                  
                   
                  </td>
                  
                </tr>
             
                @endforeach
             
            </table>
          </div>
          
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
  </section>
  <!-- /.content -->
</div>
@endsection
