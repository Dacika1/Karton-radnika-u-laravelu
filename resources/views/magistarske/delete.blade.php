
<div class="modal fade" id="delete4" role="dialog">
<div class="modal-dialog">
  <div class="modal-content modal-danger">
    <div class="modal-header ">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Обриши</h4>
    </div>
    <form action="{{route('magistarske.destroy','test')}}" method="post">
      {{method_field('delete')}}
      {{csrf_field()}}
      <div class="modal-body ">
        <p class="text-center"> Дали сте сигурни да жели те да обришете податке?</p>
        <input type="hidden" name="mag_id" id="mag_id">
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-success" data-dismiss="modal">Не, одустани</button>
        <button type="submit" class="btn btn-warning">Да, обриши</button>
      </div>
    </form>
  </div>
  </div>
</div> 
