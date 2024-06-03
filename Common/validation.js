
function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const cpassword = document.getElementById("cpassword").value.trim();
    const telephone = document.getElementById("telephone").value.trim();
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    const telPattern = /^07[0-9]{8}$/;

    if (name === "" || email === "" || password === "" || cpassword === "" || telephone === "") {
        alert("All fields are required!");
        return false;
    }
    if (!emailPattern.test(email)) {
        alert("Invalid email format!");
        return false;
    }
    if (!telPattern.test(telephone)) {
        alert("Invalid telephone number format! It should be like 07XXXXXXXX");
        return false;
    }
    if (password !== cpassword) {
        alert("Passwords do not match!");
        return false;
    }
    return true;
}
