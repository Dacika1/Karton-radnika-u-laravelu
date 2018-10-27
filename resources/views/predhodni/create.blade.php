
<div id="snimi4" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Унеси те податке</h4>
      </div>
      <form class="form-horizontal" 
       action="{{route('predhodni.store')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="pred_id" id="pred_id">
        <div class="form-group row add">
      
          <label class="control-label col-sm-4" for="peda">Педагошко искуство:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="peda" name="peda" placeholder="Педагошко искуство">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="reiz">Реизборност у звање асистента (од-до), број:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="reiz" name="reiz" placeholder="Реизборност у звање асистента (од-до), број">                
          </div>
        </div>
      </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="dodaj9">
        Сачувај
      </button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
   </form>
  </div>
</div>
</div>
<!--end modal-->
 
