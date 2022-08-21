    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            How to insert data into database
                            <a href="<?php echo base_url('index.php/employee/add'); ?>" class="btn btn-primary float-end"> Add Employee </a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone no</th>
                                    <th>Email ID</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($employee as $row): ?>
                            <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->first_name; ?></td>
                                <td><?php echo $row->last_name; ?></td>
                                <td><?php echo $row->phone; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td>
                                    <a href="<?php echo base_url('index.php/employee/edit/' . $row->id)?>" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('index.php/employee/delete/'. $row->id) ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
    </div>