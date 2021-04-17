@extends('layouts.admin')

@section('content')


<style>
.space { margin:0; padding:0; height:50px; } /* free space */
.maincategories {
    background: #fff;
    padding-top: 56px;
    padding-bottom: 61px;
}
</style>

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
 <div class="row justify-content-center">
    <h1> miejsce na logo chyba bo czemu nie!</h1>
   
  </div>
        <div class="maincategories">
        <div class="wrapper">
        <div class="row justify-content-center">
        <header> <h1> <b>Scamanor - Twoje miejsce do wymiany grami! </b> </h1>
        
        </header>
        </div>
        </div>


  
  </div>
  <br> </br>
    <!-- Main content -->
    <section class="content"> 
     
      <div class="container-fluid">
    
  <div class="container">
 
</div>
      
               
          <script>
$(document).ready(function() {
    var t = $('#later').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "lengthMenu": [[-1, 10, 25, 50], ["All", 10, 25, 50]],
        "order": [[ 1, 'asc' ]]
    } );
    
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
</script> 

<br> </br>


<div class="container">
            
            <div class="column">    
<div class="col-xs-1" align="center">

  <h2><p class="text"><b> OFERTY PROMOWANE  </b></p></h2>
  </div>
  <p class="text">*Poniżej znajduję się tabela z ofertami  <b>PROMOWANYMI</b>. </p>
  </div>
</div>

  
<table class="table table-striped table-bordered text-center table-hover table-responsive-lg" id="later">
     <thead>
      <tr >

      <th scope="col">LP</th>
        <th>Data</th>
        <th>Zdjęcie</th>
        <th>Treść</th>
        <th>Autor</th>
        <th>Miejsce</th>
        <th>Status</th>
        
      </tr>
   </thead>
    
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
   
      </tbody>
    </table>
            
           
           

            
               
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