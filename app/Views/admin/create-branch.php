<?= view('admin/header'); ?>
<!-- main navigation starts-->

<!-- main navigation ends here-->
<main>
  <div class="content-wrapper">
    <div class="content-wrapper-before bg-7"></div>
    <div class="content-header">
      <h2 class="text-capitalize">branches</h2>
      <div class="header-elements scStdntsListTabs">
        <ul class="nav nav-pills nav-stacked">
          <li class="">
            <button class="btn btn-white text-capitalize" data-toggle="modal" data-target="#create-branch">Add branch</button>
          </li>
        </ul>
      </div>
    </div>
    <div class="content-body">
      <div class="card">
        <div class="card-header">
          <h3 class="text-capitalize">Branches list</h3>
        </div>
        <div class="card-content">
          <table class="table table-striped custom-table">
            <thead>
              <tr>
                <th class="text-capitalize">S no</th>
                <th class="text-capitalize">branch name</th>
                <th class="text-capitalize">address</th>
                <th class="text-capitalize">action</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($branches)) {
                $i = 1;
                foreach ($branches as $branch) { ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $branch['name']; ?></td>
                    <td class="text-capitalize"><?= $branch['address']; ?></td>
                    <td><button type="button" class="btn btn-default edit-icon" data-toggle='modal' data-id='<?= $branch['id']; ?>' data-target='#edit-branch'>Edit</button></td>
                  </tr>
              <?php }
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
</div>


<div id="edit-branch" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Branch</h4>
      </div>
      <div class="modal-body">
        <form id="editForm" method="post" data-id="">
          <div class="form-group">
            <label class="text-capitalize">Branch name</label>
            <input class="form-control" type="text" placeholder="Enter branch name" name="name" id="bname">
          </div>
          <div class="form-group">
            <label class="text-capitalize">Branch address</label>
            <textarea class="form-control" placeholder="Enter branch address" name="address" id="address"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modals -->
<div id="create-branch" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Branch</h4>
      </div>
      <div class="modal-body">
        <form id="branchForm" method="post">
          <div class="form-group">
            <label class="text-capitalize">Branch name</label>
            <input class="form-control" type="text" placeholder="Enter branch name" name="name" id="name">
          </div>
          <div class="form-group">
            <label class="text-capitalize">Branch address</label>
            <textarea class="form-control" placeholder="Enter branch address" name="address" id="address"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- js includes -->
<!-- jquery library -->
<script src='<?= base_url() ?>public/assets/js/jquery-3.3.1.min.js'></script>

<!-- Latest bootstrap compiled JavaScript -->
<script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>

<!-- <script>
      $(function() {
        $('li').click(function(e){
    e.preventDefault();
   $(this).addClass('active');
    $(this).siblings().each(function(){
        $(this).removeClass('active') ;

    });
})
});
    </script> -->
</body>

</html>
<script>
  $(document).ready(function() {
    $('#branchForm').validate({
      rules: {
        name: {
          required: true,
          lettersonly: true,
        },
        address: {
          required: true,
          // max: 50,
        }

      },
      messages: {
        name: "Please enter branch name",
        address: {
          required: "Please enter address",

        },
      },
      submitHandler: function(form) {
        // console.log($("#branchForm").serialize());
        $.ajax({
          type: 'POST',
          url: "<?php echo base_url('add_branch'); ?>",
          data: $("#branchForm").serialize(),
          success: function(response) {
            if (response.status == true) {
              $('#create-branch').modal('hide');
              location.reload();
            } else {
              alert("Error");
            }
          },

        });

      }
    });
    jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z," "]+$/i.test(value);
    }, "Enter a valid branch name");
  });
</script>


<script>
  $(document).ready(function() {
    $('.edit-icon').on('click', function() {
      var branchID = $(this).data('id');
      // console.log(branchID);
      $.ajax({
        dataType: 'json',
        type: 'GET',
        url: '<?= base_url() ?>getBranchDetails/',
        data: {
          id: branchID,
        },
        success: function(response) {
          var branch = response.branch;
          // console.log(branch.name)  
          $('#bname').val(branch.name);
          $('#address').val(branch.address);


        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      });
    });
  });
</script>









<script>
  $(document).ready(function() {
    $('.edit-icon').on('click', function() {
      var branchID = $(this).data('id');

      $('#editForm').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var branch = $('#bname').val();
        var address = $('textarea[name=address]').val();
        var url = "<?php echo base_url('update_branch'); ?>";

        $.ajax({
          type: 'POST',
          url: url,
          data: {
            id: branchID,
            branch: branch,
            address: address

          },
          dataType: 'json',
          success: function(response) {
            console.log(response);
            if (response.status === true) {
              alert('submitted successfully');
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
  });
</script>