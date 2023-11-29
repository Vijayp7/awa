<?= view('admin/header'); ?>
<!-- main navigation starts-->
<!-- main navigation ends here-->
<main>
  <div class="content-wrapper">
    <div class="content-wrapper-before bg-7"></div>
    <div class="content-header">
      <h2 class="text-capitalize">users</h2>
      <div class="header-elements">
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
          <li>
            <div class="form-group selctbox-filter m-0">
              <select class="form-control" name="searchrole" id="searchrole">
                <option value="" disabled="" selected="">sort by role</option>
                <option value="1">Admin</option>
                <option value="2">Manager</option>
                <option value="3">Counceller</option>
                <option value="4">Co-ordinator</option>
                <option value="5">Accountant</option>
                <option value="7">Faculty</option>
                <option value="8">Lab-Faculty</option>
                <option value="9">Recruiter</option>
                <option value="10">Aptitude trainer</option>
                <option value="11">Softskills trainer</option>
              </select>
            </div>
          </li>
          <li class="text-right">
            <button class="btn btn-primary text-capitalize add" data-toggle="modal" data-target="#add-employee">Add user</button>
          </li>

        </ul>
      </div>
    </div>
    <div class="content-body">
      <div class="card">
        <div class="card-header">
          <h3 class="text-capitalize">users list</h3>
        </div>
        <div class="card-content">
          <table class="table table-striped custom-table" id="employeeTable">
            <thead>
              <tr>
                <th class="text-capitalize">S no</th>
                <th class="text-capitalize">Employee id</th>
                <th class="text-capitalize">name</th>
                <th class="text-capitalize">Email id</th>
                <th class="text-capitalize">phone number</th>
                <th class="text-capitalize">Role</th>
                <th class="text-capitalize">branches</th>
                <th class="text-capitalize">skills</th>
                <th class="text-capitalize">Action</th>
              </tr>
            </thead>

            <?php
            $i = 1;
            if (!empty($employees)) {
              foreach ($employees as $employee) { ?>
                <tbody>
                  <?php if ($employee['status'] == '0') { ?>
                    <tr>
                    <?php } else { ?>
                    <tr style="background-color: skyblue;">
                    <?php } ?>
                    <td><?= $i; ?></td>
                    <td><?= $employee['emp_id']; ?></td>
                    <td><?= $employee['name']; ?></td>
                    <td><?= $employee['email']; ?></td>
                    <td><?= $employee['number']; ?></td>
                    <td><?= $roles['name']; ?></td>
                    <td>
                      <span class="badge badge-secondary d-block"><?= $assign_branch['name']; ?></span>
                      <span class="badge badge-secondary d-block"><?= $employee['skills']; ?></span>
                    </td>
                    <td>
                      <div style="max-width: 250px;">
                        <span class="badge badge-primary"></span>

                      </div>
                    </td>
                    <td>
                      <button class="btn btn-default text-capitalize edit" data-toggle="modal" data-target="#edit-employee" data-id="<?= $employee['id']; ?>">Edit</button>
                      <?php if ($employee['status'] == '0') { ?>
                        <button class="btn btn-sm btn-success text-capitalize" data-toggle='modal' type="button" data-target='#activeModal' data-id="<?= $employee['id']; ?>" disabled>Active</button>
                        <button class="btn btn-sm btn-danger text-capitalize suspend" data-toggle='modal' type="button" data-target='#suspendModal' data-id="<?= $employee['id']; ?>">Suspend</button>
                      <?php } else { ?>
                        <button class="btn btn-sm btn-success text-capitalize" data-toggle='modal' type="button" data-target='#activeModal' data-id="<?= $employee['id']; ?>">Activate</button>
                        <button class="btn btn-sm btn-danger text-capitalize suspend" data-toggle='modal' type="button" data-target='#suspendModal' data-id="<?= $employee['id']; ?>" disabled>Suspended</button>

                      <?php  } ?>

                    </td>
                    </tr>

                </tbody>
            <?php
                $i++;
              }
            } ?>
          </table>
        </div>
      </div>
      <div class="text-right">
        <nav aria-label="Page navigation example">
          <ul class="pagination m-0">
            <?= $pager_links ?>
          </ul>
        </nav>
      </div>

    </div>
  </div>
