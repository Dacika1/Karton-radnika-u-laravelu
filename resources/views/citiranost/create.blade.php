<!-- forma create modal -->
           <div id="crea5" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Унеси те податке</h4>
                </div>
               <form class="form-horizontal" 
               action="{{route('citiranost.store')}}" method="post">
                    {{csrf_field()}}
                <div class="modal-body">
                  <input type="hidden" name="cit_id" id="cit_id">
                    <div class="form-group row add">
                      <label class="control-label col-sm-4" for="bez">Број цитата без аутоцитата:</label>
                <div class="col-sm-8">
                      <input type="number" class="form-control"  name="bez" id="bez">
                    </div>
                  </div>                 

                    <div class="form-group">
                <label class="control-label col-sm-4">Извор:</label>
                <div class="col-sm-8">
                  <textarea class="form-control ckeditor" name="izvo" rows="3" id="izvo"></textarea>
                </div>
              </div>

               <div class="modal-footer">
                  <button class="btn btn-success" type="submit" id="dodaj">
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
 
