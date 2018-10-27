@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Основне студије</h3>
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
<a href="#" class="create-modal" data-toggle="modal" data-target="#create1">
<i class="fa fa-address-card"></i>Унеси податке</a>
</li>
</ul>    
</header>          
<!-- profile -->
<div id="profile" class="tab-pane">
<section class="panel">
  <div class="panel-body bio-graph-info">
    <h1>Основне студије</h1>
    <div class=""> 
     @if(count($skolovanje) > 0) 
     @foreach($skolovanje as $skolovanje)
      <div class="bio-row">
        @if($skolovanje->gUpisa!=null)
        <p><span>Година уписа и завршетка студија</span>: <span id="gUpi" name="gUpi">{{$skolovanje->gUpisa}}</span></p>
        @endif
      </div>
      <div class="bio-row">
        @if($skolovanje->mesto!=null)
        <p><span>Место </span>: <span id="mest" name="mest">{{$skolovanje->mesto}}</span></p>
        @endif
      </div>
      <div class="bio-row">
        @if($skolovanje->drzava!=null)
       <p><span>Република - држава </span>: <span id="drza" name="drza">{{$skolovanje->drzava}}</span></p>
       @endif
      </div>
      <div class="bio-row">
        @if($skolovanje->ustanova!=null)
       <p><span>Високошколска установа</span>: <span id="usta" name="usta">{{$skolovanje->ustanova}}</span></p>
       @endif
      </div>
      <div class="bio-row">
        @if($skolovanje->rad!=null)
       <p><span>Назив завршног рада</span>: <span id="rad" name="rad">{{$skolovanje->rad}}</span></p>
       @endif
      </div>
      <div class="bio-row">
        @if($skolovanje->strucniNaziv!=null)
       <p><span>Стечени стручни назив </span>: <span id="sNaz" name="sNaz">{{$skolovanje->strucniNaziv}}</span></p>
       @endif
      </div>
      <div class="row">
      <button class="btn btn-info" 
       data-myg="{{$skolovanje->gUpisa}}" 
       data-mym="{{$skolovanje->mesto}}" 
       data-myr="{{$skolovanje->drzava}}" 
       data-myv="{{$skolovanje->ustanova}}" 
       data-myn="{{$skolovanje->rad}}" 
       data-mys="{{$skolovanje->strucniNaziv}}" 
       data-skoid="{{$skolovanje->id}}" 
       data-toggle="modal" 
       data-target=".myModal1"><i class="fa fa-edit"></i>Измени</button>
      <button class="btn btn-danger" 
       data-skoid="{{$skolovanje->id}}" 
       data-toggle="modal" 
       data-target="#delete1"><i class="fa fa-trash"></i>Обриши</button>
       </div>
          @endforeach
          @else
          <p>Нема података</p>
          @endif
          </div>
         </div>
       </section>
          @include('skolovanje.edit')
          @include('skolovanje.create')
          @include('skolovanje.delete')
         </div>
       </section>
     </div>
   </div>
</section>
</section>
 

 <script type="text/javascript">

$('.myModal1').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var g = button.data('myg')
var m = button.data('mym')
var r = button.data('myr')
var v = button.data('myv')
var n = button.data('myn')
var s = button.data('mys')
var sko_id = button.data('skoid')

var modal = $(this)
modal.find('.modal-body #g').val(g);
modal.find('.modal-body #m').val(m);
modal.find('.modal-body #r').val(r);
modal.find('.modal-body #v').val(v);
modal.find('.modal-body #n').val(n);
modal.find('.modal-body #s').val(s);
modal.find('.modal-body #sko_id').val(sko_id);

});

$('#delete1').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var sko_id = button.data('skoid')

var modal = $(this)
modal.find('.modal-body #sko_id').val(sko_id);

});

  </script>

   @endsection