</main>
</div>

<!-- modals -->
<!-- confirmation modal -->
<div id="suspendModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center text-info">Are you sure to suspend the user</h3>
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
        <h3 class="text-center text-info">Are you sure to activate the user?</h3>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-default text-capitalize" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary text-capitalize btn-activate">Activate</button>
      </div>
    </div>
  </div>
</div>
<div id="add-employee" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add User</h4>
      </div>
      <div class="modal-body">
        <form method='post' id="addEmployee">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Employee Id</label>
                <input class="form-control" type="text" name="emp_id" id="emp_id">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Employee Name</label>
                <input class="form-control" type="text" name="name" id="name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">email id</label>
                <input class="form-control" type="email" name="email" id="email">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Password</label>
                <input class="form-control" type="password" name="password" id="password" autocomplete="on">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">phone number</label>
                <input class="form-control" type="number" name="mobile" id="mobile">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Select Role</label>
                <select class="form-control" name="role" id="role">
                  <option value="" disabled selected>select role</option>
                  <option value="2">Manager</option>
                  <option value="3">Counceller</option>
                  <option value="4">Co-ordinator</option>
                  <option value="5">Accountant</option>
                  <option value="7">Faculty</option>
                  <option value="8">Lab-Faculty</option>
                  <option value="9">Recruiter</option>
                  <option value="10">Aptitude trainer</option>
                  <option value="11">Softskills trainer</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 options">
              <div class="form-group">
                <label class="text-capitalize">Select Skills</label>
                <div class="branches-check">
                  <div class="customradio">
                    <input type="checkbox" id="html" name='skills[]'>
                    <span class="text-uppercase" value="html">html</span>
                  </div>
                  <div class="customradio">
                    <input type="checkbox" id="css" name='skills[]'>
                    <span class="text-uppercase" value="css">css</span>
                  </div>
                  <div class="customradio">
                    <input type="checkbox" id="javascript" name='skills[]'>
                    <span class="text-uppercase" value="javascript">javascript</span>
                  </div>
                  <div class="customradio">
                    <input type="checkbox" id="react js" name='skills[]'>
                    <span class="text-uppercase" value="react js">react js</span>
                  </div>
                  <div class="customradio">
                    <input type="checkbox" id="php" name='skills[]'>
                    <span class="text-uppercase" value="php">php</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 options">
            <div class="form-group">
              <label class="text-capitalize">Add branches</label>
              <?php foreach ($branches as $branch) {
              ?>
                <div class="branches-check">
                  <div class="customradio">
                    <input type="checkbox" value="<?= $branch['id']; ?>" id="<?= $branch['id']; ?>" name="branch[]">
                    <span class="text-uppercase"><?= $branch['name']; ?></span>
                  </div>
                </div>

              <?php } ?>
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

