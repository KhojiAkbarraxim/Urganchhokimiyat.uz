<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('createForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Serialize form data
            const formData = new FormData(form);

            // Perform AJAX form submission
            fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(data => {
                    // Show success toast
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 1500,
                        timerProgressBar: true,
                    });

                    Toast.fire({
                        icon: 'success',
                        title: 'Muvaffaqiyatli kiritildi'
                    });

                    // Redirect after a delay
                    setTimeout(function() {
                        window.location.href =
                            '{{ route('newss.index') }}'; // Replace with your desired URL
                    }, 1500); // 1500 milliseconds = 3 seconds, adjust as needed
                })
        });
    });
</script>
