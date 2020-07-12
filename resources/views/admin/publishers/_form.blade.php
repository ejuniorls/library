<div class="form-group">
    <label for="inputPublisher">Publisher</label>
    <input type="text" class="form-control" id="inputPublisher" name="publisher" placeholder="Publisher"
        value="{{ isset($publisher->publisher) ? $publisher->publisher : '' }}">
</div>

<div class="form-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="logo" name="logo">
        <label class="custom-file-label" for="logo">Cover | Choose file</label>
    </div>
</div>