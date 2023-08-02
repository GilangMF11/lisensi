import './bootstrap';
import Swal from 'sweetalert2';
window.Swal = Swal;
import Swal from 'sweetalert2/dist/sweetalert2.js';

// Inside the relevant function or event handler
Swal.fire({
    title: 'Success',
    text: response.data.message, // Assuming the response contains the notification message
    icon: 'success',
    timer: 3000, // Duration to display the notification (in milliseconds)
});
