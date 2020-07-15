<div class="form-row">
    <div class="form-group col-md-6">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"
        value="{{ isset($author->firstName) ? $author->firstName : '' }}" required>
        <div class="invalid-feedback"> Please enter First Name. </div>
    </div>

    <div class="form-group col-md-6">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name"
        value="{{ isset($author->lastName) ? $author->lastName : '' }}" required>
        <div class="invalid-feedback"> Please enter Last Name. </div>
    </div>
</div>

<div class="form-group">
    <label for="popularName">Popular Name</label>
    <input type="text" class="form-control" id="popularName" name="popularName" placeholder="Popular Name"
    value="{{ isset($author->popularName) ? $author->popularName : '' }}" required>
    <div class="invalid-feedback"> Please enter Popular Name. </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="birth">Birth</label>
        <input type="text" class="form-control" id="birth" name="birth" placeholder="Birth"
        value="{{ isset($author->birth) ? $author->birth : '' }}" required>
        <div class="invalid-feedback"> Please enter birth date. </div>
    </div>

    <div class="form-group col-md-4">
        <label for="death">Death</label>
        <input type="text" class="form-control" id="death" name="death" placeholder="Death"
        value="{{ isset($author->death) ? $author->death : '' }}">
        <div class="form-check align-middle">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label align-middle" for="gridCheck">
                Not aplicable
            </label>
        </div>
    </div>
    
    <div class="form-group col-md-4">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="0">Select option</option>
            <option value="f">Female</option>
            <option value="m">Male</option>
            <option value="o">Other</option>
        </select>
        <div class="invalid-feedback"> Please select gender. </div>
    </div>
</div>

<div class="form-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="photo" name="photo">
        <label class="custom-file-label" for="photo">Photo | Choose file</label>
    </div>
</div>

<div class="form-group">
    <label for="biography">Short biography</label>
    <textarea class="form-control" id="biography" name="biography"
    rows="4">{{ isset($author->biography) ? $author->biography : '' }}</textarea>
</div>

@if(isset($author->photo))
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset($author->photo)}}" alt="Card image cap" width="150">
    <div class="card-body">
        <p class="card-text">{{$author->popularName}}</p>
    </div>
</div>
@endif