@csrf
<input class="form-control" type="text" name="name" placeholder="Nome:" value="{{  $user -> name ?? old('name')}}">
<input class="form-control mt-2" type="email" name="email" placeholder="E-mail:" value="{{ $user -> email ?? old('email')}}">
<input class="form-control mt-2 mb-3" type="password" name="password" placeholder="Senha:">
