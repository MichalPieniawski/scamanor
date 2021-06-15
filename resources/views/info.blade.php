@extends('layouts.admin')

<head>
<link rel = "icon" href = "https://www.vhv.rs/dpng/d/539-5398503_transparent-dementor-png-silhouette-harry-potter-dementor-png.png"  type = "image/x-icon">
</head>


@section('content')
<!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

<style>
.cell-breakWord {
  word-break: break-word;
 }
 .container {overflow: auto;}
</style>

<br>
<div class="container">
        <div class="row justify-content-center align-items-center">
        <div class="col-sm-8">
          <div class="card">
            <!-- Form -->
            @if(count($errors)>0)
           <ul>
    
    <li class="alert alert-danger">{{$error}}</li>
 
    </ul>
    @endif
           <form class="form-example" action="/notesubmit" method="POST">
            @csrf
           
            <input type="hidden" name="id" id="id" value="{{$oferty['id']}}">
            
            <form class="form-inline">
          <div class="form-group mb-2">
           <div class="card-header cell-breakWord" align="center"><h1 >Tytuł wpisu: </h1> <h5><b>{{$oferty['itemTitle']}}</b></h5> </div>
           </div>
            <div class="card-body">
            <div class="form-group">
                    <label for="tresc">Informacje:</label>
                </div>
                <p class="card-text">  <b>1.</b> Oferta: <b>{{$oferty['itemTitle']}}</b>   &nbsp&nbsp&nbsp&nbsp   <b> 2.</b> Autor wpisu:<b> {{$oferty['autor']}} </b> &nbsp&nbsp&nbsp&nbsp  <b> 3.</b> Status:<b> <img src="data:image/jpeg;base64,{{$oferty['img_code']}}" width="150" height="175" alt="obrazekgry"> </b> </p> 
     
            
                
                
                    <div>
                    </div>
                    <br>
                    </br>

                </div>
                </div>
                </div>
                </div>
                </div>
            </form>
            </form>
            <!-- Form end -->
        </div>
    </div>
</div>
           

            
               
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection