
  <div class="row">
                    <div class="col-lg-6">

                        <form  id="addform" method="POST">

                            <div class="form-group">
                                <div class='col-md-6'>
                                    <label>Last Name</label>
                                    <input class="form-control"  name="lastname" required="required">
                                    <p class="help-block">Please input name of member</p>
                                </div>
                                 <div class='col-md-6'>
                                    <label>Other Name</label>
                                    <input class="form-control" name="othername" required="required">
                                    <p class="help-block">Please input name of member</p>
                                </div>
                            </div>
                              <div class="form-group">
                                <div class='col-md-3'>
                                     <div class="form-group">
                                <label>Sex</label>
                                 <select class="form-control" name="sex">
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                   
                                </select>
                               
                            </div>

                                   
                                </div>
                                 <div class='col-md-9'>
                                    <label>Birthdate</label>
                                    <input class="form-control" name="birthdate" type="date" required="required">
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email - Address</label>
                                <input class="form-control" name="email" type="email" required="required" placeholder="someone@email.com">
                            </div>
                             <div class="form-group">
                                <div class="col-md-9">
                                <label>Residence</label>
                                <input class="form-control" name="residence" required="required">
                                </div>
                                <div class="col-md-3">
                                <label>Room #No</label>
                                <input class="form-control" name="room" required="required">
                                </div>
                            </div>
                             <div class="form-group">
                                <div class='col-md-6'>
                                    <label>Phone #1</label>
                                    <input class="form-control" type="number" min="0" name="tel1" required="required">
                                </div>
                                 <div class='col-md-6'>
                                    <label>Phone #2</label>
                                    <input class="form-control" type="number" min="0" name="tel2" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                <label>Year</label>
                                <select class="form-control" name="year">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                                </div>
                                <div class="col-md-9">
                                <label>Course</label>
                               <input type="text" required name="course" class="form-control" name="">
                                </div>
                            </div>
                            
                            <div>&nbps;</div>

                            <button style="float:right;" id="add" type="sumbit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-danger">Reset </button>

                        </form>

                    </div>
                    <div class="col-lg-6">
                        
                        <img src="/img/HARVESTPRAISE.JPG" width="500px" height="600px">

                        <div >
                           <button id="result" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                            </button>

<!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                                </div>
                               <div class="modal-body">
                                <img src="/img/status2.gif" id="loading-image">
                                <span id="resultdata">
                                    
                                    
                                </span>
                               </div>
                               <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                        </div>
                    </div>
                        </div>
                         </div>
                    