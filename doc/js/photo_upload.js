///Photo Upload from Registration

$(function(){

    var $imgUrlField = $('#id_user_image_url');
    var $photoContainer = $('#CompletePhoto');
    var $form = $('.RegisterForm');
    var $uploadBtn = $('.upload', $photoContainer);

    // Load an existing profile image
    function update_profile_photo() {
        $("img", $photoContainer).attr('src', $imgUrlField.val());
    };

    //profile image field validation
    $('#id_img').on('change', function() {
        var file_name = $(this).val(),
            user_image_url = $imgUrlField.val(),
            oldBtnText;
        if(!user_image_url && (!file_name || file_name.length == 0)) {
            update_profile_photo();
        } else {
            //Go out an try to create a temp profile photo
            $form.ajaxSubmit({
                dataType: 'json',
                iframe: true,
                url: '/register/profile_photo/',
                success: function(data) {
                    var revertBtn = function() {
                        $uploadBtn.text(oldBtnText).removeClass('disabled');
                    },
                    imgLoader, imgUrl;

                    if (data.status == 'success') {
                        imgUrl = data.image_url;
                        $imgUrlField.val(imgUrl);
                        imgLoader = new Image();
                        imgLoader.onload = function() {
                            update_profile_photo();
                            revertBtn();
                        };
                        imgLoader.onerror = function() {
                            revertBtn();
                        };
                        imgLoader.src = imgUrl;
                    } else {
                        revertBtn();
                    }
                }
            });
            oldBtnText = $uploadBtn.text();
            $uploadBtn.text($uploadBtn.data('text-uploading')).addClass('disabled');
        }
    });

    // FF doesn't natively open file upload on label click
    if ($.browser.mozilla) {
        $uploadBtn.on('click', function() {
            $('#id_img').click();
        });
    }

    //Update the profile photo to start with
    update_profile_photo();

});
