@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Признања, награде и одликовања за професионални рад</h3>
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
          <a href="#" class="create-modal" data-toggle="modal" data-target="#crea8">
        <i class="fa fa-address-card"></i>Унеси податке</a>
        </li>
      </ul>    
    </header>          
      <!-- profile -->
  <div id="profile" class="tab-pane">
    <section class="panel">
      <div class="panel-body bio-graph-info">
        <h1>Признања, награде и одликовања за професионални рад</h1>
        <div class=""> 
         @if(count($priznanja) > 0)
         @foreach($priznanja as $priznanja)
          <div class="bio-row">
            {{csrf_field()}}
            @if($priznanja->nagrade!=null)
            <p><span>Признања, награде и одликовања за професионални рад</span>: <span id="nagrade">{{$priznanja->nagrade}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($priznanja->ostalo!=null)
            <p><span>Остало</span>: <span id="ostalo">{{$priznanja->ostalo}}</span></p>
            @endif
          </div>
          <div class="row">
            <button class="btn btn-info"
             data-myna="{{$priznanja->nagrade}}" 
             data-myos="{{$priznanja->ostalo}}"  
             data-prizid="{{$priznanja->id}}" 
             data-toggle="modal" 
             data-target=".moj11"><i class="fa fa-edit"></i>Измени</button>
            <button class="btn btn-danger" 
             data-prizid="{{$priznanja->id}}" 
             data-toggle="modal" 
             data-target="#brisi11"><i class="fa fa-trash"></i>Обриши</button>
           </div> 
         @endforeach
      @else
     <p>Нема података</p>
      @endif
        </div>
        </div> 
      </section>
      @include('priznanja.create')
      @include('priznanja.delete')
      @include('priznanja.edit')  
    </div>   
 </section>
</div>
 </div>
</section>
</section>

<script type="text/javascript">
$('.moj11').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var na = button.data('myna')
  var os = button.data('myos')
  var priz_id = button.data('prizid')

  var modal = $(this)
  modal.find('.modal-body #j').val(na);
  modal.find('.modal-body #o').val(os);
  modal.find('.modal-body #priz_id').val(priz_id);
});

$('#brisi11').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var priz_id = button.data('prizid')

var modal = $(this)
modal.find('.modal-body #priz_id').val(priz_id);
});

</script>

   @endsection