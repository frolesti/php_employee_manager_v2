    <?php require 'views/header.php'?>
    <table class="table">
        <theader>
                <td>ID</td>
                <td>Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Gender</td>
                <td>City</td>
                <td>Street Address</td>
                <td>State</td>
                <td>Age</td>
                <td>Postal Code</td>
                <td>Phone Number</td>
                <td>Edit</td>
                <td>Delete</td>
        </theader>
        <tbody>
            <?php foreach($this->employees as $employee){
                echo '<tr><td>'. $employee['emp_no'] . '</td>
                <td>'. $employee['employee_name'] . '</td>
                <td>'. $employee['employee_last_name'] . '</td>
                <td>'. $employee['employee_email'] . '</td>
                <td>'. $employee['employee_gender'] . '</td>
                <td>'. $employee['employee_city'] . '</td>
                <td>'. $employee['employee_street_address'] . '</td>
                <td>'. $employee['employee_state'] . '</td>
                <td>'. $employee['employee_age'] . '</td>
                <td>'. $employee['employee_postal_code'] . '</td>
                <td>'. $employee['employee_phone_number'] . '</td>
                <td><a href="' . URL . 'employee/viewEmployee/' . $employee['emp_no'] . '"><i class="fas fa-marker"></i></a></td>
                <td><a href="' . URL . 'dashboard/deleteEmployee/' . $employee['emp_no'] . '"><i class="fas fa-trash"></i></a></td></tr>';
            }?>
        </tbody>
    </table>
    <?php require 'views/footer.php'?>