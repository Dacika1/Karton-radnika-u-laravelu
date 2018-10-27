<!-- forma create modal -->
<div id="create1" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Унеси те податке</h4>
    </div>
    <form class="form-horizontal" action="{{route('skolovanje.store')}}" method="post">
      {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" name="sko_id" id="sko_id" >
        <div class="form-group row add"> 
          <label class="control-label col-sm-4" for="gUp">Година уписа и завршетка студија:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="gUp" name="gUp" placeholder="Година уписа и завршетка студија">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="mes">Место :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="mes" name="mes" placeholder="Место">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="drz">Република - држава:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="drz" name="drz" placeholder="Република - држава">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="ust">Високошколска установа:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="ust" name="ust" placeholder="Високошколска установа">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="rAd">Назив завршног рада :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="rAd" name="rAd" placeholder="Назив завршног рада">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="sNa">Стечени стручни назив :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="sNa" name="sNa" placeholder="Стечени стручни назив">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>                          
    </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="add1">Сачувај</button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
     </form>
  </div>
</div>
</div>
<!--end modal-->
 
