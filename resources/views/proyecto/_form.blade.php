@csrf
<input id="user" name="user" type="hidden" value="{{ auth()->user()->name }}">
<div  class="form-group">
	<label for='title'>Titulo del proyecto</label>
	<input class="form-control border-0 bg-ligth shadow-sm" type="text" name="title" id="title" value="{{ old('title',  $proyecto->title) }}">
</div>

<div class="form-group">
	<label for='url'>Url del proyecto</label>
	<input class="form-control bg-light shadow-sm border-0" type="text" name="url" id="url" value="{{ old('url',  $proyecto->url) }}">
</div>

<div  class="form-group">
	<label for=' content'>Descripcion del proyecto</label>
	<textarea class="form-control border-0 bg-ligth shadow-sm" name="content" id="content">{{ old('content',  $proyecto->content) }}</textarea>
</div>
<button class="btn btn-primary btn-block">{{ $btnText }}</button>