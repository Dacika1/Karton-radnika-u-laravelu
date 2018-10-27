<!-- forma create modal -->
<div class="modal fade myModal2" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Измени податке</h4>
    </div>
     <form class="form-horizontal" role="form" action="{{route('poslediplomske.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" id="posl_id" name="posl_id">
        <div class="form-group">
          <label class="control-label col-sm-4" for="g">Година уписа и завршетка студија :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="g" name="g">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="m">Место :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="m" name="m">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="r">Република - држава:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="r" name="r">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="v">Високошколска установа:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="v" name="v">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="n">Назив специјалистичког рада :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="n" name="n">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="s">Стечени стручни назив :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="s" name="s">
          </div>
        </div>

        <div class="modal-footer">
      <button type="submit" class="btn btn-success">Сними </button>
      <button type="button" class="btn btn-warning"  data-dismiss="modal">Изађи</button>
    </div>
  </div>
</form>
</div>
</div>
</div>           
<!--end modal-->
