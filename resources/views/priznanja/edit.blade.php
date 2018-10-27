<!-- forma edit modal -->
<div class="modal fade moj11" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Измени податке</h4>
    </div>
     <form class="form-horizontal" role="form" action="{{route('priznanja.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" id="priz_id" name="priz_id">
        <div class="form-group">
          <label class="control-label col-sm-4" for="j">Признања, награде и одликовања за професионални рад:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="j" name="j">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="o">Остало:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="o" name="o">
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
