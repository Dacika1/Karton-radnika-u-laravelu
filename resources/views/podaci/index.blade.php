@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-user-md"></i> Профил</h3>
  </div>
</div>
 <div class="row">
  <!-- profile-widget -->
  <div class="col-lg-12">
    <div class="profile-widget profile-widget-info">
      <div class="panel-body">
        <div class="col-lg-2 col-sm-2">
          <h4>{{ Auth::user()->name }} {{ Auth::user()->userName }}</h4>
          <div class="follow-ava">
            <img src="uploads/avatars/{{Auth::user()->avatar}}" alt="" >
          </div>
          <h6>{{ Auth::user()->zvanje }}</h6>
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
        <a href="#create" class="create-modal" data-toggle="modal" id="create2">
      <i class="fa fa-vcard"></i>Унеси податке</a>
      </li>
        <li>
        <a href="#" button class="btn " 
                 data-myda="{{$podaci->prezime}}" 
                 data-myci="{{$podaci->ime}}" 
                 data-myre="{{$podaci->imeJednogRoditelja}}" 
                 data-mysc="{{$podaci->JMBG}}" 
                 data-mydok="{{$podaci->datumRodenja!==null?$podaci->datumRodenja->format('Y-m-d'):''}}"
                 data-myme="{{$podaci->mestoRodenja}}"
                 data-mydr="{{$podaci->drzavaRodenja}}"
                 data-mydz="{{$podaci->drzavljanstvo}}"
                 data-myad="{{$podaci->adresaStanovanja}}"
                 data-myzv="{{$podaci->zvanje}}"
                 data-myaz="{{$podaci->akademskoZvanje}}"
                 data-myem="{{$podaci->email}}"
                 data-myte="{{$podaci->telNaPoslu}}"
                 data-mymo="{{$podaci->mob}}"
                 data-myvi="{{$podaci->ustanovaPunoZaposlenje}}"
                 data-myan="{{$podaci->ustanovaDodatna}}"
                 data-myra="{{$podaci->radnoMesto}}"
                 data-mygo="{{$podaci->godinaZaposlenja}}"
                 data-myuk="{{$podaci->ukupanStaz}}"
                 data-podid="{{$podaci->id}}"
                 data-toggle="modal" 
                 data-target="#myModal" >
      <i class="fa fa-edit"></i>Измени</a>
      </li>
        <li>
       <a href="{{route('podaciDelete',['id'=>$podaci->id])}}"  id="delete2">
      <i class="fa fa-trash"></i>Обриши</a>
      </li>
    </ul>
  </header>          
    <!-- profile -->
    <div class="tab-pane">
      <section class="panel">
        <div class="panel-body bio-graph-info" >
          <h1>Основни подаци</h1>  
          <div class="" >
            @if($podaci !=null) 
            <input type="hidden" id="pod_id" >
            <div class="bio-row">
              <p><span>Презиме </span>: <span id="pre">{{$podaci->prezime}}</span></p>
            </div>
            <div class="bio-row">
              <p><span>Име </span>: <span id="ime">{{$podaci->ime}}</span></p>
            </div>
            <div class="bio-row">
              <p><span>Име једног родитеља</span>: <span id="imeJ">{{$podaci->imeJednogRoditelja}}</span></p>
            </div>
            <div class="bio-row">
              <p><span>ЈМБГ </span>: <span id="JMBG">{{$podaci->JMBG}}</span></p>
            </div>
            <div class="bio-row">
              <p><span>Датум рођења </span>: <span id="datum">{{$podaci->datumRodenja!==null?$podaci->datumRodenja->format('d/m/Y'):''}}</span></p>
            </div>
            <div class="bio-row">
              <p><span>Место рођења </span>: <span id="mesto">{{$podaci->mestoRodenja}}</span></p>
            </div>
            <div class="bio-row">
              <p><span>Држава рођења </span>: <span id="drzava">{{$podaci->drzavaRodenja}}</span></p>
            </div>
            <div class="bio-row">
              <p><span>Држављанство </span>: <span id="drzavlja">{{$podaci->drzavljanstvo}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Адреса становања </span>: <span id="adresa">{{$podaci->adresaStanovanja}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Звање</span>: <span id="zvanje">{{$podaci->zvanje}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Академско звање </span>: <span id="zvanjeA">{{$podaci->akademskoZvanje}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Е маил </span>: <span id="email">{{$podaci->email}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Телефон на послу</span>: <span id="tel">{{$podaci->telNaPoslu}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Број мобилног телефона</span>: <span id="mob">{{$podaci->mob}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Високошколска установа у којој је наставник ангажован у радном односу са пуним радним временом</span>: <span id="ustanova">{{$podaci->ustanovaPunoZaposlenje}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Високошколска установа у којој је наставник додатно ангажован</span>: <span id="ustanovaD">{{$podaci->ustanovaDodatna}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Радно место / дужност које лице обавља</span>: <span id="radno">{{$podaci->radnoMesto}}</span></p>
            </div>
            <div class="bio-row"> 
            <p><span>Година првог запослења </span>: <span id="godinaZ">{{$podaci->godinaZaposlenja}}</span></p>
            </div>
            <div class="bio-row">
             <p><span>Укупан радни стаж (у годинама) </span>: <span id="staz">{{$podaci->ukupanStaz}}</span></p>
            </div>
             @endif
          </div>
        @include('podaci.create')
        @include('podaci.edit')
        <div class="row">
           <form enctype="multipart/form-data" action="profil" method="post">
           <label>Фотографија</label>
           <input type="file" name="avatar">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <input type="submit" class="btn btn-primary">
         </form>
         </div>
       </div>
      </section> 
      </div>
     </section>
   </div>
 </div>
</section>
</section>

<script type="text/javascript">
  $('#myModal').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var re = button.data('myre')
  var sc = button.data('mysc')
  var dok = button.data('mydok')
  var me = button.data('myme')
  var dr = button.data('mydr')
  var dz = button.data('mydz')
  var ad = button.data('myad')
  var zv = button.data('myzv')
  var az = button.data('myaz')
  var em = button.data('myem')
  var te = button.data('myte')
  var mo = button.data('mymo')
  var vi = button.data('myvi')
  var an = button.data('myan')
  var ra = button.data('myra')
  var go = button.data('mygo')
  var uk = button.data('myuk')
  var pod_id = button.data('podid')

  var modal = $(this)
  modal.find('.modal-body #p').val(da);
  modal.find('.modal-body #i').val(ci);
  modal.find('.modal-body #iJ').val(re);
  modal.find('.modal-body #JM').val(sc);
  modal.find('.modal-body #dR').val(dok);
  modal.find('.modal-body #mR').val(me);
  modal.find('.modal-body #dRo').val(dr);
  modal.find('.modal-body #dRz').val(dz);
  modal.find('.modal-body #aD').val(ad);
  modal.find('.modal-body #zV').val(zv);
  modal.find('.modal-body #aK').val(az);
  modal.find('.modal-body #eM').val(em);
  modal.find('.modal-body #tEl').val(te);
  modal.find('.modal-body #mOb').val(mo);
  modal.find('.modal-body #uSt').val(vi);
  modal.find('.modal-body #uStd').val(an);
  modal.find('.modal-body #radnoM').val(ra);
  modal.find('.modal-body #gZap').val(go);
  modal.find('.modal-body #ukS').val(uk);
  modal.find('.modal-body #pod_id').val(pod_id);
});

 $('#delete2').on('click',function(e){
if(!confirm('Дали сте сигурни да желите да обришете СВЕ податке'))
  e.preventDefault();
 });
 </script>

@endsection


