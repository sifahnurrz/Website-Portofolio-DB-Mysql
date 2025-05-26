document.addEventListener("DOMContentLoaded", function () {
    // Hamburger menu functionality
    const sideMenu = document.getElementById("sideMenu");
    const hamburger = document.querySelector(".hamburger");
    const closeButton = document.querySelector(".close-btn");

    function toggleMenu() {
        sideMenu.classList.toggle("active");
    }

    hamburger.addEventListener("click", toggleMenu);
    closeButton.addEventListener("click", toggleMenu);

    document.addEventListener("click", function (event) {
        if (!sideMenu.contains(event.target) && !hamburger.contains(event.target)) {
            sideMenu.classList.remove("active");
        }
    });

    // jQuery document ready
    $(function() {
        // Hide popup initially
        $("#popup").hide();

        // Contact form submission
        $("#contactForm").submit(function (e) {
            e.preventDefault();

            let firstName = $("#firstName").val().trim();
            let lastName = $("#lastName").val().trim();
            let email = $("#email").val().trim();
            let phone = $("#phone").val().trim();
            let message = $("#message").val().trim();
            let error = "";

            // Client-side validation
            if (!firstName || !lastName || !email || !phone || !message) {
                error = "Semua kolom wajib diisi.";
            } else if (!/^[A-Za-z\s]+$/.test(firstName)) {
                error = "Nama depan hanya boleh mengandung huruf dan spasi.";
            } else if (!/^[A-Za-z\s]+$/.test(lastName)) {
                error = "Nama belakang hanya boleh mengandung huruf dan spasi.";
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                error = "Format email tidak valid.";
            } else if (!/^\d{10,15}$/.test(phone)) {
                error = "Nomor HP harus terdiri dari 10-15 digit angka.";
            }

            // If validation errors, show them
            if (error) {
                showPopup("Pesan Error!", "✖", error);
                return;
            }

            // If validation passes, send to server
            $.ajax({
                type: "POST",
                url: "submit_contact.php",
                data: $(this).serialize(),
                dataType: "json",
                success: function (response) {
                    if (response.status === 'success') {
                        showPopup("Sukses!", "✔", response.message);
                        $("#contactForm")[0].reset();
                    } else {
                        showPopup("Pesan Error!", "✖", response.message);
                    }
                },
                error: function (xhr, status, error) {
                    showPopup("Error!", "✖", "Terjadi kesalahan saat mengirim formulir.");
                }
            });
        });

        // Close popup handlers
        $(".close-popup").click(function () {
            $("#popup").hide();
        });

        $(window).click(function (event) {
            if ($(event.target).is("#popup")) {
                $("#popup").hide();
            }
        });

        // Helper function to show popup
        function showPopup(title, icon, message) {
            $(".error-title").text(title);
            $(".error-icon").html(icon);
            $("#errorMsg").text(message);
            $("#popup").show();
        }
    });
});