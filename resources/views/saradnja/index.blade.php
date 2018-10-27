@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-file-text-o"></i>Међународна сарадња</h3></p>
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
            <a href="#" class="create-modal" data-toggle="modal" data-target="#crea6">
          <i class="fa fa-address-card"></i>Унеси податке</a>
          </li>
        </ul>    
      </header>          
<!-- profile -->
<div id="profile" class="tab-pane">
  <section class="panel">
    <div class="panel-body bio-graph-info">
      <h1>Међународна сарадња</h1>
      <div class=""> 
       @if(count($saradnja) > 0)
       @foreach($saradnja as $saradnja)
        <div class="bio-row">
          @if($saradnja->opis!=null)
          <p><span>Опис сарадње</span>: <span id="opis">{{$saradnja->opis}}</span></p>
          @endif
        </div>
        <div class="bio-row">
          @if($saradnja->odDo!=null)
          <p><span>Од-До</span>: <span id="odDo">{{$saradnja->odDo}}</span></p>
          @endif
        </div>
        <div class="bio-row">
          @if($saradnja->saradjivao!=null)
          <p><span>Ко је сарађивао</span>: <span id="saradjivao">{{$saradnja->saradjivao}}</span></p>
          @endif
        </div>
        <div class="bio-row">
          @if($saradnja->bro!=null)
          <p><span>Број</span>: <span id="bro">{{$saradnja->bro}}</span></p>
          @endif
        </div>
       <div class="row">
        <button class="btn btn-info"
         data-myda="{{$saradnja->opis}}" 
         data-myci="{{$saradnja->odDo}}"
         data-mysa="{{$saradnja->saradjivao}}"
         data-mybr="{{$saradnja->bro}}"  
         data-sarid="{{$saradnja->id}}" 
         data-toggle="modal" 
         data-target=".moj3"><i class="fa fa-edit"></i>Измени</button>
        <button class="btn btn-danger" 
         data-sarid="{{$saradnja->id}}" 
         data-toggle="modal" 
         data-target="#brisi3"><i class="fa fa-trash"></i>Обриши</button>
       </div>
           @endforeach
          <div class="bio-row">
           <p><span>Укупно</span>: <span id="ukupno">{{$saradnja->sum('bro')}}</span></p>
          </div>
            @else
       <p>Нема података</p>
        @endif
          </div>
        </div> 
        </section>
        @include('saradnja.create')
        @include('saradnja.edit')
        @include('saradnja.delete')
       </div>
     </section>
   </div>
 </div>
</section>
</section>
 

<script type="text/javascript">
$('.moj3').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var sa = button.data('mysa')
  var br = button.data('mybr')
  var sar_id = button.data('sarid')

  var modal = $(this)
  modal.find('.modal-body #g').val(da);
  modal.find('.modal-body #m').val(ci);
  modal.find('.modal-body #r').val(sa);
  modal.find('.modal-body #v').val(br);
  modal.find('.modal-body #sar_id').val(sar_id);
});

$('#brisi3').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var sar_id = button.data('sarid')

var modal = $(this)
modal.find('.modal-body #sar_id').val(sar_id);
});
  </script>

   @endsection