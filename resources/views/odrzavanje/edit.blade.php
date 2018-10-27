<!-- za pogled 'odrzavanje'  -->
<div class="modal fade izmeni3" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Измени податке</h4>
      </div>
       <form class="form-horizontal" role="form"
       action="{{route('odrzavanje.update','test')}}" method="post">
        {{method_field('patch')}}
        {{csrf_field()}}
      <div class="modal-body">
        <input type="hidden" id="odr_id" name="odr_id">
          <div class="form-group">
            <label class="control-label col-sm-4" for="o">Одржавање наставе под менторством на предмету:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="o" name="o">
            </div>
          </div>
             <div class="form-group">
            <label class="control-label col-sm-4" for="b">Број часова у семестру:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="b" name="b">
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-sm-4" for="c">Фонд часова:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="c" name="c">
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