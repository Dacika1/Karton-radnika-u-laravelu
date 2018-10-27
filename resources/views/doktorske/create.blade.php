<!-- forma create modal -->

 <div id="crea" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Унеси те податке</h4>
      </div>
      <form class="form-horizontal" action="{{route('doktorske.store')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="dokt_id" id="dokt_id">
          <div class="form-group row add">
            
            <label class="control-label col-sm-4" for="data">Датум одбране дисертације:</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="data" name="data" placeholder="Датум одбране дисертације">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-4" for="cit">Место :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="cit" name="cit" placeholder="Место">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="rep">Република - држава:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="rep" name="rep" placeholder="Република - држава">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="scu">Високошколска установа:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="scu" name="scu" placeholder="Високошколска установа">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="dok">Назив докторске дисертације :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="dok" name="dok" placeholder="Назив докторске дисертације">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="obl">Област :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="obl" name="obl" placeholder="Област">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="ste">Стечени научни назив :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="ste" name="ste" placeholder="Стечени научни назив">
              <p class="error text-center alert alert-danger hidden"></p>
            </div>
          </div>   
      </div>
      <div class="modal-footer">
        <button class="btn btn-success" type="submit" id="add5">Сачувај</button>
        <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
      </div>
         </form>
    </div>
  </div>
</div>
<!--end modal-->
 
