// Author : Sibin V M, 
// Page Title : Queries,
// Created Date : 03-06-2022


// admin constants

const $adminEmail = $('#adminEmail');
const $adminPassword = $('#adminPassword');

const errorMsg = $('#errorMsg');
const adminLoginBtn = $('#adminLoginBtn');

const addNewEmployeeBtn = $('#addNewEmployeeBtn');
const employeesDetails = $('#employeesDetails');

const $employeeName = $('#employeeName');
const $employeeEmail = $('#employeeEmail');
const $employeePassword = $('#employeePassword');
const $employeeGender = $('form.employeeGender');
const $employeeAddress = $('#employeeAddress');

const $approveBtn = $('#approveBtn');

// user constants

const $userEmail = $('#userEmail');
const $userPassword = $('#userPassword');

const userLoginBtn = $('#userLoginBtn');

const personalDetails = $('#personalDetails');
const leaveApplication = $('#leaveApplication');
const leaveStatus = $('#leaveStatus');

const startDate = $('#startDate');


const app = {

    // data fetching

    dataFetch : function(url, data) {

        $.ajax({

            url : url,
            type : "GET",

            success : data
        });

    },

    // validation

    validation : function(auth, email, password, redirectLocation) {

        app.dataFetch("/controller/UserController.php", function(data) {

            JSON.parse(data).forEach(function(item) {
                console.log(auth)

                if(auth == 'user') {

                    if (item['email'] == email.val() && item['password'] == password.val() && item['is_admin'] == 0) {

                        window.location = redirectLocation+'?id='+item["id"];
                        
                    }
                    else {
    
                        errorMsg.css('visibility', 'visible');
                        errorMsg.text('Invalid Credentials');
    
                    };
    
                }
                else {

                    if (item['email'] == email.val() && item['password'] == password.val() && item['is_admin'] == 1) {

                        window.location = redirectLocation+'?id='+item["id"];
                        
                    }
                    else {
    
                        errorMsg.css('visibility', 'visible');
                        errorMsg.text('Invalid Credentials');
    
                    };

                }

                
            });

        });

    },

    // change sidebar

    changeSideBar : function(id) {

        $("#iframe").attr('src', id+'.php');  

    },



};


// click events

adminLoginBtn.click(function() {

    app.validation('admin', $adminEmail, $adminPassword, '/controller/ValidationController.php');

});

userLoginBtn.click(function() {

    app.validation('user', $userEmail, $userPassword, '/controller/ValidationController.php');

});


//admin

employeesDetails.click(function() {
    app.changeSideBar('details');
});


//empployees

personalDetails.click(function() {
    app.changeSideBar('personalDetails');
});

leaveApplication.click(function() {
    app.changeSideBar('leaveApplication');
});

leaveStatus.click(function() {
    app.changeSideBar('leaveStatus');
});


// adjust iframe height

function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
}

