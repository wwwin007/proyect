@extends('layouts.app2')

@section('contenido')

<div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CREAR NUEVO USUARIO</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('admin.store') }}" method="POST">
              @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="name" required placeholder="nombre">
                      </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email"  required placeholder="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" required placeholder="Password">
                  </div>

                  <div class="form-group">
                    <div class="custom-file">
                    <input type="file" class="custom-file-input" name="imagen">
                    <label class="custom-file-label" for="exampleInputFile">cargar imagen</label>
                  </div>
                </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        
          </div>
 
        </div>
       
      </div>
    </section>
    <!-- /.content -->
  </div>
  
<script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
  
  @endsection
  