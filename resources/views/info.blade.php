@extends('layouts.admin')

<head>
<link rel = "icon" href = "https://www.vhv.rs/dpng/d/539-5398503_transparent-dementor-png-silhouette-harry-potter-dementor-png.png"  type = "image/x-icon">
</head>


@section('content')
<!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

          <script>
          $(document).ready(function() {
                var t = $('#Notki').DataTable( {
                    "columnDefs": [ {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0,
                     "info": true,
                                               } ],
                  "lengthMenu": [[-1, 4, 8, 10], ["All", 4, 8, 10 ]],
                  "order": [[ 1, 'asc' ]]
                                  } );
                t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                 cell.innerHTML = i+1;
                                                     } );
                         } ).draw();
                 });
                   
          </script>
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
                <p class="card-text">  <b>1.</b> Oferta: <b>}</b>   &nbsp&nbsp&nbsp&nbsp   <b> 2.</b> Autor wpisu:<b>  </b> &nbsp&nbsp&nbsp&nbsp  <b> 3.</b> Status:<b>  </b> </p>
     
                
                <p class="card-text"> <b> 4.</b> Tabela notatek:</p> 
                
                <form class="center" >
              <table id="Notki" class="table table-striped table-bordered text-center table-hover table-responsive-lg">
              <thead class="thead-dark">
            <tr>
                <th>LP</th>
                <th class="cell-breakWord">Treść</th>
                <th>Autor</th>
            </tr>
        </thead>
       
   </div>  
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
   
      </table>
                    <div>
                    </div>
                    <br>
                    </br>
                <h3>Dodawanie nowej notatki</h3>
                <p> Dodaj nową notatkę, uzupełniając formularz. Potem Kliknij "Dodaj notatkę".</p>
                <!-- Input fields -->
                <div class="form-group">
                    <label for="tresc_nt">Treść notatki</label>
                    <textarea height="100%" class="form-control" name="tresc_nt" id="tresc_nt" placeholder="Wprowadź tekst notatki"></textarea>
                </div>
                <input type="hidden" name="autor" id="autor" value="{{Auth::user()->name }}">
                <input type="hidden" name="notki" id="notki" value="TAK">
                <p align="right">               
                 <button type="submit" class="btn btn-primary">Dodaj notatkę</button>
                </p>
                <!-- End input fields -->
                </form>
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