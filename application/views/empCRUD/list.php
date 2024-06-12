<table class="table">
    <tr>
        <td>First Name</td>
        <td>Date Of Birth</td>
        <td>Gender</td>
        <td>Phone</td>
        <td>Actions</td>
    </tr>
    <?php foreach ($data as $emp) { ?>
        <tr>
            <td><?php echo $emp->emp_name ?></td>
            <td><?php echo $emp->dob ?></td>
            <td><?php echo $emp->gender ?></td>
            <td><?php echo $emp->phone ?></td>
            <td><a href="<?php echo base_url('/empcrud/edit/' . $emp->id); ?>">EDIT</a>
                | <a href="<?php echo base_url('/empcrud/delete/' . $emp->id); ?>">DELETE</a></td>
        </tr>
    <?php
    }
    ?>
</table>