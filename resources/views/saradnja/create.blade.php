<!-- forma create modal -->
 <div id="crea6" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Унеси те податке</h4>
      </div>
     <form class="form-horizontal" 
     action="{{route('saradnja.store')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="sar_id" id="sar_id">
          <div class="form-group row add">
            <label class="control-label col-sm-4" for="opi">Опис:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="opi" name="opi" placeholder="Опис">
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-4" for="odo">Од-До :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="odo" name="odo" placeholder="Од-До">
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-sm-4" for="sara">Ко је сарађивао:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="sara" name="sara" placeholder="Ко је сарађивао">
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-sm-4" for="num">Број:</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="num" name="num" placeholder="Број">
            </div>
          </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit" id="dodaj1">
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
 
