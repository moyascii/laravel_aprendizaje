@csrf
<label for="title">
    Título del proyecto <br>
    <input type="text" name="title" id="title" value="{{ old('title', $project->title) }}">
</label>
<br><br>
<label for="url">
    URL del proyecto <br>
    <input type="text" name="url" id="url" value="{{ old('url', $project->url) }}">
</label>
<br><br>
<label for="description">
    Descripción del proyecto <br>
    <textarea name="description" id="description">{{ old('description', $project->description) }}</textarea>
</label>
<br><br>
<button>{{ $btnText }}</button>
