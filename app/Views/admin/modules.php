<?= view('admin/header'); ?>
<!-- main navigation ends here-->
<main>
  <div class="content-wrapper">
    <div class="content-wrapper-before bg-7"></div>
    <div class="content-header">
      <h2 class="text-capitalize">Modules</h2>
      <div class="header-elements scStdntsListTabs">
        <ul class="nav nav-pills nav-stacked">
          <li class="">
            <a href="<?= base_url() ?>admin/add-module" class="btn btn-white text-capitalize">Add module</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="content-body">
      <div class="card">
        <div class="card-header">
          <h3 class="text-capitalize">Modules list</h3>
        </div>
        <div class="card-content">
          <table class="table table-striped custom-table">

            <thead>
              <tr>
                <th class="text-capitalize">S no</th>
                <th class="text-capitalize">module name</th>
                <th class="text-capitalize">module type</th>
                <th class="text-capitalize">module status</th>
                <th class="text-capitalize">Action</th>
              </tr>
            </thead>
            <?php
            $i = 1;
            if (!empty($modules)) {
              foreach ($modules as $module) {
            ?>
                <tbody>
                  <?php if ($module['status'] == 'active') { ?>
                    <tr>
                    <?php } else { ?>
                    <tr style="background-color: skyblue;">
                    <?php } ?> <td><?= $i; ?></td>
                    <td><?= $module['name'] ?></td>
                    <td><?= $module['module_type'] ?></td>
                    <td><?= $module['status'] ?></td>
                    <td>
                      <a href="<?= base_url() ?>admin/module-view/<?= $module['id'] ?>" class="btn btn-sm btn-default text-capitalize">view</a>
                      <a href="<?= base_url() ?>admin/edit-module/<?= $module['id'] ?>" class="btn btn-sm btn-default text-capitalize">Edit</a>
                      <?php if ($module['status'] == 'active') { ?>
                        <button class="btn btn-sm btn-success text-capitalize" data-toggle='modal' type="button" data-target='#activeModal' data-id="<?= $module['id'] ?>" disabled>active</button>
                        <button class="btn btn-sm btn-danger text-capitalize" data-toggle='modal' type="button" data-target='#suspendModal' data-id="<?= $module['id'] ?>">Suspend</button>
                      <?php } else { ?>
                        <button class="btn btn-sm btn-success text-capitalize" data-toggle='modal' type="button" data-target='#activeModal' data-id="<?= $module['id'] ?>">activate</button>
                        <button class="btn btn-sm btn-danger text-capitalize" data-toggle='modal' type="button" data-target='#suspendModal' data-id="<?= $module['id'] ?>" disabled>Suspended</button>
                      <?php } ?>
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
    </div>
  </div>
</main>
</div>
<div id="suspendModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center text-info">Are you sure to suspend the module</h3>
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
        <h3 class="text-center text-info">Are you sure to activate the module?</h3>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-default text-capitalize" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary text-capitalize btn-activate">Activate</button>
      </div>
    </div>
  </div>
</div>

<!-- js includes -->
<!-- jquery library -->
<script src='<?= base_url() ?>public/assets/js/jquery-3.3.1.min.js'></script>

<!-- Latest bootstrap compiled JavaScript -->
<script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src='<?= base_url() ?>public/assets/js/main.js'></script>


<script>
  $(document).ready(function() {
    $('.btn-success').click(function() {
      var ID = $(this).data('id');
      var modal = $(this).data('target');
      var status = 'active';
      $(modal).find('.btn-activate').off('click').on('click', function() {
        $.ajax({
          dataType: 'json',
          type: 'GET',
          url: '<?= base_url() ?>updateModuleStatus/',
          data: {
            ID: ID,
            status: status

          },
          success: function(response) {
            console.log(response);
            if (response.status == true) {
              alert('Module activated successfully');
              window.location.href = '<?= base_url() ?>admin/modules';
            } else {
              alert('Module not activated');
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
      var status = 'suspend';
      $(modal).find('.btn-suspend').off('click').on('click', function() {
        $.ajax({
          dataType: 'json',
          type: 'GET',
          url: '<?= base_url() ?>updateModuleStatus/',
          data: {
            ID: ID,
            status: status
          },
          success: function(response) {
            console.log(response);
            if (response.status == true) {
              alert('Module suspended successfully');
              window.location.href = '<?= base_url() ?>admin/modules';
            } else {
              alert('Module not suspended');
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


</body>

</html>