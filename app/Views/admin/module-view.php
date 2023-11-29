<?= view('admin/header'); ?>
<!-- main navigation ends here-->
<main>
  <div class="content-wrapper">
    <div class="content-wrapper-before bg-7"></div>
    <div class="content-header">
      <h2 class="text-capitalize">Module view</h2>
    </div>
    <div class="content-body">
      <div class="card">
        <div class="card-header">
          <h3 class="text-capitalize">module detailes</h3>
        </div>
        <div class="card-body card2 module_view">
          <div class="row">
            <div class="col-md-2">
              <span class="text-capitalize">Module name</span>
            </div>
            <div class="col-md-9">
            <!-- <?php var_dump($modules['material']); ?> -->
              <strong><?= $modules['name']; ?></strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <span class="text-capitalize">Module Cost</span>
            </div>
            <div class="col-md-9">
              <strong><?= $modules['cost']; ?>/-</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <span class="text-capitalize">Module Type</span>
            </div>
            <div class="col-md-9">
              <strong class="text-capitalize"><?= $modules['module_type']; ?></strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <span class="text-capitalize">Class time</span>
            </div>
            <div class="col-md-9">
              <strong><?= $modules['time']; ?></strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <span class="text-capitalize">Classes</span>
            </div>
            <div class="col-md-6">
              <div class="panel-group custom-acordin" id="clasAprvlActdn">
                <div class="panel panel-default">
                  <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#clasAprvlActdn" href="#module9" aria-expanded="false">
                    <!-- <h4 class="panel-title text-capitalize">1.&nbsp;class&nbsp;-&nbsp;<strong class="text-info" style="margin-right: 100px;">1:30mins</strong> -->
                    <h4 class="panel-title text-capitalize">1.&nbsp;class</h4>
                  </div>
                  <div id="module9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="card-content">
                      <div class="module_view">
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">topics</span>
                          </div>
                          <div class="col-md-8">
                            <ul class="list-items">
                              <?php
                              $topics = $modules['topics'];
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
                            <strong><?= $modules['faculty_reference'] ? : '-'; ?></strong>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">Faculty Reference</span>
                          </div>
                          <div class="col-md-8">
                          <a href="<?= base_url() ?>public/uploads/<?= $modules['teacher_file']; ?>" class="btn btn-info btn-sm" download>Download file</a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">Student material</span>
                          </div>
                          <div class="col-md-8">
                            <a href="<?= base_url() ?>public/uploads/<?= $modules['material']; ?>" class="btn btn-info btn-sm" download>Download file</a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <span class="text-capitalize">Practicles</span>
                          </div>
                          <div class="col-md-8">
                            <a href="<?= base_url() ?>public/uploads/<?= $modules['practicles']; ?>" class="btn btn-info btn-sm" download>Download file</a>
                          </div>
                        </div>

                      </div>
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
<script src='<?= base_url() ?>public/assets/js/jquery-3.3.1.min.js'></script>

<!-- Latest bootstrap compiled JavaScript -->
<script src="<?= base_url() ?>public/assets/bootstrap/js/bootstrap.min.js"></script>
<script src='<?= base_url() ?>public/assets/js/main.js'></script>
<script>
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
</body>

</html>