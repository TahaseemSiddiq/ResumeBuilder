function generateCV() {
    let nameField = document.getElementById("nameField").value ;
    let name = document.getElementById("name") ;
    name.innerHTML = nameField ;
    
    let phoneField = document.getElementById("phoneField").value;
    let phone = document.getElementById("phone");
    phone.innerHTML=phoneField;

    document.getElementById("address").innerHTML = document.getElementById("addressField").value ;
    //common links
    document.getElementById("email").innerHTML = document.getElementById("emailField").value ;
    document.getElementById("LinkedIn").innerHTML = document.getElementById("LinkedInField").value ;

    document.getElementById("objective").innerHTML = document.getElementById("objectiveField").value ;
}
function printCV() {
    window.print();
}