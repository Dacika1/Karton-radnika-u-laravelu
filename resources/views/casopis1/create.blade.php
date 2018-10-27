 <div id="sacuvaj2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <h4 class="modal-title">Подаци о раду:</h4>
        </div>
        <form class="form-horizontal" action="{{route('casopis1.store')}}" method="post">
            {{csrf_field()}}
        <div class="modal-body">
          <input type="hidden" name="cas_id" id="cas_id">
           <div class="form-group">
            <label class="control-label col-sm-4" for="spiU">Одаберите М категорију:</label>
            <div class="col-sm-8">
          <select name="spiU" id="spiU">
                 <option value="21a" class="tooltip-test" 
                 title="Рад у међународном часопису изузетних вредности">М21a</option>
                 <option value="21" class="tooltip-test" 
                 title="Рад у врхунском међународном часопису">М21</option>
                 <option value="22" class="tooltip-test" 
                 title="Рад у истакнутом међународном часопису">М22</option>
                 <option value="23" class="tooltip-test" 
                 title="Рад у међународном часопису">М23</option>
                 <option value="21" class="tooltip-test" 
                 title="Рад у националном часопису међународног значаја">М24</option>
                 <option value="25" class="tooltip-test" 
                 title="Научна критика и полемика у истакнутом међународном часопису">М25</option>
                 <option value="26" class="tooltip-test" 
                 title="Научна критика и полемика у међународном часопису">М26</option>
                 <option value="27" class="tooltip-test" 
                 title="Научна критика и полемика часописа ранга М24">М27</option>
                 <option value="28a" class="tooltip-test" 
                 title="a) Главни одгговорни уредник истакнутог међународног научног часописа или публикације са монографским делима категорије М13">М28a</option>
                 <option value="28b" class="tooltip-test" 
                 title="b) Уређивање истакнутог међународног научног часописа (гост уредник)или публикација са монографским делима категорије М14">М28b</option>
                 <option value="29a" class="tooltip-test" 
                 title="a) Уређивање међународног научног часописа; Уређивање тематских монографија">М29a</option>
                 <option value="29b" class="tooltip-test" 
                 title="b) Главни и одговорни уредник националног часописа">М29b</option>
                 <option value="29v" class="tooltip-test" 
                 title="v) Уређивање националног научног часописа; Уређивање тематских монографија">М29v</option>
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
