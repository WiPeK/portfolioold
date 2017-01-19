'use strict';

angular.module("PortfolioApp")
	.controller('HomeCtrl', ['$scope', '$http', '$sce', function($scope, $http, $sce, $location){

		$scope.renderHtml = function(htmlCode){
			return $sce.trustAsHtml(htmlCode);
		};

	}])
	.controller('CVCtrl', ['$scope', '$http', function($scope, $http, $location){
		
	}])
	.controller('ProjectCtrl', ['$scope', '$http', function($scope, $http, $location){
	
	}])
	.controller('AboutCtrl', ['$scope', '$timeout', function($scope, $timeout){
		$scope.percent = {
			html : 0,
			css : 0,
			bootstrap : 0,
			jsjq : 0,
			angular : 0,
			php : 0,
			codeigniter : 0,
			sql : 0
		};
        $scope.options = {
            animate:{
                duration:1300,
                enabled:true
            },
            barColor:'#FDB020',
            trackColor: '#E0E0E0',
            lineWidth: 10,
            scaleColor:false,
            lineCap:'circle'
        };

        $timeout(function(){
        		$scope.percent = {
        			html : 85,
					css : 80,
					bootstrap : 75,
					jsjq : 30,
					angular : 25,
					php : 50,
					codeigniter : 75,
					sql : 50
        		};
        }, 1500);
	}])
	.controller('ContactCtrl', ['$scope', '$http', function($scope, $http, $location){

		$scope.submitContact = function(form){
			if(form.$valid){
				$('[ng-model="contForm.email"]').removeClass('ng-invalid').addClass('ng-valid');
			}
		}

		$scope.valid_err = false;
		$scope.val_err = '';
		$scope.successMessage = false;
		$scope.successMessages = '';
		$scope.failedMessage = false;
		$scope.failedMessages = '';


		$scope.contact = function(){
				$http({
					method: 'POST',
					url: base_url + 'api/Contact/contact_api',
					data: $scope.contForm,
					headers: {'Content-Type' : 'application/x-www-form-urlencoded'}
				})
				.success(function(data, status, headers, config){

					$scope.$watch('valid_err', function(){
						if(data.valid_err === true)
						{
							$scope.valid_err = true;
							$scope.val_err = data.valid_errs;
						}
					});

					$scope.$watch('successMessage', function(){
						if(data.emailToMe === true && data.emailToUser === true){
							$scope.successMessage = true;
							$scope.successMessages = 'Wiadomość została pomyślnie wysłana.';
						}
						else
						{
							$scope.failedMessage = true;
							$scope.failedMessages = 'Coś poszło nie tak. Wiadomość mogła nie zostać wysłana.';
						}
					});

				})
				.error(function(data, status, headers, config){
					throw new Error('Cos nie tak z wysyłaniem');
					$scope.failedMessage = true;
					$scope.failedMessages = 'Coś poszło nie tak. Wiadomość mogła nie zostać wysłana.';
				});
		};

	}])
	.controller('PrPortfolioCtrl', ['$scope', '$http', function($scope, $http, $location){
	
	}])
	.controller('PrMetinCtrl', ['$scope', '$http', function($scope, $http, $location){
	
	}])
	.controller('PrWipekCtrl', ['$scope', '$http', function($scope, $http, $location){
	
	}])
	.controller('PrTeslaCtrl', ['$scope', '$http', function($scope, $http, $location){
	
	}])
	.controller('PrDrukCtrl', ['$scope', '$http', function($scope, $http, $location){
	
	}])
	.controller('PrMapyCtrl', ['$scope', '$http', function($scope, $http, $location){
	
	}])
	.controller('PrKamienieCtrl', ['$scope', '$http', function($scope, $http, $location){
	
	}]);