<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName">
        </div>
        <div class="form-group col-md-6">
            <label for="inputSurname">Surname</label>
            <input type="text" class="form-control" id="inputSurname">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPhone">Telephone number</label>
            <input type="text" class="form-control" id="inputPhone" >
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-10">
            <label for="inputStreet">Street</label>
            <input type="text" class="form-control" id="inputStreet">
        </div>
        <div class="form-group col-md-2">
            <label for="inputHouseNumber">House number</label>
            <input type="text" class="form-control" id="inputHouseNumber">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputProvince">Province</label>
            <select id="inputProvince" class="form-control">
                <option selected>Select</option>
                <option>Province 1</option>
                <option>Province 2</option>
                <option>Province 3</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-primary">Reset</button>
</form>