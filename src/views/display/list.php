
<h1>List Student</h1>
<a href="index.php?page=student&action=show-add">Creat</a>
<table class="table table-striped table-bordered">
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
        <td>Email</td>
        <td>Classroom</td>
        <td>Action</td>
    </tr>

    <?php foreach($students as $key => $student) { ?>
        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $student->getName() ?></td>
            <td><?php echo $student->getAge() ?></td>
            <td><?php echo $student->getAddress() ?></td>
            <td><?php echo $student->getEmail() ?></td>
            <td><?php echo $student->getClassroomId() ?></td>
            <td>
                <a href="index.php?page=student&action=edit&id=<?php echo $student->getId() ?>">Edit  |  </a>
                <a href="index.php?page=student&action=delete&id=<?php echo $student->getId() ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>