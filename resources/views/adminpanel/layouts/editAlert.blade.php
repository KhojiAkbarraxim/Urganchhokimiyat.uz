<script>
// Function to handle form submission
function submitForm() {
    // Prevent default form submission behavior
    event.preventDefault();

    // Your form submission logic here

    // Assuming form submission is successful
    // Trigger SweetAlert toast
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener("mouseenter", Swal.stopTimer);
            toast.addEventListener("mouseleave", Swal.resumeTimer);
        }
    });

    Toast.fire({
        icon: "success",
        title: "Ma'lumotlar muvaffaqiyatli o'zgartirildi"
    });

    // Submit the form programmatically after showing the toast
    setTimeout(function() {
        document.getElementById("editForm")
    .submit(); // Replace 'your_form_id' with the actual ID of your form
    }, 1500); // Wait for the same duration as the toast timer
}
</script>
