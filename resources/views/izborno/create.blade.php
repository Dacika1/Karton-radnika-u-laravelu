<!-- forma create modal -->
<div id="crea1" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Унеси те податке</h4>
    </div>
    <form class="form-horizontal" action="{{route('izborno.store')}}" method="post">
        {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" name="izb_id" id="izb_id">
        <div class="form-group row add">
          <label class="control-label col-sm-4" for="nas">Наставно-научно звање:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nas" name="nas" placeholder="Наставно-научно звање">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="dat">Датум избора у звање :</label>
          <div class="col-sm-8">
            <input type="date" class="form-control" id="dat" name="dat" placeholder="Датум избора у звање">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="obl">Подручије рада (научна област):</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="obl" name="obl" placeholder="Подручије рада (научна област)">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="gru">Научна група:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="gru" name="gru" placeholder="Научна група">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="dis">Дисциплина :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="dis" name="dis" placeholder="Дисциплина">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="klju">Кључне речи :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="klju" name="klju" placeholder="Кључне речи">
            <p class="error text-center alert alert-danger hidden"></p>
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="yei">Година од када се лице бави научноистраживачким радом:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="yei" name="yei" placeholder="Година од када се лице бави научноистраживачким радом">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="uku">Укупна квантификациона вредност резултата(М10-М90):</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="uku" name="uku" placeholder="Укупна квантификациона вредност резултата(М10-М90)">
          </div>
        </div>  
    </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="add6">Сачувај</button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
  </form>
</div>
</div>
</div>
<!--end modal-->
 