<div id="edit-employee" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit User</h4>
      </div>
      <div class="modal-body">
        <form method='' id="editForm">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Employee Id</label>
                <input class="form-control" type="text" name="eemp_id" id="eemp_id">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Employee Name</label>
                <input class="form-control" type="text" name="ename" id="ename">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">email id</label>
                <input class="form-control" type="email" name="eemail" id="eemail">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Password</label>
                <input class="form-control" type="password" name="epassword" id="epassword" autocomplete="on">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">phone number</label>
                <input class="form-control" type="number" name="emobile" id="emobile">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="text-capitalize">Select Role</label>
                <select class="form-control" name="erole" id="erole">
                  <option value="" disabled selected>select role</option>
                  <option value="1">Admin</option>
                  <option value="2">Manager</option>
                  <option value="3">Counceller</option>
                  <option value="4">Co-ordinator</option>
                  <option value="5">Accountant</option>
                  <option value="7">Faculty</option>
                  <option value="8">Lab-Faculty</option>
                  <option value="9">Recruiter</option>
                  <option value="10">Aptitude trainer</option>
                  <option value="11">Softskills trainer</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 options">
              <div class="form-group">
                <label class="text-capitalize">Select Skills</label>
                <div class="branches-check">
                  <div class="customradio">
                    <input type="checkbox" id="eskills" name='eskills[]'>
                    <span class="text-uppercase" value="html">html</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 options">
              <div class="form-group">
                <label class="text-capitalize">Add branches</label>
                <?php foreach ($branches as $branch) {
                ?>
                  <div class="branches-check">

                    <div class="customradio">
                      <input type="checkbox" value="<?= $branch['id']; ?>" id="ebranch" name="ebranch[]">
                      <span class="text-uppercase"><?= $branch['name']; ?></span>
                    </div>
                  </div>

                <?php } ?>
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
<script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
<script>
  $(function() {
    $('#addEmployee').validate({
      rules: {
        emp_id: {
          required: true,
          minlength: 1,
          maxlength: 10,
        },
        name: {
          required: true,
          // lettersonly: true,
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 8,
          maxlength: 15,
        },
        mobile: {
          required: true,
          minlength: 10,
          maxlength: 10,
        },
        role: {
          required: true,
        },
        'skills[]': {
          required: true,

        },
        'branch[]': {
          required: true,


        }
      },
      messages: {
        name: "Please enter branch name",
        branch: {
          required: "Please selct branch",
        },
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "password must be at least 8 characters long",
          maxlength: "password must be at least 15 characters long"

        },
        mobile: {
          required: "Please enter a phone number",
          minlength: "phone number must be at least 10 characters long",
          maxlength: "phone number must be at most 10 characters long"
        },
        role: {
          required: "Please select role",
        },
        'skills[]': {
          required: "Please enter skills",
        },
        'branch[]': {
          required: "Please select branch",
        },


      },
      submitHandler: function(form) {
        var form = $('#addEmployee');
        var formData = form.serialize();
        $.ajax({
          type: 'POST',
          dataType: 'json',
          url: '<?= base_url() ?>admin/add_employee',
          data: formData,
          success: function(response) {
            console.log(response.status);
            if (response.status == true) {
              alert('Employee added successfully');
              window.location.href = '<?= base_url() ?>admin/employees';
            } else {
              alert('Employee not added');
              location.reload();
            }
          }
        });
      }
    });

  });
</script>

<script>
  $(function() {

    $('#selectRole').change(function() {
      $(".options").hide();
      $('#' + $(this).val()).show();
    });
  });
  $(".statusChangebtn").click(function() {
    $(this).toggleClass('btn-success')
    $(this).text(function(i, v) {
      return v === 'Suspend' ? 'Active' : 'Suspend'
    })
  });
</script>

<script>
  $(document).ready(function() {
    $('.edit').on('click', function() {
      var ID = $(this).data('id');
      $.ajax({
        dataType: 'json',
        type: 'GET',
        url: '<?= base_url() ?>getEmployeeDetails/',
        data: {
          id: ID,
        },
        success: function(response) {
          var employee = response.employee;

          $('#eemp_id').val(employee[0].emp_id);
          $('#ename').val(employee[0].name);
          $('#eemail').val(employee[0].email);
          $('#emobile').val(employee[0].number);

          var selectedRole = employee[0].role;

          $('#erole option').each(function() {
            if ($(this).val() == selectedRole) {
              $(this).prop('selected', true);
              return false;
            }
          });


          var skillsArray = employee[0].skills.split(',');
          skillsArray.forEach(function(skill) {
            $('input[name="skills[]"][value="' + skill.trim() + '"]').prop('checked', true);
          });

          var branchesArray = employee[0].branch.split(',');
          branchesArray.forEach(function(branch) {
            $('input[name="ebranch[]"][value="' + branch.trim() + '"]').prop('checked', true);
          });

        },
        error: function(xhr, status, error) {
          console.error(error);
        },
      });
    });
  });
</script>

