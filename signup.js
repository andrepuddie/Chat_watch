const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault(); ;//preventing submission
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest(); //using XML object 
    xhr.open("POST", "php/signup.php", true); //connecting and sending it to the php version of sign_upsheet
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response; //give us a response
              if(data === "success"){ //print out sucess if it works
                location.href="user_interface.php";
              }else{
                errorText.style.display = "block"; //block the code if it dosen't 
                errorText.textContent = data;
              }
          }
      }
    } //passing data towards the php  
    let formData = new FormData(form);
    xhr.send(formData);//sending the data to php
}