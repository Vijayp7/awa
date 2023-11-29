<?= view('admin/header'); ?>
<main>
  <div class="content-wrapper">
    <div class="content-wrapper-before bg-7"></div>
    <div class="content-header">
      <h2 class="text-capitalize">Modules</h2>
    </div>
    <div class="content-body">
      <div class="card row top-bar-green">
        <div class="card-header">
          <h3 class="text-capitalize">Create module</h3>
        </div>
        <div class="card-body card2">
          <form method="post" id="moduleForm">
            <div class="m-tb-30-mb-8 pull-right" ">
              <button class=" btn btn-primary text-capitalize create" type="submit">Create Module</button>
            </div>
            <div class="row d-flex">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="text-capitalize">module name</label>
                  <input type="text" class="form-control" name="name" id="name" value="<?= set_value('name'); ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Cost</label>
                  <input type="number" class="form-control" name="cost" id="cost" value="<?= set_value('cost'); ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="text-capitalize">Select module</label>
                  <select name="module_type" id="module_type" class="form-control text-capitalize">
                    <option value="" disabled selected>Select module type</option>
                    <option>techincal</option>
                    <option>non-techincal</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <label for="" class="text-capitalize">Class duration</label>
                    <div class="form-group">
                      <input class="form-control pull-left" placeholder="Hrs" type="time" name="time" id="time" value="<?= set_value('time'); ?>">
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="text-capitalize">Class number</label>
                      <p class="text-bold"></p>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </form>
          <div class="m-tb-30 pull-right">
            <a href="<?= base_url()?>admin/add_cls/"   class="btn btn-primary text-capitalize add_class"><i class="glyphicon glyphicon-plus" style="color: #fff;"></i>&nbsp;Add Class</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</main>
</div>


<!-- js includes -->
<!-- jquery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<!-- Latest bootstrap compiled JavaScript -->
<script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src='<?= base_url() ?>public/assets/js/main.js'></script>
<script>
  $(".add_classes").click(function(e) {
    $(".classes_list").append('<div class="card row top-bar-info"> <div class="card-header"> <h3 class="text-capitalize">class-2</h3> </div><div class="card-body card2"><div class="row d-flex"> <div class="col-md-12"> <div class="row"> <div class="col-md-6"> <div class="form-group"> <label for="number" class="text-capitalize">class number</label> <input type="number" class="form-control" id="number" name="number"> </div></div></div></div><div class="col-md-6"> <div class="form-group"> <label for="inputGroupSuccess4">Add Topics</label> <div class="input-group"> <input type="text" class="form-control" id="inputGroupSuccess4" name="topics[]" aria-describedby="inputGroupSuccess4Status"> <div class="input-group-btn"> <button class="btn btn-info topic" type="submit"> Add Topic </button> </div></div></div></div><div class="col-md-12"> <label for="" class="text-capitalize">faculty reference</label> <div class="row"> <div class="col-md-6"> <div class="form-group"> <textarea name="" id="" rows="2" class="form-control"></textarea> </div></div><div class="col-md-6"> <div class="form-group"> <div class="file-upload"> <div class="file-select"> <div class="file-select-button" id="fileName">Choose File</div><div class="file-select-name" id="noFile">No file chosen...</div><input type="file" name="chooseFile" id="chooseFile"> </div></div></div></div></div></div><div class="col-md-6"> <div class="form-group"> <label for="" class="text-capitalize">Student material</label> <div class="file-upload"> <div class="file-select"> <div class="file-select-button" id="fileName">Choose File</div><div class="file-select-name" id="noFile">No file chosen...</div><input type="file" name="chooseFile" id="chooseFile"> </div></div></div></div><div class="col-md-6"> <div class="form-group"> <label for="" class="text-capitalize">practicles</label> <div class="file-upload"> <div class="file-select"> <div class="file-select-button" id="fileName">Choose File</div><div class="file-select-name" id="noFile">No file chosen...</div><input type="file" name="chooseFile" id="chooseFile3"> </div></div></div></div></div></div></div>');
  });


  $(document).on("click", ".remove_class", function(e) {
    e.preventdefault;
    $(this).parents('.classes_list').remove();
  });

  $(document).on("click", ".remove_module", function(e) {
    e.preventdefault;
    $(this).parents('.addedModule').remove();
  });


  // custom file upload
  $('#chooseFile').bind('change', function() {
    var filename = $("#chooseFile").val();
    if (/^\s*$/.test(filename)) {
      $(".file-upload").removeClass('active');
      $("#noFile").text("No file chosen...");
    } else {
      $(".file-upload").addClass('active');
      $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
    }
  });
</script>
<script>
  $("#addMore").click(function(e) {
    //Append a new row of code to the "#items" div
    $(".module-wrapper").append('<div class="row addedModule"><div class=col-sm-11><div class=form-group><input type=text class=form-control id=inputGroupSuccess4 aria-describedby=inputGroupSuccess4Status></div></div><div class=col-sm-1><button type=button class="btn btn-danger btn-sm remove_module"><i class="fa fa-trash"></i> Remove</button></button></div></div>');
  });

  $(document).on("click", ".remove_module", function(e) {
    e.preventdefault;
    $(this).parents('.addedModule').remove();
  });
</script>




<script>
  $('.classes_list').hide();
  $('.submit').hide();
  $('.add_classes').hide();
  $('.add_class').click(function() {
    $('.add_class').hide();
    $('.classes_list').show();
    $('.add_classes').show();
    $('.submit').show();
  });
</script>
<script>
            $('.add_class').hide();

  $('#moduleForm').validate({
    rules: {
      name: {
        required: true,
        minlength: 1,
        maxlength: 15,
      },

      cost: {
        required: true,
      },
      module_type: {
        required: true,
      },
      time: {
        required: true,

      },


    },
    messages: {
      name: "Please enter module name",
      cost: {
        required: "Please enter cost",
      },
      module_type: {
        required: "Please select module type",
      },
      time: {
        required: "Please enter time",
      },
      role: {
        required: "Please select role",
      },

    },
    submitHandler: function(form) {
      var form = $('#moduleForm');
      var formData = form.serialize();
      console.log(formData)
      $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '<?= base_url() ?>addModule',
        data: formData,
        success: function(response) {
          console.log(response);
          if (response.status == true) {
            // alert('module added successfully');
            // window.location.href = '<?= base_url() ?>admin/module-view/'+response.Module;
            localStorage.setItem('module_id', response.Module);
            $('.add_class').show();
            $('.create').hide();
            $('#moduleForm :input,select').prop('readonly', true);
            $('#moduleForm:input').prop('disabled', true);

          } else {
            alert('module not added');
            $('.add_class').hide();
            $('.create').show();
            $('input').attr("readonly", "");

            location.reload();
          }
        }
      });
    }
  });
</script>
</body>

</html>