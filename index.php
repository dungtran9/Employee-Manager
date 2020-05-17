<?php
include_once 'src/Employee.php';
include_once 'src/EmplayeeManager.php';
$employeeManager = new EmployeeManager('data.json');
$employees = $employeeManager->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="view/add.php">Add</a>
<table>
    <tr>
        <th>Id</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>DateOfBirth</th>
        <th>Address</th>
        <th>Job</th>
    </tr>
    <?php foreach ($employees as $key =>$value): ?>
    <tr>
        <td><?php echo $employees->getId() ?></td>
        <td><?php echo $employees->getFirstName() ?></td>
        <td><?php echo $employees->getLastName() ?></td>
        <td><?php echo $employees->getDateOfBirth() ?></td>
        <td><?php echo $employees->getAddress() ?></td>
        <td><?php echo $employees->getJob() ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>