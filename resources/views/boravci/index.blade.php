@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Подаци о студијским боравцима и другим облицима научног и <p> &emsp; стручног усавршавања у земљи и иностранству</h3></p>
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
          <a href="#" class="create-modal" data-toggle="modal" data-target="#crea2">
        <i class="fa fa-address-card"></i>Унеси податке</a>
        </li>
      </ul>    
    </header>          
        <!-- profile -->
        <div id="profile" class="tab-pane">
          <section class="panel">
            <div class="panel-body bio-graph-info">
              <h1>Подаци о студијским боравцима и другим облицима научног и стручног усавршавања у земљи и иностранству</h1>
              <div class=""> 
               @if(count($boravci) > 0)
               @foreach($boravci as $boravci)
                <div class="bio-row">
                  @if($boravci->organiz!==null)
                  <p><span>Организација-установа</span>: <span id="organiz">{{$boravci->organiz}}</span></p>
                  @endif
                </div>
                <div class="bio-row">
                  @if($boravci->anno!==null)
                  <p><span>Година</span>: <span id="anno">{{$boravci->anno}}</span></p>
                  @endif
                </div>
                <div class="bio-row">
                  @if($boravci->trajanje!==null)
                 <p><span>Трајање </span>: <span id="trajanje">{{$boravci->trajanje}}</span></p>
                 @endif
                </div>
                <div class="bio-row">
                  @if($boravci->luogo!==null)
                 <p><span>Место</span>: <span id="luogo">{{$boravci->luogo}}</span></p>
                 @endif
                </div>
                <div class="bio-row">
                  @if($boravci->paese!==null)
                 <p><span>Држава</span>: <span id="paese">{{$boravci->paese}}</span></p>
                 @endif
                </div>
              <div class="row">
                 <button class="btn btn-info" 
                 data-myda="{{$boravci->organiz}}" 
                 data-myci="{{$boravci->anno}}" 
                 data-myre="{{$boravci->trajanje}}" 
                 data-mysc="{{$boravci->luogo}}" 
                 data-mydok="{{$boravci->paese}}" 
                 data-borid="{{$boravci->id}}" 
                 data-toggle="modal" 
                 data-target=".myModal8"><i class="fa fa-edit"></i>Измени</button>
                 <button class="btn btn-danger" 
                 data-borid="{{$boravci->id}}" 
                 data-toggle="modal" 
                 data-target="#delete8"><i class="fa fa-trash"></i>Обриши</button>
              </div>
                 @endforeach
            @else
           <p>Нема података</p>
            @endif
            </div>
            </div> 
            </section>
            @include('boravci.create')
            @include('boravci.edit')
            @include('boravci.delete')
         </div>
       </section>
     </div>
   </div>
</section>
</section>

<script type="text/javascript">
$('.myModal8').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var re = button.data('myre')
  var sc = button.data('mysc')
  var dok = button.data('mydok')
  var bor_id = button.data('borid')

  var modal = $(this)
  modal.find('.modal-body #g').val(da);
  modal.find('.modal-body #m').val(ci);
  modal.find('.modal-body #r').val(re);
  modal.find('.modal-body #v').val(sc);
  modal.find('.modal-body #n').val(dok);
  modal.find('.modal-body #bor_id').val(bor_id);
});

$('#delete8').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var bor_id = button.data('borid')

  var modal = $(this)
  modal.find('.modal-body #bor_id').val(bor_id);
});
</script>

 @endsection