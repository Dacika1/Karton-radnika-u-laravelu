<div id="snimi3" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h4 class="modal-title">Унеси те податке</h4>
  </div>
  <form class="form-horizontal" 
   action="{{route('mentor.store')}}" method="post">
      {{csrf_field()}}
  <div class="modal-body">
    <input type="hidden" name="men_id" id="men_id">
       <div class="form-group">
      <label class="control-label col-sm-4" for="cog">Име и презиме студента:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="cog" name="cog" placeholder="Име и презиме студента">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="cna">Ужа научна област:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="cna" name="cna" placeholder="Ужа научна област">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="dise">Наслов докторске дисертације:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="dise" name="dise" placeholder="Наслов докторске дисертације">
      </div>
    </div>

<div class="modal-footer">
  <button class="btn btn-success" type="submit" id="dodaj6">
    Сачувај
  </button>
  <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
</div>
 </div>
</form>
</div>
</div>
</div>