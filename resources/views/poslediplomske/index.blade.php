@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i>Последипломске студије - Специјалистичке студије</h3>
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
    <a href="#" class="create-modal" data-toggle="modal" data-target="#create5">
  <i class="fa fa-address-card"></i>Унеси податке</a>
  </li>
</ul>    
</header>          
  <!-- profile -->
  <div id="profile" class="tab-pane">
    <section class="panel">
      <div class="panel-body bio-graph-info">
        <h1>Последипломске студије - Специјалистичке студије</h1>
        <div class="" > 
         @if(count($poslediplomske) > 0)
         @foreach($poslediplomske as $poslediplomske)
          <div class="bio-row">
            @if($poslediplomske->god!=null)
            <p><span>Година уписа и завршетка студија</span>: <span id="godU" name="godU">{{$poslediplomske->god}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($poslediplomske->place!==null)
            <p><span>Место </span>: <span id="mesto" name="mesto">{{$poslediplomske->place}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($poslediplomske->steit!==null)
           <p><span>Република - држава </span>: <span id="drzA" name="drzA">{{$poslediplomske->steit}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($poslediplomske->viseskolska!==null)
           <p><span>Високошколска установа</span>: <span id="vise" name="vise">{{$poslediplomske->viseskolska}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($poslediplomske->speciRad!==null)
           <p><span>Назив специјалистичког рада</span>: <span id="nazi" name="nazi">{{$poslediplomske->speciRad}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($poslediplomske->strucniNaziv!==null)
           <p><span>Стечени стручни назив </span>: <span id="stei" name="stei">{{$poslediplomske->strucniNaziv}}</span></p>
           @endif
          </div>
           <div class="row">
          <button class="btn btn-info" 
           data-myg="{{$poslediplomske->god}}" 
           data-mym="{{$poslediplomske->place}}" 
           data-myr="{{$poslediplomske->steit}}" 
           data-myv="{{$poslediplomske->viseskolska}}" 
           data-myn="{{$poslediplomske->speciRad}}" 
           data-mys="{{$poslediplomske->strucniNaziv}}" 
           data-poslid="{{$poslediplomske->id}}" 
           data-toggle="modal" 
           data-target=".myModal2"><i class="fa fa-edit"></i>Измени</button>
          <button class="btn btn-danger" 
           data-poslid="{{$poslediplomske->id}}" 
           data-toggle="modal"
            data-target="#delete2"><i class="fa fa-trash"></i>Обриши</button>
           </div>
            @endforeach
          @else
         <p>Нема података</p>
          @endif
        </div>
      </div> 
    </section>
      @include('poslediplomske.create')
      @include('poslediplomske.edit')
      @include('poslediplomske.delete')
   </div>
 </section>
</div>
</div>
</section>
</section>

<script type="text/javascript">

$('.myModal2').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var g = button.data('myg')
var m = button.data('mym')
var r = button.data('myr')
var v = button.data('myv')
var n = button.data('myn')
var s = button.data('mys')
var posl_id = button.data('poslid')

var modal = $(this)
modal.find('.modal-body #g').val(g);
modal.find('.modal-body #m').val(m);
modal.find('.modal-body #r').val(r);
modal.find('.modal-body #v').val(v);
modal.find('.modal-body #n').val(n);
modal.find('.modal-body #s').val(s);
modal.find('.modal-body #posl_id').val(posl_id);

});

$('#delete2').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var posl_id = button.data('poslid')

var modal = $(this)
modal.find('.modal-body #posl_id').val(posl_id);

});
  </script>

   @endsection