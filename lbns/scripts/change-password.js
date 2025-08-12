// Password Change Functionality
document.addEventListener('DOMContentLoaded', function() {
    const changePasswordBtn = document.getElementById('changePasswordBtn');
    
    if (changePasswordBtn) {
        changePasswordBtn.addEventListener('click', function(e) {
            e.preventDefault();
            showCurrentPasswordModal();
        });
    }
});

// Step 1: Show current password verification modal
function showCurrentPasswordModal() {
    Swal.fire({
        title: '<i class="bi bi-shield-lock-fill text-warning"></i> Verify Current Password',
        html: `
            <div class="text-start">
                <label for="currentPassword" class="form-label fw-semibold">Enter your current password:</label>
                <input type="password" id="currentPassword" class="form-control" placeholder="Current password" autocomplete="current-password">
            </div>
        `,
        showCancelButton: true,
        confirmButtonText: '<i class="bi bi-check-circle me-1"></i> Verify',
        cancelButtonText: '<i class="bi bi-x-circle me-1"></i> Cancel',
        confirmButtonColor: '#198754',
        cancelButtonColor: '#6c757d',
        focusConfirm: false,
        allowOutsideClick: false,
        customClass: {
            popup: 'rounded-4',
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-secondary'
        },
        preConfirm: () => {
            const currentPassword = document.getElementById('currentPassword').value;
            if (!currentPassword) {
                Swal.showValidationMessage('Please enter your current password');
                return false;
            }
            return currentPassword;
        }
    }).then((result) => {
        if (result.isConfirmed) {
            verifyCurrentPassword(result.value);
        }
    });

    // Focus on input after modal shows
    setTimeout(() => {
        document.getElementById('currentPassword')?.focus();
    }, 100);
}

// Step 2: Verify current password with server
function verifyCurrentPassword(currentPassword) {
    // Show loading
    Swal.fire({
        title: 'Verifying...',
        text: 'Please wait while we verify your password',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showConfirmButton: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    const formData = new FormData();
    formData.append('action', 'verify_password');
    formData.append('current_password', currentPassword);

    fetch('../connection/change-password.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === 'valid') {
            showNewPasswordModal();
        } else if (data.trim() === 'invalid') {
            Swal.fire({
                title: 'Incorrect Password',
                text: 'The current password you entered is incorrect. Please try again.',
                icon: 'error',
                confirmButtonText: '<i class="bi bi-arrow-left me-1"></i> Try Again',
                confirmButtonColor: '#dc3545'
            }).then(() => {
                showCurrentPasswordModal(); // Show the modal again
            });
        } else {
            Swal.fire({
                title: 'Error',
                text: 'Something went wrong. Please try again later.',
                icon: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#dc3545'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            title: 'Connection Error',
            text: 'Unable to verify password. Please check your internet connection.',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonColor: '#dc3545'
        });
    });
}

// Step 3: Show new password modal
function showNewPasswordModal() {
    Swal.fire({
        title: '<i class="bi bi-key-fill text-success"></i> Set New Password',
        html: `
            <div class="text-start">
                <div class="mb-3">
                    <label for="newPassword" class="form-label fw-semibold">New Password:</label>
                    <input type="password" id="newPassword" class="form-control" placeholder="Enter new password" autocomplete="new-password">
                    <div class="form-text text-muted">Password must be at least 6 characters long</div>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label fw-semibold">Confirm New Password:</label>
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm new password" autocomplete="new-password">
                </div>
            </div>
        `,
        showCancelButton: true,
        confirmButtonText: '<i class="bi bi-check-circle me-1"></i> Update Password',
        cancelButtonText: '<i class="bi bi-x-circle me-1"></i> Cancel',
        confirmButtonColor: '#198754',
        cancelButtonColor: '#6c757d',
        focusConfirm: false,
        allowOutsideClick: false,
        customClass: {
            popup: 'rounded-4',
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-secondary'
        },
        preConfirm: () => {
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (!newPassword) {
                Swal.showValidationMessage('Please enter a new password');
                return false;
            }
            
            if (newPassword.length < 6) {
                Swal.showValidationMessage('Password must be at least 6 characters long');
                return false;
            }
            
            if (!confirmPassword) {
                Swal.showValidationMessage('Please confirm your new password');
                return false;
            }
            
            if (newPassword !== confirmPassword) {
                Swal.showValidationMessage('Passwords do not match');
                return false;
            }
            
            return { newPassword, confirmPassword };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            updatePassword(result.value.newPassword);
        }
    });

    // Focus on first input after modal shows
    setTimeout(() => {
        document.getElementById('newPassword')?.focus();
    }, 100);
}

// Step 4: Update password on server
function updatePassword(newPassword) {
    // Show loading
    Swal.fire({
        title: 'Updating Password...',
        text: 'Please wait while we update your password',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showConfirmButton: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    const formData = new FormData();
    formData.append('action', 'update_password');
    formData.append('new_password', newPassword);

    fetch('../connection/change-password.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === 'success') {
            Swal.fire({
                title: 'Password Updated!',
                text: 'Your password has been successfully updated.',
                icon: 'success',
                confirmButtonText: '<i class="bi bi-check-circle me-1"></i> Great!',
                confirmButtonColor: '#198754',
                timer: 3000,
                timerProgressBar: true
            });
        } else {
            Swal.fire({
                title: 'Update Failed',
                text: 'Failed to update password. Please try again.',
                icon: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#dc3545'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            title: 'Update Failed',
            text: 'Something went wrong. Please try again later.',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonColor: '#dc3545'
        });
    });
}
