function renderTable(array){
    const jsGrid = document.getElementById('jsGrid');
    jsGrid.innerHTML = '';
    table = document.createElement('table');
    table.classList.add('table_employees');
    // Table head
    const thead = document.createElement('thead');
    thead.classList.add('table_employee__head');
    const headRow = document.createElement('tr');
    headRow.classList.add('table_employee__rowHead');
    thead.appendChild(headRow);
    table.appendChild(thead);
    // Id Table
    const tdId = document.createElement('td');
    tdId.textContent = 'Id';
    tdId.classList.add('table_employee_row__id');
    headRow.appendChild(tdId);
    // Name Table
    const tdName = document.createElement('td');
    tdName.textContent = 'Name';
    tdName.classList.add('table_employee_row__name');
    headRow.appendChild(tdName);
    // secondName Table
    const tdlastName = document.createElement('td');
    tdlastName.textContent = 'Last Name';
    tdlastName.classList.add('table_employee_row__lastName');
    headRow.appendChild(tdlastName);
    // Email Table
    const tdEmail = document.createElement('td');
    tdEmail.textContent = 'Email';
    tdEmail.classList.add('table_employee_row__email');
    headRow.appendChild(tdEmail);
    // Gender Table
    const tdGender = document.createElement('td');
    tdGender.textContent = 'Gender';
    tdGender.classList.add('table_employee_row__gender');
    headRow.appendChild(tdGender);
    // City Table
    const tdCity = document.createElement('td');
    tdCity.textContent = 'City';
    tdCity.classList.add('table_employee_row__city');
    headRow.appendChild(tdCity);
    // Street Table
    const tdStreet = document.createElement('td');
    tdStreet.textContent = 'Street No.';
    tdStreet.classList.add('table_employee_row__street');
    headRow.appendChild(tdStreet);
    // State Table
    const tdState = document.createElement('td');
    tdState.textContent = 'State';
    tdState.classList.add('table_employee_row__state');
    headRow.appendChild(tdState);
    // Age Table
    const tdAge = document.createElement('td');
    tdAge.textContent = 'Age';
    tdAge.classList.add('table_employee_row__age');
    headRow.appendChild(tdAge);
    // Postal Code Table
    const tdPostalCode = document.createElement('td');
    tdPostalCode.textContent = 'Postal Code';
    tdPostalCode.classList.add('table_employee_row__postalCode');
    headRow.appendChild(tdPostalCode);
    // Phone Number Table
    const tdPhoneNumber = document.createElement('td');
    tdPhoneNumber.textContent = 'Phone Number';
    tdPhoneNumber.classList.add('table_employee_row__phoneNumber');
    headRow.appendChild(tdPhoneNumber);
    // Add Button Table
    const tdAdd = document.createElement('td');
    tdAdd.innerHTML = `<button class="" id="submit"></button>`;
    tdAdd.classList.add('table_employee_row__addEmployee');
    headRow.appendChild(tdAdd);

    // Event Listenner Add Employee
    tdAdd.addEventListener('click', ()=>addEmployee());

    array.forEach( employee => {
        const row = document.createElement('tr');
        row.classList.add('table_employee__row');
        for (e in employee) {
            const tableData = document.createElement('td');
            tableData.classList.add('table_employee__data');
            tableData.textContent = employee[e];
            tableData.setAttribute('data', e)
            if(e == 'id') {
                row.prepend(tableData);
            } else {
                row.appendChild(tableData);
            }
        };
        const tableData = document.createElement('td');
        tableData.classList.add('btn_edit_delete')
        const editButton = document.createElement('button');
        editButton.classList.add('edit_btn');
        editButton.innerHTML = '<i class="fa fa-trash"></i>';
        const deleteButton = document.createElement('button');
        deleteButton.classList.add('delete_btn');
        // deleteButton.innerHTML = '&#9932;';
        tableData.appendChild(editButton);
        tableData.appendChild(deleteButton);

        row.appendChild(tableData);
        table.appendChild(row);
        // EventListenner Delete and Edit
        editButton.addEventListener('click', ()=>{
            window.location.assign(`/php-employee-management-v1/src/employee.php?id=${employee['id']}`);
        })
        deleteButton.addEventListener('click', e => deleteEmployee(employee['id']));
    });

    jsGrid.appendChild(table);
}
if(document.querySelector('#jsGrid')){
    renderTable(employeesArray);

}


// employee form section


if(document.querySelector('#employee-form')){
    const employeeForm = document.querySelector('#employee-form');

    employeeForm.addEventListener('submit', e => updateEmployee(e));

    employeeForm.addEventListener('reset', (e) => {
        e.preventDefault();
        window.location.assign('/php-employee-management-v1');
    })
}


async function updateEmployee(e) {
    const employeeForm = document.querySelector('#employee-form');

    e.preventDefault();
    const formdata = new FormData(employeeForm);
    formdata.append("id", window.location.search.substr(-1,1));
    const response = await axios({
        url: '/php-employee-management-v1/src/employee.php',
        method: 'POST',
        data: formdata
    });

    if (response.status === 200) {
        message('Successfully updated employee data!');
    }
}

function message (msg) {
    const message = document.createElement('p');
    message.textContent = msg;
    message.classList.add('updateMessage');
    document.body.appendChild(message);
    setTimeout(() => {
        document.body.removeChild(message);
    }, 3000)
}

async function deleteEmployee(id){
    const formdata = new FormData();
    formdata.append("id", id);
    formdata.append('action', 'delete');
    const response = await axios({
        method: 'POST',
        url: '/php-employee-management-v1/src/dashboard.php',
        data: formdata
    })
    if (response.status === 200) {
        message('Successfully delete employee data!');
        console.log(response);
    }
    await window.location.assign('/php-employee-management-v1/src/dashboard.php');
}

async function addEmployee() {

    const thead = document.querySelector('.table_employee__head');
    const trInput = document.createElement('tr');
        trInput.classList.add('table_employee__row');
        trInput.innerHTML = `
        <form action="" method="post" id="form">
            <td class="table_employee_input"><output type="text name=""></td>
            <td class="table_employee_input"><input type="text name="name"></td>
            <td class="table_employee_input"><input type="text name="lastName"></td>
            <td class="table_employee_input"><input type="text name="email"></td>
            <td class="table_employee_input"><input type="text name="gender"></td>
            <td class="table_employee_input"><input type="text name="city"></td>
            <td class="table_employee_input"><input type="text name="street"></td>
            <td class="table_employee_input"><input type="text name="state"></td>
            <td class="table_employee_input"><input type="text name="age"></td>
            <td class="table_employee_input"><input type="text name="postalCode"></td>
            <td class="table_employee_input"><input type="text name="phoneNumber"></td>
            <input type="submit" value="add" class="table_employee_input">
        </form>
        `;
        thead.appendChild(trInput);

        const formInput = document.querySelector('#form');

        const formdata = new FormData(formInput);
        // Get inputs?
        const response = await axios({
            url: '/php-employee-management-v1/src/dashboard.php',
            method: 'POST',
            data: formdata
        });

        if (response.status === 200) {
            message('Successfully added employee data!');
        }

}

console.log("hola")