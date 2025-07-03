jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'tutor_elearning_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});

// WordClever – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const tutor_elearning_button = document.getElementById('install-activate-button');

    if (!tutor_elearning_button) return;

    tutor_elearning_button.addEventListener('click', function (e) {
        e.preventDefault();

        const tutor_elearning_redirectUrl = tutor_elearning_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const tutor_elearning_checkData = new FormData();
        tutor_elearning_checkData.append('action', 'check_wordclever_activation');

        fetch(installWordcleverData.ajaxurl, {
            method: 'POST',
            body: tutor_elearning_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = tutor_elearning_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                tutor_elearning_button.textContent = 'Installing & Activating...';

                const tutor_elearning_installData = new FormData();
                tutor_elearning_installData.append('action', 'install_and_activate_wordclever_plugin');
                tutor_elearning_installData.append('_ajax_nonce', installWordcleverData.nonce);

                fetch(installWordcleverData.ajaxurl, {
                    method: 'POST',
                    body: tutor_elearning_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = tutor_elearning_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        tutor_elearning_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    tutor_elearning_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
