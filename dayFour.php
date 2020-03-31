
<html>
<head>   
    <script type = "text/javascript">
            function repeatingElement(array1, array2){//a funtion that prints elemets that exist repeatedly in two seperate arrays
            for(let i = 0; i<=array1.length; i++)
            {
                
                for(let j=0; j<=array2.length; j++){
                let count = []; //count becomes an empty array
                    if (array1[i] === array2[j]){
                        count.push(array1[i]);
                        document.write(count); //prints the elements that exists repeatedly
                }
            }
        }
    }
        
    </script>      
 </head>
 
 <body>     
    <form>
       <input type = "button" onclick = "repeatingElement([1,2,6,8,4], [2,4,6])" value = "click me">
    </form>      
 </body>
</html>
