<html>
<head>
   <script language="javascript" src="ajax.js">
   </script>
</head>
<body>
<div id="txt" name="txt"></div>
   <form action="javascript:add(document.getElementById('frm'));" name="frm" id="frm">
  <table>
   <tr>
     <td>Enter first number : </td>
     <td><input type="text" id="num1" onkeyup="add();"></td>
     </tr>
     <tr>
     <td>Enter second number : </td>
     <td><input type="text" id="num2" onkeyup="add();"></td>
     </tr>
     
</table>
</form>
</body>
</html>