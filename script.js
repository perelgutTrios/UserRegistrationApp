document.querySelector("form").addEventListener("submit", function (event) {
    let sillyNumber = document.querySelector("input[name='silly_number']").value;
    if (!/^\d{16}$/.test(sillyNumber)) {
        event.preventDefault();
        alert("Silly Number must be 16 digits!");
    }
});
