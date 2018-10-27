@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i>Докторске студије</h3>
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
            <a href="#" class="create-modal" data-toggle="modal" data-target="#crea">
          <i class="fa fa-address-card"></i>Унеси податке</a>
          </li>
        </ul>    
      </header>          
          <!-- profile -->
  <div id="profile" class="tab-pane">
    <section class="panel">
      <div class="panel-body bio-graph-info">
        <h1>Докторске студије</h1>

        <div class=""> 
         @if(count($doktorske) > 0)
         @foreach($doktorske as $doktorske)
          <div class="bio-row">
            @if($doktorske->datumOdbrane!==null)
            <p><span>Датум одбране дисертације</span>: <span id="datumOdbrane" name="datumOdbrane">{{$doktorske->datumOdbrane!==null?$doktorske->datumOdbrane->format('d/m/Y'):''}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($doktorske->cita!==null)
            <p><span>Место </span>: <span id="cita" name="cita">{{$doktorske->cita}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($doktorske->republika!==null)
           <p><span>Република - држава </span>: <span id="republika" name="republika">{{$doktorske->republika}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($doktorske->scuola!==null)
           <p><span>Високошколска установа</span>: <span id="scuola" name="scuola">{{$doktorske->scuola}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($doktorske->doktorskaDisertacija!==null)
           <p><span>Назив докторске дисертације</span>: <span id="doktorskaDisertacija" name="doktorskaDisertacija">{{$doktorske->doktorskaDisertacija}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($doktorske->oblast!==null)
           <p><span>Област</span>: <span id="oblast" name="oblast">{{$doktorske->oblast}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($doktorske->steceni!==null)
           <p><span>Стечени стручни назив </span>: <span id="steceni" name="steceni">{{$doktorske->steceni}}</span></p>
           @endif
          </div>
          <div class="row">
           <button class="btn btn-info" 
           data-myda="{{$doktorske->datumOdbrane!==null?$doktorske->datumOdbrane->format('Y-m-d'):''}}" 
           data-myci="{{$doktorske->cita}}" 
           data-myre="{{$doktorske->republika}}" 
           data-mysc="{{$doktorske->scuola}}" 
           data-mydok="{{$doktorske->doktorskaDisertacija}}" 
           data-myo="{{$doktorske->oblast}}" 
           data-myst="{{$doktorske->steceni}}" 
           data-doktid="{{$doktorske->id}}" 
           data-toggle="modal" 
           data-target=".myModal6"><i class="fa fa-edit"></i>Измени</button>
           <button class="btn btn-danger" 
           data-doktid="{{$doktorske->id}}" 
           data-toggle="modal" 
           data-target="#delete6"><i class="fa fa-trash"></i>Обриши</button>
           </div> 
        @endforeach
      @else
     <p>Нема података</p>
      @endif
      </div> 
     </div>
      </section>
    @include('doktorske.create')
    @include('doktorske.edit')
    @include('doktorske.delete')
       </div>
     </section>
   </div>
 </div>
 </section>
</section>
 
<script type="text/javascript">
$('.myModal6').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var re = button.data('myre')
  var sc = button.data('mysc')
  var dok = button.data('mydok')
  var ob = button.data('myo')
  var st = button.data('myst')
  var dokt_id = button.data('doktid')

  var modal = $(this)
  modal.find('.modal-body #g').val(da);
  modal.find('.modal-body #m').val(ci);
  modal.find('.modal-body #r').val(re);
  modal.find('.modal-body #v').val(sc);
  modal.find('.modal-body #n').val(dok);
  modal.find('.modal-body #o').val(ob);
  modal.find('.modal-body #s').val(st);
  modal.find('.modal-body #dokt_id').val(dokt_id);
});

$('#delete6').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var dokt_id = button.data('doktid')

var modal = $(this)
modal.find('.modal-body #dokt_id').val(dokt_id);
});
  </script>

   @endsection