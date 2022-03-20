function validate(){
    //on initialise les variables en récupérant les valeurs des différents objets
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    var validate_message = document.getElementById("validate_message");

    var text; //variable qui contiendra le texte à afficher
    
    //si l'user n'a pas renseigné de nom
    if(name.length < 0){
      error_message.style.padding = "10px"; //on ajoute du padding pour faire un effet d'apparition
      text = "Please Enter valid Name"; 
      error_message.innerHTML = text; //innerHTML : contient le code HTML intérieur à l'objet
      return false;
    }
    //si le premier indice renvoyé est =-1 alors l'élément cherché n'est pas présent dans le tableau
    if(email.indexOf("@") == -1 || email.length < 6){ 
      error_message.style.padding = "10px"; //on ajoute du padding pour faire un effet d'apparition
      text = "Please Enter valid Email";
      error_message.innerHTML = text; //innerHTML : contient le code HTML intérieur à l'objet
      return false;
    }
    //si l'user n'a pas renseigné de de message 
    if(message.length <= 0){
      error_message.style.padding = "10px"; //on ajoute du padding pour faire un effet d'apparition
      text = "Please Enter a Message";
      error_message.innerHTML = text; //innerHTML : contient le code HTML intérieur à l'objet
      return false;
    }
    //s'il n'y a pas d'erreur
    else{
      validate_message.style.padding = "10px"; //on ajoute du padding pour faire un effet d'apparition
      text = "Form Submitted Successfully"
      validate_message.innerHTML = text; //innerHTML : contient le code HTML intérieur à l'objet
      setTimeout(() => { return true; }, 2000);    } //renvoi true après 2000ms
  }