<!-- forma create modal -->
<div class="modal fade izmeni5" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Измени податке</h4>
    </div>
     <form class="form-horizontal" role="form" action="{{route('medjunarodni.update','test')}}" method="post">
      {{method_field('patch')}}
      {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" id="medj_id" name="medj_id">
        <div class="form-group">
          <label class="control-label col-sm-4" for="g">Назив пројекта:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="g" name="g">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-4" for="k">Кратак опис и резултати пројекта:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="k" name="k">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="m">Организација носилац пројекта:</label>
          <div class="col-sm-8">
            <input type="text"  class="form-control" id="m" name="m">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="r">Референтни број пројекта:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="r" name="r">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="v">Трајање пројекта (месец, година - месец, година):</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="v" name="v">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="n">Име руководиоца пројекта:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="n" name="n">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="o">Позиција наставника / сарадника у пројекту:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="o" name="o">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="s">Број месеци ангажовања:</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="s" name="s">
          </div>
        </div>
    <div><h4><center>  Списак резултата из пројекта (по класификацији Министарства)
        </center>
      </h4>
    </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="st">1:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="st" name="st">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="U">2:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="U" name="U">
          </div>
        </div>
      
       <div class="form-group">
          <label class="control-label col-sm-2" for="D">3:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="D" name="D">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="T">4:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="T" name="T">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="K">5:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="K" name="K">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="C">6:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="C" name="C">
          </div>
        </div>
      <div class="form-group">
          <label class="control-label col-sm-2" for="S">7:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="S" name="S">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="E">8:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="E" name="E">
          </div>
        </div>
         <div class="form-group">
          <label class="control-label col-sm-2" for="O">9:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="O" name="O">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="N">10:</label>
          <div class="col-sm-10">
            <input type="text"  class="form-control" id="N" name="N">
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
