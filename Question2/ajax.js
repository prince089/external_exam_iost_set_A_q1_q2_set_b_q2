function add(obj)
{
   var XMLHttpRequestObject=false;
   if(window.XMLHttpRequest)
   {
     XMLHttpRequestObject=new XMLHttpRequest();
    }
  //  else if(window.ActiveXObject)
  //   {
  //     XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
  //   }
   var str1="num1="+document.getElementById("num1").value;
   var str2="&num2="+document.getElementById("num2").value;
   XMLHttpRequestObject.onreadystatechange=show;
  XMLHttpRequestObject.open('POST','value.php',true);
  XMLHttpRequestObject.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  XMLHttpRequestObject.send(str1+str2);
  function show()
  {
    if(XMLHttpRequestObject.readyState==4)
    {
     if(XMLHttpRequestObject.status==200)
     {
       result=XMLHttpRequestObject.responseText;
       document.getElementById('txt').innerHTML=result;
     }
   }
  }
}