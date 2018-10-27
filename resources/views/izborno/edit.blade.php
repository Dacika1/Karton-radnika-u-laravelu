
<div class="modal fade myModal7" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Измени податке</h4>
  </div>
   <form class="form-horizontal" role="form" action="{{route('izborno.update','test')}}" method="post">
    {{method_field('patch')}}
    {{csrf_field()}}
  <div class="modal-body">
    <input type="hidden" id="izb_id" name="izb_id">
      <div class="form-group">
        <label class="control-label col-sm-4" for="g">Наставно-научно звање:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="g" name="g">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-4" for="m">Датум избора у звање:</label>
        <div class="col-sm-8">
          <input type="date" data-date-format="dd/mm/yyyy" value="{{old('data')}}"  class="form-control" id="m" name="m">
        </div>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-4" for="r">Подручије рада (научна област):</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="r" name="r">
        </div>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-4" for="v">Научна група:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="v" name="v">
        </div>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-4" for="n">Дисциплина:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="n" name="n">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4" for="o">Кључне речи:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="o" name="o">
        </div>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-4" for="s">Година од када се лице бави научноистраживачким радом:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="s" name="s">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-4" for="u">Укупна квалификациона вредност резултата (М10-М90):</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="u" name="u">
        </div>
      </div>

      <div class="modal-footer">
    <button type="submit" class="btn btn-success">Сними </button>
    <button type="button" class="btn btn-warning"  data-dismiss="modal">Изађи</button>
  </div>
</div>
</form>
</div>
</div>
</div>
   
<!--end modal-->
