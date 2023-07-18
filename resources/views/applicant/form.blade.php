  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label id="name-label" for="name">Name</label>
        <input type="text" name="name"class="form-control @error('name') is-invalid @enderror" value="{{old('name', $drug->name)}}" required="required" placeholder="Enter the entity name">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label id="manufacturer-label" for="manufacturer">Manufacturer</label>
        <input type="text" name="manufacturer" id="manufacturer" placeholder="Enter manufacturer name" class="form-control @error('manufacturer') is-invalid @enderror" required value="{{old('manufacturer', $drug->manufacturer)}}">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label id="dose_form" for="dose_form">Dose Form</label>
        <select id="dropdown" name="dose_form" class="form-control  @error('dose_form') is-invalid @enderror" required>
          <option disabled selected value>Select Dosage Form</option>
          <option value="liquid"  {{ $drug->dose_form == old('dose_form', 'liquid') ?  'selected' : ''}}>Liquid</option>
          <option value="tablet" {{ $drug->dose_form == old('dose_form', 'tablet') ?  'selected' : ''}}>Tablet</option>
        </select>
      </div>
    </div>

  </div>


  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label>Ingredients</label>
        <textarea  id="ingredients" class="form-control  @error('ingredients') is-invalid @enderror" name="ingredients" placeholder="Enter entity Ingredients..." required="required">{{ old('ingredients', $drug->ingredients)}}</textarea>
      </div>
    </div>
  </div>
