<div id="snimi2" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Унеси те податке</h4>
      </div>
  <form class="form-horizontal" 
     action="{{route('rukovodjenje.store')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="ruk_id" id="ruk_id">
           <div class="form-group">
          <label class="control-label col-sm-4" for="stud">Име и презиме студента:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="stud" name="stud" placeholder="Име и презиме студента">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="nau">Ужа научна област:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nau" name="nau" placeholder="Ужа научна област">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="nasl">Наслов рада:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nasl" name="nasl" placeholder="Наслов рада">
          </div>
        </div>
     
    </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="dodaj5">
        Сачувај
      </button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
     </div>
    </form>
  </div>
</div>
</div>