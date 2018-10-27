<!-- forma create modal -->
 <div id="snimi9" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Унеси те податке</h4>
        </div>
        <form class="form-horizontal" action="{{route('medjunarodni.store')}}" method="post">
            {{csrf_field()}}
        <div class="modal-body">

          <input type="hidden" name="medj_id" id="medj_id">
        <div class="form-group">
            <label class="control-label col-sm-4" for="proj">Назив пројекта:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control"  name="proj" id="proj">
          </div>
        </div>    
        <div class="form-group">
            <label class="control-label col-sm-4" for="krat">Кратак опис и резултати пројекта:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control"  name="krat" id="krat">
          </div>
        </div>              
            <div class="form-group">
            <label class="control-label col-sm-4" for="orga">Организација носилац пројекта:</label>
             <div class="col-sm-8">
            <input type="text" class="form-control"  name="orga" id="orga">
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="refe">Референтни број пројекта:</label>
             <div class="col-sm-8">
            <input type="text" class="form-control"  name="refe" id="refe">
          </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-4" for="traj">Трајање пројекта (месец, година - месец, година):</label>
             <div class="col-sm-8">
            <input type="text" class="form-control"  name="traj" id="traj">
          </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-4" for="ruko">Име руководиоца пројекта:</label>
             <div class="col-sm-8">
            <input type="text" class="form-control"  name="ruko" id="ruko">
          </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-4" for="pozi">Позиција наставника / сарадника у пројекту:</label>
             <div class="col-sm-8">
            <input type="text" class="form-control"  name="pozi" id="pozi">
          </div>
        </div>  
        <div class="form-group">
            <label class="control-label col-sm-4" for="mese">Број месеци ангажовања:</label>
             <div class="col-sm-8">
            <input type="number" class="form-control"  name="mese" id="mese">
          </div>
        </div>
        <section class="panel">
          <header class="panel-heading">
             Списак резултата из пројекта (по класификацији Министарства)
            </header>
         <div class="panel-body">
         <div class="btn-row">
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Унеси податке</button>
                </div>              
      <div id="demo" class="collapse">
       <div class="form-group">
              <label class="control-label col-sm-2" for="spi">1:</label>
        <div class="col-sm-10">
              <input type="text" class="form-control"  name="spi" id="spi">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiU">2:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiU" id="spiU">
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiD">3:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiD" id="spiD">
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiT">4:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiT" id="spiT">
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiK">5:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiK" id="spiK">
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiC">6:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiC" id="spiC">
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiS">7:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiS" id="spiS">
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiE">8:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiE" id="spiE">
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiO">9:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiO" id="spiO">
          </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="spiN">10:</label>
             <div class="col-sm-10">
            <input type="text" class="form-control"  name="spiN" id="spiN">
          </div>
          </div>
          </div>
        </div> 
        </section>   
       </div>
  <div class="modal-footer">  
       <button class="btn btn-success" type="submit"  >Сачувај</button>
        <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
      </div>
</form>
</div>
</div>
</div>
    
<!--end modal-->
 
