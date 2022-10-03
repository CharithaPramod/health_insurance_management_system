
function open_box(value) {
    if(value == 1) {
        element = document.querySelector('.display_box_1');
        element.style.visibility = 'visible';
    }
    else if(value == 2) {
        element = document.querySelector('.display_box_2');
        element.style.visibility = 'visible';
    }
    else if(value == 3) {
        element = document.querySelector('.display_box_3');
        element.style.visibility = 'visible';
    }
    else if(value == 4) {
        element = document.querySelector('.display_box_4');
        element.style.visibility = 'visible';
    }
}


function close_box(value) {
    if(value == 1) {
        element = document.querySelector('.display_box_1');
        element.style.visibility = 'hidden';
        
    }
    else if(value == 2) {
        element = document.querySelector('.display_box_2');
        element.style.visibility = 'hidden';
    }
    else if(value == 3) {
        element = document.querySelector('.display_box_3');
        element.style.visibility = 'hidden';
        
        
    }
    else if(value == 4) {
        element = document.querySelector('.display_box_4');
        element.style.visibility = 'hidden';
        
    }
  
}

function channeling_method(value) {
    if(value == 1) {
        element = document.querySelector('.channeling_content');
        element.style.visibility = 'visible';
        var contact = '011-4567821';
        var name = 'Dr.Saman Dissanayaka';
        
    }
    else if(value == 2) {
        element = document.querySelector('.channeling_content');
        element.style.visibility = 'visible';
        var contact = '011-1234567';
        var name = 'Dr.Amila Wijesooriya';
    }
    else if(value == 3) {
        element = document.querySelector('.channeling_content');
        element.style.visibility = 'visible';
        var contact = '011-7821456';
        var name = 'Dr.Sugath Narayana';
        
    }
    else if(value == 4) {
        element = document.querySelector('.channeling_content');
        element.style.visibility = 'visible';
        var contact = '011-5678345';
        var name = 'Dr. Namal Wickramasinghe';
    }     
    else if(value == 5) {
        element = document.querySelector('.channeling_content');
        element.style.visibility = 'visible';
        var contact = '011-9878345';
        var name = 'Dr. Sunil Themiya';
    }  
    doc_contact.innerHTML = contact;
    doc_name.innerHTML = name;        
}

function amb_hot_line() {
    element = document.querySelector('.amb_hot_line_num');
    if(element.style.visibility == 'hidden') {
        element.style.visibility = 'visible';
    }
    else {
        element.style.visibility = 'hidden';
    }
}

function doc_hot_line() {
    element = document.querySelector('.doc_hot_line_num');
    if(element.style.visibility == 'hidden') {
        element.style.visibility = 'visible';
    }
    else {
        element.style.visibility = 'hidden';
    }
}

function checkup_place(value) {
    if(value == 1) {
        element = document.querySelector('.checkup_content');
        element.style.visibility = 'visible';
        var contact = '011-4567821';
        var address = "114 Norris Canal Rd, Colombo 01000";
        
    }
    else if(value == 2) {
        element = document.querySelector('.checkup_content');
        element.style.visibility = 'visible';
        var contact = '011-1234567';
        var address = 'Nawaloka Hospitals PLC, Colombo 2, Sri Lanka.';
    }
    else if(value == 3) {
        element = document.querySelector('.checkup_content');
        element.style.visibility = 'visible';
        var contact = '011-7821456';
        var address = '3 Alfred Pl, Colombo 00300';
        
    }
    else if(value == 4) {
        element = document.querySelector('.checkup_content');
        element.style.visibility = 'visible';
        var contact = '011-5678345';
        var address = 'Narahenpita, Colombo 05, Sri Lanka.';
    }     
    che_contact.innerHTML = contact;
    che_address.innerHTML = address;        
}