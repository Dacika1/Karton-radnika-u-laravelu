<!-- forma create modal -->
<div class="modal fade moj3" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Измени податке</h4>
    </div>
     <form class="form-horizontal" role="form" action="{{route('saradnja.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" id="sar_id" name="sar_id">
        <div class="form-group">
          <label class="control-label col-sm-4" for="g">Опис:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="g" name="g">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="m">Од-До:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="m" name="m">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="r">Ко је сарађивао:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="r" name="r">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="v">Број:</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="v" name="v">
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
