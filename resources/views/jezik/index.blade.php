@extends('pocetna.leyout')

@section('content')
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>Подаци о познавању страних језика</h3>
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
                <a href="#" class="create-modal" data-toggle="modal" data-target="#crea3">
              <i class="fa fa-address-card"></i>Унеси податке</a>
              </li>
            </ul>    
          </header>          
  <!-- profile -->
  <div id="profile" class="tab-pane">
<section class="panel">
  <div class="panel-body bio-graph-info">
    <h1>Подаци о познавању страних језика</h1>
       <div class="row">
      <div class="col-lg-12">
        <section class="panel">
      <table class="table table-striped table-advance table-hover">
        <tbody>
          <tr>
            <th><i class="icon_menu"></i> Р.бр.</th>
            <th><i class="icon_documents_alt"></i> Страни језик</th>
            <th><i class="icon_book"></i> Чита</th>
            <th><i class="icon_pencil"></i> Пише</th>
            <th><i class="icon_comment"></i> Говори</th>
            <th><i class="icon_cogs"></i> Опције</th>
          </tr>
           {{csrf_field()}}
          <?php $no=1; ?>
          @if(count($jezik) > 0)
          @foreach($jezik as $jezik)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$jezik->strani}}</td>
            <td>{{$jezik->cita}}</td>
            <td>{{$jezik->pise}}</td>
            <td>{{$jezik->govori}}</td>
            <td>
          <a class="btn btn-info" href="#" class="edit-modal" 
             data-myda="{{$jezik->strani}}" 
             data-myci="{{$jezik->cita}}" 
             data-myre="{{$jezik->pise}}" 
             data-mysc="{{$jezik->govori}}" 
             data-jezid="{{$jezik->id}}" 
             data-toggle="modal" 
             data-target=".myModal10"><i class="fa fa-edit"></i>Измени</a>
          <a class="btn btn-danger" href="#" class="delete-modal"
             data-jezid="{{$jezik->id}}" 
             data-toggle="modal" 
             data-target="#delete9"><i class="fa fa-trash"></i>Обриши</a>
            </td>
          </tr>        
   @endforeach
    @else
    <p>Нема података</p>
   @endif
   </tbody>
    </table>
  </section>
</div>
  @include('jezik.create')
  @include('jezik.edit')
  @include('jezik.delete')
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
$('.myModal10').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget)
  var da = button.data('myda')
  var ci = button.data('myci')
  var re = button.data('myre')
  var sc = button.data('mysc')
  var jez_id = button.data('jezid')

  var modal = $(this)
  modal.find('.modal-body #g').val(da);
  modal.find('.modal-body #m').val(ci);
  modal.find('.modal-body #r').val(re);
  modal.find('.modal-body #v').val(sc);
  modal.find('.modal-body #jez_id').val(jez_id);
});

$('#delete9').on('show.bs.modal', function(event){
  var button = $(event.relatedTarget)
  var jez_id = button.data('jezid')

  var modal = $(this)
  modal.find('.modal-body #jez_id').val(jez_id);
});

</script>

@endsection