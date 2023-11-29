<?= view('admin/header'); ?>
<!-- main navigation ends here-->


  <main>
  <div class="content-wrapper">
    <div class="content-wrapper-before bg-7"></div>
    <div class="content-header">
      <h2 class="text-capitalize">Modules</h2>
    </div>
    <div class="content-body">
      <div class="card row top-bar-green">
        <div class="card-header">
          <h3 class="text-capitalize">Update module</h3>
        </div>
        <div class="card-body card2">
          <form method="post" id="editModule">
            <div class="row d-flex">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="text-capitalize">module name</label>
                  <input type="text" class="form-control" value='<?= $modules['name']; ?>' id="name" name="name">
                  <input type="hidden" class="form-control" value='<?= $modules['id']; ?>' id="id" name="id">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="">Cost</label>
                  <input type="number" class="form-control" value="<?= $modules['cost']; ?>" name="cost" id="cost">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="module_type" class="text-capitalize">Select module</label>
                  <select name="module_type" id="module_type" class="form-control text-capitalize">
                    <option selected>techincal</option>
                    <option>non-techincal</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <label for="" class="text-capitalize">Class time</label>
                    <div class="form-group">
                      <input class="form-control pull-left" style="width: 50%;border-radius: 0" type="time" name="time" id="time" placeholder="Hrs" value="<?= $modules['time']; ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="" class="text-capitalize">Class number</label>
                      <p class="text-bold"><?= $modules['total_classes']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 text-right">
                <button class="btn btn-info" type="submit">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div>
        <div class="card-header" style="border:none;">
          <h3 class="text-capitalize">added classes</h3>
        </div>
        <?php 
        $i=1;
        foreach ($classes as $class) {
        ?>
          <div class="card-body addedClasses">
            <div class="panel-group custom-acordin" id="clasAprvlActdn">
              <div class="existedClasswrapper">
                <div class="panel panel-default class_wrapper">
                  <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#clasAprvlActdn" href="#module9" aria-expanded="false">
                    <h4 class="panel-title text-capitalize"><?= $i?>.class</h4>
                  </div>
                  <div id="module9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="card-content existClasses">
                      <div class="module_view">
                        <button type="button" data-id="<?= $class['module_id']; ?>" class="btn btn-sm btn-primary edit_module_btn"><i class="glyphicon glyphicon-pencil"></i></button>
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">topics</span>
                          </div>
                          <div class="col-md-8">
                            <ul class="list-items">
                              <?php
                              $topics = $class['topics'];
                              $topicList = explode(',', $topics);
                              foreach ($topicList as $topic) : ?>
                                <li><?= trim($topic); ?></li>
                              <?php endforeach; ?>

                            </ul>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">Faculty Reference</span>
                          </div>
                          <div class="col-md-8">
                            <strong><?= $class['faculty_reference']; ?></strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">Faculty Reference</span>
                          </div>
                          <div class="col-md-8">
                            <a href="<?= base_url() ?>public/uploads/<?= $class['teacher_file']; ?>" class="btn btn-info btn-sm" download>Download file</a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">Student material</span>
                          </div>
                          <div class="col-md-8">
                            <a href="<?= base_url() ?>public/uploads/<?= $class['material']; ?>"" download=" file" class="btn btn-info btn-sm">Download file</a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">Practicles</span>
                          </div>
                          <div class="col-md-8">
                            <a href="<?= base_url() ?>public/uploads/<?= $class['practicles']; ?>"" download=" file" class="btn btn-info btn-sm">Download file</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card row top-bar-info edit_module">
                  <div class="card-header">
                    <h3 class="text-capitalize">update Class</h3>
                  </div>
                  <div class="card-body card2">
                    <form method="post" id="editcls">
                      <div class="row d-flex">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="" class="text-capitalize">class number</label>
                                <input type="number" class="form-control" name="number" id="number">
                                <input type="hidden" class="form-control" name="id" id="id">

                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Add Topics</label>
                            <div class="input-group">
                              <input type="text" class="form-control" name="topics[]" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
                              <div class="input-group-btn">
                                <button class="btn btn-info" type="submit">
                                  Add Topic
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <label for="" class="text-capitalize">faculty reference</label>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <textarea name="fac_refer" id="fac_refer" rows="2" class="form-control"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <!-- file upload -->
                                <div class="file-upload">
                                  <div class="file-select">
                                    <div class="file-select-button" id="fileName">Choose File</div>
                                    <div class="file-select-name" id="noFile">No file chosen...</div>
                                    <input type="file" name="teacher_file" id="chooseFile">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="" class="text-capitalize">Student material</label>
                            <div class="file-upload">
                              <div class="file-select">
                                <div class="file-select-button" id="fileName">Choose File</div>
                                <div class="file-select-name" id="noFile">No file chosen...</div>
                                <input type="file" name="material" id="chooseFile2">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="" class="text-capitalize">practicles</label>
                            <div class="file-upload">
                              <div class="file-select">
                                <div class="file-select-button" id="fileName">Choose File</div>
                                <div class="file-select-name" id="noFile">No file chosen...</div>
                                <input type="file" name="practicles" id="chooseFile3">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <button type="button" class="btn btn-default cancelUpdate">Cancel</button>
                            <button type="submit" class="btn btn-info">Update class</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        <?php
      $i++;
      } ?>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <a href="<?= base_url() ?>admin/add_cls/" class="btn btn-primary text-capitalize add_class"><i class="glyphicon glyphicon-plus" style="color: #fff;"></i>&nbsp;Add Class</a>
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
  $(".add_class").click(function(e) {
    $(".classes_list").append('<div class="card row top-bar-info"> <div class="card-header"> <h3 class="text-capitalize">class-2</h3> </div><div class="card-body card2"> <form action=""> <div class="row d-flex"> <div class="col-md-12"> <div class="row"> <div class="col-md-6"> <div class="form-group"> <label for="" class="text-capitalize">class number</label> <input type="number" class="form-control" value="2"> </div></div></div></div><div class="col-md-6"> <div class="form-group"> <label for="">Add Topics</label> <div class="input-group"> <input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status"> <div class="input-group-btn"> <button class="btn btn-info" type="submit"> Add Topic </button> </div></div></div></div><div class="col-md-12"> <label for="" class="text-capitalize">faculty reference</label> <div class="row"> <div class="col-md-6"> <div class="form-group"> <textarea name="" id="" rows="2" class="form-control"></textarea> </div></div><div class="col-md-6"> <div class="form-group"> <div class="file-upload"> <div class="file-select"> <div class="file-select-button" id="fileName">Choose File</div><div class="file-select-name" id="noFile">No file chosen...</div><input type="file" name="chooseFile" id="chooseFile"> </div></div></div></div></div></div><div class="col-md-6"> <div class="form-group"> <label for="" class="text-capitalize">Student material</label> <div class="file-upload"> <div class="file-select"> <div class="file-select-button" id="fileName">Choose File</div><div class="file-select-name" id="noFile">No file chosen...</div><input type="file" name="chooseFile" id="chooseFile"> </div></div></div></div><div class="col-md-6"> <div class="form-group"> <label for="" class="text-capitalize">practicles</label> <div class="file-upload"> <div class="file-select"> <div class="file-select-button" id="fileName">Choose File</div><div class="file-select-name" id="noFile">No file chosen...</div><input type="file" name="chooseFile" id="chooseFile3"> </div></div></div></div></div></form> </div></div>');
  });

  $(document).on("click", ".remove_module", function(e) {
    e.preventdefault;
    $(this).parents('.addedModule').remove();
  });

  $("#addMore").click(function(e) {
    $(".module-wrapper").append('<div class="row addedModule"><div class=col-sm-11><div class=form-group><input type=text class=form-control name="topics[]" id=inputGroupSuccess4 aria-describedby=inputGroupSuccess4Status></div></div><div class=col-sm-1><button type=button class="btn btn-danger btn-sm remove_module"><i class="fa fa-trash"></i> Remove</button></button></div></div>');
  });

  $(document).on("click", ".remove_module", function(e) {
    e.preventdefault;
    $(this).parents('.addedModule').remove();
  });
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


  $('.edit_module').hide();
  $('.edit_module_btn').click(function() {
    var ID = $(this).data('id');
    localStorage.setItem('module_id', ID);
    // console.log(ID)
    $(this).parents('.existedClasswrapper').find('.edit_module').show();
    $(this).parents('.existedClasswrapper').find('.class_wrapper').hide();
    $.ajax({
      dataType: 'json',
      type: 'GET',
      url: '<?= base_url() ?>getModuleCls/',
      data: {
        id: ID,
      },
      success: function(response) {
        var module = response.Module;
        console.log(module);
        $('#id').val(module.id);
        $('#number').val(module.class_no);
        $('#inputGroupSuccess4').val(module.topics);
        $('#fac_refer').val(module.faculty_reference);
        // $('#chooseFile2').val(module.material);
        // $('#chooseFile3').val(module.practicles);
        // $('#chooseFile').val(module.teacher_file);


      },
      error: function(xhr, status, error) {
        console.error(error);
      },
    });

  })
  $('.cancelUpdate').click(function() {
    $(this).parents('.existedClasswrapper').find('.edit_module').hide();
    $(this).parents('.existedClasswrapper').find('.class_wrapper').show();
    $(this).parents('.existedClasswrapper').find('.panel-collapse').removeClass('in');
    $(this).parents('.existedClasswrapper').find('.accordion-toggle').attr("aria-expanded", "false");;
  })
