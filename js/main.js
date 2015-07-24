// # Sul DOM Ready
$ function() {
  
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
  
});