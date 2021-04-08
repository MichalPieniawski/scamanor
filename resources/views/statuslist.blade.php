@extends('layouts.admin')

@section('content')
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