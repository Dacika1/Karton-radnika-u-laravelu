@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="row">
<div class="col-lg-12">
  <h3 class="page-header"><i class="fa fa-file-text-o"></i>Цитираност</h3></p>
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
          <a href="#" class="create-modal" data-toggle="modal" data-target="#crea5">
        <i class="fa fa-address-card"></i>Унеси податке</a>
        </li>
      </ul>    
    </header>          
        <!-- profile -->
        <div id="profile" class="tab-pane">
          <section class="panel">
            <div class="panel-body bio-graph-info">
              <h1>Цитираност</h1>

              <div class=""> 
               @if(count($citiranost) > 0)
               @foreach($citiranost as $citiranost)
                <div class="bio-row">
                  @if($citiranost->broj!==null)
                  <p><span>Број цитата без аутоцитата</span>: <span id="broj">{{$citiranost->broj}}</span></p>
                  @endif
                </div>
                <div class="bio-row">
                   @if($citiranost->izvor!==null)
                  <p><span>Извор</span>: <span id="izvor">{{$citiranost->izvor}}</span></p>
                  @endif
                </div>
                <div class="row">
                 <button class="btn btn-info"
                 data-myda="{{$citiranost->broj}}" 
                 data-myci="{{$citiranost->izvor}}"  
                 data-citid="{{$citiranost->id}}" 
                 data-toggle="modal" 
                 data-target=".moj2"><i class="fa fa-edit"></i>Измени</button>
                 <button class="btn btn-danger" 
                 data-citid="{{$citiranost->id}}" 
                 data-toggle="modal" 
                 data-target="#brisi2"><i class="fa fa-trash"></i>Обриши</button>
               </div> 

               @endforeach
            @else
           <p>Нема података</p>
            @endif
              </div>
            </div> 
            </section>
            @include('citiranost.create')
            @include('citiranost.edit')
            @include('citiranost.delete')
     </div>
   </section>
 </div>
</div>
</section>
</section>
 

<script type="text/javascript">
$('.moj2').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var cit_id = button.data('citid')

  var modal = $(this)
  modal.find('.modal-body #g').val(da);
  modal.find('.modal-body #m').val(ci);
  modal.find('.modal-body #cit_id').val(cit_id);
});

$('#brisi2').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var cit_id = button.data('citid')

var modal = $(this)
modal.find('.modal-body #cit_id').val(cit_id);
});
  </script>

   @endsection