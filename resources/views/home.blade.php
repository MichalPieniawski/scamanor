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
        <div class="maincategories">
        <div class="wrapper">
        <div class="row justify-content-center">
        <header> <h1> <b><img src="./img/smoktrans.png" width="75" height="75" >Scamanor - Twoje miejsce do wymiany grami! </b> </h1>
        
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
    var t = $('#promo').DataTable( {
      "language":{
    "processing": "Przetwarzanie...",
    "search": "Znajdź:",
    "lengthMenu": "Pokaż _MENU_ pozycje",
    "info": "Pozycje od _START_ do _END_ z _TOTAL_ łącznie",
    "infoEmpty": "Pozycji 0 z 0 dostępnych",
    "infoFiltered": "(filtrowanie spośród _MAX_ dostępnych pozycji)",
    "loadingRecords": "Wczytywanie...",
    "zeroRecords": "Nie znaleziono pasujących pozycji",
    "paginate": {
        "first": "Pierwsza",
        "previous": "Poprzednia",
        "next": "Następna",
        "last": "Ostatnia"
    },
    "aria": {
        "sortAscending": ": aktywuj, by posortować kolumnę rosnąco",
        "sortDescending": ": aktywuj, by posortować kolumnę malejąco"
    },
    "autoFill": {
        "cancel": "Anuluj",
        "fill": "Wypełnij wszystkie komórki <i>%d<\/i>",
        "fillHorizontal": "Wypełnij komórki w poziomie",
        "fillVertical": "Wypełnij komórki w pionie",
        "info": "Informacje"
    },
    "buttons": {
        "collection": "Zbiór <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
        "colvis": "Widoczność kolumny",
        "colvisRestore": "Przywróć widoczność",
        "copy": "Kopiuj",
        "copyKeys": "Naciśnij Ctrl lub u2318 + C, aby skopiować dane tabeli do schowka systemowego. <br \/> <br \/> Aby anulować, kliknij tę wiadomość lub naciśnij Esc.",
        "copySuccess": {
            "1": "Skopiowano 1 wiersz do schowka",
            "_": "Skopiowano %d wierszy do schowka"
        },
        "copyTitle": "Skopiuj do schowka",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Pokaż wszystkie wiersze",
            "1": "Pokaż 1 wiersz",
            "_": "Pokaż %d wierszy"
        },
        "pdf": "PDF",
        "print": "Drukuj"
    },
    "emptyTable": "Brak danych w tabeli",
    "searchBuilder": {
        "add": "Dodaj warunek",
        "clearAll": "Wyczyść wszystko",
        "condition": "Warunek",
        "data": "Dane",
        "button": {
            "_": "Aktywne zapytania",
            "0": "Budowanie zapytania"
        },
        "conditions": {
            "array": {
                "contains": "Zawiera",
                "empty": "Pusta",
                "equals": "Równa się",
                "not": "Nie",
                "notEmpty": "Nie pusta",
                "without": "Bez"
            },
            "date": {
                "after": "Po",
                "before": "Przed",
                "between": "Pomiędzy",
                "empty": "Pusto",
                "equals": "Równa",
                "not": "Nie",
                "notBetween": "Nie pomiędzy",
                "notEmpty": "Nie pusta"
            },
            "number": {
                "between": "Pomiędzy",
                "empty": "Pusty",
                "equals": "Równy",
                "gt": "Większy niż",
                "gte": "Równy lub większy niż",
                "lt": "Mniejszy niż",
                "lte": "Równy lub mniejszy niż",
                "not": "Nie",
                "notBetween": "Nie pomiędzy",
                "notEmpty": "Nie pusty"
            },
            "string": {
                "contains": "Zawiera",
                "empty": "Pusty",
                "endsWith": "Kończy się na",
                "equals": "Równa się",
                "not": "Nie",
                "notEmpty": "Nie pusty",
                "startsWith": "Zaczyna się od"
            }
        },
        "deleteTitle": "Czyszczenie",
        "leftTitle": "Lewy",
        "logicAnd": "I",
        "logicOr": "Lub",
        "rightTitle": "Prawy",
        "title": {
            "_": "Aktywne zapytania",
            "0": "Budowanie zapytania"
        },
        "value": "Wartość"
    },
    "datetime": {
        "amPm": [
            "am",
            "pm"
        ],
        "hours": "Godzina",
        "minutes": "Minuta",
        "next": "Następne",
        "previous": "Poprzednie",
        "seconds": "Sekunda",
        "unknown": "nieznana"
    },
    "editor": {
        "close": "Zamknij",
        "create": {
            "button": "Dodaj",
            "submit": "Dodaj",
            "title": "Dodawanie nowego wpisu"
        },
        "edit": {
            "button": "Edytuj",
            "submit": "Aktualizuj",
            "title": "Aktualizacja wpisu"
        },
        "error": {
            "system": "Nastąpił błąd systemu (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Więcej informacji&lt;\\\/a&gt;).<\/a>"
        },
        "multi": {
            "info": "Wybrane pole zawiera wiele elementów z różnymi wartościami. Aby zmienić ich wartość kliknij w nie, inaczej zachowane zostaną ich wartości domyślne.",
            "noMulti": "Ta wartość może być edytowana oddzielnie - niezależnie od grupy.",
            "restore": "Cofnij zmiany",
            "title": "Pole z wieloma wartościami"
        },
        "remove": {
            "button": "Usuń",
            "confirm": {
                "_": "Czy na pewno chcesz usunąć %d rzędów?",
                "1": "Czy na pewno chcesz usunąć 1 rząd?"
            },
            "submit": "Usuń",
            "title": "Usuwanie"
        }
    },
    "searchPanes": {
        "clearMessage": "Wyczyść wszystkie",
        "collapse": {
            "_": "Aktywne grupowania (%d)",
            "0": "Grupowanie"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Brak paneli wyszukań",
        "loadMessage": "Ładuję panele wyszukań",
        "title": "Aktywne filtry"
    },
    "searchPlaceholder": "Szukaj w tabeli...",
    "select": {
        "_": "zaznaczono %d wierszy",
        "1": "zaznaczono %d wiersz",
        "cells": {
            "_": "zaznaczono %d komórek",
            "1": "zaznaczono %d komórkę"
        },
        "columns": {
            "_": "zaznaczono %d kolumn",
            "1": "zaznaczono %d kolumnę"
        }
    }
},
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0,
            "info": true,
        } ],
        "lengthMenu": [[-1, 10, 25, 50], ["Wszystkie", 10, 25, 50, ]],
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

<div class="container">

<form class="center" >
<table class="table table-striped table-bordered text-center table-hover table-responsive-lg" id="promo"> 
     <thead>
      <tr>
      <th>LP</th>
      <th>Zdjęcie</th>
      <th>Treść</th>
     
      </tr>
      </thead>
 <tbody>
 
 @foreach($ofertyprom as $row)
   </div>  
      <tr>
        <td style="height:50px;width:50px"></td>
        <td style="height:180px;width:180px"><img src="data:image/jpeg;base64,{{$row -> img_code}}" width="150" height="175" alt="obrazekgry"></td>
        <td class="cell-breakWord" style="text-align: center; vertical-align: middle;"><h5><b>{{$row -> itemTitle }}</b></h5></td>
 
      </tr>
  @endforeach
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