
<div class="modal fade izmeni1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Измени податке</h4>
    </div>
     <form class="form-horizontal" role="form" 
     action="{{route('predhodni.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" id="pred_id" name="pred_id">

        <div class="form-group">
          <label class="control-label col-sm-4" for="p">Педагошко искуство:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="p" name="p">
          </div>
        </div>
           <div class="form-group">
          <label class="control-label col-sm-4" for="z">Реизборност у звање асистента (од-до), број:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="z" name="z">
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


  