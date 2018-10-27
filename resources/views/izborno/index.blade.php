@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Подаци о изборном звању, подручју рада и квантификацији резултата</h3>
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
    <a href="#" class="create-modal" data-toggle="modal" data-target="#crea1">
  <i class="fa fa-address-card"></i>Унеси податке</a>
  </li>
</ul>    
</header>          
  <!-- profile -->
  <div id="profile" class="tab-pane">
    <section class="panel">
      <div class="panel-body bio-graph-info">
        <h1>Подаци о изборном звању, подручју рада и квантификацији резултата</h1>
        <div class=""> 
         @if(count($izborno) > 0)
         @foreach($izborno as $izborno)
          <div class="bio-row">
            @if($izborno->nastavno!==null)
            <p><span>Наставно-научно звање</span>: <span id="nastavno">{{$izborno->nastavno}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($izborno->data!==null)
            <p><span>Датум избора у звање </span>: <span id="data">{{$izborno->data!==null?$izborno->data->format('d/m/Y'):''}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($izborno->oblast!==null)
           <p><span>Подручије рада (научна област) </span>: <span id="oblast">{{$izborno->oblast}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($izborno->grupa!==null)
           <p><span>Научна група</span>: <span id="grupa">{{$izborno->grupa}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($izborno->discip!==null)
           <p><span>Дисциплина</span>: <span id="discip">{{$izborno->discip}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($izborno->kljucne!==null)
           <p><span>Кључне речи</span>: <span id="kljucne">{{$izborno->kljucne}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($izborno->godina!==null)
           <p><span>Година од када се лице бави научноистраживачким радом </span>: <span id="godina">{{$izborno->godina}}</span></p>
           @endif
          </div>
          <div class="bio-row">
            @if($izborno->ukupno!==null)
           <p><span>Укупна квантификациона вредност резултата(М10-М90)</span>: <span id="ukupno">{{$izborno->ukupno}}</span></p>
           @endif
          </div>
        <div class="row">
           <button class="btn btn-info" 
           data-myda="{{$izborno->nastavno}}" 
           data-myci="{{$izborno->data!==null?$izborno->data->format('Y-m-d'):''}}" 
           data-myre="{{$izborno->oblast}}" 
           data-mysc="{{$izborno->grupa}}" 
           data-mydok="{{$izborno->discip}}" 
           data-myo="{{$izborno->kljucne}}" 
           data-myst="{{$izborno->godina}}" 
           data-myuk="{{$izborno->ukupno}}" 
           data-izbid="{{$izborno->id}}" 
           data-toggle="modal" 
           data-target=".myModal7"><i class="fa fa-edit"></i>Измени</button>
           <button class="btn btn-danger" 
           data-izbid="{{$izborno->id}}" 
           data-toggle="modal" 
           data-target="#delete7"><i class="fa fa-trash"></i>Обриши</button>
           </div> 
         @endforeach
      @else
     <p>Нема података</p>
      @endif
       </div>
      </div> 
      </section> 
      @include('izborno.create')
      @include('izborno.edit')
      @include('izborno.delete')
     </div>
   </section>
 </div>
</div>
</section>
</section> 

<script type="text/javascript">
$('.myModal7').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var re = button.data('myre')
  var sc = button.data('mysc')
  var dok = button.data('mydok')
  var ob = button.data('myo')
  var st = button.data('myst')
  var uk = button.data('myuk')
  var izb_id = button.data('izbid')
  

  var modal = $(this)
  modal.find('.modal-body #g').val(da);
  modal.find('.modal-body #m').val(ci);
  console.log(ci);
  console.log( modal.find('.modal-body #m').val());
  modal.find('.modal-body #r').val(re);
  modal.find('.modal-body #v').val(sc);
  modal.find('.modal-body #n').val(dok);
  modal.find('.modal-body #o').val(ob);
  modal.find('.modal-body #s').val(st);
  modal.find('.modal-body #u').val(uk);
  modal.find('.modal-body #izb_id').val(izb_id);
});

$('#delete7').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var izb_id = button.data('izbid')

  var modal = $(this)
  modal.find('.modal-body #izb_id').val(izb_id);
});
</script>
@endsection