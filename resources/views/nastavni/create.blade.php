<!-- forma create modal -->
<div id="crea9" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h4 class="modal-title">Унеси те податке</h4>
      </div>
  <form class="form-horizontal" 
     action="{{route('nastavni.store')}}" method="post">
          {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" name="nas_id" id="nas_id">
    <div class="form-group row add">
      <label class="control-label col-sm-4" for="obl">Увођење нових области, наставних предмета, метода у наставном процесу:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="obl" name="obl" placeholder="Увођење нових области, наставних предмета, метода у наставном процесу">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="ruk">Руковођење-менторство завршних радова на основним студијама - број:</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" id="ruk" name="ruk" placeholder="Руковођење-менторство завршних радова на основним студијама - број">                
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="izv">Извођење наставе на универзитетима ван земље:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="izv" name="izv" placeholder="Извођење наставе на универзитетима ван земље">                            
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="uce">Учешће у комисијама за одбрану мастер и специјалистичких радова, магистарских теза и докторских дисертација - број:</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" id="uce" name="uce" placeholder="Учешће у комисијама за одбрану мастер и специјалистичких радова, магистарских теза и докторских дисертација - број">                             
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="udz">Уџбеници (наслов, аутори, година издања, издавач):</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="udz" name="udz" placeholder="Уџбеници (наслов, аутори, година издања, издавач)">                            
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="dru">Друга дидактичка средства- приручници, скрипте и сл.(наслов, аутори, година издања, издавач):</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="dru" name="dru" placeholder="Друга дидактичка средства- приручници, скрипте и сл.(наслов, аутори, година издања, издавач)">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-4" for="mis">Мишљење студената о педагошком раду наставника:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="mis" name="mis" placeholder="Мишљење студената о педагошком раду наставника">                            
     </div>
    </div>
<div class="modal-footer">
  <button class="btn btn-success" type="submit" id="dodaj3">
    Сачувај
  </button>
  <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
</div>
 </div>
</form>
</div>
</div>
</div>
<!--end modal-->
 
