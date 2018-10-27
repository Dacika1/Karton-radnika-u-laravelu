<!-- forma create modal -->

 <div id="create8" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Унеси те податке</h4>
      </div>
      <form class="form-horizontal" action="{{route('magistarske.store')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="mag_id" id="mag_id">
          <div class="form-group row add">                                
            <label class="control-label col-sm-4" for="za">Година уписа и завршетка студија:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="za" name="za" placeholder="Година уписа и завршетка студија">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-4" for="me">Место :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="me" name="me" placeholder="Место">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="pu">Република - држава:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pu" name="pu" placeholder="Република - држава">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="so">Високошколска установа:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="so" name="so" placeholder="Високошколска установа">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="mg">Назив магистарског рада:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="mg" name="mg" placeholder="Назив магистарског рада">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="sr">Стечени стручни назив :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="sr" name="sr" placeholder="Стечени стручни назив">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div> 
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit" id="add4"> Сачувај</button>
        <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
      </div>
 </form>
</div>
</div>
</div>
<!--end modal-->
 
