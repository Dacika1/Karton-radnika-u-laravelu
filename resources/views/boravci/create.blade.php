<!-- forma create modal -->

   <div id="crea2" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Унеси те податке</h4>
        </div>
        <form class="form-horizontal" action="{{route('boravci.store')}}" method="post">
            {{csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="bor_id" id="bor_id">
            <div class="form-group row add">
              
              <label class="control-label col-sm-4" for="org">Организација-установа:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="org" name="org" placeholder="Организација-установа">
                <p class="error text-center alert alert-danger hidden"></p>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-4" for="ann">Година :</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" id="ann" name="ann" placeholder="Година">
                <p class="error text-center alert alert-danger hidden"></p>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-4" for="tra">Трајање:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="tra" name="tra" placeholder="Трајање">
                <p class="error text-center alert alert-danger hidden"></p>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-4" for="luo">Место:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="luo" name="luo" placeholder="Место">
                <p class="error text-center alert alert-danger hidden"></p>
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-4" for="pae">Држава :</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="pae" name="pae" placeholder="Држава">
                <p class="error text-center alert alert-danger hidden"></p>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" type="submit" id="add7">Сачувај</button>
          <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--end modal-->
 
