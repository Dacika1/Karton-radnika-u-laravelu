@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-file-text-o"></i>Последипломске студије - Мастер академске студије</h3>
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
  <a href="#" class="create-modal" data-toggle="modal" data-target="#create6">
<i class="fa fa-address-card"></i>Унеси податке</a>
</li>
</ul>    
</header>          
<!-- profile -->
<div id="profile" class="tab-pane">
  <section class="panel">
    <div class="panel-body bio-graph-info">
      <h1>Последипломске студије - Мастер академске студије</h1>
      <div class="" > 
       @if(count($master) > 0)
       @foreach($master as $master)
        <div class="bio-row">
          @if($master->upis!==null)
          <p><span>Година уписа и завршетка студија</span>: <span id="upis" name="upis">{{$master->upis}}</span></p>
          @endif
        </div>
        <div class="bio-row">
          @if($master->posto!==null)
          <p><span>Место </span>: <span id="posto" name="posto">{{$master->posto}}</span></p>
          @endif
        </div>
        <div class="bio-row">
          @if($master->stato!==null)
         <p><span>Република - држава </span>: <span id="stato" name="stato">{{$master->stato}}</span></p>
         @endif
        </div>
        <div class="bio-row">
          @if($master->viseskolskaU!==null)
         <p><span>Високошколска установа</span>: <span id="viseskolskaU" name="viseskolskaU">{{$master->viseskolskaU}}</span></p>
         @endif
        </div>
        <div class="bio-row">
          @if($master->masterRad!==null)
         <p><span>Назив мастер рада</span>: <span id="masterRad" name="masterRad">{{$master->masterRad}}</span></p>
         @endif
        </div>
        <div class="bio-row">
          @if($master->steceniNaziv!==null)
         <p><span>Стечени академски назив </span>: <span id="steceniNaziv" name="steceniNaziv">{{$master->steceniNaziv}}</span></p>
         @endif
        </div>
        <div class="row">
         <button class="btn btn-info" 
         data-myg="{{$master->upis}}" 
         data-mym="{{$master->posto}}" 
         data-myr="{{$master->stato}}" 
         data-myv="{{$master->viseskolskaU}}" 
         data-myn="{{$master->masterRad}}"
         data-mys="{{$master->steceniNaziv}}" 
         data-masid="{{$master->id}}"
          data-toggle="modal" 
          data-target=".myModal3"><i class="fa fa-edit"></i>Измени</button>
         <button class="btn btn-danger"
         data-masid="{{$master->id}}" 
         data-toggle="modal" 
         data-target="#delete3"><i class="fa fa-trash"></i>Обриши</button>
         </div>
      @endforeach
    @else
   <p>Нема података</p>
    @endif
    </div> 
    </div>
    </section>
    @include('master.create')
    @include('master.edit')
    @include('master.delete')
   </div>
 </section>
</div>
</div>
</section>
</section>
 

<script type="text/javascript">

  $('.myModal3').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var g = button.data('myg')
var m = button.data('mym')
var r = button.data('myr')
var v = button.data('myv')
var n = button.data('myn')
var s = button.data('mys')
var mas_id = button.data('masid')

var modal = $(this)
modal.find('.modal-body #g').val(g);
modal.find('.modal-body #m').val(m);
modal.find('.modal-body #r').val(r);
modal.find('.modal-body #v').val(v);
modal.find('.modal-body #n').val(n);
modal.find('.modal-body #s').val(s);
modal.find('.modal-body #mas_id').val(mas_id);

});

$('#delete3').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var mas_id = button.data('masid')

var modal = $(this)
modal.find('.modal-body #mas_id').val(mas_id);

});
  </script>

   @endsection