<!-- forma create modal -->
<div class="modal fade moj6" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Измени податке</h4>
  </div>
   <form class="form-horizontal" role="form" action="{{route('nastavni.update','test')}}" method="post">
    {{method_field('patch')}}
    {{csrf_field()}}
  <div class="modal-body">
    <input type="hidden" id="nas_id" name="nas_id">
      <div class="form-group">
        <label class="control-label col-sm-4" for="j">Увођење нових области, наставних предмета, метода у наставном процесу:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="j" name="j">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-4" for="o">Руковођење-менторство завршних радова на основним студијама - број:</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="o" name="o">
        </div>
      </div>
         <div class="form-group">
        <label class="control-label col-sm-4" for="i">Извођење наставе на универзитетима ван земље:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="i" name="i">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="u">Учешће у комисијама за одбрану мастер и специјалистичких радова, магистарских теза и докторских дисертација - број:</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="u" name="u">
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="n">Уџбеници (наслов, аутори, година издања, издавач):</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="n" name="n">
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="d">Друга дидактичка средства- приручници, скрипте и сл.(наслов, аутори, година издања, издавач):</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="d" name="d">
        </div>
      </div>
         <div class="form-group">
        <label class="control-label col-sm-4" for="m">Мишљење студената о педагошком раду наставника::</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="m" name="m">
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
