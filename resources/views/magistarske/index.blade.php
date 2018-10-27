@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Последипломске студије - Магистарске студије</h3>
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
            <a href="#" class="create-modal" data-toggle="modal" data-target="#create8">
          <i class="fa fa-address-card"></i>Унеси податке</a>
          </li>
        </ul>    
      </header>          
<!-- profile -->
<div id="profile" class="tab-pane">
<section class="panel">
  <div class="panel-body bio-graph-info">
    <h1>Последипломске студије - Магистарске студије</h1>

    <div class=""> 
     @if(count($magistarske) > 0)
     @foreach($magistarske as $magistarske)
      <div class="bio-row">
        @if($magistarske->up!==null)
        <p><span>Година уписа и завршетка студија</span>: <span id="up">{{$magistarske->up}}</span></p>
        @endif
      </div>
      <div class="bio-row">
         @if($magistarske->po!==null)
        <p><span>Место </span>: <span id="po">{{$magistarske->po}}</span></p>
        @endif
      </div>
      <div class="bio-row">
         @if($magistarske->sta!==null)
       <p><span>Република - држава </span>: <span id="sta">{{$magistarske->sta}}</span></p>
       @endif
      </div>
      <div class="bio-row">
         @if($magistarske->vi!==null)
       <p><span>Високошколска установа</span>: <span id="vi">{{$magistarske->vi}}</span></p>
       @endif
      </div>
      <div class="bio-row">
         @if($magistarske->ma!==null)
       <p><span>Назив магистарског рада</span>: <span id="ma">{{$magistarske->ma}}</span></p>
       @endif
      </div>
      <div class="bio-row">
         @if($magistarske->st!==null)
       <p><span>Стечени стручни назив </span>: <span id="st">{{$magistarske->st}}</span></p>
       @endif
      </div>
        <div class="row">
       <button class="btn btn-info" 
       data-myg="{{$magistarske->up}}" 
       data-mym="{{$magistarske->po}}" 
       data-myr="{{$magistarske->sta}}" 
       data-myv="{{$magistarske->vi}}" 
       data-myn="{{$magistarske->ma}}" 
       data-mys="{{$magistarske->st}}" 
       data-magid="{{$magistarske->id}}" 
       data-toggle="modal" 
       data-target=".myModal4"><i class="fa fa-edit"></i>Измени</button>
       <button class="btn btn-danger" 
       data-magid="{{$magistarske->id}}" 
       data-toggle="modal" 
       data-target="#delete4"><i class="fa fa-trash"></i>Обриши</button>
       </div>
       @endforeach
       @else
      <p>Нема података</p>
       @endif
    </div>
  </div> 
  </section>
  @include('magistarske.create')
  @include('magistarske.edit')
  @include('magistarske.delete')
       </div>
     </section>
   </div>
 </div>
</section>
</section> 

<script type="text/javascript">
$('.myModal4').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var g = button.data('myg')
var m = button.data('mym')
var r = button.data('myr')
var v = button.data('myv')
var n = button.data('myn')
var s = button.data('mys')
var mag_id = button.data('magid')

var modal = $(this)
modal.find('.modal-body #g').val(g);
modal.find('.modal-body #m').val(m);
modal.find('.modal-body #r').val(r);
modal.find('.modal-body #v').val(v);
modal.find('.modal-body #n').val(n);
modal.find('.modal-body #s').val(s);
modal.find('.modal-body #mag_id').val(mag_id);

});

$('#delete4').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var mag_id = button.data('magid')

var modal = $(this)
modal.find('.modal-body #mag_id').val(mag_id);

});
  </script>

   @endsection