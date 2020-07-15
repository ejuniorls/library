<div class="form-group">
    <label for="inputGenre">Genre</label>
    <input type="text" class="form-control" id="inputGenre" name="genre" splaceholder="Genre"
        value="{{ isset($genre->genre) ? $genre->genre : '' }}" required>
    <div class="invalid-feedback"> Please type a genre. </div>
</div>