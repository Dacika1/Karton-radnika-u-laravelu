@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-flag"></i>Група резултата М100</h3>
    </div>
  </div>
<div class="row">
    <!-- profile-widget -->
    <div class="col-lg-12">
      <div class="profile-widget profile-widget-info">
        <div class="panel-body">
          <div class="col-lg-4 col-sm-4">
            <br>
             <a href="http://www.mpn.gov.rs/wp-content/uploads/2017/03/Pravilnik-2017-preciscen-tekst.pdf" 
             style="color: white" target="_blank"><h4><i class="fa fa-book"></i> Правилник</h4></a>
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
            <a href="#" data-toggle="modal" data-target="#sacuvaj10">
          <i class="fa fa-address-card"></i>Унеси податке</a>
          </li>
        </ul>
      </header> 
      <div id="profile" class="tab-pane">
    <section class="panel">
      <div class="panel-body bio-graph-info" id="podaci">
        <h1>Изведена дела, награде, студије, изложбе од националног значаја</h1>
     <table class="table table-striped table-advance table-hover" id="users-table">
        <tbody>
          <tr>
            <th><i class="icon_menu"></i> Р.бр.</th>
            <th><i class="icon_documents_alt"></i> М категорија</th>
            <th><i class="icon_book"></i> Опис публикације</th>
            <th><i class="icon_cogs"></i> Опције</th>
          </tr>
           {{csrf_field()}}
          <?php $no=1; ?>
          @foreach($casopis as $article)
          @if($article->kljuc>=108 && $article->kljuc<=120)
           <tr>
            <td>{{$no++}}</td>
            <td>M{{$article->kljuc}}</td>
            <td>
           @foreach($article->imena as $names)
           @if($names->cognomep!==null)
            {{$names->cognomep}}, @endif&nbsp;
            @if($names->nomep!==null){{ str_limit($names->nomep[0], $limit = 150) }}.,@endif &nbsp; 
           @endforeach
          @if($article->anno!==null)({{$article->anno}}),@endif&nbsp;  
          @if($article->naslov!==null){{$article->naslov}},@endif &nbsp;
          @if($article->mese!==null){{$article->mese}},@endif &nbsp;
          @if($article->volumen!==null){{$article->volumen}} @endif
          @if($article->numero!==null)({{$article->numero}}),@endif &nbsp;
          @if($article->pNumero!==null){{$article->pNumero}}-{{$article->uNumero}},@endif&nbsp;
          @if($article->veb!==null) ISSN:{{$article->veb}},@endif &nbsp;
          @if($article->doi!==null)DOI:{{$article->doi}},@endif&nbsp;
          @if($article->udc!==null)UDC:{{$article->udc}},@endif&nbsp;
          @if($article->apstrakt!==null)ISBN:{{$article->apstrakt}}
          @endif
            </td>
            <td>
             <nobr>
              @if($article->verified == '0')
          <a class="btn btn-info" href="#" class="edit-modal" 
             data-myklj="{{$article->kljuc}}" 
             data-mynm="{{$article->svaimena()}}"
             data-myno="{{$article->mese}}"
             data-myco="{{$article->udc}}"
             data-myna="{{$article->naslov}}"
             data-myvo="{{$article->volumen}}"
             data-myan="{{$article->anno}}"
             data-mynu="{{$article->numero}}" 
             data-mypn="{{$article->pNumero}}"
             data-myun="{{$article->uNumero}}"
             data-myap="{{$article->apstrakt}}"
             data-myve="{{$article->veb}}"
             data-mydol="{{$article->doi}}"     
             data-casid="{{$article->id}}" 
             data-toggle="modal" 
             data-target=".izmeni5"><i class="fa fa-edit"></i>Измени</a>
          <a class="btn btn-danger" href="#" class="delete-modal"
             data-casid="{{$article->id}}" 
             data-toggle="modal" 
             data-target="#brisi"><i class="fa fa-trash"></i>Обриши</a>
             @endif
             @if(Auth::user()->user_role == 'admin')
             @if ($article->verified == '0')
          <a href="{{route('casopis.finish',[$article->id])}}" 
            class="btn btn-warning">Проверити</a>
      @else
          <span class="btn btn-success">Проверено</span>
      @endif
          @endif
        </nobr>
          </td>
          </tr> 
          @endif     
      @endforeach
   </tbody>
    </table>
  </section>
</div>
   @include('casopis9.create')
   @include('casopis.delete')
   @include('casopis.edit')
   </div>
 </section>
</div>
</div>
</section>
</section>
  
<script type="text/javascript">

  $('.izmeni5').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var klj = button.data('myklj')
  var no = button.data('myno')
  var co = button.data('myco')
  var na = button.data('myna')
  var vo = button.data('myvo')
  var an = button.data('myan')
  var nu = button.data('mynu')
  var pn = button.data('mypn')
  var un = button.data('myun')
  var ve = button.data('myve')
  var ap = button.data('myap')
  var dol = button.data('mydol')
  var nm = button.data('mynm')
  var cas_id = button.data('casid')

  var modal = $(this)
  modal.find('.modal-body #g').val(klj);
  modal.find('.modal-body #U').val(no);
  modal.find('.modal-body #u').val(co);
  modal.find('.modal-body #m').val(na);
  modal.find('.modal-body #v').val(vo);
  modal.find('.modal-body #r').val(an);
  modal.find('.modal-body #n').val(nu);
  modal.find('.modal-body #o').val(pn);
  modal.find('.modal-body #s').val(un);
  modal.find('.modal-body #D').val(ap);
  modal.find('.modal-body #T').val(ve);
  modal.find('.modal-body #st').val(dol);
  modal.find('.modal-body #K').val(nm);
  modal.find('.modal-body #cas_id').val(cas_id);
});

$('#brisi').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget)
  var cas_id = button.data('casid')

  var modal = $(this)
  modal.find('.modal-body #cas_id').val(cas_id);
});

$("button").click(function(){
    if(clicked){
        $(this).css('background-color', 'red');
        clicked  = false;
    } else {
        $(this).css('background-color', 'blue');
        clicked  = true;
    }   
});
</script>
@endsection