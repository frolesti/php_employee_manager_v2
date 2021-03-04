
    <?php require 'views/header.php'?>
    <div>
        <h1>Employee page</h1>

        <div><?php echo $this->message;?></div>
        <form id="employee-form" class="container" action="<?php echo isset($this->employee) ? constant('URL') . "employee/updateEmployee": constant('URL') . "employee/insertEmployee"?>" method="POST">
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputName4">Name</label>
                <input required type="text" class="form-control" id="inputName4" name="employee_name" placeholder="Name" value="<?php echo isset($this->employee) ? $this->employee['employee_name'] : ''?>">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputLastName4">Last Name</label>
                <input required type="text" class="form-control" id="inputLastName4" name="employee_last_name" placeholder="Last Name" value="<?php echo isset($this->employee) ? $this->employee['employee_last_name'] : ''?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputEmail4">Email</label>
                <input required type="email" class="form-control" id="inputEmail4" name="employee_email" placeholder="Email" value="<?php echo isset($this->employee) ? $this->employee['employee_email'] : ''?>">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputGender">Gender</label>
                <select required id="inputGender" name="employee_gender" class="form-control">
                    <?php if (isset($this->employee) && $this->employee['employee_gender'] === 'man') {
                        echo '<option selected value="man">Man</option>
                        <option value="woman">Woman</option>';
                    } elseif (isset($this->employee) && $this->employee['employee_gender'] === 'woman') {
                        echo '<option value="man">Man</option>
                        <option selected value="woman">Woman</option>';
                    } else {
                        echo '<option></option>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>';
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputCity4">City</label>
                <input required type="text" class="form-control" id="inputCity4" name="employee_city" placeholder="Barcelona" value="<?php echo isset($this->employee) ? $this->employee['employee_city'] : ''?>">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputAddress4">Street Address</label>
                <input required type="text" class="form-control" id="inputAddress4" name="employee_street_address" placeholder="Carrer de ..." value="<?php echo isset($this->employee) ? $this->employee['employee_street_address'] : ''?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputState4">State</label>
                <input required type="text" class="form-control" id="inputState4" name="employee_state" placeholder="Barcelona" value="<?php echo isset($this->employee) ? $this->employee['employee_state'] : ''?>">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputAge4">Age</label>
                <input required type="number" class="form-control" id="inputAge4" min="16" max="67" name="employee_age" placeholder="24" value="<?php echo isset($this->employee) ? $this->employee['employee_age'] : ''?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputPostal4">Postal Code</label>
                <input required type="number" class="form-control" id="inputPostal4" name="employee_postal_code" placeholder="08001" value="<?php echo isset($this->employee) ? $this->employee['employee_postal_code'] : ''?>">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputPhone4">Phone Number</label>
                <input required type="tel" class="form-control" id="inputPhone4" name="employee_phone_number" placeholder="692 222 555" value="<?php echo isset($this->employee) ? $this->employee['employee_phone_number'] : ''?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Return</button>
                <input type="hidden" name="emp_no" value="<?php echo isset($this->employee) ? $this->employee['emp_no'] : ''?>">
            </div>
        </div>
    </form>
    </div>

    <?php require 'views/footer.php'?>