</script>

<script>
  $('#editModule').validate({
    rules: {
      number: {
        required: true,
        minlength: 1,
        maxlength: 15,
      },

      'topics[]': {
        required: true,
      },


    },
    messages: {
      number: "Please enter cost",
    },
    submitHandler: function(form) {
      var form = $('#editModule');
      var formData = form.serialize();
      var module = localStorage.getItem('module_id');
      formData += '&module_id=' + module;

      console.log(module)
      $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '<?= base_url() ?>updateModule',
        data: formData,
        success: function(response) {
          console.log(response);
          if (response.status == true) {
            // alert('module updated successfully');
            window.location.href = '<?= base_url() ?>admin/edit-module/' + module;
            // $('.add_class').show();
            // $('.create').hide();
            // $('input, select').prop('disabled', true);

          } else {
            alert('class not added');
            // $('.add_class').hide();
            // $('.create').show();
            // $('input').attr("readonly", "");

            // location.reload();
          }
        }
      });
    }
  });
</script>

</script>

<script>
  $('.edit_module_btn').click(function() {
    var ID = $(this).data('id');

    $('#editcls').submit(function(e) {
      e.preventDefault();
      var cid = $('#id').val();
      console.log(cid);
      var form = $(this);
      var fd = form.serialize() + '&module_id=' + ID;
      var formData = fd + '&id=' + cid;
      console.log(formData)
      var url = "<?php echo base_url('updateModuleCls'); ?>";
      $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        dataType: 'json',
        success: function(response) {
          console.log(response);
          if (response.status === true) {
            // alert('submitted successfully');
            location.reload();
          } else {
            console.log('Failed');
            location.reload();

          }
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
        }
      });
    });
  });
