function redirectToLoginPage() {
    window.location.href = "login.html";
  }
  
  function redirectToCreateAccountPage() {
        window.location.href = "index.html";
  }
  function Logout() {
        window.location.href = "home.html";
  }
 
 
  
  
  
  document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
    
    // Fetch form data
    var formData = new FormData(document.getElementById("registrationForm"));
    
    // Send form data to the server using fetch
    fetch("pro_registration.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) // Parse response as JSON
    .then(data => {
        if (data.status === "success") {
            // If registration is successful, redirect or show success message
            window.location.href = "login.html"; // Redirect to a success page
        } else {
            // If there's an error, show the error message in an alert box
            alert(data.message);
        }
    })
    .catch(error => {
        // Handle any errors that occur during the fetch operation
        console.error("Error:", error);
    });
  });
  