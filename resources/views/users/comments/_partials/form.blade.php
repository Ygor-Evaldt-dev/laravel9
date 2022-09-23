@csrf
<div class="mb-3">
  <textarea class="form-control mb-3" name="body" cols="30" rows="10" placeholder="Escreva seu comentário: "> {{$comment->body ?? old('body')}} </textarea>
  <div class="d-flex">
    <label class="me-2" for="visible" >Visível</label>
    <input class="form-check" type="checkbox" name="visible"
    @if (isset($comment) && $comment->visible)
      checked = "checked"
    @endif
    >
  </div>
</div>