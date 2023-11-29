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
          // maxlength: 1,

        },
        'branch[]': {
          required: true,
          // maxlength: 1,


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

          // alert('No Courses Found');
        }
      },
      error: function(xhr, status, error) {
        console.error(error);
      },
    });


  });
</script>


<!-- <script>
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
          var employees = response.employee;

          $("#custom-table > tbody > tr").each(function() {
            var employeeBranch = $(this).data('branch');
            var showRow = (employeeBranch === branch || branch === '');
            $(this).toggle(showRow);
          });
        },
        error: function(xhr, status, error) {
          console.error(error);
        },
      });
    });
  });
</script> -->



<script>
  $(document).ready(function() {
    $('.btn-success').click(function() {
      var ID = $(this).data('id');
      var modal = $(this).data('target');

      $(modal).find('.btn-activate').off('click').on('click', function() {
        $.ajax({
          dataType: 'json',
          type: 'GET',
          url: '<?= base_url() ?>updateEmployeeStatus/',
          data: {
            ID: ID,
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

      $(modal).find('.btn-suspend').off('click').on('click', function() {
        $.ajax({
          dataType: 'json',
          type: 'GET',
          url: '<?= base_url() ?>updateEmployeeSuspend/',
          data: {
            ID: ID,
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

            // alert('No Courses Found');
          }
        },
        error: function(xhr, status, error) {
          console.error(error);
        },
      });
    });
  });
</script>