<script>
  $('#searchrole').change(function() {
    var role = $('#searchrole').val();
    console.log(role)
    $.ajax({
      dataType: 'json',
      type: 'GET',
      url: '<?= base_url() ?>getEmployeeByRole/',
      data: {
        role: role,
      },
      success: function(response) {
        console.log(response)
        if (response.status === true) {
          var employees = response.Employee;
          $('#employeeTable tbody').empty();
          var i = 1;
          employees.forEach(function(employee) {
            var newRow = '<tr>' +
              '<td>' + i + '</td>' +
              '<td>' + employee.emp_id + '</td>' +
              '<td>' + employee.name + '</td>' +
              '<td>' + employee.email + '</td>' +
              '<td>' + employee.number + '</td>' +
              '<td>' + employee.role_name + '</td>' +
              '<td>' +
              '<div style="max-width: 250px;">' +
              '<span class="badge badge-primary">' + employee.branch_name + '</span>' +
              '</div>' +
              '</td>' +
              '<td>' +
              '</td>' +
              '<span class="badge badge-success">' + employee.skills + '</span>' +
              '<td>' +
              '<button class="btn btn-default text-capitalize edit" data-toggle="modal" data-target="#edit-courses" data-id="' + employee.id + '">Edit</button>' +
              '<button class="btn btn-sm btn-success text-capitalize" data-toggle="modal" type="button" data-target="#activeModal" data-id="' + employee.id + '">active</button>' +
              '<button class="btn btn-sm btn-danger text-capitalize" data-toggle="modal" type="button" data-target="#suspendModal" data-id="' + employee.id + '">Suspend</button>' +
              '</td>' +
              '</tr>';

            $('#employeeTable tbody').append(newRow);
            i++;
          });
        } else {
          $('#employeeTable tbody').empty();
          $('#employeeTable tbody').html('<tr><td colspan="9" class="text-center">No Courses Found</td></tr>');

        }
      },
      error: function(xhr, status, error) {
        console.error(error);
      },
    });


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
          url: '<?= base_url() ?>updateEmployeeStatus/',
          data: {
            ID: ID,
            status: status

          },
          success: function(response) {
            console.log(response);
            if (response.status == true) {
              alert('Employee activated successfully');
              window.location.href = '<?= base_url() ?>admin/employees';
            } else {
              alert('Employee not activated');
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
          url: '<?= base_url() ?>updateEmployeeStatus/',
          data: {
            ID: ID,
            status: status
          },
          success: function(response) {
            console.log(response);
            if (response.status == true) {
              alert('Employee suspended successfully');
              window.location.href = '<?= base_url() ?>admin/employees';
            } else {
              alert('Employee not suspended');
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
        url: '<?= base_url() ?>getEmployeeByBranch/',
        data: {
          branch: branch,
        },
        success: function(response) {
          console.log(response)
          if (response.status === true) {
            var employees = response.Employee;
            $('#employeeTable tbody').empty();
            var i = 1;
            employees.forEach(function(employee) {
              var newRow = '<tr>' +
                '<td>' + i + '</td>' +
                '<td>' + employee.emp_id + '</td>' +
                '<td>' + employee.name + '</td>' +
                '<td>' + employee.email + '</td>' +
                '<td>' + employee.number + '</td>' +
                '<td>' + employee.role_name + '</td>' +
                '<td>' +
                '<div style="max-width: 250px;">' +
                '<span class="badge badge-primary">' + employee.branch_name + '</span>' +
                '</div>' +
                '</td>' +
                '<td>' +
                '</td>' +
                '<span class="badge badge-success">' + employee.skills + '</span>' +
                '<td>' +
                '<button class="btn btn-default text-capitalize edit" data-toggle="modal" data-target="#edit-courses" data-id="' + employee.id + '">Edit</button>' +
                '<button class="btn btn-sm btn-success text-capitalize" data-toggle="modal" type="button" data-target="#activeModal" data-id="' + employee.id + '">active</button>' +
                '<button class="btn btn-sm btn-danger text-capitalize" data-toggle="modal" type="button" data-target="#suspendModal" data-id="' + employee.id + '">Suspend</button>' +
                '</td>' +
                '</tr>';

              $('#employeeTable tbody').append(newRow);
              i++;
            });
          } else {
            $('#employeeTable tbody').empty();
            $('#employeeTable tbody').html('<tr><td colspan="9" class="text-center">No Courses Found</td></tr>');

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