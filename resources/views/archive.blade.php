@extends('layouts.admin')

@section('content')
<script>
$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0,
            "render": function(data, type, row) {return '<button class="btn btn-primary" data-toggle="modal" data-id="'+row.id+'" data-fieldname="'+row.fieldname+'" data-target="#myModal">'+data+'</button>'} 
        } ],
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50, ]],
        "order": [[ 1, 'asc' ]],
        
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
    
    /* -> OnClick event, gdyby był potrzebny z wykorzystaniem MODALU.
    t.on('click', 'td', function () {
      
        var tresc =$(this).closest('tr').find('td:eq(2)').html();
        var id =$(this).closest('tr').find('td:eq(8)').html();
      $('#addNote').attr('action', '/addNote')
       window.$('#modal-id').modal("show");
       $(".ptresc").html("src","");
       $(".ptresc").html("<b> 1. Treść wpisu:     </b>"+tresc);
       $(".pid").html("src","");
       $(".pid").html("<b> 3. ID wpisu:     </b>"+id);
    });
    */
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
       
<div class="container">
<form class="center" >
  <div class="form-group mb-2" align="center">
    <h1><i class="fa fa-archive"> </i> <b> Archiwalne- wykonane wpisy </b></h1>
    <p> Tabela zawiera wpisy uznane za zakończone. </p>
  </div>
</form>
<table id="example" class="table table-striped table-bordered text-center table-hover table-responsive-lg">
        <thead>
            <tr >
                <th>LP</th>
                <th>Data</th>
                <th>Zdjęcie</th>
                <th>Treść</th>
                <th>Autor</th>
                <th>Zakończył</th>
                <th>Status</th>
            </tr>
        </thead>
  
   </div>  
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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