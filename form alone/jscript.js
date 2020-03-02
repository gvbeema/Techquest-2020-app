//Login to App
$(document).on("click", "#login_btn", function(val) {
    val.preventDefault();
    Validations.login_form_validation();
});

$(document).on("click", "#form_submit", function(val) {
    val.preventDefault();
    Validations.reg_form_validation();
});

// file validation
$('input[type="file"]').on('change', function() {
    Object.values(this.files).forEach(function(file) {
        var validation = true;
        if (file.type == 'application/pdf' || file.type == 'application/msword' || file.type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
            // alert('ok');
        } else {
            alert("File should be either in the form of .pdf, .doc, .docx");
        }
    })
})
var Validations = {

    login_form_validation: function() {
        var login = $("#login").val();
        var password = $("#password").val();

        var validation = true;

        Common.validate_Input("#login");
        if (!login) {
            Common.validate_Input("#login", "User Name Required");
            validation = false;
        }

        Common.validate_Input("#password");
        if (!password) {
            Common.validate_Input("#password", "User Name & Password required");
            validation = false;
        }

        if (validation) {
            document.getElementById("login_form").submit();
        }

    },

    reg_form_validation: function() {
        var email = $("#email").val();
        // var events = $("#events").val();
        var name_1 = $("#name_1").val();
        var ph = $("#ph").val();
        var college = $("#college").val();
        var location = $("#location").val();
        var degree = $("#degree").val();
        var year = $("#year").val();
        var department = $("#department").val();

        var validation = true;

        Common.validate_Input("#email");
        if (!email) {
            Common.validate_Input("#email", "required");
            validation = false;
        }

        var checked = $("#chk input[type=checkbox]:checked").length;
        var isvalid = checked > 0;
        $("#spnError")[0].style.display = isvalid ? "none" : "block";


        Common.validate_Input("#name_1");
        // if (!name_1) {
        //     Common.validate_Input("#name_1", "required");
        //     validation = false;
        // }
        if (name_1.length < 3 || !name_1) {
            Common.validate_Input("#name_1", "minimum 4 letters required");
            validation = false;
        }

        Common.validate_Input("#ph");
        if (ph.length != 10 || !ph) {
            Common.validate_Input("#ph", "10 Numbers required");
            validation = false;
        }

        Common.validate_Input("#college");
        if (college.length < 3 || !college) {
            Common.validate_Input("#college", "minimum 4 letters required and should be a letters required");
            validation = false;
        }

        Common.validate_Input("#location");
        if (location.length < 3 || !location) {
            Common.validate_Input("#location", "minimum 4 letters required and should be a letters");
            validation = false;
        }

        Common.validate_Input("#degree");
        if (!degree) {
            Common.validate_Input("#degree", "required");
            validation = false;
        }


        Common.validate_Input("#year");
        if (!year) {
            Common.validate_Input("#year", "required");
            validation = false;
        }

        Common.validate_Input("#department");
        if (!department) {
            Common.validate_Input("#department", "required");
            validation = false;
        }

        if (validation) {
            document.getElementById("reg_form").submit();
        }

    },
    reg_form_validation1: function() {
        var degree1 = $("#degree1").val();
        var validation = true;

        Common.validate_Input("#degree1");
        if (!degree1) {
            Common.validate_Input("#degree1", "required");
            validation = false;
        }

        if (validation) {
            document.getElementById("reg_form").submit();
        }
    },
    reg_form_validation2: function() {
        var department1 = $("#department1").val();
        var validation = true;

        Common.validate_Input("#department1");
        if (!department1) {
            Common.validate_Input("#department1", "required");
            validation = false;
        }

        if (validation) {
            document.getElementById("reg_form").submit();
        }
    }

}

var Common = {
        validate_Input: function(id, message = null) {
            if (message)
                $(id).parent().append("<p style='color:red;'>" + message + "</p>");
            else
                $(id).parent().find('p').remove();
        }
    }
    // other option for degree
function checkvalue_degree(val) {
    if (val === "others") {
        Validations.reg_form_validation1();
        document.getElementById('degree1').style.display = 'block';
    } else
        document.getElementById('degree1').style.display = 'none';
}


// $('input[type="file"]').on('change', function() {
//     Object.values(this.files).forEach(function(file) {
//         var validation = true;
//         if (file.type == 'application/pdf' || file.type == 'application/msword' || file.type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
//             // alert('ok');
//         } else {
//             alert("File should be either in the form of .pdf, .doc, .docx");
//         }
//     })
// })


// // file format
// function checkvalue_file_format(val) {
//     if (val) {
//         Validations.reg_form_validation3();
//         document.getElementById('file').style.display = 'block';
//     } else
//         document.getElementById('file').style.display = 'none';
// }


// other option for Department
function checkvalue_department(val) {
    if (val === "others") {
        Validations.reg_form_validation2();
        document.getElementById('department1').style.display = 'block';
    } else
        document.getElementById('department1').style.display = 'none';
}

// function checkvalue_file(val) {
//     if (val) {
//         Validations.reg_form_validation3();
//         document.getElementById('department1').style.display = 'block';
//     } else
//         document.getElementById('department1').style.display = 'none';
// }

//Jquery Data tableLayout: 
$(document).ready(function() {
    $('#file_table').DataTable({
        "pagingType": "full_numbers"
    });
});