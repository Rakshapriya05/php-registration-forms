$(document).ready(function() {

    // 🔹 Preview uploaded image
    $("#photo").change(function(e) {
        let file = e.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                $("#preview").html(`<img src="${event.target.result}" alt="Preview">`);
            };
            reader.readAsDataURL(file);
        }
    });

    // 🔹 Validate phone number and required fields
    $("#regForm").on("submit", function(event) {
        let phone = $("#phone").val().trim();
        if (!/^[0-9]{10}$/.test(phone)) {
            alert("⚠️ Please enter a valid 10-digit phone number!");
            event.preventDefault();
            return false;
        }

        let email = $("#email").val().trim();
        if (!email.includes("@")) {
            alert("⚠️ Please enter a valid email address!");
            event.preventDefault();
            return false;
        }
    });
});
