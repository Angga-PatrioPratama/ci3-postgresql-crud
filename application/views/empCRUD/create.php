<form method="post" action="<?php echo base_url('/empcrud/store') ?>">
    <div class="container" style="width:60%">
        <div>
            <?php
            if ($this->session->flashdata('errors')) {
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('errors');
                echo "</div>";
            }
            ?>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Employee Registration Form</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Name
            </div>
            <div class="col-md-6">
                <input type="text" name="emp_name" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Date Of Birth
            </div>
            <div class="col-md-6">
                <input type="date" name="dob" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Gender
            </div>
            <div class="col-md-6">
                Male: <input type="radio" name="gender" value="male">
                Female: <input type="radio" name="gender" value="female">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Phone
            </div>
            <div class="col-md-6">
                <input type="text" name="phone" class="form-control">
            </div>
        </div> <!-- Tutup div row di sini -->

        <div class="row">
            <div class="col-md-12">
                <input type="submit" class="btn btn-warning btn-lg" name="submit" value="Add Employee">
            </div>
        </div>
    </div>
</form>