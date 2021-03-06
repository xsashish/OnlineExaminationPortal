
<!DOCTYPE HTML>
<html>
  <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Angular Material style sheet -->
  <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.12/angular-material.min.css"> -->
  <script src="node_modules/angular/angular.js"></script>
  <script src="node_modules/angular-animate/angular-animate.js"></script>
<script src="node_modules/angular-aria/angular-aria.js"></script>
<script src="node_modules/angular-messages/angular-messages.js"></script>
<script src="node_modules/angular-material/angular-material.js"></script>
<link rel="stylesheet" href="node_modules/angular-material/angular-material.css" />
<style>
.btn {
  background-color:#1F618D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
  border-radius:40px;
}
.btn:hover {opacity: 0.6}
</style>
</head>

<body ng-app="login">
<div ng-controller="loginCtrl" layout="column" layout-padding ng-cloak>
  <md-toolbar>
      <div class="md-toolbar-tools"><img src="logo1.png" height="60px" width="60px" style="float:left;">&nbsp;&nbsp;<h1 style="font-size: 35px;">St Thomas' College of Engineering Technology</h1></div>
    </md-toolbar><br/>
  <md-content class="md-no-momentum">
     <br/>
    <form>
    <div layout="column" layout-align="center center">
    <md-input-container class="md-icon-float md-block" style="width: 400px;">
      <!-- Use floating label instead of placeholder -->
      <label>Name</label>
      <input ng-model="user.name" type="text" name="Username">
    
    </md-input-container>

    <md-input-container class="md-block" style="width: 400px;">
      <!-- Use floating placeholder instead of label -->
      <input ng-model="user.colreg" type="text" placeholder="College Registration(required)" ng-required="true" name="Colreg">
    </md-input-container>

    <md-select ng-model="user.department" placeholder="Department" style="width: 400px;" name="Department">
        <md-option value="Electrical">Electrical</md-option>
        <md-option value="Electronics">Electronics</md-option>
        <md-option value="Information technology">Information technology</md-option>
        <md-option value="Computer Science">Computer Science</md-option>
      </md-select>

      <md-select ng-model="user.year" placeholder="Year" style="width: 400px;" name="Year" >
          <md-option value="1">First</md-option>
          <md-option value="2">Second</md-option>
          <md-option value="3">Third</md-option>
          <md-option value="4">Fourth</md-option>
        </md-select>
    <br/>
          <button class="btn"  type="submit" ng-click="login(user)">Login</button>
    
    </div>
  </form>
  </md-content>

</div>
 

  
<script>
angular
  .module('login', ['ngMaterial', 'ngMessages'])
  .controller('loginctrl', function($scope){
  });
</script>
</body>
</html>