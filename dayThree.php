
<html>
<head>   
    <script type = "text/javascript">
    function vowel(input) { //a function that count the numbers of vowels in an argument passed
        let vowels = "aeiouAEIOU"; 
        let count = 0; //sets count to zero
        var i =0;
        for(i; i<input.length; i++)
        {
            if(vowels.indexOf(input[i]) !==-1){ 
                count++;
            }
        }
   
   document.write("The number of vowels are" + " " +count); //prints the number of volwels in the input
}
    </script>      
 </head>
 
 <body>     
    <form>
       <input type = "button" onclick = "vowel('day three of thirty days code challenge')" value = "click me">
    </form>      
 </body>
</html>
