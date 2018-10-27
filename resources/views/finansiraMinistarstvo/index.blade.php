@extends('pocetna.leyout')


@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-archive"></i> Пројекти које је су (финансирало) Министарство надлежно за научноистраживачку <p> &emsp; делатност</p></h3>
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
            <a href="#" class="create-modal" data-toggle="modal" data-target="#snimi7">
          <i class="fa fa-address-card"></i>Унеси податке</a>
          </li>
        </ul>
      </header>          
          <!-- profile -->
  <div id="profile" class="tab-pane">
    <section class="panel">
      <div class="panel-body bio-graph-info" id="podaci">
        <h1>Пројекти које је су (финансирало) Министарство надлежно за научноистраживачку делатност</h1>
        @if(count($finansira) > 0)
         @foreach($finansira as $finansira)
        <div class="" >
          <div class="bio-row">
            @if($finansira->projekat!==null)
            <p><span>Назив пројекта</span>: <span id="projekat">{{$finansira->projekat}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($finansira->organizacija!==null)
            <p><span>Организација носилац пројекта </span>: <span id="organizacija">{{$finansira->organizacija}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($finansira->referent!==null)
            <p><span>Референтни број пројекта</span>: <span id="referent">{{$finansira->referent}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($finansira->trajanje!==null)
            <p><span>Трајање пројекта (месец, година - месец, година)</span>: <span id="trajanje">{{$finansira->trajanje}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($finansira->rukovodilac!==null)
            <p><span>Име руководиоца пројекта </span>: <span id="rukovodilac">{{$finansira->rukovodilac}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($finansira->pozicija!==null)
            <p><span>Позиција наставника / сарадника у пројекту </span>: <span id="pozicija">{{$finansira->pozicija}}</span></p>
            @endif
          </div>
          <div class="bio-row">
            @if($finansira->meseci!==null)
            <p><span>Број месеци ангажовања </span>: <span id="meseci">{{$finansira->meseci}}</span></p>
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
              @if($finansira->redno!==null)
              <td> 1.</td>
              <td>{{$finansira->redno}}</td>
              @endif
            </tr>
            <tr>
              @if($finansira->rednoU!==null)
              <td>2.</td>
              <td>{{$finansira->rednoU}}</td>
              @endif
           </tr>
           <tr>
            @if($finansira->rednoD!==null)
             <td>3.</td>
             <td>{{$finansira->rednoD}}</td>
             @endif
           </tr>
           <tr>
            @if($finansira->rednoT!==null)
             <td>4.</td>
             <td>{{$finansira->rednoT}}</td>
             @endif
           </tr>
           <tr>
            @if($finansira->rednoK!==null)
             <td>5.</td>
             <td>{{$finansira->rednoK}}</td>
             @endif
           </tr>
           <tr>
            @if($finansira->rednoC!==null)
             <td>6.</td>
             <td>{{$finansira->rednoC}}</td>
             @endif
           </tr>
           <tr>
            @if($finansira->rednoS!==null)
             <td>7.</td>
             <td>{{$finansira->rednoS}}</td>
             @endif
           </tr>
           <tr>
            @if($finansira->rednoE!==null)
             <td>8.</td>
             <td>{{$finansira->rednoE}}</td>
             @endif
           </tr>
           <tr>
            @if($finansira->rednoO!==null)
             <td>9.</td>
             <td>{{$finansira->rednoO}}</td>
             @endif
           </tr>
           <tr>
            @if($finansira->rednoN!==null)
             <td>10.</td>
             <td>{{$finansira->rednoN}}</td>
             @endif
           </tr>
           <td>          
            </td>
            <td>
          <button class="btn btn-info"
             data-mypr="{{$finansira->projekat}}" 
             data-myor="{{$finansira->organizacija}}"
             data-myre="{{$finansira->referent}}"
             data-mytr="{{$finansira->trajanje}}"
             data-myru="{{$finansira->rukovodilac}}"
             data-mypo="{{$finansira->pozicija}}"
             data-myme="{{$finansira->meseci}}"
             data-myna="{{$finansira->redno}}" 
             data-myos="{{$finansira->rednoU}}"
             data-myosd="{{$finansira->rednoD}}" 
             data-myost="{{$finansira->rednoT}}"
             data-myosk="{{$finansira->rednoK}}" 
             data-myosc="{{$finansira->rednoC}}"
             data-myoss="{{$finansira->rednoS}}" 
             data-myose="{{$finansira->rednoE}}"
             data-myoso="{{$finansira->rednoO}}" 
             data-myosn="{{$finansira->rednoN}}"  
             data-finid="{{$finansira->id}}" 
             data-toggle="modal" 
             data-target=".izmeni4"><i class="fa fa-edit"></i>Измени</button>
            <button class="btn btn-danger" 
             data-finid="{{$finansira->id}}" 
             data-toggle="modal" 
             data-target="#obrisi4"><i class="fa fa-trash"></i>Обриши</button>
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
    @include('finansiraMinistarstvo.create')
    @include('finansiraMinistarstvo.edit')
    @include('finansiraMinistarstvo.delete')
   </div>
 </section>
 </div>
</div>
</section>
</section>

<script type="text/javascript">

$('.izmeni4').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var pr = button.data('mypr')
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
  var fin_id = button.data('finid')

  var modal = $(this)
  modal.find('.modal-body #g').val(pr);
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
  modal.find('.modal-body #fin_id').val(fin_id);
});

$('#obrisi4').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
console.log()
var fin_id = button.data('finid')

var modal = $(this)
modal.find('.modal-body #fin_id').val(fin_id);
});
 </script>
@endsection


