@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="row">
<div class="col-lg-12">
  <h3 class="page-header"><i class="fa fa-file-text-o"></i>Рецензије</h3></p>
</div>
</div>
<div class="row">
<!-- profile-widget -->
<div class="col-lg-12">
  <div class="profile-widget profile-widget-info">
    <div class="panel-body">
      <div class="col-lg-2 col-sm-2">
       <br>
       <br>
       <br>
      </div>
      <div class="col-lg-4 col-sm-4 follow-info">
      </div>
    </div>
  </div>
</div>
</div>
 <div class="row">
<div class="col-lg-12">
  <section class="panel">
    <header class="panel-heading tab-bg-info">
      <ul class="nav nav-tabs">
        <li>
          <a href="#" class="create-modal" data-toggle="modal" data-target="#crea7">
        <i class="fa fa-address-card"></i>Унеси податке</a>
        </li>
      </ul>    
    </header>          
        <!-- profile -->
<div id="profile" class="tab-pane">
<section class="panel">
<div class="panel-body bio-graph-info">
  <h1>Рецензије</h1>

  <div class="" id="sko"> 
   @if(count($recenzije) > 0)
   @foreach($recenzije as $recenzije)
    <div class="bio-row">
      @if($recenzije->domaca!=null)
      <p><span>{{$recenzije->domaca}}</span>: <span id="domace">{{$recenzije->podaci}}</span></p>
      @endif
    </div>
    <div class="bio-row">
      @if($recenzije->numero!=null)
      <p><span>Број</span>: <span id="numero">{{$recenzije->numero}}</span></p>
      @endif
    </div>
     <div class="row">
       <button class="btn btn-info"
       data-myda="{{$recenzije->domace}}" 
       data-myci="{{$recenzije->numero}}"  
       data-recid="{{$recenzije->id}}" 
       data-toggle="modal" 
       data-target=".moj4"><i class="fa fa-edit"></i>Измени</button>
       <button class="btn btn-danger" 
       data-recid="{{$recenzije->id}}" 
       data-toggle="modal" 
       data-target="#brisi4"><i class="fa fa-trash"></i>Обриши</button>
     </div> 
         @endforeach
     <div class="bio-row">
        <p><span>Укупно</span>: <span id="ukupno">{{$recenzije->sum('numero')}}</span></p>
      </div>
      @else
     <p>Нема података</p>
      @endif
        </div>
      </div> 
      </section>
      @include('recenzije.create')
      @include('recenzije.delete')
      @include('recenzije.edit')
     </div>
   </section>
 </div>
</div>
</section>
</section>
 
<script type="text/javascript">
$('.moj4').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var rec_id = button.data('recid')

  var modal = $(this)
  modal.find('.modal-body #g').val(da);
  modal.find('.modal-body #m').val(ci);
  modal.find('.modal-body #rec_id').val(rec_id);
});

$('#brisi4').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var rec_id = button.data('recid')

var modal = $(this)
modal.find('.modal-body #rec_id').val(rec_id);
});
 
  </script>

   @endsection