function capitalizeNames(input)
    {
    var inputValue = input.value;
    var names = inputValue.split(' ');
    var capitalizedNames = names.map(function(name) {
      return name.charAt(0).toUpperCase() + name.slice(1);
    });
    var capitalizedValue = capitalizedNames.join(' ');
    input.value = capitalizedValue;
  }
function capitalizeInput(input) 
  {
    var inputValue = input.value;
    var capitalizedValue = inputValue.toUpperCase();
    input.value = capitalizedValue;
  }
function validateNIC(input) 
  {
    var nicValue = input.value;
    var oldNICPattern = /^\d{9}[VvXx]$/;
    var newNICPattern = /^\d{12}$/;
    if (oldNICPattern.test(nicValue) || newNICPattern.test(nicValue)) {
      input.setCustomValidity('');
      document.getElementById("nic-format-example").style.display = "none";
    } else {
      input.setCustomValidity('Invalid NIC format');
      document.getElementById("nic-format-example").style.display = "inline";
    }
  }



    function toggleUserFields(userType) {
        const internalFields = document.getElementById("internal-fields");
        const externalFields = document.getElementById("external-fields");

        if (userType === "internal") {
          internalFields.style.display = "block";
          externalFields.style.display = "none";
          clearExternalFields();
        } else if (userType === "external") {
          internalFields.style.display = "none";
          externalFields.style.display = "block";
          clearInternalFields();
        }
      }

      function clearInternalFields() {
        document.getElementsByName("faculty")[0].value = "";
        document.getElementsByName("department")[0].value = "";
        document.getElementsByName("designation")[0].value = "";
      }

      function clearExternalFields() {
        document.getElementsByName("organization")[0].value = "";
        document.getElementsByName("external-address")[0].value = "";
        document.getElementsByName("purpose")[0].value = "";
      }
      function validatePhoneNumber(input) 
      {
            var phoneNumber = input.value;
            var cleanedNumber = phoneNumber.replace(/\D/g, '');
            var phonePattern = /^(?:\+?94|0)(?:7\d|9\d|2\d|3\d|4\d|5\d|6\d|8\d)(?:\d{7}|\d{8})$/;
            if (phonePattern.test(cleanedNumber)) {
                input.setCustomValidity('');
                document.getElementById("phone-error-msg").style.display = "none";
            } else {
                input.setCustomValidity('Invalid phone number format');
                document.getElementById("phone-error-msg").style.display = "inline";
            }
        }
        function validateEmail(input) {
          var emailValue = input.value;
          var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
          
          if (emailPattern.test(emailValue)) {
            input.setCustomValidity('');
            document.getElementById("email-validation-message").textContent = '';
          } else {
            input.setCustomValidity('Invalid email address');
            document.getElementById("email-validation-message").textContent = 'Please enter a valid email address.';
          }
        }
    document.querySelectorAll("input").forEach(function (input) {
        input.addEventListener("focus", function () {
            document.getElementById(input.name + "-error-msg").style.display = "none";
        });
    });

  function toggleUserFields(extraDate) {
    const yesDiv = document.getElementById("yes");

      if (extraDate === "yes") {
        yesDiv.style.display = "block";
        clearInternalFields();
      } else {
        yesDiv.style.display = "none";
        clearInternalFields();
      }
    }

    function clearInternalFields() {
      document.getElementsByName("days")[0].value = "";
    }



    