<!-- forma create modal -->

<div id="create5" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Унеси те податке</h4>
  </div>
   <form class="form-horizontal" action="{{route('poslediplomske.store')}}" method="post">
   {{csrf_field()}}
  <div class="modal-body">
    <input type="hidden" name="posl_id" id="posl_id">
      <div class="form-group row add">

        <label class="control-label col-sm-4" for="godI">Година уписа и завршетка студија:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="godI" name="godI" placeholder="Година уписа и завршетка студија">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-4" for="ple">Место :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="ple" name="ple" placeholder="Место">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="ste">Република - држава:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="ste" name="ste" placeholder="Република - држава">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="vis">Високошколска установа:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="vis" name="vis" placeholder="Високошколска установа">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="naz">Назив специјалистичког рада :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="naz" name="naz" placeholder="Назив специјалистичког рада">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="str">Стечени стручни назив :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="str" name="str" placeholder="Стечени стручни назив">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-success" type="submit" id="add2">Сачувај</button>
    <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
  </div>
 </form>
</div>
</div>
</div>
<!--end modal-->
 
