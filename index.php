<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Angular JS - INSERT DATA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="asset/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="asset/sweetalert/dist/sweetalert.css">
</head>
<body>
    <div class="container" style="width:500px">
        <h3 align="center">Insert Data - AngularJs</h3>
        <div ng-app="myApp" ng-controller="usercontroller" ng-init="displayData()">
            <label>FirstName : </label>
            <input type="text" name="fname" ng-model="fname" class="form-control" />
            <label>LastName : </label>
            <input type="text" name="lname" ng-model="lname" class="form-control" />
            <br/>
            <input type="submit" name="btnInsert" class="btn btn-info" value="{{btnName}}" ng-click="insertData()" />
            <br/><br/>
            <table class="table table-blordered">
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Update</th>
            </tr>
            <tr ng-repeat="x in names">
                <td>{{ x.id }}</td>
                <td>{{ x.fname }}</td>
                <td>{{ x.lname }}</td>
                <td><button class="btn btn-info btn-xs" ng-click="updateData(x.id,x.fname,x.lname)">Update</button></td>
            </tr>    

            </table>
        </div>
    </div>

    
</body>
<script src="app.js"></script>
</html>