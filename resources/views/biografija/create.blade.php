<!-- forma create modal -->
   <div id="crea4" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Унеси те податке</h4>
        </div>
       <form class="form-horizontal" 
       action="{{route('biografija.store')}}" method="post">
            {{csrf_field()}}
        <div class="modal-body">
          
          <input type="hidden" name="bio_id" id="bio_id">
       
            <div class="form-group row add">
        <label class="control-label col-sm-4">Кретање у професионалном раду:</label>
        <div class="col-sm-8">
          <textarea class="form-control ckeditor" name="kre" id="kre" rows="3"></textarea>
        </div>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-4">Радно ангажовање:</label>
        <div class="col-sm-8">
          <textarea class="form-control ckeditor" name="ang" id="ang" rows="3"></textarea>
        </div>
      </div>

      <section class="panel">
          <header class="panel-heading">
             Чланство у САНУ
            </header>
         <div class="panel-body">
         <div class="btn-row">
          <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary">
                  <input type="radio" name="options" id="option1"> Да
                 </label>
                  </div>
                </div>
              </div>
      </section>
      
       <div class="form-group" name="hide" style="display: none" id="str">
              <label class="control-label col-sm-2" for="str">Од када:</label>
        <div class="col-sm-10">
              <input type="date" class="form-control"  name="kad" id="kad">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4">Чланство у другим стручним и научним асоцијацијама:</label>
        <div class="col-sm-8">
          <textarea class="form-control ckeditor" name="cla" rows="3" id="cla"></textarea>
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-4">Остале активности:</label>
        <div class="col-sm-8">
          <textarea  class="form-control ckeditor" name="ost" rows="3" id="ost"></textarea>
        </div>
      </div>
     
       <div class="modal-footer">
          <button class="btn btn-success" type="submit" id="add9">
            Сачувај
          </button>
          <button class="btn btn-warning" type="button" data-dismiss="modal">Изађи</button>
        </div>
        </div>
        </form>
        </div>
      </div>
    </div>
    <script type="text/javascript">
   $(document).ready(function(){
    $('#option1').change(function(){
        if(this.checked)
            $('#str').fadeIn('slow');
        else 
            $('#str').fadeOut('slow');
    });
});

 </script>                                                      
<!--end modal-->
 
