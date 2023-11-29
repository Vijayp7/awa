<?= view('counceller/header');?>
      <!-- main navigation ends here-->
      <main>
        <div class="content-wrapper">
          <div class="content-wrapper-before bg-5"></div>
          <!-- page title -->
          <div class="content-header">
            <h2 class="text-capitalize">add student</h2>
          </div>
          <!-- content -->
          <div class="content-body">
            <div class="row">
              <form>
                <!-- Personal Detailes -->
                <div class="col-md-12">
                  <div class="card row top-bar-green">
                    <div class="card-header">
                      <h3>personal detailes</h3>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col-md-2">
                          <div class="add_profile">
                            <div class="uploadPhoto">
                              <img src="<?= base_url()?>public/assets/images/avatar.png" alt="">
                            </div>
                            <button class="btn btn-link text-center">Add Photo</button>
                          </div>
                        </div>
                        <div class="col-md-10">
                          <div class="row d-flex">
                            <!-- name -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">name*</label>
                                <input type="text" class="form-control">
                              </div>
                            </div>

                            <!-- gender -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">select gender</label>
                                <select class="form-control text-capitalize">
                                  <option class="text-capitalize">male</option>
                                  <option class="text-capitalize">female</option>
                                  <option class="text-capitalize">others</option>
                                </select>
                              </div>
                            </div>

                            <!-- dob -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">date of birth</label>
                                <input type="date" class="form-control text-uppercase">
                              </div>
                            </div>

                            <!-- email -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">Email id</label>
                                <input type="email" class="form-control">
                              </div>
                            </div>

                            <!-- mobile number -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">mobile number</label>
                                <input type="number" class="form-control">
                              </div>
                            </div>
                            <!-- Alternative mobile number -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">Alternative mobile number</label>
                                <input type="number" class="form-control">
                              </div>
                            </div>

                            <!-- QUALIFICATION -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">qualification</label>
                                <!-- <input type="text" class="form-control"> -->
                                <select class="form-control">
                                  <option value="" selected disabled>select qualification</option>
                                  <option value="">Bsc</option>
                                  <option value="">Bcom</option>
                                  <option value="">btech</option>
                                  <option value="">intermediate</option>
                                  <option value="">ssc</option>
                                </select>
                              </div>
                            </div>
                            <!-- aadhar number-->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">Enter aadhar number</label>
                                <input type="number" class="form-control">
                              </div>
                            </div>
                            <!-- upload aadhar -->
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">upload aadhar</label>
                                <input type="file">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">lead source</label>
                                <select class="form-control">
                                  <option class="text-capitalize" disabled selected>Select lead source</option>
                                  <option class="text-capitalize">justdial</option>
                                  <option class="text-capitalize">suleka</option>
                                </select>
                              </div>
                            </div>
                            <!-- ADDRESS -->
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="text-capitalize">address</label>
                                <textarea rows="3" class="form-control"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- course detailes -->
                <div class="col-md-12">
                  <div class="card row top-bar-info">
                    <div class="card-header">
                      <h3>course detailes</h3>
                    </div>
                    <div class="card-content">
                      <div class="clsses_wrapper">
                        <div class="row d-flex">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="text-capitalize">Select course</label>
                              <select class="form-control text-capitalize">
                                <option class="text-capitalize">web designing</option>
                                <option class="text-capitalize">web development</option>
                                <option class="text-capitalize">fullstack development</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="text-capitalize">Add modules</label>
                              <div class="form-control" style="height: auto;">
                                <div class="text-uppercase skils-column">
                                  <div class="customradio">
                                    <input type="checkbox" name="selectComapny" checked>
                                    <span class="text-uppercase">html</span>
                                  </div>
                                  <div class="customradio">
                                    <input type="checkbox" name="selectComapny" checked>
                                    <span class="text-uppercase">css</span>
                                  </div>
                                  <div class="customradio">
                                    <input type="checkbox" name="selectComapny" checked>
                                    <span class="text-uppercase">javascript</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 form-group">
                            <label class="text-capitalize">course type</label>
                            <select class="form-control text-capitalize">
                              <option class="text-capitalize" disabled="" selected="">select batch type</option>
                              <option class="text-capitalize">Regular</option>
                              <option class="text-capitalize">only saturday</option>
                              <option class="text-capitalize">only sunday</option>
                              <option class="text-capitalize">saturdays &amp; sundays</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label class="text-capitalize">joining date</label>
                              <input type="date" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label class="text-capitalize">suggested time</label>
                                <input type="time" class="form-control">
                              </div>
                            </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-pink"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add another course</button>
                    </div>
                  </div>
                </div>
                <!-- payment details -->
                <div class="col-md-12">
                  <div class="row card top-bar-warning">
                    <div class="card-header">
                      <h3>payment detailes</h3>
                    </div>
                    <div class="card-content">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">course fee</label>
                            <input type="number" class="form-control">
                          </div>
                        </div>
                        <!-- coupon code -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">coupon code </label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <!-- installment -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">first installment</label>
                            <input type="number" class="form-control">
                          </div>
                        </div>
                        
                        <!-- payment date -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">first installment payment date</label>
                            <input type="date" class="form-control text-uppercase">
                          </div>
                        </div>
                      </div>
                      <div class="row"> 
                        <!-- second installment -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">second installment</label>
                            <input type="number" class="form-control">
                          </div>
                        </div>
                        
                        <!-- payment date -->
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="text-capitalize">second installment payment date</label>
                            <input type="date" class="form-control text-uppercase">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3">
                          <button type="button" class="btn btn-pink"><i class="glyphicon glyphicon-plus"></i>&nbsp;add another installment</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- add coments -->
                <div class="col-md-12">
                  <div class="row card top-bar-warning">
                    <div class="card-header">
                      <h3>additional comments</h3>
                    </div>
                    <div class="card-content">
                      <label>Write your comments on here</label>
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                </div>
                <!-- action buttons -->
                <div class="col-md-12 formSubmit">
                  <button class="btn btn-default">cancel</button>
                  <button class="btn btn-pink">submit</button>
                </div>
              </form>
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
    
    <script>
      $(document).ready(function(){
        // Batch Wise Rating load more
        var admWaitngAprovesList = $(".admWaitngAproves tr");
        var listToShow = 2;
        var listsLoadBtn = $("#listsLoadBtn");
        var listsInList = admWaitngAprovesList.length;
        admWaitngAprovesList.hide();
        if (listsInList > listToShow) {
          listsLoadBtn.show();
        }
        admWaitngAprovesList.slice(0, listToShow).show();

        listsLoadBtn.click(function(){
            var listsShowing = admWaitngAprovesList.filter(':visible').length;
            admWaitngAprovesList.slice(listsShowing - 1, listsShowing + listToShow).fadeIn();
            var listsNowShowing = admWaitngAprovesList.filter(':visible').length;
            if (listsNowShowing >= listsInList) {
              listsLoadBtn.hide();
            }
        });

        // Batch Wise Rating load more

        var admRectList = $(".admnRejects tr");
        var rejctdlistShow = 2;
        var rejectlistsLoadBtn = $("#rejectlistsLoadBtn");
        var rejectListsInList = admRectList.length;
        admRectList.hide();
        if (rejectListsInList > rejctdlistShow) {
          rejectlistsLoadBtn.show();
        }
        admRectList.slice(0, rejctdlistShow).show();

        rejectlistsLoadBtn.click(function(){
            var rejclistShowing = admRectList.filter(':visible').length;
            admRectList.slice(rejclistShowing - 1, rejclistShowing + rejctdlistShow).fadeIn();
            var rjctdAdmisionList = admRectList.filter(':visible').length;
            if (rjctdAdmisionList >= rejectListsInList) {
              rejectlistsLoadBtn.hide();
            }
        });
      });


    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $userForm = $('.user-entry').clone();
          $('#add-line').click(function(){
            var newUserForm = $userForm.clone();
            $('#container').append(newUserForm);
          });
      });
    </script>
  </body>
</html>