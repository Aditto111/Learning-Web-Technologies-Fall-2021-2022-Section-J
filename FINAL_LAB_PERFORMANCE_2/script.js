  function valueButton(e)
     {
       calculatorForm.screen.value +=e.value;
  
    }


     function deleteButton()
    {
      calculatorForm.screen.value=null;
   } 

   function Calculate()
    {
      calculatorForm.screen.value=eval(calculatorForm.screen.value);
    } 
    function ajax(num1, num2, operator, key){

      let name = document.getElementById('name').value;
      let xhttp = new XMLHttpRequest();
       
       xhttp.open('GET','connection.php',true);
       xhttp.send();

       xhttp.onereadystatechange = function(){

        if(this.readyState==4 && this.status ==200){
          alert(this.responseText);
        }

       } 


    }