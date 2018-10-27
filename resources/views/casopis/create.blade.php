<div id="sacuvaj" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h4 class="modal-title">Подаци о раду:</h4>
    </div>
    <form class="form-horizontal" action="{{route('casopis.store')}}" method="post">
        {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" name="cas_id" id="cas_id">
       <div class="form-group">
        <label class="control-label col-sm-4" for="spiU">Одаберите М категорију:</label>
        <div class="col-sm-8">
      <select name="spiU" id="spiU">
             <option value="11" class="tooltip-test" 
             title="Истакнута монографија међународног значаја">М11</option>
             <option value="12" class="tooltip-test" 
             title="Монографија међународног значаја">М12</option>
             <option value="13" class="tooltip-test" 
             title="Монографска студија/поглавље у књизи М11 или рада у тематском зборнику водећег међународног значаја">М13</option>
             <option value="14" class="tooltip-test" 
             title="Монографска студија/поглавље у књизи М12 или рад у тематском зборнику  међународног значаја">М14</option>
             <option value="15" class="tooltip-test" 
             title="Лексикографска јединица или карта у научној публикацији водећег међународног значаја">М15</option>
             <option value="16" class="tooltip-test" 
             title="Лексикографска јединица или карта у публикацији међународног значаја">М16</option>
             <option value="17" class="tooltip-test" 
             title="Уређивање тематског зборника, лексикографске или картографске публикације водећег међународног значаја">М17</option>
             <option value="18" class="tooltip-test" 
             title="Уређивање тематског зборника, лексикографске или картографске публикације водећег међународног значаја">М18</option>
         </select>
          </div>
        </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="proj">Наслов рада:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  name="proj" id="proj">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="mes">Назив часописа/конференције
          <br>(у случају кљиге-назив издавача):</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  name="mes" id="mes">
      </div>
    </div>     
    <div class="form-group">
        <label class="control-label col-sm-4" for="krat">Година:</label>
      <div class="col-sm-8">
        <input type="number" class="form-control"  name="krat" id="krat">
      </div>
    </div>              
    <div class="form-group">
        <label class="control-label col-sm-4" for="refe">Волумен (Volume):</label>
         <div class="col-sm-8">
        <input type="number" class="form-control"  name="refe" id="refe">
      </div>
    </div> 
    <div class="form-group">
        <label class="control-label col-sm-4" for="traj">Број(Issue):</label>
         <div class="col-sm-8">
        <input type="number" class="form-control"  name="traj" id="traj">
      </div>
    </div> 
    <div class="form-group">
        <label class="control-label col-sm-4" for="ruko">Прва страна:</label>
         <div class="col-sm-8">
        <input type="number" class="form-control"  name="ruko" id="ruko">
      </div>
    </div> 
    <div class="form-group">
        <label class="control-label col-sm-4" for="pozi">Последња страна:</label>
         <div class="col-sm-8">
        <input type="number" class="form-control"  name="pozi" id="pozi">
      </div>
    </div>  
    <div class="form-group">
        <label class="control-label col-sm-4" for="messe">DOI број:</label>
         <div class="col-sm-8">
        <input type="text" class="form-control"  name="messe" id="messe">
      </div>
    </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="spi">UDC:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control"  name="spi" id="spi">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="ang">ISBN:</label>
         <div class="col-sm-8">
        <input type="text" class="form-control" name="ang" id="ang">
      </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="spiT">ISSN:</label>
         <div class="col-sm-8">
        <input type="text" class="form-control"  name="spiT" id="spiT">
      </div>
      </div>
      <p>*Имена и презимена аутора уносити једно испод другог</p>
       <div class="form-group">
        <label class="control-label col-sm-4" for="imeT">*Име и презиме:</label>
         <div class="col-sm-8">
        <textarea class="form-control ckeditor" name="imeT" id="imeT" rows="3"></textarea>
      </div>
      </div>  
   </div>
  <div class="modal-footer">
   <button class="btn btn-success" type="submit">Сачувај</button>
    <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
  </div>
</form>
</div>
</div>
</div>
