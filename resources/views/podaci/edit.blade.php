<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Измени податке</h4>
    </div>
     <form class="form-horizontal" role="form" action="{{route('podaci.update','test')}}" method="post">
        {{method_field('patch')}}
        {{csrf_field()}}
    <div class="modal-body">
      <input type="hidden" name="pod_id" id="pod_id" >

        <div class="form-group">
          <label class="control-label col-sm-4" for="prezime">Презиме:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="p" name="p">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-4" for="ime">Име:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="i" name="i">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="imeJednogRoditelja">Име једног родитеља:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="iJ" name="iJ">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="JMBG">ЈМБГ:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="JM" name="JM">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="datumRodenja">Датум рођења:</label>
          <div class="col-sm-8">
            <input type="date" data-date-format="dd/mm/yyyy" value="{{old('datumRodenja')}}" class="form-control" id="dR" name="dR">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="mestoRodenja">Место рођења:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="mR" name="mR">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="drzavaRodenja">Држава рођења:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="dRo" name="dRo">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="drzavljanstvo">Држављанство:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="dRz" name="dRz">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="adresaStanovanja">Адреса становања:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="aD" name="aD">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="zvanje">Звање:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="zV" name="zV">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="akademskoZvanje">Академско звање:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="aK" name="aK">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="email">Е маил:</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="eM" name="eM">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="telNaPoslu">Телефон на послу:</label>
          <div class="col-sm-8">
            <input type="tel" class="form-control" id="tEl" name="tEl">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="mob">Број мобилног телефона:</label>
          <div class="col-sm-8">
            <input type="tel" class="form-control" id="mOb" name="mOb">
          </div>
        </div>

         <div class="form-group">
          <label class="control-label col-sm-4" for="ustanovaPunoZaposlenje">Високошколска установа у којој је наставник ангажован у радном односу са пуним радним временом:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="uSt" name="uSt">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="ustanovaDodatna">Високошколска установа у којој је наставник додатно радно ангажован:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="uStd" name="uStd">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="radnoMesto">Рано место / дужност које лице обавља:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="radnoM" name="radnoM">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="godinaZaposlenja">Година првог запослења:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="gZap" name="gZap">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-4" for="ukupanStaz">Укупан радни стаж (у годинама):</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" id="ukS" name="ukS">
          </div>
        </div>
       
    <div class="modal-footer">
      <button type="submit" class="btn btn-success" >Сними</button>
      <button type="button" class="btn btn-warning"  data-dismiss="modal">Изађи</button>
    </div>
    </div>
    </form>
  </div>
</div>
</div>                
<!--end modal-->
 
