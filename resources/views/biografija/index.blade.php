@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Стручна биографија</h3></p>
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
          <a href="#" class="create-modal" data-toggle="modal" data-target="#crea4">
        <i class="fa fa-address-card"></i>Унеси податке</a>
        </li>
      </ul>    
    </header>          
        <!-- profile -->
        <div id="profile" class="tab-pane">
          <section class="panel">
            <div class="panel-body bio-graph-info">
              <h1>Стручна биографија</h1>

              <div class=""> 
               @if(count($biografija) > 0)
               @foreach($biografija as $biografija)
                <div class="bio-row">
                  @if($biografija->kretanje!=null)
                  <p><span>Кретање у професионалном раду</span>: <span id="kretanje">{{$biografija->kretanje}}</span></p>
                 @endif
                </div>
                <div class="bio-row">
                  @if($biografija->angazovanje!=null)
                  <p><span>Радно ангажовање</span>: <span id="angazovanje">{{$biografija->angazovanje}}</span></p>
                   @endif
                </div>

                  <h1>Чланство у стручним и научним асоцијацијама</h1>
                  <div class="bio-row">
                    @if($biografija->clanstvo!=null)
                 <p><span>Члансто у САНУ</span>: <span id="clanstvo">{{$biografija->clanstvo!==null?$biografija->clanstvo->format('d/m/Y'):''}}</span></p>
                 @endif
                </div>

                 <div class="bio-row">
                  @if($biografija->sanu!=null)
                 <p><span>Чланство у другим стручним и научним асоцијацијама</span>: <span id="sanu">{{$biografija->sanu}}</span></p>
                 @endif
                </div>
                                  
               <div class="bio-row">
                @if($biografija->ostalo!=null)
                 <p><span>Остале активности</span>: <span id="ostalo">{{$biografija->ostalo}}</span></p>
                 @endif
                </div>
              <div class="row">
                 <button class="btn btn-info"
                 data-myda="{{$biografija->kretanje}}" 
                 data-myci="{{$biografija->angazovanje}}" 
                 data-myre="{{$biografija->sanu}}" 
                 data-mysc="{{$biografija->clanstvo!==null?$biografija->clanstvo->format('Y-m-d'):''}}" 
                 data-mydok="{{$biografija->ostalo}}" 
                 data-bioid="{{$biografija->id}}" 
                 data-toggle="modal" 
                 data-target=".moj1"><i class="fa fa-edit"></i>Измени</button>
                 <button class="btn btn-danger" 
                 data-bioid="{{$biografija->id}}" 
                 data-toggle="modal" 
                 data-target="#brisi1"><i class="fa fa-trash"></i>Обриши</button>
               </div> 
               @endforeach
            @else
           <p>Нема података</p>
            @endif
              </div>
            </div> 
            </section>
            @include('biografija.create')
            @include('biografija.edit')
            @include('biografija.delete')
     </div>
   </section>
 </div>
</div>
</section>
</section>
 

<script type="text/javascript">
$('.moj1').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var re = button.data('myre')
  var sc = button.data('mysc')
  var dok = button.data('mydok')
  var bio_id = button.data('bioid')

  var modal = $(this)
  modal.find('.modal-body #g').val(da);
  modal.find('.modal-body #m').val(ci);
  modal.find('.modal-body #v').val(re);
  modal.find('.modal-body #r').val(sc);
  modal.find('.modal-body #n').val(dok);
  modal.find('.modal-body #bio_id').val(bio_id);
});

$('#brisi1').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var bio_id = button.data('bioid')

var modal = $(this)
modal.find('.modal-body #bio_id').val(bio_id);
});
  </script>
 @endsection