@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Наставни рад</h3></p>
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
          <a href="#" class="create-modal" data-toggle="modal" data-target="#crea9">
        <i class="fa fa-address-card"></i>Унеси податке</a>
        </li>
      </ul>    
    </header>          
<!-- profile -->
<div id="profile" class="tab-pane">
  <section class="panel">
    <div class="panel-body bio-graph-info">
      <h1>Наставни рад</h1>
      <div class="row">                 
    <div class="col-lg-12">
  <section class="panel">
    <header class="panel-heading">
     Садашњи наставни рад (за избор у виша наставна звања - ванредни и редовни професор)
  <a href="#" class="btn btn-success btn pull-right" class="create-modal" data-toggle="modal" data-target="#snimi1">
  <i class="fa fa-address-card"></i>Унеси податке</a>
    </header>
<table class="table table-striped table-advance table-hover">
  <tbody>
    <tr>
      <th><i class="icon_book"></i> Назив предмета</th>
      <th><i class="icon_calendar"></i> Година студија</th>
      <th><i class="icon_document_alt"></i> Фонд часова</th>
      <th><i class="icon_documents_alt"></i> Ниво студија</th>
      <th><i class="icon_cogs"></i> Опције</th>
    </tr>
    {{csrf_field()}}
    @foreach($sadasnji as $sadasnji)
    <tr>
      <td>{{$sadasnji->predmet}}</td>
      <td>{{$sadasnji->studija}}</td>
      <td>{{$sadasnji->fond}}</td>
      <td>{{$sadasnji->nivo}}</td>
      <td>
        <a class="btn btn-info" href="#" class="edit-modal"
           data-myos="{{$sadasnji->predmet}}"
           data-myiz="{{$sadasnji->studija}}" 
           data-myuc="{{$sadasnji->fond}}"
           data-myud="{{$sadasnji->nivo}}"
           data-sadid="{{$sadasnji->id}}" 
           data-toggle="modal" 
           data-target=".moj7"><i class="fa fa-edit"></i>Измени</a>
          <a class="btn btn-danger" href="#" class="delete-modal" 
           data-sadid="{{$sadasnji->id}}" 
           data-toggle="modal" 
           data-target="#brisi7"><i class="fa fa-trash"></i>Обриши</a>
      </td>
    </tr>
    @endforeach
    </tbody>
     </table>
  </section>
</div>
</div>

  <div class="row">                 
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">
 Руковођење - менторство завршних радова на мастер и специјалистичким студијама и магистарских теза
<a href="#" class="btn btn-success btn pull-right" class="create-modal" data-toggle="modal" data-target="#snimi2">
    <i class="fa fa-address-card"></i>Унеси податке</a>
</header>
<table class="table table-striped table-advance table-hover">
  <tbody>
    <tr>
      <th><i class="icon_profile"></i> Име и презиме студента</th>
      <th><i class="icon_document_alt"></i> Ужа научна област</th>
      <th><i class="icon_book"></i> Наслов рада</th>
       <th><i class="icon_cogs"></i> Опције</th>
    </tr>
    {{csrf_field()}}
    @foreach($rukovodjenje as $rukovodjenje)
    <tr>
      <td>{{$rukovodjenje->nome}}</td>
      <td>{{$rukovodjenje->uza}}</td>
      <td>{{$rukovodjenje->naslov}}</td>
      <td>
        <a class="btn btn-info" href="#" class="edit-modal"
           data-myiz="{{$rukovodjenje->nome}}" 
           data-myuc="{{$rukovodjenje->uza}}"
           data-myud="{{$rukovodjenje->naslov}}"
           data-rukid="{{$rukovodjenje->id}}" 
           data-toggle="modal" 
           data-target=".moj8"><i class="fa fa-edit"></i>Измени</a>
        <a class="btn btn-danger" href="#" class="delete-modal" 
           data-rukid="{{$rukovodjenje->id}}" 
           data-toggle="modal" 
           data-target="#brisi8"><i class="fa fa-trash"></i>Обриши</a>
      </td>
    </tr>
     @endforeach
    </tbody>
     </table>
  </section>
