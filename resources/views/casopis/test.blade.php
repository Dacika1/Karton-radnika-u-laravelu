@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-search"></i>Резултати претраге научних радова</h3>
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
      </header> 
      <div id="profile" class="tab-pane">
    <section class="panel">
      <div class="panel-body bio-graph-info" id="podaci">
        <h1>Резултати претраге научних радова</h1>
     <table class="table table-striped table-advance table-hover" id="users-table">
        <tbody>
          <tr>
            <th><i class="icon_menu"></i> Р.бр.</th>
            <th><i class="icon_documents_alt"></i> М категорија</th>
            <th><i class="icon_book"></i> Опис публикације</th>
          </tr>
           {{csrf_field()}}
          <?php $no=1; ?>
          @foreach($casopis as $article)
          <tr>
            <td>{{$no++}}</td>
            <td>M{{$article->kljuc}}</td>
            <td>
            @foreach($article->imena as $names)
           @if($names->cognomep!==null)
            {{$names->cognomep}}, @endif&nbsp;
            @if($names->nomep!==null){{ str_limit($names->nomep[0], $limit = 150) }}.,@endif &nbsp; 
           @endforeach
         @if($article->anno!==null)
            ({{$article->anno}}),@endif&nbsp;  
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
          </tr>          
       @endforeach
     </tbody>
    </table>
  </section>
</div>  
   @include('casopis.create')
   @include('casopis.delete')
   @include('casopis.edit')
   </div>
 </section>
</div>
</div>
</section>
</section>
@endsection