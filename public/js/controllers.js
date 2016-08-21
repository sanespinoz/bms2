'use strict';


/* Controllers */

var dreamsControllers = angular.module('dreamsControllers', []);

dreamsControllers.controller('AppCtrl', ['$scope', 'Log', 'Logout',
    function AppCtrl($scope, Log, Logout, Dream) {

        // Variables
        $scope.isLogged = false;
        $scope.data = {};
        $scope.page = 1;
        $scope.previous = false;
        $scope.next = false;

        /* Initial log */
        Log.get({},
            function success(response) {
                $scope.isLogged = response.auth;
            },
            function error(errorResponse) {
                console.log("Error:" + JSON.stringify(errorResponse));
            }
        );

        /* Pagination 
        $scope.paginate = function (direction) {
            if (direction === 'previous')
                --$scope.page;
            else if (direction === 'next')
                ++$scope.page;
            Dream.get({page: $scope.page},  //LLAMABA A DREAM GET PAGINA 1
                function success(response) {
                    $scope.data = response.data;
                    $scope.previous = response.prev_page_url;
                    $scope.next = response.next_page_url;
                },
                function error(errorResponse) {
                    console.log("Error:" + JSON.stringify(errorResponse));
                }
            );
        };

       Initial page 
        $scope.paginate();*/

        /* Logout */
        $scope.logout = function () {
            Logout.get({},
                function success() {
                    $scope.isLogged = false;
                    $.each($scope.data, function(key) {
                        $scope.data[key].is_owner = false;
                    });
                },
                function error(errorResponse) {
                    console.log("Error:" + JSON.stringify(errorResponse));
                }
            );
        };
  }]);
       

   

dreamsControllers.controller('LoginCtrl', ['$scope', 'Login',
    function LoginCtrl($scope, Login) {
        $scope.isAlert = false;

        /* Login */
        $scope.submit = function () {
            $scope.errorEmail = null;
            $scope.errorPassword = null;
            $scope.isAlert = false;
            Login.save({}, $scope.formData,
                function success(response) {
                    if (response.result === 'success') {
                        $scope.$parent.isLogged = true;
                       $scope.$parent.paginate();
                        window.location = '#page-top';
                    } else {
                        $scope.isAlert = true;
                    }
                },
                function error(errorResponse) {
                    if (errorResponse.data.password) {
                        $scope.errorPassword = errorResponse.data.password[0];
                    }
                    if (errorResponse.data.email) {
                        $scope.errorEmail = errorResponse.data.email[0];
                    }
                }
            );
        };

    }]);



dreamsControllers.controller("pisoCtrl", ['$scope', '$routeParams','$http', 'Piso', '$location', 
    function pisoCtrl($scope, $routeParams, $http, Piso, $location) {
 
    $scope.isAlertcreate = false;
     $scope.isAlertdelete = false;
      $scope.isAlertedit = false;
    Piso.get().success(function(response){
      
       $scope.data = response.data;
        //console.log("res:",data);
    });


 $scope.submitCreate = function() {
       

        // save the comment. pass in comment data from the form
        // use the function we created in our service
        Piso.save($scope.pisoData)
            .success(function(data) {

                       //Mensaje de se guardo
                      // console.log('Piso guardado');
                  
            $scope.pisoData = {};
            $location.path('list');

            })
            .error(function(data) {
                if (errorResponse.data.nombre) {
                        $scope.errorNombre = errorResponse.data.nombre[0];
                    }
                    if (errorResponse.data.descripcion) {
                        $scope.errorDescripcion = errorResponse.data.descripcion[0];
                    }
            });
};
//Crear un nuevo método controller para recuperar una lista de articulos
    $scope.find = function(){
        //usar el método query de piso para enviar una petición GET apropiada
             Piso.show($scope.id).success(function(response){
      
       $scope.piso = response;
        //console.log("res:",data);
    });

    };

      
       
      /* Edit Piso*/
        $scope.edit = function (id, index) {
            $scope.errorNombre = null;
            $scope.errorDescripcion = null;
            $scope.id = $scope.data[index].id;
            $scope.nombre = $scope.data[index].nombre;
            $scope.descripcion = $scope.data[index].descripcion;
            $scope.index = index;
          
            $("#myModal").modal("show");
        };
          /* Update Piso*/
        $scope.submitChange = function () {
            $scope.errorNombre = null;
            $scope.errorDescripcion = null;

         
           Piso.update($scope.id,$scope.nombre, $scope.descripcion,
                function success(response) {
                    $scope.data[$scope.index].nombre = $scope.nombre;
                    $scope.data[$scope.index].descripcion = $scope.descripcion;
                

                },
               function error(errorResponse) {
                    if (errorResponse.data.nombre) {
                        $scope.errorNombre = errorResponse.data.nombre[0];
                    }
                    if (errorResponse.data.descripcion) {
                        $scope.errorDescripcion = errorResponse.data.descripcion[0];
                    }
                }
            );

};
   $scope.destroy = function (id,index) {
            if (confirm("Deseas eliminar el piso?"))
            {
                Piso.delete(id,
                    function success(response) {
                        console.log(response);

                    },
                    function error(errorResponse) {
                        console.log("Error:" + JSON.stringify(errorResponse));
                    }
                );
            };
             $scope.data.splice(index,1);
            
        };
}]);





