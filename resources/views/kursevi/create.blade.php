
<div id="snimi5" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Унеси те податке</h4>
      </div>
      <form class="form-horizontal" 
       action="{{route('kursevi.store')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="ku_id" id="ku_id">
        <div class="form-group row add">
          <label class="control-label col-sm-4" for="kur">Курсеви наставних активости:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="kur" name="kur" placeholder="Курсеви наставних активости">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="studi">Година студија:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="studi" name="studi" placeholder="Година студија">                
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="caso">Фонд часова:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="caso" name="caso" placeholder="Фонд часова">                            
          </div> 
          </div>
        </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="dodaj7">
        Сачувај
      </button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
     </form>
  </div>
</div>
</div>
<!--end modal-->