</div>
</div>

<div class="row">                 
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">
Руковођење - менторство докторских дисертација
<a href="#" class="btn btn-success btn pull-right" class="create-modal" data-toggle="modal" data-target="#snimi3">
  <i class="fa fa-address-card"></i>Унеси податке</a>
</header>
<table class="table table-striped table-advance table-hover">
<tbody>
  <tr>
    <th><i class="icon_profile"></i> Име и презиме студента</th>
    <th><i class="icon_document_alt"></i> Ужа научна област</th>
    <th><i class="icon_book"></i> Наслов докторске дисертације</th>
     <th><i class="icon_cogs"></i> Опције</th>
   </tr>
  {{csrf_field()}}
  @foreach($mentor as $mentor)
  <tr>
    <td>{{$mentor->cognome}}</td>
    <td>{{$mentor->naucna}}</td>
    <td>{{$mentor->diser}}</td>
    <td>
      <a class="btn btn-info" href="#" class="edit-modal"
         data-myiz="{{$mentor->cognome}}" 
         data-myuc="{{$mentor->naucna}}"
         data-myud="{{$mentor->diser}}"
         data-menid="{{$mentor->id}}" 
         data-toggle="modal" 
         data-target=".moj9"><i class="fa fa-edit"></i>Измени</a>
      <a class="btn btn-danger" href="#" class="delete-modal" 
           data-menid="{{$mentor->id}}" 
           data-toggle="modal" 
           data-target="#brisi9"><i class="fa fa-trash"></i>Обриши</a>
    </td>
  </tr>
    @endforeach
  </tbody>
   </table>
 </section>
</div>
</div>   

     <div class="col-lg-12">
      <section class="panel">
     @if(count($nastavni) > 0)
     @foreach($nastavni as $nastavni)
     <div class="row">
      @if($nastavni->ruko!==null)
        <p><span>Руковођење-менторство завршних радова на основним студијама - број</span>: <br> <span id="ruko">{{$nastavni->ruko}}</span></p>
        @endif
      </div>
      <div class="row">
         @if($nastavni->oblast!==null)
        <p><span>Увођење нових области, наставних предмета, метода у наставном процесу</span>:<br> <span id="oblast">{{$nastavni->oblast}}</span></p>
        @endif
      </div>
      
      <div class="row">
         @if($nastavni->izvodjenje!==null)
        <p><span>Извођење наставе на универзитетима ван земље</span>:<br> <span id="izvodjenje">{{$nastavni->izvodjenje}}</span></p>
        @endif
      </div>
      <div class="row">
         @if($nastavni->ucesce!==null)
        <p><span>Учешће у комисијама за одбрану мастер и специјалистичких радова, магистарских теза и докторских дисертација - број</span>:<br> <span id="ucesce">{{$nastavni->ucesce}}</span></p>
        @endif
      </div>
      <div class="row">
         @if($nastavni->udzbenik!==null)
        <p><span>Уџбеници (наслов, аутори, година издања, издавач)</span>:<br> <span id="udzbenik">{{$nastavni->udzbenik}}</span></p>
        @endif
      </div>
      <div class="row">
         @if($nastavni->druga!==null)
        <p><span>Друга дидактичка средства- приручници, скрипте и сл.(наслов, аутори, година издања, издавач)</span>:<br> <span id="druga">{{$nastavni->druga}}</span></p>
        @endif
      </div>

      <div class="row">
         @if($nastavni->mislenje!==null)
        <p><span>Мишљење студената о педагошком раду наставника</span>:<br> <span id="mislenje">{{$nastavni->mislenje}}</span></p>
        @endif
      </div>
       <div class="row">
            <button class="btn btn-info"
                 data-myna="{{$nastavni->ruko}}" 
                 data-myos="{{$nastavni->oblast}}"
                 data-myiz="{{$nastavni->izvodjenje}}" 
                 data-myuc="{{$nastavni->ucesce}}"
                 data-myud="{{$nastavni->udzbenik}}"
                 data-mydr="{{$nastavni->druga}}"
                 data-mymi="{{$nastavni->mislenje}}" 
                 data-nasid="{{$nastavni->id}}" 
                 data-toggle="modal" 
                 data-target=".moj6"><i class="fa fa-edit"></i>Измени</button>
            <button class="btn btn-danger" 
                 data-nasid="{{$nastavni->id}}" 
                 data-toggle="modal" 
                 data-target="#brisi6"><i class="fa fa-trash"></i>Обриши</button>
               </div>
     @endforeach
  @else
 <p>Нема података</p>
  @endif
