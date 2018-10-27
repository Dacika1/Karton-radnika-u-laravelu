@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Предходни наставни рад</h3></p>
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
        <a href="#" class="create-modal" data-toggle="modal" data-target="#snimi4">
      <i class="fa fa-address-card"></i>Унеси податке</a>
      </li>
    </ul>    
  </header>          
<!-- profile -->
<div id="profile" class="tab-pane">
<section class="panel">
  <div class="panel-body bio-graph-info">
    <h1>Предходни наставни рад</h1>
        <div class="row">                 
      <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
       Предходни наставни рад (Пре избора у звање наставника)
    <a href="#" class="btn btn-success btn pull-right" class="create-modal"  data-toggle="modal" data-target="#snimi5">
    <i class="fa fa-address-card"></i>Унеси податке</a>
      </header>
      <table class="table table-striped table-advance table-hover">
        <tbody>
          <tr>
            <th><i class="icon_documents_alt"></i> Курсеви наставних активности</th>
            <th><i class="icon_calendar"></i> Година студија</th>
            <th><i class="icon_document_alt"></i> Фонд часова</th>
            <th><i class="icon_cogs"></i> Опције</th>
          </tr>
          {{csrf_field()}}
          @foreach($kursevi as $kursevi)
          <tr>
            <td>{{$kursevi->kurs}}</td>
            <td>{{$kursevi->studija}}</td>
            <td>{{$kursevi->casovi}}</td>
            <td>
          <a class="btn btn-info" href="#" class="edit-modal"  
             data-myiz="{{$kursevi->kurs}}" 
             data-myuc="{{$kursevi->studija}}"
             data-myud="{{$kursevi->casovi}}"
             data-kuid="{{$kursevi->id}}" 
             data-toggle="modal" 
             data-target=".izmeni2"><i class="fa fa-edit"></i>Измени</a> 
          <a class="btn btn-danger" href="#" class="delete-modal" 
             data-kuid="{{$kursevi->id}}" 
             data-toggle="modal" 
             data-target="#obrisi2"><i class="fa fa-trash"></i>Обриши</a>
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
       @if(count($predhodni) > 0)
       @foreach($predhodni as $predhodni)
       <div class="row">
        @if($predhodni->pedagog!=null)
          <p><span>Педагошко искуство</span>: <br> <span id="pedagog">{{$predhodni->pedagog}}</span></p>
          @endif
        </div>
        <div class="row">
          @if($predhodni->reizbornost!=null)
          <p><span>Реизборност у звање асистента (од-до), број</span>:<br> <span id="reizbornost">{{$predhodni->reizbornost}}</span></p>
          @endif
        </div>
        <div class="row">
          <button class="btn btn-info"
           data-mype="{{$predhodni->pedagog}}" 
           data-myos="{{$predhodni->reizbornost}}" 
           data-predid="{{$predhodni->id}}" 
           data-toggle="modal" 
           data-target=".izmeni1"><i class="fa fa-edit"></i>Измени</button>
          <button class="btn btn-danger" 
           data-predid="{{$predhodni->id}}" 
           data-toggle="modal" 
           data-target="#obrisi1"><i class="fa fa-trash"></i>Обриши</button>
         </div>
         @endforeach
      @else
     <p>Нема података</p>
      @endif
    </section>
  </div>

<div class="row">                 
  <div class="col-lg-12">
  <section class="panel">
  <header class="panel-heading">
   Одржавање наставе под менторством на предмету
<a href="#" class="btn btn-success btn pull-right" class="create-modal" data-toggle="modal" data-target="#snimi6">
      <i class="fa fa-address-card"></i>Унеси податке</a>
  </header>
  <table class="table table-striped table-advance table-hover">
    <tbody> 
      <tr>
        <th><i class="icon_document_alt"></i> Одржавање наставе под менторством на предмету</th>
        <th><i class="icon_document_alt"></i> Број часова у семестру</th>
        <th><i class="icon_document_alt"></i> Фонд часова</th>
         <th><i class="icon_cogs"></i> Опције</th>
      </tr>
      {{csrf_field()}}
      @foreach($odrzavanje as $odrzavanje)
      <tr>                      
        <td>{{$odrzavanje->nastave}}</td>
        <td>{{$odrzavanje->semestar}}</td>
        <td>{{$odrzavanje->fondi}}</td>
        <td>
      <a class="btn btn-info" href="#" class="edit-modal"
         data-myna="{{$odrzavanje->nastave}}" 
         data-myse="{{$odrzavanje->semestar}}"
         data-myfo="{{$odrzavanje->fondi}}"
         data-odrid="{{$odrzavanje->id}}" 
         data-toggle="modal" 
         data-target=".izmeni3"><i class="fa fa-edit"></i>Измени</a>
      <a class="btn btn-danger" href="#" class="delete-modal"
         data-odrid="{{$odrzavanje->id}}" 
         data-toggle="modal" 
         data-target="#obrisi3"><i class="fa fa-trash"></i>Обриши</a>
        </td>
      </tr>
       @endforeach
          </tbody>
           </table>
      </section>
    </div>
  </div>
           @include('predhodni.create')
           @include('predhodni.edit')
           @include('predhodni.delete')
           
           @include('kursevi.edit')
           @include('kursevi.delete')
           @include('kursevi.create')

           @include('odrzavanje.create')
           @include('odrzavanje.delete')
           @include('odrzavanje.edit')
</div>
</section>
</div>
</section>
</div>
</div>
</section>
</section>

<script type="text/javascript">
$('.izmeni1').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var pe = button.data('mype')
  var os = button.data('myos')
  var pred_id = button.data('predid')

  var modal = $(this)
  modal.find('.modal-body #p').val(pe);
  modal.find('.modal-body #z').val(os);
  modal.find('.modal-body #pred_id').val(pred_id);
});

$('#obrisi1').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
console.log()
var pred_id = button.data('predid')

var modal = $(this)
modal.find('.modal-body #pred_id').val(pred_id);
});
//za pogled 'kursevi'
$('.izmeni2').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var iz = button.data('myiz')
  var uc = button.data('myuc')
  var ud = button.data('myud')
  var ku_id = button.data('kuid')
  
  var modal = $(this)
  modal.find('.modal-body #k').val(iz);
  modal.find('.modal-body #g').val(uc);
  modal.find('.modal-body #f').val(ud);
  modal.find('.modal-body #ku_id').val(ku_id);
});

$('#obrisi2').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var ku_id = button.data('kuid')

var modal = $(this)
modal.find('.modal-body #ku_id').val(ku_id);
});
// za pogled 'odrzavanje'
$('.izmeni3').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var na = button.data('myna')
  var se = button.data('myse')
  var fo = button.data('myfo')
  var odr_id = button.data('odrid')

  var modal = $(this)
  modal.find('.modal-body #o').val(na);
  modal.find('.modal-body #b').val(se);
  modal.find('.modal-body #c').val(fo);
  modal.find('.modal-body #odr_id').val(odr_id);
});

$('#obrisi3').on('show.bs.modal',function(event){
var button = $(event.relatedTarget)
var odr_id = button.data('odrid')

var modal = $(this)
modal.find('.modal-body #odr_id').val(odr_id);
})
  </script>

   @endsection