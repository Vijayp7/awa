<?= view('admin/header'); ?>
<!-- main navigation starts-->

<!-- main navigation ends here-->
<main>
  <div class="content-wrapper">
    <div class="content-wrapper-before bg-7"></div>
    <div class="content-header">
      <h2 class="text-capitalize">courses</h2>
      <div class="header-elements scStdntsListTabs">
        <ul class="nav nav-pills nav-stacked">
          <li>
            <div class="form-group selctbox-filter m-0">
              <select class="form-control" id="searchbranch" name="searchbranch">
                <option disabled="" selected="" class="text-capitalize">Sort by branch</option>
                <?php foreach ($branches as $branch) {
                ?>
                  <option class="text-capitalize" value="<?= $branch['id'] ?>"><?= $branch['name'] ?></option>
                <?php } ?>
              </select>
            </div>
          </li>
          <li class="text-right">
            <button class="btn btn-primary text-capitalize" data-toggle="modal" data-target="#add-courses">Add Courses</button>
          </li>
        </ul>
      </div>
    </div>
    <div class="content-body">
      <div class="card">
        <div class="card-header">
          <h3 class="text-capitalize">courses list</h3>
        </div>
        <div class="card-content">
          <div class="card-content">
            <table id="courseTable" class="table table-striped custom-table">
              <thead>
                <tr>
                  <th class="text-capitalize">S no</th>
                  <th class="text-capitalize">course name</th>
                  <th class="text-capitalize">Course short name</th>
                  <th class="text-capitalize">Total classes</th>
                  <th class="text-capitalize">modules</th>
                  <th class="text-capitalize">branches</th>
                  <th class="text-capitalize">Action</th>
                </tr>
              </thead>

              <?php
              $i = 1;
              // var_dump($courses);
              foreach ($courses as $course) { ?>
                <tbody>
                  <?php if ($course['status'] == '0') { ?>
                    <tr>
                    <?php } else { ?>
                    <tr style="background-color: skyblue;">
                    <?php } ?>
                    <td><?= $i ?></td>
                    <td><?= $course['name'] ?></td>
                    <td><?= $course['short_name'] ?></td>
                    <td><?= $course['classes'] ?></td>
                    <td>
                      <div style="max-width: 250px;">
                        <span class="badge badge-primary"><?= $course['module_name'] ?></span>
                      </div>
                    </td>
                    <td>
                      <span class="badge badge-success"><?= $course['branch_name'] ?></span>
                    </td>
                    <td>
                      <button class="btn btn-default text-capitalize edit" data-toggle="modal" data-target="#edit-courses" data-id="<?= $course['id'] ?>">Edit</button>
                      <?php if ($course['status'] == '0') { ?>
                        <button class="btn btn-sm btn-success text-capitalize" data-toggle='modal' type="button" data-target='#activeModal' data-id="<?= $course['id'] ?>" disabled>active</button>
                        <button class="btn btn-sm btn-danger text-capitalize" data-toggle='modal' type="button" data-target='#suspendModal' data-id="<?= $course['id'] ?>">Suspend</button>
                      <?php } else { ?>
                        <button class="btn btn-sm btn-success text-capitalize" data-toggle='modal' type="button" data-target='#activeModal' data-id="<?= $course['id'] ?>">activate</button>
                        <button class="btn btn-sm btn-danger text-capitalize" data-toggle='modal' type="button" data-target='#suspendModal' data-id="<?= $course['id'] ?>" disabled>Suspended</button>
                      <?php } ?>
                    </td>
                    </tr>
                    <tr>

                    </tr>
                </tbody>
              <?php
                $i++;
              } ?>
            </table>
          </div>
        </div>
      </div>
      <div class="text-right">
        <nav aria-label="Page navigation example">
          <ul class="pagination m-0">
          </ul>
        </nav>
      </div>
    </div>
  </div>
</main>
</div>


<div id="suspendModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center text-info">Are you sure to suspend the course</h3>
      </div>
      <div class="modal-footer text-center">
        <button type="submit" class="btn btn-default text-capitalize text-capitalize" data-dismiss="modal">cancel</button>
        <button type="submit" class="btn btn-primary text-capitalize text-capitalize btn-suspend">Suspend</button>
      </div>
    </div>
  </div>
</div>

<!-- active modal -->
<!-- confirmation modal -->
<div id="activeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center text-info">Are you sure to activate the course</h3>
      </div>
      <div class="modal-footer text-center">
        <button type="submit" class="btn btn-default text-capitalize text-capitalize" data-dismiss="modal">cancel</button>
        <button type="button" class="btn btn-primary text-capitalize btn-activate">Activate</button>
      </div>
    </div>
  </div>
