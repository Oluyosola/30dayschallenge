
<html>
<head>   
    <script type = "text/javascript">
    function error(input) { // a function that validates whether an argument of a given value is error or not
   
   document.write(input instanceof Error || toString.call(input) === '[object Error]');
}
    </script>      
 </head>
 
 <body>     
    <form>
       <input type = "button" onclick = "error('check')" value = "click me">
    </form>      
 </body>
</html>
