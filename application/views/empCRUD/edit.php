<form method="post" action="<?php echo base_url('/empcrud/update/' . $emp->id); ?>">
    <input type="hidden" name="id" value="<?php echo $emp->id; ?>">
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
                <input type="text" name="emp_name" class="form-control" value="<?php echo $emp->emp_name; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Date Of Birth
            </div>
            <div class="col-md-6">
                <input type="date" name="dob" class="form-control" value="<?php echo $emp->dob; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Gender
            </div>
            <div class="col-md-6">
                <label>
                    <input type="radio" name="gender" value="male" <?php if (trim($emp->gender) == 'male') echo "checked"; ?>> Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female" <?php if (trim($emp->gender) == 'female') echo "checked"; ?>> Female
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                Phone
            </div>
            <div class="col-md-6">
                <input type="text" name="phone" class="form-control" value="<?php echo $emp->phone; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="submit" class="btn btn-warning btn-lg" name="submit" value="Edit Employee">
            </div>
        </div>
    </div>
</form>