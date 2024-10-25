(function () {
    "use strict";

    let forms = document.querySelectorAll(".php-email-form");

    forms.forEach(function (e) {
        e.addEventListener("submit", function (event) {
            event.preventDefault();

            let thisForm = this;
            let action = thisForm.getAttribute("action");

            // Cek apakah action diatur
            if (!action) {
                displayError(thisForm, "The form action property is not set!");
                return;
            }

            // Ambil elemen loading, error, dan sent
            let loadingElement = thisForm.querySelector(".loading");
            let errorElement = thisForm.querySelector(".error-message");
            let sentElement = thisForm.querySelector(".sent-message");

            // Tampilkan loading dan sembunyikan pesan lainnya
            if (loadingElement) loadingElement.classList.add("d-block");
            if (errorElement) errorElement.classList.remove("d-block");
            if (sentElement) sentElement.classList.remove("d-block");

            let formData = new FormData(thisForm);

            // Kirim data form
            fetch(action, {
                method: "POST",
                body: formData,
                headers: { "X-Requested-With": "XMLHttpRequest" },
            })
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error(
                            `${response.status} ${response.statusText}`
                        );
                    }
                })
                .then((data) => {
                    // Sembunyikan loading
                    if (loadingElement)
                        loadingElement.classList.remove("d-block");

                    // Tampilkan pesan sukses atau error
                    if (data.success) {
                        if (sentElement) sentElement.classList.add("d-block");
                        thisForm.reset();
                    } else {
                        throw new Error(
                            data.error ||
                                "Form submission failed without an error message."
                        );
                    }
                })
                .catch((error) => {
                    displayError(thisForm, error.message);
                });
        });
    });

    function displayError(thisForm, error) {
        let loadingElement = thisForm.querySelector(".loading");
        if (loadingElement) loadingElement.classList.remove("d-block");

        let errorElement = thisForm.querySelector(".error-message");
        if (errorElement) {
            errorElement.innerHTML = error;
            errorElement.classList.add("d-block");
        }
    }
})();
