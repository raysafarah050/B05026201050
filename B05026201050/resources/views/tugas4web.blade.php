<!DOCTYPE html>
<html>
<head>
<style>

.header {
   text-align: center;
   font-family: monospace;
}

.ancestors * {
  background-color: blanchedalmond;
  display: block;
  font-family:monospace;
  font-size:x-large;
  border-style: dotted;
  border-color: chocolate;
  color:black;
  padding: 10px;
  margin: 15px;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("ul").parent().css({"color": "black", "border": "2px solid chocolate"});
});
</script>
</head>

<body>
<h1 class="header"><u>IMPORTANT LINKS FOR WEB PROGRAMMING</u></h1>
<div class="ancestors">
  <div> Websites for studying and practicing web programming
    <ul>This websites are very enlightening, easy to use, and absolutely free!
      <li>W3 Schools
        <a href="https://www.w3schools.com/">click here!</a>
      </li>
      <li>codecademy
          <a href="https://www.codecademy.com/">click here!</a>
      </li>
      <li>geeksforgeeks
          <a href="https://www.geeksforgeeks.org/">click here!</a>
      </li>
      <li>MDN Web Docs
           <a href="https://developer.mozilla.org/">click here!</a>
      </li>
      <li>The Odin Projects
          <a href="https://www.theodinproject.com/">click here!</a>
      </li>
    </ul>
  </div>
