
// # Sul DOM Ready
$( function() {
  
  $(":checkbox").labelauty({
    checked_label: "Accetto",
    unchecked_label: "Non accetto"
  });

  // # Costruisci il dialog Ui
  $("#dialog").dialog({
    resizable: false,
    autoOpen: false,
    show: "fade",
    hide: "fade",
    modal: true,
    buttons: {
     'Chiudi': function() {
        $(this).dialog('close');
     }
    }
  });
  
  // # Bind onclick del bottone
  $("#sendForm").click( function( event ) {
    
    // # Evita che l'evento di default avvenga
    event.preventDefault();
    
    // # Chiama il server per la validazione ed il salvataggio
    $.post("php/remote.php", { mailAddr: $("#inputEmail").val(), name: $("#inputName").val(), lastName: $("#inputLastName").val(), password: $("#inputPassword").val(), repeatPassword: $("#inputRepeatPassword").val()  }, function( response ) {

      switch (response) {
      
        case "MAIL_EMPTY":
          $("#dialog").dialog( "open" ).html( "Inserire email!" );
        return false;
          
        case "MAIL_INVALID":
          $("#dialog").dialog( "open" ).html( "Mail non valida" );
        return false;          
          
        case "NAME_EMPTY":
          $("#dialog").dialog( "open" ).html( "Campo obbligatorio" );
        return false;          

        case "LAST_NAME_EMPTY":
          $("#dialog").dialog( "open" ).html( "Campo obbligatorio" );
        return false;    

        case "PASSWORD_EMPTY":
          $("#dialog").dialog( "open" ).html( "Campo obbligatorio" );
        return false;             
    
        case "OK":
          $("#dialog").dialog( "open" ).html( "I tuoi dati sono stati salvati correttamente!" );
        return false;
      }
      
    });

  });
  

  //women
  $('#ani1Par').click(function(event) {
    event.preventDefault();
    $('#imgWoman').toggleClass('selectWoman');
    $('#imgMan').slideToggle(800);
  });

  //men
 $('#ani2Par').click(function(event) {
    event.preventDefault();
    $('#imgMan').toggleClass('selectMan');
    $('#imgWoman').slideToggle(800);

  });


 $('#sendForm').click(function(event) {
    $('#ani3Button').toggle(600);
 });


//handler for women
$("#ani1Par").click(function(){
   var sexStatus = $(this).attr("data-sex");
   if(sexStatus == "false"){
     $(this).attr("data-sex","true");
     var sex = 'f';
   }else{
     $(this).attr("data-sex","false");
     $sex = '';
   }
   return sex;

});

//handler for men
$("#ani1Par").click(function(){
   var sexStatus = $(this).attr("data-sex");
   if(sexStatus == "false"){
      var sex = 'm';
     $(this).attr("data-sex","true");
   }else{
     $(this).attr("data-sex","false");
     $sex = '';
     }

   return sex;

});


$('#form1 .form-control').mouseover(function(event) {
  $(this).addClass('focusForm').mouseout(function(event) {
    $(this).removeClass('focusForm');
  });;
});

});