<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Online Registration </title>
    <style>
        h1{text-align: center;
            background-color: forestgreen;
            width: 170px;
            height: 80px;
            margin: auto;
        }
        div{text-align: center;
            }
        land{
            color: red;
        }
    </style>

</head>
<body>
<h1>
     <span> Online </span> <span> Registration </span>
</h1>
<h2></h2>

<div>
    <form action="../post.php" method="post">
    <p1> Last Name </p1>
    <input name="last_name" type="text" id="last_name">
    <land id="last_name_error"></land>

    <p1> First Name </p1>
    <input name="first_name" type="text" id="first_name">
    <land id="first_name_error"></land>

    <p> Email Address </p>
    <input name="email_address" type="text" id="email">
    <land id="email_error"></land>

    <p> Company (if applicable) </p>
    <input name="company" type="text" id="company">

    <p> Physical Address </p>
    <input name="physical_address" type="text" id="address">
    <land id="address_error"></land>

    <p> Date of Birth </p>
    <input name="date_of_birth" type="date" id="birth">
    <land id="birth_error"></land>

    <p>
        <button type="submit" class="registrationForm"> Submit </button>
    </p>
    </form>

</div>

<script>
    window.onload = function() {
        var lastName = document.getElementById('last_name');
        var firstName = document.getElementById('first_name');
        var email = document.getElementById('email');
        var address = document.getElementById('address');

        var lastNameError = document.getElementById('last_name_error');
        var firstNameError = document.getElementById('first_name_error');
        var emailError = document.getElementById('email_error');
        var addressError = document.getElementById('address_error');

        function validateField(field, errorElement, errorMessage) {
            if (field.value === "" || (field === email && field.value.indexOf('@') === -1)) {
                field.style.border = "1px solid red";
                errorElement.textContent = errorMessage;
                return false;
            } else {
                field.style.border = "";
                errorElement.textContent = "";
                return true;
            }
        }

        lastName.onblur = function() {
            validateField(lastName, lastNameError, "Прізвище не може бути порожнім");
        };

        firstName.onblur = function() {
            validateField(firstName, firstNameError, "Ім'я не може бути порожнім");
        };

        email.onblur = function() {
            validateField(email, emailError, "Введіть коректну електронну адресу");
        };

        address.onblur = function() {
            validateField(address, addressError, "Адреса не може бути порожньою");
        };

        document.querySelector('.registrationForm').addEventListener('click', function(e) {
            var isLastNameValid = validateField(lastName, lastNameError, "Прізвище не може бути порожнім");
            var isFirstNameValid = validateField(firstName, firstNameError, "Ім'я не може бути порожнім");
            var isEmailValid = validateField(email, emailError, "Введіть коректну електронну адресу");
            var isAddressValid = validateField(address, addressError, "Адреса не може бути порожньою");

            if (!isLastNameValid || !isFirstNameValid || !isEmailValid || !isAddressValid) {
                e.preventDefault();
                return false;
            }

            document.querySelector('.registrationForm').innerHTML = "Дякуємо за реєстрацію!";
        });
    };

</script>

</body>
</html>