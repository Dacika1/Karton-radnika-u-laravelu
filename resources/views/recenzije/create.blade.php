<!-- forma create modal -->
<div id="crea7" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Унеси те податке</h4>
    </div>
   <form class="form-horizontal" 
   action="{{route('recenzije.store')}}" method="post">
        {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" name="rec_id" id="rec_id">
      <div class="form-group row add">
        <label class="control-label col-sm-4" for="dom">
          <select name="dom" id="dom">
             <option value="Domaće" class="tooltip-test" 
             title="Истакнута монографија међународног значаја">Домаће</option>
             <option value="Strane" class="tooltip-test" 
             title="Монографија међународног значаја">Стране</option>
           </select></label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="opci" name="opci" placeholder="текст">
        </div>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-4" for="nume">Број:</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="nume" name="nume" placeholder="Број">
        </div>
      </div>
  <div class="modal-footer">
    <button class="btn btn-success" type="submit" id="dodaj2">
      Сачувај
    </button>
    <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
<!--end modal-->
 
