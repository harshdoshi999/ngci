App.factory('dataFactory', ['$http', function($http) {

    var urlBase = 'api/';
    
    var dataFactory = {};

    /*-------------------------------*
    | Login / Sign Up Module
    *--------------------------------*/

    dataFactory.validateLogin = function (loginCredentials) {
        return $http.post(urlBase+'login', loginCredentials);
    };

    dataFactory.signUp = function (signUpdata) {
        return $http.post(urlBase+'signup', signUpdata);
    };

    dataFactory.doLogOut = function () {
        return $http.get(urlBase+'logout');
    };

    /*-------------------------------*
    | Categories Module
    *--------------------------------*/
    dataFactory.getCategories = function () {
        return $http.get(urlBase+'getCategories');
    };

    /*-------------------------------*
    | Dashboard Module
    *--------------------------------*/

    dataFactory.getUserData = function(token) {
        return $http.get(urlBase+'getUserData');
    }

    return dataFactory;
}]);