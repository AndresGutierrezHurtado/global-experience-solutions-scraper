function validateForm(event) {
    const $input = document.querySelector("input[name=url]");
    const $label = $input.closest(".form-control");

    if (document.querySelector(".label-error")) {
        $label.querySelector(".label-error").remove();
        $input.classList.remove("input-error");
    }

    try {
        const data = Object.fromEntries(new FormData(document.querySelector(".url-form")));

        if (!data.url) {
            throw new Error("El url no debe estar vacio.")
        }
        if (!validator.isURL(data.url)) {
            throw new Error("El url no es valido.")
        }

        return true;
    } catch (error) {
        const $errorLabel = document.createElement("label");
        $errorLabel.innerHTML = `<p class="text-red-500">${error.message}</p>`;
        $errorLabel.classList.add("label-error");
        $input.classList.add("input-error");
        $label.appendChild($errorLabel);

        return false;
    }
}