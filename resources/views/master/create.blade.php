<!-- forma create modal -->

<div id="create6" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Унеси те податке</h4>
    </div>
    <form class="form-horizontal" action="{{route('master.store')}}" method="post">
     {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" name="mas_id" id="mas_id">
        <div class="form-group row add">
          
          <label class="control-label col-sm-4" for="upi">Година уписа и завршетка студија:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="upi" name="upi" placeholder="Година уписа и завршетка студија">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="pos">Место :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="pos" name="pos" placeholder="Место">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="sta">Република - држава:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="sta" name="sta" placeholder="Република - држава">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="viU">Високошколска установа:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="viU" name="viU" placeholder="Високошколска установа">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="mas">Назив мастер рада :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="mas" name="mas" placeholder="Назив мастер рада">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="akN">Стечени академски назив :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="akN" name="akN" placeholder="Стечени академски назив">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
      </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="add3">Сачувај </button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
</form>
</div>
</div>
</div>
<!--end modal-->
 
