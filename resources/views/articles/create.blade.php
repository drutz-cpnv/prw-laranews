<h1>Nouvel article</h1>

<form method="POST" action="{{ route('articles.store') }}">
    @csrf
    <input type="text" name="title">
    <textarea name="body">
    </textarea>
    <input type="submit" value="Créer">
</form>
