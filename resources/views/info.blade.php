@extends('layouts.admin')

<head>
<title>Scamanor</title>
<link rel = "icon" href = "./img/smoktrans.png"  type = "image/x-icon">
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
 .card-text{
    font-size:19px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
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
            <p class="card-text">
                    <label for="tresc">Informacje:</label>
                    </p>
                </div>
                <p class="card-text">
                 <b>1.</b> Nazwa gry: <b>{{$oferty['itemTitle']}}</b>   
                </p>
                 <p class="card-text"> 
                 <b> 2.</b> Autor wpisu:<b> {{$oferty['autor']}} </b> </p>
                 <p class="card-text">
                  <b>3. </b> Opis: <b> {{$oferty['description']}} </b>
                  </p>
                <!-- <b> 3.</b> zdjęcie:<b> <img src="data:image/jpeg;base64, {{$oferty['img_code']}}" width="150" height="175" alt="obrazekgry"> </b>  -->
     
            </p> 
            <button class="btn btn-default mb-2"><a target="_blank" href="{{ route('chat') }}">Chat</a></button>
                
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