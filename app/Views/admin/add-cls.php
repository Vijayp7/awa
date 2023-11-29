<?= view('admin/header'); ?>
<main>
  <div class="content-wrapper">
    <div class="content-wrapper-before bg-7"></div>
    <div class="content-header">
      <h2 class="text-capitalize">Modules</h2>
    </div>
    <div class="content-body">
      <div class="classes_list">
        <div class="card row top-bar-info">
          <div class="card-header">
            <h3 class="text-capitalize">class</h3>
          </div>
          <div class="card-body card2">
            <form method="post" id="clsForm" enctype="multipart/form-data">
              <div class="row d-flex">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="" class="text-capitalize">class number</label>
                        <input type="number" class="form-control" name="number" id="number">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Add Topics</label>
                    <div class="module-wrapper">
                      <div class="row">
                        <div class="col-sm-11">
                          <div class="form-group">
                            <input type="text" class="form-control" id="inputGroupSuccess4" name="topics[]" aria-describedby="inputGroupSuccess4Status">
                          </div>
                        </div>
                        <div class="col-sm-1">
                          <button type="button" id="addMore" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i>Add Topics
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <label for="" class="text-capitalize">faculty reference</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea name="" id="" rows="2" class="form-control" name="fac_refer" id="fac_refer"></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <!-- file upload -->
                      <div class="file-upload">
                        <div class="file-select">
                          <div class="file-select-button" id="fileName">Choose File</div>
                          <div class="file-select-name" id="noFile">No file chosen...</div>
                          <input type="file" name="teacherMaterial" id="chooseFile" accept="image/jpeg,application/pdf">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="chooseFile2" class="text-capitalize">Student material</label>
                  <div class="file-upload">
                    <div class="file-select">
                      <div class="file-select-button" id="fileName2">Choose File</div>
                      <div class="file-select-name" id="noFile2">No file chosen...</div>
                      <input type="file" name="studentMaterial" id="chooseFile2" accept="image/jpeg,application/pdf">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="chooseFile3" class="text-capitalize">practicles</label>
                  <div class="file-upload">
                    <div class="file-select">
                      <div class="file-select-button" id="fileName3">Choose File</div>
                      <div class="file-select-name" id="noFile3">No file chosen...</div>
                      <input type="file" name="practicals" id="chooseFile3" accept="image/jpeg,application/pdf">
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="m-tb-30">
            <button type="submit" class="btn btn-primary text-capitalize add_classes"><i class="glyphicon glyphicon-plus" style="color: #fff;"></i>&nbsp;Add Class</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js"></script>
    <!-- Latest bootstrap compiled JavaScript -->
    <script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src='<?= base_url() ?>public/assets/js/main.js'></script>

    <script>
      $("#addMore").click(function(e) {
        $(".module-wrapper").append('<div class="row addedModule"><div class=col-sm-11><div class=form-group><input type=text class=form-control name="topics[]" id=inputGroupSuccess4 aria-describedby=inputGroupSuccess4Status></div></div><div class=col-sm-1><button type=button class="btn btn-danger btn-sm remove_module"><i class="fa fa-trash"></i> Remove</button></button></div></div>');
      });

      $(document).on("click", ".remove_module", function(e) {
        e.preventdefault;
        $(this).parents('.addedModule').remove();
      });
    </script>




    <script>
      $(document).ready(function() {
        $('#clsForm').validate({
          rules: {
            number: {
              required: true,
              minlength: 1,
              maxlength: 15
            },
            teacherMaterial: {
              required: true,
              extension: "pdf|jpeg"
            },
            studentMaterial: {
              required: true,
              extension: "pdf|jpeg"
            },
            practicals: {
              required: true,
              extension: "pdf|jpeg"
            },
            'topics[]': {
              required: true
            }
          },
          messages: {
            number: "Please enter a number",
            'topics[]': "Please add topics"
          },
          submitHandler: function(form, event) {
            event.preventDefault();
            // var form = $('#clsForm');
            var formData = new FormData(form);
            // formData.append("teacherMaterial", $('#chooseFile')[0].files[0]);
            // formData.append("studentMaterial", $('#chooseFile2')[0].files[0]);
            // formData.append("practicals", $('#chooseFile3')[0].files[0]);
            var module = localStorage.getItem('module_id');
            formData.append("module_id", module);
            console.log(formData)

            $.ajax({
              type: 'POST',
              url: '<?= base_url() ?>addModuleCls',
              data: formData,
              // enctype: 'multipart/form-data',
              processData: false,
              contentType: false,
              success: function(response) {
                console.log(response);
                if (response.status === true) {
                  alert('Class added successfully');
                  window.location.href = '<?= base_url() ?>admin/modules';
                } else {
                  alert('Class not added');
                }
              },
              error: function(xhr, status, error) {
                console.log("AJAX Error:", error);
              }
            });
          }
        });
      });
    </script>