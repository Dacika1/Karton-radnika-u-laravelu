<!-- forma create modal -->
<div id="crea3" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Унеси те податке</h4>
    </div>
    <form class="form-horizontal" action="{{route('jezik.store')}}" method="post">
        {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" name="jez_id" id="jez_id">
        <div class="form-group row add">
          <label class="control-label col-sm-4" for="str">Страни језик:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="str" name="str" placeholder="Страни језик">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="ci">Чита:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="ci" name="ci" placeholder="Чита">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="pis">Пише:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="pis" name="pis" placeholder="Пише">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="gov">Говори :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="gov" name="gov" placeholder="Говори">
          </div>
        </div>
      </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="add8">Сачувај</button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
   </form>
  </div>
</div>
</div>
<!--end modal-->

