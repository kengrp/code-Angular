var app = angular.module("myApp",[]);
app.controller("usercontroller" , function($scope,$http){
    $scope.btnName = "Insert";
    $scope.insertData = function(){
        if($scope.fname == null){
            sweetAlert("FirstName Require" , "Error" , "warning");
            return false;
        }
        if($scope.lname == null){
            sweetAlert("LastName Require" , "Error" , "warning");
            return false;
        }else{
            $http.post("insert.php" , 
            {'fname':$scope.fname , 'lname':$scope.lname , 'btnName':$scope.btnName , 'id':$scope.id })
            .then(function(data)
            {
                sweetAlert("Data Complete","Insert Complete Form","success");
                $scope.fname = null;
                $scope.lname = null;
                $scope.btnName = "Insert";
                $scope.displayData();
            });
        }

    }
    $scope.displayData = function(){
        $http.get("select.php").then(function(response){
            $scope.names = response.data.records;

        });
    }

    $scope.updateData = function(id,fname,lname){
        $scope.id = id;
        $scope.fname = fname;
        $scope.lname = lname;
        $scope.btnName = "Update";
    }


    $scope.deleteData = function(id){
        $scope.id = id;
        swal({
            title:"Are you sure?",
            text: "Confirm Delete Record!",
            type: "warning",
            showCancelButton:true,
            confirmButtonColor:"#DD6B55",
            confirmButtonText:"Yes , delete it!",
            closeOnConfirm:false

            },
            function(){
                $http.post('delete.php' , {'id':$scope.id}).then(function(data){
                    swal("Delete!","Your record has been deleted.","success");
                    $scope.displayData();
                });
            }
        )

    }
});