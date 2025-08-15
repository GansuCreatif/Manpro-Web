document.addEventListener("DOMContentLoaded", function () {
    const radios = document.querySelectorAll(
        '#select-modal input[type="radio"]'
    );
    const nextBtn = document.getElementById("next-step-btn");
    let selectedUrl = null;

    radios.forEach((radio) => {
        radio.addEventListener("change", function () {
            selectedUrl = this.getAttribute("data-url");
            nextBtn.disabled = !selectedUrl; // enable kalau sudah pilih
        });
    });

    nextBtn.addEventListener("click", function () {
        if (selectedUrl && selectedUrl !== "#") {
            // Contoh kalau mau redirect
            window.location.href = selectedUrl;

            // Atau kalau mau load form di dalam modal, panggil fungsi lain
            // loadForm(selectedUrl);
        }
    });
});
