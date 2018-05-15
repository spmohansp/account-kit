
		// initialize Account Kit with CSRF protection
		AccountKit_OnInteractive = function(){
			AccountKit.init(
				{
					appId:"155053671798564", 
					state:"vvbv5454545", 
					version:"v1.0",
					fbAppEventsEnabled:true,
					redirect:"login_success.php",
					debug:true
				}
			);
		};

		// login callback
		function loginCallback(response) {
			if (response.status === "PARTIALLY_AUTHENTICATED") {
				var code = response.code;
				var csrf = response.state;
				// Send code to server to exchange for access token
			}
			else if (response.status === "NOT_AUTHENTICATED") {
			  // handle authentication failure
			}
			else if (response.status === "BAD_PARAMS") {
			  // handle bad parameters
			}
		}

		// phone form submission handler
		function smsLogin() {
			var countryCode = document.getElementById("country_code").value;
			var phoneNumber = document.getElementById("phone_number").value;
			// console.log("phoneNumber");

				AccountKit.login(
					'PHONE', 
					{countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
					loginCallback
				);
			
		}
		function loginCallback(response) {
	    if (response.status === "PARTIALLY_AUTHENTICATED") {
	      document.getElementById("code").value = response.code;
	      document.getElementById("csrf").value = response.state;
	      document.getElementById("login_success").submit();
	    }
	  }

		 function checkInput(ob) {
		  var invalidChars = /[^0-9]/gi
		  if(invalidChars.test(ob.value)) {
	      ob.value = ob.value.replace(invalidChars,"");
	      }
	}