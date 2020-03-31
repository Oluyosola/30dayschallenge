
<html>
<head>   
    <script type = "text/javascript">
    function palindrome(input) { //a function that count the numbers of vowels in an argument passed
        let reversed = ""; 
        for (var i =input.length -1; i>0;i--)
        {
            reversed+=str[i]
        }
   
   document.write(reversed); //prints the number of volwels in the input
}
    </script>      
 </head>
 
 <body>     
    <form>
       <input type = "button" onclick = "reversed('day three of thirty days code challenge')" value = "click me">
    </form>      
 </body>
</html>
