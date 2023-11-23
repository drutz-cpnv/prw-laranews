<h1>Modifier l'article</h1>

<form method="POST" action="{{ route('articles.update', $article) }}">
    @method('PUT')
    @csrf
    <input type="text" name="title" value="{{ $article->title }}">
    <textarea name="body">
        {{ $article->body }}
    </textarea>
    <input type="submit" value="Modifier">
</form>