</script>


<script>
  $(document).ready(function() {
    $('#newcls').validate({
      rules: {
        number: {
          required: true,
          minlength: 1,
          maxlength: 15,
        },
        teacherMaterial: {
          required: true,
          extension: "pdf|jpeg",
          filesize: 5242880
        },
        studentMaterial: {
          required: true,
          extension: "pdf|jpeg",
          filesize: 5242880
        },
        practicles: {
          required: true,
          extension: "pdf|jpeg",
          filesize: 5242880
        },
        'topics[]': {
          required: true,
        },
      },
      messages: {
        number: "Please enter a number",
        'topics[]': "Please add topics",
      },
      submitHandler: function(form) {
        var formData = new FormData(form);
        formData.append("teacherMaterial", $('#chooseFile')[0].files[0]);
        formData.append("studentMaterial", $('#chooseFile2')[0].files[0]);
        formData.append("practicals", $('#chooseFile3')[0].files[0]);
        var module = localStorage.getItem('module_id');
        formData.append("module_id", module);
        console.log(formData)
        $.ajax({
          type: 'POST',
          url: '<?= base_url() ?>addModuleCls',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            console.log(response);
            if (response.status == true) {
              alert('Class added successfully');
              window.location.href = '<?= base_url() ?>admin/edit-module/' + module;
              location.reload();
            } else {
              alert('Class not added');
            }
          }
        });
      }
    });
  });
</script>



</body>

</html>