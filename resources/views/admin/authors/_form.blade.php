<div class="form-row">
    <div class="form-group col-md-6">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"
        value="{{ isset($author->firstName) ? $author->firstName : '' }}">
    </div>

    <div class="form-group col-md-6">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name"
        value="{{ isset($author->lastName) ? $author->lastName : '' }}">
    </div>
</div>

<div class="form-group">
    <label for="popularName">Popular Name</label>
    <input type="text" class="form-control" id="popularName" name="popularName" placeholder="Popular Name"
    value="{{ isset($author->popularName) ? $author->popularName : '' }}">
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="birth">Birth</label>
        <input type="text" class="form-control" id="birth" name="birth" placeholder="Birth"
        value="{{ isset($author->birth) ? $author->birth : '' }}">
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
        <select class="form-control" id="gender" name="gender">
            <option value="0">Select option</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="other">Other</option>
        </select>
    </div>
</div>

<div class="form-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="photo">
        <label class="custom-file-label" for="photo">Photo | Choose file</label>
    </div>
</div>

<div class="form-group">
    <label for="biography">Short biography</label>
    <textarea class="form-control" id="biography" name="biography"
    rows="4">{{ isset($author->biography) ? $author->biography : '' }}</textarea>
</div>