@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-archive"></i> Међународни пројекти, пројекти (су)финансирани од осталих стране министарстава,<p> &emsp; привредних субјеката, локалне самоуправе и сл.  </p></h3>
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
<!-- page start-->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading tab-bg-info">
        <ul class="nav nav-tabs">
          <li>
            <a href="#" class="create-modal" data-toggle="modal" data-target="#snimi9">
          <i class="fa fa-address-card"></i>Унеси податке</a>
          </li>
        </ul>
      </header>          
          <!-- profile -->
  <div id="profile" class="tab-pane">
    <section class="panel">
      <div class="panel-body bio-graph-info" id="podaci">
        <h1>Међународни пројекти, пројекти (су)финансирани од осталих стране министарстава, привредних субјеката, локалне самоуправе и сл.</h1>
        @if(count($medjunarodni) > 0)
         @foreach($medjunarodni as $medjunarodni)
        <div class="" >
          <div class="bio-row">
            @if($medjunarodni->proje!==null)
            <p><span>Назив пројекта</span>: <span id="proj">{{$medjunarodni->proje}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($medjunarodni->kratak!==null)
            <p><span>Кратак опис и резултати пројекта</span>: <span id="kratak">{{$medjunarodni->kratak}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($medjunarodni->organ!==null)
            <p><span>Организација носилац пројекта </span>: <span id="organ">{{$medjunarodni->organ}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($medjunarodni->refere!==null)
            <p><span>Референтни број пројекта</span>: <span id="refere">{{$medjunarodni->refere}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($medjunarodni->traja!==null)
            <p><span>Трајање пројекта (месец, година - месец, година)</span>: <span id="traja">{{$medjunarodni->traja}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($medjunarodni->rukovo!==null)
            <p><span>Име руководиоца пројекта </span>: <span id="rukovo">{{$medjunarodni->rukovo}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($medjunarodni->pozici!==null)
            <p><span>Позиција наставника / сарадника у пројекту </span>: <span id="pozici">{{$medjunarodni->pozici}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($medjunarodni->mesec!==null)
            <p><span>Број месеци ангажовања </span>: <span id="mesec">{{$medjunarodni->mesec}}</span></p>
            @endif
          </div>   
       </div>
    </div>
   
    <div class="row">
     <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
        Списак резултата из пројекта (по класификацији Министарства) 
        </header>
        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th><i class="icon_menu"></i> Р.бр.</th>
              <th><i class="icon_documents_alt"></i> Списак резултата из пројекта (по класификацији Министарства)</th>
            </tr>
             {{csrf_field()}}
            <tr>
               @if($medjunarodni->radno!==null)
              <td> 1.</td>
              <td>{{$medjunarodni->radno}}</td>
              @endif
            </tr>
            <tr>
              @if($medjunarodni->radnoU!==null)
              <td>2.</td>
              <td>{{$medjunarodni->radnoU}}</td>
              @endif
           </tr>
           <tr>
            @if($medjunarodni->radnoD!==null)
             <td>3.</td>
             <td>{{$medjunarodni->radnoD}}</td>
             @endif
           </tr>
           <tr>
            @if($medjunarodni->radnoT!==null)
             <td>4.</td>
             <td>{{$medjunarodni->radnoT}}</td>
             @endif
           </tr>
           <tr>
            @if($medjunarodni->radnoK!==null)
             <td>5.</td>
             <td>{{$medjunarodni->radnoK}}</td>
             @endif
           </tr>
           <tr>
            @if($medjunarodni->radnoC!==null)
             <td>6.</td>
             <td>{{$medjunarodni->radnoC}}</td>
             @endif
           </tr>
           <tr>
            @if($medjunarodni->radnoS!==null)
             <td>7.</td>
             <td>{{$medjunarodni->radnoS}}</td>
             @endif
           </tr>
           <tr>
            @if($medjunarodni->radnoE!==null)
             <td>8.</td>
             <td>{{$medjunarodni->radnoE}}</td>
             @endif
           </tr>
           <tr>
            @if($medjunarodni->radnoO!==null)
             <td>9.</td>
             <td>{{$medjunarodni->radnoO}}</td>
             @endif
           </tr>
           <tr>
            @if($medjunarodni->radnoN!==null)
             <td>10.</td>
             <td>{{$medjunarodni->radnoN}}</td>
             @endif
           </tr>
           <td>          
            </td>
            <td>
          <button class="btn btn-info"
             data-mypr="{{$medjunarodni->proje}}" 
             data-mykr="{{$medjunarodni->kratak}}" 
             data-myor="{{$medjunarodni->organ}}"
             data-myre="{{$medjunarodni->refere}}"
             data-mytr="{{$medjunarodni->traja}}"
             data-myru="{{$medjunarodni->rukovo}}"
             data-mypo="{{$medjunarodni->pozici}}"
             data-myme="{{$medjunarodni->mesec}}"
             data-myna="{{$medjunarodni->radno}}" 
             data-myos="{{$medjunarodni->radnoU}}"
             data-myosd="{{$medjunarodni->radnoD}}" 
             data-myost="{{$medjunarodni->radnoT}}"
             data-myosk="{{$medjunarodni->radnoK}}" 
             data-myosc="{{$medjunarodni->radnoC}}"
             data-myoss="{{$medjunarodni->radnoS}}" 
             data-myose="{{$medjunarodni->radnoE}}"
             data-myoso="{{$medjunarodni->radnoO}}" 
             data-myosn="{{$medjunarodni->radnoN}}"  
             data-medjid="{{$medjunarodni->id}}" 
             data-toggle="modal" 
             data-target=".izmeni5"><i class="fa fa-edit"></i>Измени</button>
            <button class="btn btn-danger" 
             data-medjid="{{$medjunarodni->id}}" 
             data-toggle="modal" 
             data-target="#obrisi5"><i class="fa fa-trash"></i>Обриши</button> 
              </td>
           </tr>
          </tbody>
        </table>
      </section>
    </div>
    @endforeach
      @else
    <p>Нема података</p>
    @endif 
  </div>
   </section>
    @include('medjunarodni.create')
    @include('medjunarodni.edit')
    @include('medjunarodni.delete')
   </div>
 </section>
 </div>
</div>
</section>
</section>

<script type="text/javascript">

$('.izmeni5').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var pr = button.data('mypr')
  var kr = button.data('mykr')
  var or = button.data('myor')
  var re = button.data('myre')
  var tr = button.data('mytr')
  var ru = button.data('myru')
  var po = button.data('mypo')
  var me = button.data('myme')
  var na = button.data('myna')
  var os = button.data('myos')
  var osD = button.data('myosd')
  var osT = button.data('myost')
  var osK = button.data('myosk')
  var osC = button.data('myosc')
  var osS = button.data('myoss')
  var osE = button.data('myose')
  var osO = button.data('myoso')
  var osN = button.data('myosn')
  var medj_id = button.data('medjid')

  var modal = $(this)
  modal.find('.modal-body #g').val(pr);
  modal.find('.modal-body #k').val(kr);
  modal.find('.modal-body #m').val(or);
  modal.find('.modal-body #r').val(re);
  modal.find('.modal-body #v').val(tr);
  modal.find('.modal-body #n').val(ru);
  modal.find('.modal-body #o').val(po);
  modal.find('.modal-body #s').val(me);
  modal.find('.modal-body #st').val(na);
  modal.find('.modal-body #U').val(os);
  modal.find('.modal-body #D').val(osD);
  modal.find('.modal-body #T').val(osT);
  modal.find('.modal-body #K').val(osK);
  modal.find('.modal-body #C').val(osC);
  modal.find('.modal-body #S').val(osS);
  modal.find('.modal-body #E').val(osE);
  modal.find('.modal-body #O').val(osO);
  modal.find('.modal-body #N').val(osN);
  modal.find('.modal-body #medj_id').val(medj_id);
});

$('#obrisi5').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
console.log()
var medj_id = button.data('medjid')

var modal = $(this)
modal.find('.modal-body #medj_id').val(medj_id);
});
 </script>
@endsection


