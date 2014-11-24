App.controller('authController', ['$scope','$rootScope','dataFactory','$location','$cookieStore','ipCookie', function($scope,$rootScope,dataFactory,$location,$cookieStore,ipCookie){
	if(ipCookie('cookie_login')){
		$location.path("dashboard");
	}
	$scope.pageClass = 'page-home';
	$rootScope.rightmenu = [];
	/** Submitting signup form */
	$scope.login = function(isValid) {
		if(isValid) {
			var loginCredentials = {
                "email" : $scope.login.email,
                "password" : $scope.login.password
            };
            dataFactory.validateLogin(loginCredentials)
                .success(function (response,status) {
                	var emailText = 'Email: '+response.email;
                	console.log(emailText);
                	var passwordText = 'Password: '+response.password;
                	console.log(passwordText);
                	$location.path("about");
                })
                .error(function(error,status) {

                	/** Helper function for showing message */
                	/**
                	| @arg1 = element to be selected for messsage
                	| @arg2 = error or success class to be applied to element 
                	| @arg3 = error message string
                	*/
                	showMessage("msg","danger",error.message+" Error Code "+status+".");
                });
		}
	}

}])