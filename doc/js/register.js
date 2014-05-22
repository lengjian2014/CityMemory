/*jshint forin:true, noarg:true, noempty:true, eqeqeq:true, bitwise:true, strict:true, undef:true, curly:true, browser:true, jquery:true, indent:4, maxerr:50, white:false */
/*global passStrengthOpts, trackGAEvent, weakPasswords */
///User Registration

function validate_email(email) {
    // Loose regex client side, gating requests to the more rigorous regex we have in /facebook_auth/forms.py
    var regex = /^[^\s\n@]*[^\s\n\.@]\@[^\s\n\.@][^\s\n@]*(?=\.[^\s\.\n @]+$)\.[^\s\.\n @]+$/;
    return regex.test(email);
}

window.P = window.P || {};
P.Registration = {};
P.Registration.setup = function($form,
                                $username,
                                $email,
                                $password,
                                $nonEmptyText,
                                $submitBtn,
                                errorTextSelector) {
    var CLASS_BOARD_ERROR = 'BoardError',
        $required = $('.required', $form);

    function addValidationListeners($el, fn) {
        $el.on('keyup blur', function(evt) {
            var $this = $(this);

            if (evt.type === 'blur' || $this.data('has-blurred')) {
                fn.call(this, evt);
                $this.data('has-blurred', true);
            }
        });
    };

    addValidationListeners($('input', $username), function(evt) {
        var val = $(this).val(),
            msg;

        if (val.length < 3) {
            $username.addClass(CLASS_BOARD_ERROR);
            msg = $username.data('validation-short');
            $(errorTextSelector, $username).html(msg);
        } else if (val.length > 15) {
            $username.addClass(CLASS_BOARD_ERROR);
            msg = $username.data('validation-long');
            $(errorTextSelector, $username).html(msg);
        } else {
            $username.removeClass(CLASS_BOARD_ERROR);
            $(errorTextSelector, $username).html('');
            $.ajax({
                type: "GET",
                url: '/check_username/',
                dataType: "json",
                data: "check_username="+escape(val)+"&csrfmiddlewaretoken="+$("input[name=csrfmiddlewaretoken]").val(),
                success: function(data) {
                    if (data.status == "success") {
                        $username.removeClass(CLASS_BOARD_ERROR);
                        $(errorTextSelector, $username).html('');
                    } else {
                        $username.addClass(CLASS_BOARD_ERROR);
                        $(errorTextSelector, $username).html(data.message);
                    }
                    validate_all_fields(); 
                }
            });
        }
    });

    addValidationListeners($('input', $email), function(evt) {
        var val = $(this).val();

        if (evt.type === 'blur' || validate_email(val)) {
            $.ajax({
                type: "GET",
                url: '/check_username/',
                dataType: "json",
                data: "check_email=" + encodeURIComponent(val) + "&csrfmiddlewaretoken=" + $("input[name=csrfmiddlewaretoken]").val(),
                success: function(data) {
                    if (data.status == "success") {
                        $email.removeClass(CLASS_BOARD_ERROR);
                        $(errorTextSelector, $email).html('');
                    } else {
                        $email.addClass(CLASS_BOARD_ERROR);
                        $(errorTextSelector, $email).html(data.message);
                    }
                    validate_all_fields();
                }
            });
        } else {
            $email.removeClass(CLASS_BOARD_ERROR);
            $(errorTextSelector, $email).empty();
        }
    });

    // Placeholder polyfill for password input creates an additional input element.
    // Need to account for this when validating.
    addValidationListeners($('input[type=password]', $password), function(){
        var val = $(this).val();
        var passwordDesc = $.fn.teststrength(val, passStrengthOpts, weakPasswords);
        if (passwordDesc[1] == passStrengthOpts.badPassStyle) {
            $password.addClass(CLASS_BOARD_ERROR);
            $(errorTextSelector, $password).html(passwordDesc[0]);
        } else {
            $password.removeClass(CLASS_BOARD_ERROR);
            $(errorTextSelector, $password).html('');
        }
    });

    $nonEmptyText.each(function(index, el) {
        var $el = $(el);

        // If there are multiple inputs, select only the first.  Some control groups have multiple <input>s (e.g. first name and last name)
        addValidationListeners($("input", el).eq(0), function() {
            var val = $(this).val(),
                msg;

            if(!val || val.length == 0) {
                $el.addClass(CLASS_BOARD_ERROR);
                msg = $el.data('error');
                $(errorTextSelector, el).html(msg);
            } else {
                $el.removeClass(CLASS_BOARD_ERROR);
                $(errorTextSelector, el).html('');
            }
        });
    });

    $('input', $required).on('keyup', function(){
        validate_all_fields();
    });
    $('input[type=checkbox]', $required).on('change', function(){
        validate_all_fields();
    });

    //Account Creation Validation
    var validate_all_fields = function() {
        var hasErrors = false;
        $required.each(function() {
            var $input = $('input', this),
                hasErrorClass = $(this).hasClass(CLASS_BOARD_ERROR),
                isValidValue;
            if ($input.is('[type=checkbox]')) {
                isValidValue = $input.is(':checked');
            } else {
                isValidValue = $input.val().length;
            }

            if (hasErrorClass || !isValidValue) {
                hasErrors = true;
                return false;
            }
        });
        if (hasErrors) {
            $submitBtn.addClass('disabled');
        } else {
            $submitBtn.removeClass('disabled');
        }
    };

    if (!$('body').hasClass('mobile')) {
        FancySelect.setup('#id_gender', null, null, true);
    }

    $form.submit(function() {
        var regType;
        validate_all_fields();
        if ($submitBtn.hasClass('disabled')) {
            return false;
        }
        $submitBtn.addClass('disabled');
        regType = $('#id_registration_type').val() || 'unknown';
        trackGAEvent('signup', 'post', regType);
        // Android stops transitioning button to disabled state
        // when form is submitted, so we delay it.
        // Using DOM submit method so it doesn't trigger event.

        // 10/24/12 -- now that we're trying to track this event in GA,
        // we're using the delay for all clients so the request has time
        // to fire.
        window.setTimeout(function() {
            $form[0].submit();
        }, 150);
        return false;
    });
};

