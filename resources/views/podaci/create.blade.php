<!-- forma create modal -->
<div id="create" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Унеси те податке</h4>
  </div>
  <form class="form-horizontal" action="{{route('podaci.store')}}" method="post" id="podaci">
    {{csrf_field()}}
  <div class="modal-body">
   <input type="hidden" name="pod_id" id="pod_id">
      <div class="form-group row add">
        <label class="control-label col-sm-4" for="prezime">Презиме :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="prezime" name="prezime" placeholder="Ваше презиме">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-4" for="ime">Име:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="ime" name="ime" placeholder="Ваше име">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="imeJednogRoditelja">Име једног родитеља:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="imeJednogRoditelja" name="imeJednogRoditelja" placeholder="Име једног родитеља">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="JMBG">ЈМБГ :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="JMBG" name="JMBG" placeholder="ЈМБГ">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="datumRodenja">Датум рођења :</label>
        <div class="col-sm-8">
          <input type="date" class="form-control" id="datumRodenja" name="datumRodenja" placeholder="Датум рођења">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="mestoRodenja">Место рођења :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="mestoRodenja" name="mestoRodenja" placeholder="Место рођења">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="drzavaRodenja">Држава рођења :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="drzavaRodenja" name="drzavaRodenja" placeholder="Држава рођења">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="drzavljanstvo">Држављанство :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="drzavljanstvo" name="drzavljanstvo" placeholder="Држављанство">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="adresaStanovanja">Адреса становања :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="adresaStanovanja" name="adresaStanovanja" placeholder="Адреса становања">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="zvanje">Звање :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="zvanje" name="zvanje" placeholder="Звање">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="akademskoZvanje">Академско звање :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="akademskoZvanje" name="akademskoZvanje" placeholder="Академско звање">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="email">Е маил :</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="email" name="email" placeholder="Е маил">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="telNaPoslu">Телефон на послу :</label>
        <div class="col-sm-8">
          <input type="tel" class="form-control" id="telNaPoslu" name="telNaPoslu" placeholder="Телефон на послу">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="mob">Број мобилног телефона:</label>
        <div class="col-sm-8">
          <input type="tel" class="form-control" id="mob" name="mob" placeholder="Број мобилног телефона">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4" for="ustanovaPunoZaposlenje">Високошколска установа у којој је наставник ангажован у радном односу са пуним радним временом :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="ustanovaPunoZaposlenje" name="ustanovaPunoZaposlenje" placeholder="Високошколска установа у којој је наставник ангажован у радном односу са пуним радним временом"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="ustanovaDodatna">Високошколска установа у којој је наставник додатно радно ангажован :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="ustanovaDodatna" name="ustanovaDodatna" placeholder="Високошколска установа у којој је наставник додатно радно ангажован">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div><div class="form-group">
        <label class="control-label col-sm-4" for="radnoMesto">Рано место / дужност које лице обавља :</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="radnoMesto" name="radnoMesto" placeholder="Рано место / дужност које лице обавља">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="godinaZaposlenja">Година првог запослења:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="godinaZaposlenja" name="godinaZaposlenja" placeholder="Година првог запослења">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="ukupanStaz">Укупан радни стаж (у годинама):</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="ukupanStaz" name="ukupanStaz" placeholder="Укупан радни стаж (у годинама)">
          <p class="error text-center alert alert-danger hidden"></p>
        </div>
      </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-success" type="submit"  id="add" >
      Сачувај
    </button>
    <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
  </div>
   </form>
</div>
</div>
</div>
<!--end modal-->
 
