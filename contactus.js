function validateForm() {
    const fname = document.getElementById('fname').value;
    const lname = document.getElementById('lname').value;
    const email = document.getElementById('Email').value;
    const message = document.getElementById('message').value;
    
 

    if (fname === '' || lname === '' || email === '' || message === '') {
        alert('Please fill all the fields!');
        return false; 
    }
    
    

    return true;  
}