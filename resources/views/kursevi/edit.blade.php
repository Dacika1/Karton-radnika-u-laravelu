
 <div class="modal fade izmeni2" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Измени податке</h4>
    </div>
     <form class="form-horizontal" role="form"
      action="{{route('kursevi.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" id="ku_id" name="ku_id">
        <div class="form-group">
          <label class="control-label col-sm-4" for="k">Курсеви наставних активости:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="k" name="k">
          </div>
        </div>
           <div class="form-group">
          <label class="control-label col-sm-4" for="g">Година студија:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="g" name="g">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="f">Фонд часова:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="f" name="f">
          </div>
        </div>
      </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-success">Сними </button>
      <button type="button" class="btn btn-warning"  data-dismiss="modal">Изађи</button>
        </div>
      </form>
    </div>
  </div>
</div>