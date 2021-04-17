@extends('layouts.admin')

@section('content')

<style>

.space { margin:0; padding:0; height:50px; } /* free space */

.maincategories {
    background: #fff;
    padding-top: 56px;
    padding-bottom: 61px;
    height:158px;
}
</style>

<script>
$(document).ready(function() {
    var t = $('#usterki').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0,
            "info": true,
        } ],
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50, ]],
        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
</script>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
          
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content"> 
     
      <div class="container-fluid">
    
  <div class="container">
 
</div>
      

  <div class="maincategories">
  <div class="form-group mb-2" align="center">
    <h1><i class="fa fa-list"></i> <b>Wszystkie oferty wymiany  </b></h1>
     Lista wszystkich ofert w systemie. 
  </div>
  </div>

  <br> </br>
<br> </br>

<div class="container">

<form class="center" >
<table class="table table-striped table-bordered text-center table-hover table-responsive-lg" id="usterki"> 
     <thead>
      <tr>
      <th>LP</th>
      <th>Data</th>
      <th>Zdjęcie</th>
      <th>Treść</th>
      <th>Autor</th>
      <th>Miejsce</th>
      </tr>
      </thead>
 
   </div>  
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td class="cell-breakWord"></td>
        <td></td>
        <td></td>
 
  
       
      </tr>
  
    </table>

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
    <!-- /.
    content -->
@endsection