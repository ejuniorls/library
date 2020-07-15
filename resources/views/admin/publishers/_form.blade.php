<div class="form-group">
    <label for="inputPublisher">Publisher</label>
    <input type="text" class="form-control" id="inputPublisher" name="publisher" placeholder="Publisher"
        value="{{ isset($publisher->publisher) ? $publisher->publisher : '' }}" required>
    <div class="invalid-feedback"> Please enter the publisher's name. </div>
</div>

<div class="form-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="logo" name="logo">
        <label class="custom-file-label" for="logo">Cover | Choose file</label>
    </div>
</div>

@if(isset($publisher->logo))
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset($publisher->logo)}}" alt="Card image cap" width="150">
    <div class="card-body">
        <p class="card-text">{{$publisher->publisher}}</p>
    </div>
</div>
@endif