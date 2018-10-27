<!-- forma create modal -->
<div id="crea8" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Унеси те податке</h4>
    </div>
   <form class="form-horizontal" 
   action="{{route('priznanja.store')}}" method="post">
        {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" name="priz_id" id="priz_id">
            <div class="form-group">
          <label class="control-label col-sm-4">Признања, награде и одликовања за професионални рад:</label>
          <div class="col-sm-8">
         <textarea class="form-control ckeditor" name="nagr" rows="3" id="nagr"></textarea>
        </div>
      </div>                 

        <div class="form-group">
    <label class="control-label col-sm-4">Остало:</label>
    <div class="col-sm-8">
      <textarea class="form-control ckeditor" name="osta" rows="3" id="osta"></textarea>
    </div>
  </div>
    </div>
   <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="dodaj10">
        Сачувај
      </button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
    </form>
    </div>
  </div>
</div>

<!--end modal-->

