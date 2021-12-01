$('#name').click(function(){
      var user_val =$('#name').val();

      if(user_val.length == '')
      {
          $('h4').html('pls enter name');
      }
	

})