</div>



<div id="add-courses" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Courses</h4>
      </div>
      <div class="modal-body">
        <form id="courseForm" method="post">
          <div class="row">
            <div class="col-md-12 options" id="branches">
              <div class="form-group">
                <label class="text-capitalize">Select branches</label>
                <?php foreach ($branches as $branch) {
                ?>
                  <div class="branches-check">
                    <div class="customradio">
                      <input type="checkbox" name="branch[]" id="branch" value="<?= $branch['id'] ?>">
                      <span class="text-uppercase"><?= $branch['name'] ?></span>
                    </div>
                  <?php } ?>

                  </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Course name</label>
                <input class="form-control" type="text" name="name" id="name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Course short name</label>
                <input class="form-control" type="text" name="shrt_course">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">total clasess</label>
                <input class="form-control" type="text" value="" name="class" id="class">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="" class="text-capitalize">upload course image</label>
                <div class="file-upload">
                  <div class="file-select">
                    <div class="file-select-button" id="fileName">Choose File</div>
                    <div class="file-select-name" id="noFile">No file chosen...</div>
                    <input type="file" name="chooseFile" id="chooseFile">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 module-wrapper">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <select name="module[]" id="module" class="form-control">
                      <option value="" disabled selected>select module</option>
                      <?php foreach ($modules as $module) { ?>
                        <option value="<?= $module['id'] ?>"><?= $module['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="number" placeholder="order" name="order" id="order" class="form-control">
                </div>
                <div class="col-sm-4">
                  <button type="button" id="addMore" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="edit-courses" class="modal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Courses</h4>
      </div>
      <div class="modal-body">
        <form id="ecourseForm" method="post">
          <div class="row">
            <div class="col-md-12 options" id="branches">
              <div class="form-group">
                <label class="text-capitalize">Select branches</label>
                <?php foreach ($branches as $branch) {
                ?>
                  <div class="branches-check">
                    <div class="customradio">
                      <input type="checkbox" name="ebranch[]" id="ebranch" value="<?= $branch['id'] ?>">
                      <span class="text-uppercase"><?= $branch['name'] ?></span>
                    </div>
                  <?php } ?>

                  </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Course name</label>
                <input class="form-control" type="text" name="ename" id="ename">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Course short name</label>
                <input class="form-control" type="text" name="shrt_course" id="shrt_course">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">total clasess</label>
                <input class="form-control" type="text" value="" name="eclass" id="eclass">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="" class="text-capitalize">upload course image</label>
                <div class="file-upload">
                  <div class="file-select">
                    <div class="file-select-button" id="fileName">Choose File</div>
                    <div class="file-select-name" id="noFile">No file chosen...</div>
                    <input type="file" name="chooseFile" id="chooseFile">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 module-wrapper">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <select name="emodule[]" id="emodule" class="form-control">
                      <option value="" disabled selected>select module</option>
                      <?php foreach ($modules as $module) { ?>
                        <option value="<?= $module['id'] ?>"><?= $module['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <input type="number" placeholder="order" name="eorder" id="eorder" class="form-control">
                </div>
                <div class="col-sm-4">
                  <button type="button" id="addMore" class="btn btn-success btn-sm">
                    <i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- js includes -->
<!-- jquery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<!-- Latest bootstrap compiled JavaScript -->
<script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src='<?= base_url() ?>public/assets/js/main.js'></script>
<script>
  // add more topics
  $("#addMore").click(function(e) {
    $(".module-wrapper").append('<div class="row addedModule"> <div class="col-sm-4"><div class="form-group"><select name="module[]" id="module" class="form-control"><option value="" disabled selected>select module</option><?php foreach ($modules as $module) { ?><option value="<?= $module['id'] ?>"><?= $module['name'] ?></option><?php } ?></select></div></div></div>');
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
  $(document).ready(function() {
    $('.edit').on('click', function() {
      var ID = $(this).data('id');
      // console.log(branchID);
      $.ajax({
        dataType: 'json',
        type: 'GET',
        url: '<?= base_url() ?>getCourseDetails/',
        data: {
          id: ID,
        },
        success: function(response) {
          var course = response.course;
          console.log(course)
          $('#ebranch').val(course[0].branch);
          $('#ename').val(course[0].name);
          $('#shrt_course').val(course[0].short_name);
          $('#eclass').val(course[0].classes);
          $('#eorder').val(course[0].module_order);
          $('#emodule').val(course[0].modules);
        },
        error: function(xhr, status, error) {
          console.error(error);
        },
      });
    });
  });
</script>

<script>
  $('#courseForm').validate({
    rules: {

      name: {
        required: true,
        // lettersonly: true,
      },
      class: {
        required: true,

      },

      'module[]': {
        required: true,

      },
      'branch[]': {
        required: true,


      }
    },
    messages: {
      name: "Please enter course name",
      'branch[]': {
        required: "Please select branch",
      },
      class: {
        required: "Please enter classes",

      },
      'module[]': {
        required: "Please select module",
      }

    },
    submitHandler: function(form) {
      var form = $('#courseForm');
      var formData = form.serialize();
      $.ajax({
        type: 'POST',
        dataType: 'json',
        url: '<?= base_url() ?>admin/add-course',
        data: formData,
        success: function(response) {
          console.log(response.status);
          if (response.status == true) {
            alert('Course added successfully');
            window.location.href = '<?= base_url() ?>admin/course';
          } else {
            alert('Course not added');
            location.reload();
          }
        }
      });
    }
  });
</script>


<script>
  $(document).ready(function() {
    $('.btn-success').click(function() {
      var ID = $(this).data('id');
      var modal = $(this).data('target');
      var status = '0';
      $(modal).find('.btn-activate').off('click').on('click', function() {
        $.ajax({
          dataType: 'json',
          type: 'GET',
          url: '<?= base_url() ?>updateCourseStatus/',
          data: {
            ID: ID,
            status: status

          },
          success: function(response) {
            console.log(response);
            if (response.status == true) {
              alert('Course activated successfully');
              window.location.href = '<?= base_url() ?>admin/course';
            } else {
              alert('Course not activated');
              location.reload();
            }
          },
          error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
            console.log('Server Response:', xhr.responseText);
          }
        });
      });
    });
  });
</script>



<script>
  $(document).ready(function() {
    $('.btn-danger').click(function() {
      var ID = $(this).data('id');
      var modal = $(this).data('target');
      var status = '1';
      $(modal).find('.btn-suspend').off('click').on('click', function() {
        $.ajax({
          dataType: 'json',
          type: 'GET',
          url: '<?= base_url() ?>updateCourseStatus/',
          data: {
            ID: ID,
            status: status
          },
          success: function(response) {
            console.log(response);
            if (response.status == true) {
              alert('Course suspended successfully');
              window.location.href = '<?= base_url() ?>admin/course';
            } else {
              alert('Course not suspended');
              location.reload();
            }
          },
          error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
            console.log('Server Response:', xhr.responseText);
          }
        });
      });
    });
  });
</script>


<script>
  $(document).ready(function() {
    $('#searchbranch').change(function() {
      var branch = $('#searchbranch').val();

      $.ajax({
        dataType: 'json',
        type: 'GET',
        url: '<?= base_url() ?>getCourseByBranch/',
        data: {
          branch: branch,
        },
        success: function(response) {
          console.log(response.status)
          if (response.status === true) {
            var courses = response.Course;
            $('#courseTable tbody').empty();
            var i = 1;
            courses.forEach(function(course) {
              var newRow = '<tr>' +
                '<td>' + i + '</td>' +
                '<td>' + course.name + '</td>' +
                '<td>' + course.short_name + '</td>' +
                '<td>' + course.classes + '</td>' +
                '<td>' +
                '<div style="max-width: 250px;">' +
                '<span class="badge badge-primary">' + course.module_name + '</span>' +
                '</div>' +
                '</td>' +
                '<td>' +
                '<span class="badge badge-success">' + course.branch_name + '</span>' +
                '</td>' +
                '<td>' +
                '<button class="btn btn-default text-capitalize edit" data-toggle="modal" data-target="#edit-courses" data-id="' + course.id + '">Edit</button>' +
                '<button class="btn btn-sm btn-success text-capitalize" data-toggle="modal" type="button" data-target="#activeModal" data-id="' + course.id + '">active</button>' +
                '<button class="btn btn-sm btn-danger text-capitalize" data-toggle="modal" type="button" data-target="#suspendModal" data-id="' + course.id + '">Suspend</button>' +
                '</td>' +
                '</tr>';

              $('#courseTable tbody').append(newRow);
              i++;
            });
          } else {
            $('#courseTable tbody').empty();
            $('#courseTable tbody').html('<tr><td colspan="7" class="text-center">No Courses Found</td></tr>');

          }
        },
        error: function(xhr, status, error) {
          console.error(error);
        },
      });
    });
  });
</script>


</body>

</html>