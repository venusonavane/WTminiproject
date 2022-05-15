<!DOCTYPE html>
<!-- index.php !-->
<html>

<head>
    <title>Ticket Booking System</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <!-- angular cdn -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- my stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- my script -->
    <script src='script.js'></script>
</head>

<body>
    <div class="containers">
        <div ng-app='myApp' ng-controller='myController' ng-init='loadTable()'>
            <h3>Society Tour on 27th July 2022</h3>
            <div class='withForm'>
                <div class='d-flex'>
                    <div>
                        <label>Name</label>
                        <input type="hidden" ng-model='id'>
                        <input type="text" ng-model='name' class='form-control' autocomplete="off">
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="text" ng-model='phone' class='form-control'>
                    </div>
                    <div>
                        <label>Status</label>
                        <select class="form-control" ng-model='status'>
                        <option   value='Paid'>Paid</option>
                        <option   value='Due'>Due</option>
                     </select>
                    </div>
                    <div class='buttn'>
                        <input type="submit" value={{btname}} class='btn btn-success' ng-click='insertIntoDB()'>
                    </div>
                </div>
            </div>
            <h3>BOOKING CONFIRMED</h3>
            <div class='tableHolder'>
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    <tr ng-repeat='x in JSONValues track by $index'>
                        <th>{{x.name}}</th>
                        <th>{{x.phone}}</th>
                        <th>{{x.status}}</th>
                        <th>
                            <button class='btn btn-primary' ng-click='updateDB(x.id,x.name,x.phone,x.status)'>Update</button>
                            <button class='btn btn-danger' ng-click='deleteDB(x.id)'>Delete</button>
                        </th>
                    </tr>

                </table>
            </div>
        </div>
        <!-- container ends -->
    </div>
</body>

</html>