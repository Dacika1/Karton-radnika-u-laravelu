<div id="snimi1" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Унеси те податке</h4>
        </div>
    <form class="form-horizontal" 
       action="{{route('sadasnji.store')}}" method="post">
            {{csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="sad_id" id="sad_id">
        
           <div class="form-group">
          <label class="control-label col-sm-4" for="pre">Назив предмета:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="pre" name="pre" placeholder="Назив предмета">
           
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="stu">Година студија:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="stu" name="stu" placeholder="Година студија">
          
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="fon">Фонд часова:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="fon" name="fon" placeholder="Фонд часова">
            
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="niv">Ниво студија :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="niv" name="niv" placeholder="Ниво студија">
          </div>
        </div>

    </div>
    <div class="modal-footer">
      <button class="btn btn-success" type="submit" id="dodaj4">
        Сачувај
      </button>
      <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
    </div>
     </div>
    </form>
  </div>
</div>
</div>