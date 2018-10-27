<!-- forma create modal -->
<div class="modal fade izmeni5" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Измени податке</h4>
    </div>
     <form class="form-horizontal" role="form" action="{{route('casopis.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
    <div class="modal-body"> 
      <input type="hidden" id="cas_id" name="cas_id">
        <div class="form-group">
          <label class="control-label col-sm-4" for="g">М категоријa:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="g" name="g">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="m">Наслов рада:</label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="m" name="m">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="U">Назив часописа/ назив конференције<br>(у случају кљиге-назив издавача):</label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="U" name="U">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="r">Година:</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="r" name="r">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="v">Волумен (Volume):</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="v" name="v">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="n">Број(Issue):</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="n" name="n">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="o">Прва страна:</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="o" name="o">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="s">Последња страна:</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="s" name="s">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="st">DOI број:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="st" name="st">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="u">UDC:</label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="u" name="u">
          </div>
        </div>
      
       <div class="form-group">
          <label class="control-label col-sm-4" for="D">ISBN:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="D" name="D">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="T">ISSN:</label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="T" name="T">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-4" for="K">Имена и презимена аутора:</label>
          <div class="col-sm-8">
            <textarea class="form-control ckeditor" name="K" id="K" rows="3"></textarea>
          </div>
        </div>
      </div>
        <div class="modal-footer">
      <button type="submit" class="btn btn-success">Сними </button>
      <button type="button" class="btn btn-warning"  data-dismiss="modal">Изађи</button>
  </div>
</form>
</div>
</div>
</div>
   
<!--end modal-->
