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

@if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>WOOPSI!</strong> Wygląda na to, że coś poszło nie tak. Oferta nie została utworzona.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
  </ul>
            <div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
        <div class="card">
            <!-- Form -->
  

            <form enctype="multipart/form-data" action="/offersubmit" method="POST" accept-charset="utf-8">
            @csrf
            <div class="card-header">
                <h1>Tworzenie nowej oferty wymiany</h1>
                <p class="description">Utwórz nową ofertę wymiany, uzupełniając formularz.</p>
                <!-- Input fields -->
                </div>
                <div class="card-body">
                <div class="form-group">
                    <label for="tresc">Tytuł gry:</label>
                    <input type="text" class="form-control" id="itemTitle" placeholder="Wprowadź tytuł gry, jaką chcesz wystawić do wymiany..." name="itemTitle">
                </div>
                <div class="form-group">
                    <label for="tresc">Opisz swoją grę:</label>
                    <input type="text" class="form-control" id="description" placeholder="Opisz swoją grę..." name="description">
                </div>
                
                <div class="form-group">
                <div class="form-inline">
                <label for="photo">Dodaj zdjęcie gry:  </label>
                    <input type="file"  name="photo" id="photo" accept="image.png, image/jpeg" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Dodaj zdjęcie do swojej oferty wymiany. Rozmiar zdjęcia nie może przekraczać 2MB.</small>
                    </div>
                </div>
    

                <div class="form-group"> <input type="hidden" id="id_user" name="id_user" value="{{Auth::user()->id }}">  </div>
                <p align="right">    
                <button type="submit" class="btn btn-success"  > <i class="fa fa-plus-circle"></i>  Dodaj wpis</button>
                </p>
                <!-- End input fields -->
                </form>
                </div>
            </form>
            <!-- Form end -->
        </div>
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