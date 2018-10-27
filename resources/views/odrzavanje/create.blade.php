
<div id="snimi6" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h4 class="modal-title">Унеси те податке</h4>
      </div>
      <form class="form-horizontal" 
       action="{{route('odrzavanje.store')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="odr_id" id="odr_id">
        <div class="form-group row add">
          <label class="control-label col-sm-4" for="nast">Одржавање наставе под менторством на предмету:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nast" name="nast" placeholder="Одржавање наставе под менторством на предмету">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="seme">Број часова у семестру:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="seme" name="seme" placeholder="Број часова у семестру">                
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="fondo">Фонд часова:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="fondo" name="fondo" placeholder="Фонд часова">                            
          </div>
        </div>
        </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="dodaj8">Сачувај</button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
      </div>
    </form>
  </div>
</div>
</div>
<!--end modal-->