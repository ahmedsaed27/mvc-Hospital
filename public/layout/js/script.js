let IdNumber = document.getElementById('idNumber');
let date = document.getElementById('date');
let name = document.getElementById('pateintName');
let Age = document.getElementById('age');
let job = document.getElementById('Job');
let address = document.getElementById('address');
let message = document.getElementById('sendby');
let arrivalTime = document.getElementById('arrivalTime');
let roomNumber = document.getElementById('roomNum');
let roomarrivaltime = document.getElementById('roomArrivalTime');
let notics = document.getElementById('Notics');
let add = document.getElementById('add');

//creat new petient


let datapatient;
if (localStorage.pateint != null) {
    datapatient = JSON.parse(localStorage.patient)

} else {
    datapatient = [];
}



add.onclick = function() {
    let newpateint = {
        IdNumber: IdNumber.value,
        name: name.value,
        job: job.value,
        address: address.value,
        message: message.value,
        arrivalTime: arrivalTime.value,
        roomNumber: roomNumber.value,
        roomarrivaltime: roomarrivaltime.value,
        notics: notics.value,
        Age: Age.value,
    }
    datapatient.push(newpateint);
    localStorage.setItem('patient', JSON.stringify(datapatient))


    cleardata();
}



//clear inputs
function cleardata() {
    IdNumber.value = '';
    date.value = '';
    name.value = '';
    Age.value = '';
    job.value = '';
    address.value = '';
    message.value = '';
    arrivalTime.value = '';
    roomNumber.value = '';
    roomarrivaltime.value = ' ';
    notics.value = '';
}


//delete pateint