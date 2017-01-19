// app.directive('script', function($parse, $rootScope, $compile){
//     return{
//         restrict: 'E',
//         terminal: true,
//         priority: 2000,
//         link: function(scope, element, attr){
//             if(attr.ngSrc){
//                 var domElem = '<script src="'+attr.ngSrc+'" async defer></script>';
//                 $(element).append($compile(domElem)(scope));
//             }
//         }
//     };
// });


app.directive("validOnBlur", ['$http', function($http){
        return{
            require: 'ngModel',
            scope: {},
            link: function(scope, elm, attr, ctrl){
                elm.on('blur', function(){
                    $http({ 
                        method : 'POST',
                        url: 'api/user/checkExist',
                        data: {
                            login : elm.val()
                        },
                        headers: {'Content-Type' : 'application/x-www-form-urlencoded'}
                    })
                    .success(function(data){
                        if(data == true){
                            console.log(ctrl.uniqueex);
                        }
                    })
                    .error(function(data,status,headers,config){
                        console.log(data);
                    });

                });
            }
        };
    }]);

/*!
 * angular-input-match
 * Checks if one input matches another
 * @version v1.4.1
 * @link https://github.com/TheSharpieOne/angular-input-match
 * @license MIT License, http://www.opensource.org/licenses/MIT
 */
(function(window, angular, undefined){'use strict';

angular.module('PortfolioApp').directive('match', match);

function match ($parse) {
    return {
        require: '?ngModel',
        restrict: 'A',
        link: function(scope, elem, attrs, ctrl) {
            if(!ctrl) {
                if(console && console.warn){
                    console.warn('Match validation requires ngModel to be on the element');
                }
                return;
            }

            var matchGetter = $parse(attrs.match);

            scope.$watch(getMatchValue, function(){
                ctrl.$$parseAndValidate();
            });

            ctrl.$validators.match = function(){
                return ctrl.$viewValue === getMatchValue();
            };

            function getMatchValue(){
                var match = matchGetter(scope);
                if(angular.isObject(match) && match.hasOwnProperty('$viewValue')){
                    match = match.$viewValue;
                }
                return match;
            }
        }
    };
}
match.$inject = ["$parse"];
})(window, window.angular);




