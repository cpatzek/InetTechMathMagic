
$(document).ready(function () {
    $('#contact').bootstrapValidator({
        // Icons für gültig, ungültig,..
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            uname: {
                validators: {
                    stringLength: {
                        min: 2,
                        message: 'Bitte geben Sie Ihren Namen ein'
                    },
                    notEmpty: {
                        message: 'Bitte geben Sie Ihren Namen ein'
                    }
                }
            },
            nachricht: {
                validators: {
                    stringLength: {
                        min: 10,
                        max: 400,
                        message: 'Bitte eine Nachricht eingeben'
                    },
                    notEmpty: {
                        message: 'Bitte eine Nachricht eingeben'
                    }
                }
            },
            emailadr: {
                validators: {
                    notEmpty: {
                        message: 'Bitte geben Sie Ihre email-Adresse ein'
                    },
                    emailAddress: {
                        message: 'Bitte eine gültige email-Adresse eingeben'
                    }
                }
            },
        }
    })


        .on('success.form.fv', function (e) {
         
            // Prevent form submission
            e.preventDefault();

            var $form = $(e.target),
                fv = $(e.target).data('formValidation');

            // Do whatever you want here ...

            // Then submit the form as usual
            fv.defaultSubmit();
        });
  
});


//function mail() {
    
//    ref = 'mail.php';
//    window.location.href = 'mail.php';
    
//}


$('form').submit(function () { // catch the form's submit event
    
   // alert('success!');
    //window.location.href = 'mail.php';
});

//$(document).ready(function () {
//    $('#a').load('mail.php');
//});

//$(document).ready(function () {
//    $('#contact').submit(function () {
//        load('mail.php');
//    });
//});


//$(document).ready(function () {
//    $('#lgs').bootstrapValidator({
//        // Icons für gültig, ungültig,..
//        feedbackIcons: {
//            valid: 'glyphicon glyphicon-ok',
//            invalid: 'glyphicon glyphicon-remove',
//            validating: 'glyphicon glyphicon-refresh'
//        },
//        fields: {
//            last_name: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            0: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            1: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            2: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            3: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            4: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            5: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            6: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            7: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            8: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            9: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            10: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//            11: {
//                validators: {
//                    notEmpty: {
//                        message: 'Bitte eine Zahl eingeben'
//                    },
//                    phone: {
//                        country: 'US',
//                        message: 'Bitte eine Zahl eingeben'
//                    }
//                }
//            },
//        }
//    })


//        .on('success.form.fv', function (e) {

//            // Prevent form submission
//            e.preventDefault();

//            var $form = $(e.target),
//                fv = $(e.target).data('formValidation');

//            // Do whatever you want here ...

//            // Then submit the form as usual
//            fv.defaultSubmit();
//        });

//});