</section>
</div>
        @include('rukovodjenje.create')
        @include('rukovodjenje.edit')
        @include('rukovodjenje.delete')

        @include('nastavni.create')
        @include('nastavni.delete')
        @include('nastavni.edit')
    
        @include('sadasnji.create') 
        @include('sadasnji.edit')
        @include('sadasnji.delete')

        @include('mentor.create') 
        @include('mentor.delete')
        @include('mentor.edit')
        </div>
        </section>
        </div>
        </div>
        </section>
        </section>
      </div>
    </div>
  </section>
</section>
          
 

<script type="text/javascript">
$('.moj6').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var na = button.data('myna')
  var os = button.data('myos')
  var iz = button.data('myiz')
  var uc = button.data('myuc')
  var ud = button.data('myud')
  var dr = button.data('mydr')
  var mi = button.data('mymi')
  var nas_id = button.data('nasid')

  var modal = $(this)
  modal.find('.modal-body #o').val(na);
  modal.find('.modal-body #j').val(os);
  modal.find('.modal-body #i').val(iz);
  modal.find('.modal-body #u').val(uc);
  modal.find('.modal-body #n').val(ud);
  modal.find('.modal-body #d').val(dr);
  modal.find('.modal-body #m').val(mi);
  modal.find('.modal-body #nas_id').val(nas_id);
});

$('#brisi6').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var nas_id = button.data('nasid')

var modal = $(this)
modal.find('.modal-body #nas_id').val(nas_id);
});
  //za pogled 'sadasnji'
  $('.moj7').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var os = button.data('myos')
  var iz = button.data('myiz')
  var uc = button.data('myuc')
  var ud = button.data('myud')
  var sad_id = button.data('sadid')

  var modal = $(this)
  modal.find('.modal-body #j').val(os);
  modal.find('.modal-body #o').val(iz);
  modal.find('.modal-body #i').val(uc);
  modal.find('.modal-body #u').val(ud);
  modal.find('.modal-body #sad_id').val(sad_id);
});

$('#brisi7').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var sad_id = button.data('sadid')

var modal = $(this)
modal.find('.modal-body #sad_id').val(sad_id);
});
//za pogled 'rukovodjenje'
$('.moj8').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var iz = button.data('myiz')
  var uc = button.data('myuc')
  var ud = button.data('myud')
  var ruk_id = button.data('rukid')

  var modal = $(this)
  modal.find('.modal-body #o').val(iz);
  modal.find('.modal-body #i').val(uc);
  modal.find('.modal-body #u').val(ud);
  modal.find('.modal-body #ruk_id').val(ruk_id);
});

$('#brisi8').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var ruk_id = button.data('rukid')

var modal = $(this)
modal.find('.modal-body #ruk_id').val(ruk_id);
});
//za pogled 'mentor'
$('.moj9').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var iz = button.data('myiz')
  var uc = button.data('myuc')
  var ud = button.data('myud')
  var men_id = button.data('menid')

  var modal = $(this)
  modal.find('.modal-body #p').val(iz);
  modal.find('.modal-body #z').val(uc);
  modal.find('.modal-body #d').val(ud);
  modal.find('.modal-body #men_id').val(men_id);
});

$('#brisi9').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var men_id = button.data('menid')

var modal = $(this)
modal.find('.modal-body #men_id').val(men_id);
});
  </script>
 @endsection