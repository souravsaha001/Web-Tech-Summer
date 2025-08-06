document.getElementById("clinic patient register").addEventListener("submit",function(event){
event.preventDefault();
const fullname=document.getElementById("fullname").value;
const age=document.getElementById("age").value;
const email=document.getElementById("email").value;
const password=document.getElementById("password").value;
cons confirmpassword =document.getElementById("confirmpassword").value;
if(!fullname ||!age|| !email || !password ||confirmpassword){
   alert("please fill out all required fields.");
   return; 
}
if(password.lentgh <8){
   alert("password must be 8 characters.");
   return; 
}
if(age.lentgh <18){
   alert("age must be 18.");
   return; 
}
if(password !==confirmpassword){
   alert("password do not match.");
   return; 
}

})