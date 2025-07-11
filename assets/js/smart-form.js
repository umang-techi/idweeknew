	$(function() {

	    /* @telephone number masking 
	    ---------------------------------- */
	    $("#g_guestelephone").mask('999 999-999999', {
	        placeholder: 'X'
	    });
	    $("#i_guestelephone").mask('999 999-999999', {
	        placeholder: 'X'
	    });
	    $("#q_telephone").mask('999 999-999999', {
	        placeholder: 'X'
	    });

	    /* @ date range datepicker 
	    ---------------------------------- */
	    $("#g_checkin").datepicker({
	        defaultDate: "+1w",
	        changeMonth: false,
	        numberOfMonths: 1,
	        minDate: '0',
	        prevText: '<i class="fa fa-chevron-left"></i>',
	        nextText: '<i class="fa fa-chevron-right"></i>',
	        onClose: function(selectedDate) {
	            $("#g_checkout").datepicker("option", "minDate", selectedDate);
	        }
	    });

	    $("#g_checkout").datepicker({
	        defaultDate: "+1w",
	        changeMonth: false,
	        numberOfMonths: 1,
	        prevText: '<i class="fa fa-chevron-left"></i>',
	        nextText: '<i class="fa fa-chevron-right"></i>',
	        onClose: function(selectedDate) {
	            $("#g_checkin").datepicker("option", "maxDate", selectedDate);
	        }
	    });
	    /* @ date range datepicker 
	    ---------------------------------- */
	    $("#i_checkin").datepicker({
	        defaultDate: "+1w",
	        changeMonth: false,
	        numberOfMonths: 1,
	        minDate: '0',
	        prevText: '<i class="fa fa-chevron-left"></i>',
	        nextText: '<i class="fa fa-chevron-right"></i>',
	        onClose: function(selectedDate) {
	            $("#i_checkout").datepicker("option", "minDate", selectedDate);
	        }
	    });

	    $("#i_checkout").datepicker({
	        defaultDate: "+1w",
	        changeMonth: false,
	        numberOfMonths: 1,
	        prevText: '<i class="fa fa-chevron-left"></i>',
	        nextText: '<i class="fa fa-chevron-right"></i>',
	        onClose: function(selectedDate) {
	            $("#i_checkin").datepicker("option", "maxDate", selectedDate);
	        }
	    });

	    /* @ validation and submition
	    ---------------------------------- */
	    $("#smart-form").validate({

	        errorClass: "state-error",
	        validClass: "state-success",
	        errorElement: "em",
	        rules: {
	            g_guestname: {
	                required: true,
	                minlength: 2
	            },
	            g_guestemail: {
	                required: true,
	                email: true
	            },
	            org: {
	                required: true
	            },
	            g_checkin: {
	                required: true
	            },
	            g_checkout: {
	                required: true
	            },
	            g_rooms: {
	                required: true,
	                number: true
	            },
	            g_hot_cat: {
	                required: true,
	            },
	            g_currency: {
	                required: true,

	            },
	            g_budget: {
	                required: true,
	                number: true
	            }
	        },
	        messages: {
	            g_guestname: {
	                required: 'Enter your name',
	                minlength: 'Name must be at least 2 characters'
	            },
	            g_guestemail: {
	                required: 'Enter your email address',
	                email: 'Enter a VALID email address'
	            },
	            org: {
	                required: 'Enter Company Name'
	            },
	            g_checkin: {
	                required: 'Please select checkin date'
	            },
	            g_checkout: {
	                required: 'Please select checkout date'
	            },
	            g_rooms: {
	                required: 'Enter the number of Rooms',
	                number: 'Please enter a only number'
	            },
	            g_hot_cat: {
	                required: 'Select Hotel Category From Options',

	            },
	            g_currency: {
	                required: 'Select Currency from the option ',

	            },
	            g_budget: {
	                required: 'Enter Your Budget  ',
	                number: 'Please enter a only number',
	            }
	        },
	        highlight: function(element, errorClass, validClass) {
	            $(element).closest('.field').addClass(errorClass).removeClass(validClass);
	        },
	        unhighlight: function(element, errorClass, validClass) {
	            $(element).closest('.field').removeClass(errorClass).addClass(validClass);
	        },
	        errorPlacement: function(error, element) {
	            if (element.is(":radio") || element.is(":checkbox")) {
	                element.closest('.option-group').after(error);
	            } else {
	                error.insertAfter(element.parent());
	            }
	        },
	        submitHandler: function(form) {
	            $(form).ajaxSubmit({
	                target: '.result',
	                beforeSubmit: function() {
	                    $('.form-footer').addClass('progress');
	                },
	                error: function() {
	                    $("div.form-msg").show().delay(7000).fadeOut();
	                    $('.form-footer').removeClass('progress');
	                },
	                success: function() {
	                    $('.form-msg').show().delay(7000).fadeOut();
	                    $('.form-footer').removeClass('progress');
	                    $('.field').removeClass("state-error, state-success");
	                    $('#smart-form').resetForm();
	                }
	            });
	        }

	    });
	    /* @ validation and submition
	    		---------------------------------- */
	    $("#smart-form1").validate({

	        errorClass: "state-error",
	        validClass: "state-success",
	        errorElement: "em",
	        rules: {
	            i_guestname: {
	                required: true,
	                minlength: 2
	            },
	            i_guestemail: {
	                required: true,
	                email: true
	            },
	            i_checkin: {
	                required: true
	            },
	            i_checkout: {
	                required: true
	            },
	            i_rooms: {
	                required: true,
	                number: true
	            },
	            i_hot_cat: {
	                required: true,
	            },
	            i_currency: {
	                required: true,

	            },
	            i_budget: {
	                required: true,
	                number: true
	            }
	        },
	        messages: {
	            i_guestname: {
	                required: 'Enter your name',
	                minlength: 'Name must be at least 2 characters'
	            },
	            i_guestemail: {
	                required: 'Enter your email address',
	                email: 'Enter a VALID email address'
	            },
	            i_checkin: {
	                required: 'Please select checkin date'
	            },
	            i_checkout: {
	                required: 'Please select checkout date'
	            },
	            i_rooms: {
	                required: 'Enter the number of Rooms',
	                number: 'Please enter a only number'
	            },
	            i_hot_cat: {
	                required: 'Select Hotel Category From Options',

	            },
	            i_currency: {
	                required: 'Select Currency from the option ',

	            },
	            i_budget: {
	                required: 'Enter Your Budget  ',
	                number: 'Please enter a only number',
	            }
	        },
	        highlight: function(element, errorClass, validClass) {
	            $(element).closest('.field').addClass(errorClass).removeClass(validClass);
	        },
	        unhighlight: function(element, errorClass, validClass) {
	            $(element).closest('.field').removeClass(errorClass).addClass(validClass);
	        },
	        errorPlacement: function(error, element) {
	            if (element.is(":radio") || element.is(":checkbox")) {
	                element.closest('.option-group').after(error);
	            } else {
	                error.insertAfter(element.parent());
	            }
	        },
	        submitHandler: function(form) {
	            $(form).ajaxSubmit({
	                target: '.result1',
	                beforeSubmit: function() {
	                    $('.form-footer').addClass('progress');
	                },
	                error: function() {
	                    $("div.form-msg").show().delay(7000).fadeOut();
	                    $('.form-footer').removeClass('progress');
	                },
	                success: function() {
	                    $('.form-msg').show().delay(7000).fadeOut();
	                    $('.form-footer').removeClass('progress');
	                    $('.field').removeClass("state-error, state-success");
	                    $('#smart-form1').resetForm();
	                }
	            });
	        }

	    });
	    /* @ validation and submition
	    ---------------------------------- */
	    $("#smart-form2").validate({

	        errorClass: "state-error",
	        validClass: "state-success",
	        errorElement: "em",
	        rules: {
	            q_name: {
	                required: true,
	                minlength: 2
	            },
	            q_email: {
	                required: true,
	                email: true
	            },

	        },
	        messages: {
	            q_name: {
	                required: 'Enter your name',
	                minlength: 'Name must be at least 2 characters'
	            },
	            q_email: {
	                required: 'Enter your email address',
	                email: 'Enter a VALID email address'
	            }

	        },
	        highlight: function(element, errorClass, validClass) {
	            $(element).closest('.field').addClass(errorClass).removeClass(validClass);
	        },
	        unhighlight: function(element, errorClass, validClass) {
	            $(element).closest('.field').removeClass(errorClass).addClass(validClass);
	        },
	        errorPlacement: function(error, element) {
	            if (element.is(":radio") || element.is(":checkbox")) {
	                element.closest('.option-group').after(error);
	            } else {
	                error.insertAfter(element.parent());
	            }
	        },
	        submitHandler: function(form) {
	            $(form).ajaxSubmit({
	                target: '.result2',
	                beforeSubmit: function() {
	                    $('.form-footer').addClass('progress');
	                },
	                error: function() {
	                    $("div.form-msg").show().delay(7000).fadeOut();
	                    $('.form-footer').removeClass('progress');
	                },
	                success: function() {
	                    $('.form-msg').show().delay(7000).fadeOut();
	                    $('.form-footer').removeClass('progress');
	                    $('.field').removeClass("state-error, state-success");
	                    $('#smart-form2').resetForm();
	                }
	            });
	        }

	    });

 /* @ validation and submition
	    ---------------------------------- */
	    $("#smart-form3").validate({

	        errorClass: "state-error",
	        validClass: "state-success",
	        errorElement: "em",
	        rules: {
	            q_name: {
	                required: true,
	                minlength: 2
	            },
	            q_email: {
	                required: true,
	                email: true
	            },

	        },
	        messages: {
	            q_name: {
	                required: 'Enter your name',
	                minlength: 'Name must be at least 2 characters'
	            },
	            q_email: {
	                required: 'Enter your email address',
	                email: 'Enter a VALID email address'
	            }

	        },
	        highlight: function(element, errorClass, validClass) {
	            $(element).closest('.field').addClass(errorClass).removeClass(validClass);
	        },
	        unhighlight: function(element, errorClass, validClass) {
	            $(element).closest('.field').removeClass(errorClass).addClass(validClass);
	        },
	        errorPlacement: function(error, element) {
	            if (element.is(":radio") || element.is(":checkbox")) {
	                element.closest('.option-group').after(error);
	            } else {
	                error.insertAfter(element.parent());
	            }
	        },
	        submitHandler: function(form) {
	            $(form).ajaxSubmit({
	                target: '.result2',
	                beforeSubmit: function() {
	                    $('.form-footer').addClass('progress');
	                },
	                error: function() {
	                    $("div.form-msg").show().delay(7000).fadeOut();
	                    $('.form-footer').removeClass('progress');
	                },
	                success: function() {
	                    $('.form-msg').show().delay(7000).fadeOut();
	                    $('.form-footer').removeClass('progress');
	                    $('.field').removeClass("state-error, state-success");
	                    $('#smart-form3').resetForm();
	                }
	            });
	        }

	    });



	});


	