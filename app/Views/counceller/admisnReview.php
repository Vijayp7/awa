<?= view('counceller/header');?>
      <!-- main navigation ends here-->
      <main>
        <div class="content-wrapper">
          <div class="content-wrapper-before bg-5"></div>
          <!-- page title -->
          <div class="content-header">
            <h2 class="text-capitalize">Admissions under review</h2>
            <div class="header-elements">
              <a href="<?= base_url()?>counsellor/admission" class="btn btn-default text-capitalize"><i class="glyphicon glyphicon-plus"></i>&nbsp;new admission</a>
            </div>
          </div>
          <!-- content -->
          <div class="content-body">
            <div class="row">
              <div class="col-md-12">
                <!-- admissons rejected -->
                <div class="card">
                  <div class="card-header pending_practicles">
                    <h3 class="text-capitalize">admissons rejected</h3>
                  </div>
                  <div class="card-content">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="text-capitalize">s no</th>
                            <th class="text-capitalize">name</th>
                            <th class="text-capitalize">mobile no</th>
                            <th class="text-capitalize">course</th>
                            <th class="text-capitalize">start date</th>
                            <th class="text-capitalize">end date</th>
                            <th class="text-capitalize">fee amount</th>
                            <th class="text-capitalize">paid amount</th>
                            <th class="text-capitalize">due amount</th>
                            <th class="text-capitalize">balance amount</th>
                            <th class="text-capitalize text-center">action</th>
                          </tr>
                        </thead>
                        <tbody class="admnRejects">
                          <tr>
                            <td>1</td>
                            <td class="text-capitalize">lorem ipsum</td>
                            <td class="text-capitalize">9876543210</td>
                            <td class="text-capitalize">web designing</td>
                            <td class="text-capitalize">10-01-2019</td>
                            <td class="text-capitalize">10-04-2019</td>
                            <td class="text-capitalize">20000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-center">
                              <a href="<?= base_url()?>counsellor/admission" class="btn btn-pink btn-sm">
                                edit
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <!-- admissons Waiting For Approval -->
                <div class="card">
                  <div class="card-header tdy_practicles">
                    <h3 class="text-capitalize">admissons Waiting For Approval</h3>
                  </div>
                  <div class="card-content">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="text-capitalize">s no</th>
                            <th class="text-capitalize">name</th>
                            <th class="text-capitalize">mobile no</th>
                            <th class="text-capitalize">course</th>
                            <th class="text-capitalize">start date</th>
                            <th class="text-capitalize">end date</th>
                            <th class="text-capitalize">fee amount</th>
                            <th class="text-capitalize">paid amount</th>
                            <th class="text-capitalize">due amount</th>
                            <th class="text-capitalize">balance amount</th>
                            <th class="text-capitalize text-center">view</th>
                          </tr>
                        </thead>
                        <tbody class="admWaitngAproves">
                          <tr>
                            <td>1</td>
                            <td class="text-capitalize">lorem ipsum</td>
                            <td class="text-capitalize">9876543210</td>
                            <td class="text-capitalize">web designing</td>
                            <td class="text-capitalize">10-01-2019</td>
                            <td class="text-capitalize">10-04-2019</td>
                            <td class="text-capitalize">20000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-center">
                              <a href="<?= base_url()?>counceller/studentDetails" class="btn btn-link p-0 view-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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
    <script src='<?= base_url()?>public/assets/js/jquery-3.3.1.min.js'></script>

    <!-- Latest bootstrap compiled JavaScript -->
    <script src="<?= base_url()?>public/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="<?= base_url()?>public/assets/slick/slick.min.js"></script>
    
  </body>
</html>