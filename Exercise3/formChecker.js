function choice(){
  let validate = true;

  if(document.getElementById("rabbit").value == ""){
    validate = false;
  }
  if(document.getElementById("wand").value == ""){
    validate = false;
  }
  if(document.getElementById("handkerchief").value == ""){
    validate = false;
  }
  if(Number(document.getElementById("rabbit").value) < 0 ){
    validate = false;
  }
  if(Number(document.getElementById("wand").value) < 0 ){
    validate = false;
  }
  if(Number(document.getElementById("handkerchief").value) < 0 ){
    validate = false;
  }
  if(document.getElementById("password").value == ""){
    validate = false;
  }
  if(document.getElementById("user").value == ""){
    validate = false;
  }

  let emailAddress = document.getElementById("user").value;
  if(emailAddress.indexOf('@') < 0 ){
    validate = false;
  }
  if(email.indexOf(".") < 0){
    validate = false;
  }
  return validate;
}
