<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            Employee edit page
                            <a href="<?php echo base_url('index.php/employee'); ?>" class="btn btn-danger float-end"> Back </a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('index.php/employee/update/'. $employee->id)?>" method="POST">
                            <div class="form-group">    
                                <label for="">First Name</label>    
                                <input type="text" name="first_name" value="<?= $employee->first_name?>" class="form-control">
                                <small> <?php echo form_error('first_name')?> </small>
                            </div>

                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" value="<?= $employee->last_name?>" class="form-control">
                                <small> <?php echo form_error('last_name')?> </small>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Phone number</label>
                                <input type="text" name="phone" value="<?= $employee->phone?>" class="form-control">
                                <small> <?php echo form_error('phone')?> </small>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="text" name="email" value="<?= $employee->email?>" class="form-control">
                                <small> <?php echo form_error('email')?> </small>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Update</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>