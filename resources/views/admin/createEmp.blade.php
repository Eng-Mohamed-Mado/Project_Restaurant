@extends('admin.shared.shared')

{{-- Title Page --}}
@section('title')
    Create Employees
@endsection

{{-- Style Css --}}
@section('style')
<link href="{{ asset( 'assetsAdmin') }}/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet" type="text/css"/>

@endsection

{{-- Content --}}
@section('content')
<div class="content-body">
    <div class="col-xl-12 col-xxl-12">
      <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form step</h4>
        </div>
      </div>
      <form class="my-3 bg-white" tabindex="-1" aria-labelledby="exampleModalLabel">
          <div>
              <div class="modal-content popupWindow">
  
                  <div class="modal-body row">
                      <div class="col-9 mb-3">
                          <div class="input-group mb-2">
                              <input type="text" class="form-control" name="name" id="name" placeholder=" Name" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-2">
                            <input type="text" class="form-control" name="name" id="name" placeholder=" Job Name" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-2">
                            <input type="email" class="form-control" name="name" id="name" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-2">
                            <input type="text" class="form-control" name="name" id="name" placeholder="phone" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                          <div class="input-group mb-2">
                            <input type="text" class="form-control" name="name" id="name" placeholder="phone" aria-label="Username" aria-describedby="basic-addon1">
                          </div>

                          <div class="input-group mb-2">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
  
                          <div class="input-group mb-2 justify-content-end">
                              <input type="number" class="form-control" placeholder="Salary" id="amount" name="amount" step="any" aria-label="Dollar amount (with dot and two decimal places)">
                              <span class="text-warning position-absolute my-1 mx-2">EGP</span>
                          </div>
                          <div class="input-group mb-2 justify-content-end">
                              <input type="number" class="form-control" placeholder="Years of Experience" id="amount" name="amount" step="any" aria-label="Number amount (with dot and two decimal places)">
                              <span class="text-warning position-absolute my-1 mx-2">Years</span>
                          </div>
  
                          <div class="input-group mb-2">
                              <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Age" aria-describedby="addon-wrapping">
                              {{-- <span class="text-dark position-absolute my-1 mx-2">Age</span> --}}
                          </div>
                      </div>
  
                      {{-- Upload  --}}
                      <div class="col-3">
                          <div class="input-group uploadImg">
                              <span class="minImg">
                                  <label for="file-upload11" class="custom-upload-button">Upload Image</label>
                                  <img src="" alt="">
                                  <div class="delete-button">delete</div>
                                  <input type="file" id="file-upload11" name="image1" class="file-upload"  >
                              </span>
  
                          </div>
                      </div>
  
                      <div class="modal-footer justify-content-between">
                          <button type="submit" class="btn btnPrimary" id="">Save changes</button>
                      </div>
              </div>
          </div>
      </form>
    </div>
  </div>
@endsection
{{-- Scripting js --}}
@section('scripts')

<script src="{{ asset( 'assetsAdmin') }}/vendor/jquery-steps/build/jquery.steps.min.html" type="text/javascript"></script>
<script src="{{ asset( 'assetsAdmin') }}/vendor/jquery-validation/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{ asset( 'assetsAdmin') }}/js/plugins-init/jquery.validate-init.js" type="text/javascript"></script>
<script src="{{ asset( 'assetsAdmin') }}/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js" type="text/javascript"></script>
<script>
    // ============================== upload images2 ==============================
    $(document).ready(function() {
    $('.file-upload').change(function() {
        var file = this.files[0];
        var reader = new FileReader();
        var minImg = $(this).closest('.minImg');

        reader.onload = function() {
            var img = minImg.find('img');
            img.attr('src', reader.result);
            img.css('display', 'block');
            minImg.find('.delete-button').css('display', 'flex');
        };

        reader.readAsDataURL(file);
    });

    $('.delete-button').click(function() {
        var minImg = $(this).closest('.minImg');
        var img = minImg.find('img');
        img.attr('src', '');
        img.css('display', 'none');
        var input = minImg.find('.file-upload');
        input.val('');
        $(this).css('display', 'none');
    });
});
</script>
@endsection
