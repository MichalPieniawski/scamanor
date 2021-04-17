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
    
               


          <script type="text/javascript">
   $('data').datepicker({
       todayBtn: "linked",
       language: "it",
       autoclose: true,
       todayHighlight: true,
       Format: 'dd/mm/yyyy' 
   });
</script>


@if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif
    

   <div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <!-- Form -->
            @if(count($errors)>0)
           <ul>
      @foreach($errors->all() as $error)
    <li class="alert alert-danger">{{$error}}</li>
    @endforeach
    </ul>
    @endif
            <form class="form-example" action="/offersubmit" method="POST">
            @csrf
                <h1>Tworzenie nowej oferty wymiany</h1>
                <p class="description">Utwórz nową ofertę wymiany, uzupełniając formularz.</p>
                <!-- Input fields -->
                <div class="form-group">
                    <label for="tresc">Tytuł gry:</label>
                    <input type="text" class="form-control" id="itemTitle" placeholder="Wprowadź tytuł gry, jaką chcesz wystawić do wymiany..." name="itemTitle">
                </div>
                <div class="form-group">
                    <label for="tresc">Opisz swoją grę:</label>
                    <input type="text" class="form-control" id="descripton" placeholder="Opisz swoją grę..." name="descripton">
                </div>
                
               <!--  divek na zdjęcie !!!!
                   
                   <div class="form-group">
                    <label for="place">Zdjęcie Gry (Opcjonalne):</label>
                popraw, tu nie wiem czy input czy kto wie co ->    <input type="text" class="form-control" id="place" placeholder="Wpisz miejsce zdarzenia..." name="place">
                </div>
               
                -->

                <div class="form-group">
                   
                    <input type="hidden" id="id_user" name="id_user" value="{{Auth::user()->id }}">
                    
    </div>
             
                <button type="submit" class="btn btn-default">Dodaj wpis</button>
                <!-- End input fields -->
                </form>
                </div>
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
    <!-- /.
    content -->
@endsection