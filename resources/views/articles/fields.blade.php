<input type="text" name="title" value="{{ $article->title }}">
@error('title')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
<textarea name="body">
    {{ $article->body }}
</textarea>
@error('body')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="tag">Sélectionner la rubrique</label>
<select name="tag_id" id="tag">
    @foreach ($tags as $tag)
        <option value="">Sélectionner la rubrique</option>
        <option value="{{ $tag->id }}" {{ $article->tag?->name === $tag->name ? 'selected' : '' }}>{{ $tag->name }}</option>
    @endforeach
</select>
