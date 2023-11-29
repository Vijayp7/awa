<?= view('counceller/header');?>
      <!-- main navigation ends here-->
      <main>
        <div class="content-wrapper">
          <div class="content-wrapper-before bg-5"></div>
          <!-- page title -->
          <div class="content-header">
            <h2>Students List</h2>
            <div class="header-elements rc-filters">
              <!-- due amount -->
              <div class="cunclrDueAmount">
                <div>Due Amount - 600000 UPTO</div>
                <div>DEC 25</div>
              </div>
              <div>
                <input type="search" class="form-control m-0" placeholder="Search by Name / ID">
              </div>
            </div>
          </div>
          <!-- content -->
          <div class="content-body">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="filets-nav">
                      
                      <div class="form-group selctbox-filter">
                        <label class="white">sort by category :&nbsp;</label>
                        <select class="form-control">
                          <option class="text-capitalize">
                            all
                          </option>
                          <option class="text-capitalize">web designing</option>
                          <option class="text-capitalize">web programing</option>
                          <option class="text-capitalize">fullstack development</option>
                        </select>
                      </div>
                      
                      <div class="form-group selctbox-filter">
                        <label class="white">Sort by payment status</label>
                        <select class="form-control">
                          <option class="text-capitalize">
                            all
                          </option>
                          <option class="text-capitalize">paid
                          </option>
                          <option class="text-capitalize">due</option>
                          <option class="text-capitalize">pending</option>
                        </select>
                      </div>
                      <!-- Dates -->
                      <div style="width: 560px;">
                        <label class="text-capitalize">select dates&nbsp;</label>
                        <div style="display: inline-block;vertical-align: middle;width: 50%;">
                          <div class="input-group">
                            <span class="input-group-addon">From</span>
                            <input type="date" class="form-control">
                            <span class="input-group-addon">To</span>
                            <input type="date" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-content">
                    <div class="table-responsive">
                      <table class="table acuntPayDetails">
                        <thead>
                          <tr>
                            <th class="text-capitalize">s no</th>
                            <th class="text-capitalize">name</th>
                            <th class="text-capitalize">mobile no</th>
                            <th class="text-capitalize">course</th>
                            <th class="text-capitalize">fee amount</th>
                            <th class="text-capitalize">paid amount</th>
                            <th class="text-capitalize">balance amount</th>
                            <th class="text-capitalize">due amount</th>
                            <th class="text-capitalize">due date</th>
                            <th class="text-capitalize">overdue amount</th>
                            <th class="text-capitalize text-center">view</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td class="text-capitalize">lorem ipsum</td>
                            <td class="text-capitalize">9876543210</td>
                            <td class="text-capitalize">web designing</td>
                            <td class="text-capitalize">20000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10-01-2019</td>
                            <td class="text-capitalize">
                              <span class="badge badge-danger">10000/-</span>
                            </td>
                            <td class="text-center">
                              <a href="counceller/counceller-student-details.html" class="btn btn-link p-0 view-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td class="text-capitalize">lorem ipsum</td>
                            <td class="text-capitalize">9876543210</td>
                            <td class="text-capitalize">web designing&nbsp;<i class="fa fa-plus" title="web development,digital marketing"></i></td>
                            <td class="text-capitalize">20000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10-01-2019</td>
                            <td class="text-capitalize">
                              <span class="badge badge-danger">10000/-</span>
                              <button class="btn btn-link btn-sm breakdown_btn" data-toggle='modal' data-target='#breakdownsmodal'>break downs</button>
                            </td>
                            <td class="text-center">
                              <a href="counceller/counceller-student-details.html" class="btn btn-link p-0 view-icon">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                              </a>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td class="text-capitalize">lorem ipsum</td>
                            <td class="text-capitalize">9876543210</td>
                            <td class="text-capitalize">web designing</td>
                            <td class="text-capitalize">20000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10000/-</td>
                            <td class="text-capitalize">10-01-2019</td>
                            <td class="text-capitalize">--</td>
                            <td class="text-center">
                              <a href="counceller/counceller-student-details.html" class="btn btn-link p-0 view-icon">
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
      
    <!-- modals -->
    <div id="breakdownsmodal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-capitalize">cources list</h4>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table acuntPayDetails">
                <thead>
                  <tr>
                    <th class="text-capitalize">s no</th>
                    <th class="text-capitalize">course</th>
                    <th class="text-capitalize">start date</th>
                    <th class="text-capitalize">end date</th>
                    <th class="text-capitalize">Total amount</th>
                    <th class="text-capitalize">paid amount</th>
                    <th class="text-capitalize">balance amount</th>
                    <th class="text-capitalize">due amount</th>
                    <th class="text-capitalize">due date</th>
                    <th class="text-capitalize">overdue amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td class="text-capitalize">web designing</td>
                    <td class="text-capitalize">10-02-2020</td>
                    <td class="text-capitalize">10-05-2020</td>
                    <td class="text-capitalize">20000/-</td>
                    <td class="text-capitalize">10000/-</td>
                    <td class="text-capitalize">10000/-</td>
                    <td class="text-capitalize">10000/-</td>
                    <td class="text-capitalize">10-01-2019</td>
                    <td class="text-capitalize">10000/-</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td class="text-capitalize">web designing</td>
                    <td class="text-capitalize">10-02-2020</td>
                    <td class="text-capitalize">10-05-2020</td>
                    <td class="text-capitalize">20000/-</td>
                    <td class="text-capitalize">10000/-</td>
                    <td class="text-capitalize">10000/-</td>
                    <td class="text-capitalize">10000/-</td>
                    <td class="text-capitalize">10-01-2019</td>
                    <td class="text-capitalize">10000/-</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /modals -->

    <!-- js includes -->
    <!-- jquery library -->
    <script src='<?= base_url()?>public/assets/js/jquery-3.3.1.min.js'></script>

    <!-- Latest bootstrap compiled JavaScript -->
    <script src="<?= base_url()?>public/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="<?= base_url()?>public/assets/slick/slick.min.js"></script>
    <script>
      
    </script>
  </body>
</html>