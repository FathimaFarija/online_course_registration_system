function sendOTP(){
    const email=document.getElementById('email');
    const otpverify=document.getElementsByClassName('otpverify')[0];

 let otp_val=Math.floor(Math.random()*10000);

 let emailbody =`<h2>Your OTP is</h2>${otp_val}`;
 Email.send({
    SecureToken : "8aa58e87-58f9-46f1-a16c-4381db40ddd2",
    To : email.value,
    From : "farijafathima1@gmail.com",
    Subject : "OTP value",
    Body : emailbody,
}).then(
  
    message=>{
        if(message==="OK"){
            alert("OTP sent to your email"+email.value);

            otpverify.style.display="flex";
            const otp_inp=document.getElementById('otp_inp');
            const otp_btn=document.getElementById('otp_btn');
            
           
            otp_btn.addEventListener('click',() => {
                if(otp_inp.value == otp_val){
                    alert("Email address verified");
                    window.location.href = "pop_new.php";
                }
                else{
                    alert("Invalid OTP");
                }
            })

        }
    }
);

}