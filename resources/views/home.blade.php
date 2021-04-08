@extends('layouts.admin')

@section('content')


<style>
.space { margin:0; padding:0; height:50px; } /* free space */
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
    <h1>Scamanor - Twoje miejsce do wymiany grami!</h1>
   
  </div>
  <div class="row justify-content-center">
  <h4>Użyj poniższych opcji, aby przenieść się na odpowiednią stronę </h4>
  </div>
  <br> </br>
    <!-- Main content -->
    <section class="content"> 
     
      <div class="container-fluid">
    
  <div class="container">
 
</div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <a href="list">
              <div class="inner">
                <h3>Lista Ogłoszeń  </h3>
                <p> Zawiera wszystkie ogłoszenia </p>
              </div>
              <div class="icon">
              </div>
              <a href="list" class="small-box-footer">Kliknij, aby przeglądać listę ogłoszeń <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="offer">
              <div class="inner">
                <h3>Utwórz ofertę wymiany!<sup style="font-size: 20px"></sup></h3>
                <p>Kliknij, aby utworzyć swoją ofertę wymiany.<p>
              </div>
              <div class="icon">
                
              </div>
              <a href="offer" class="small-box-footer">Kliknij, aby dodać własną ofertę wymiany<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <a href="statuslist">
              <div class="inner">
                <h3>Status wymiany</h3>

                <p>Sprawdź, czy zmienił się status Twoich wymian</p>
              </div>
              <div class="icon">
         
              </div>
              <a href="statuslist" class="small-box-footer">Kliknij, aby sprawdziś status wymian<i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <a href="archive">
              <div class="inner">
                <h3>Historia wymian</h3>

                <p>Zajrzyj do archiwum dokonanych przez Ciebie wymian. </p>
              </div>
              <div class="icon">
              
              </div>
              <a href="archive" class="small-box-footer">Kliknij, aby przejść do podstrony...<i class="fa fa-arrow-circle-right"></i></a>
            </div>
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
<br> </br>
<br> </br>
<br> </br>
<br> </br>
<div class="container">
            
            <div class="column">    
<div class="col-xs-1" align="center">

  <h2><p class="text-primary"> Sprawdź oferty wymiany, które są promowane!  </p></h2>
  </div>
  <p class="text-info">*Poniżej znajduję się tabela z ofertami  <b>PROMOWANYMI</b>. </p>
  


  
<table class="table table-striped table-bordered text-center table-hover table-responsive-lg" id="later">
     <thead>
      <tr >

      <th scope="col">LP</th>
        <th>Zdjęcie</th>
        <th>Data</th>
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