//Admin login form js//
let user = "admin";
let passwords = "sahoo";
function login() {

    let userName = document.getElementById("user").value;
    let password = document.getElementById("passwords").value;

    if (userName === user && password === passwords) {


        window.location.href = "dashboard.php";
        alert("Admin login successfully")
    }
    else if (userName === "" && password === "") {
        alert("Please enter correct username and password...")
    }
}
//contact details js//
function contact() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;

    if (name === "" && email === "" && message === "") {
       alert("Please fill all the fields...");
        
        // Optionally, you can reset the form here
        document.getElementById("contactForm").reset();
        

       
    } else {
         window.location.href="index.html";
        alert("Thank you for contacting us, we will get back to you soon!");
        
    }
}