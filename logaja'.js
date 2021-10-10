let form =document.querySelector('form'),
contbtn=document.querySelector('form button'),
err=document.querySelector('.err');
console.log("lsdfjohs");

form.onsubmit=(e)=>e.preventDefault();

contbtn.onclick=()=>{

    let xhr=new XMLHttpRequest();
    xhr.open("POST",'login.php',true);
    xhr.onload=()=>{
        if(xhr.readyState==XMLHttpRequest.DONE){
            if(xhr.status==200){
                let data=xhr.response; 
            if(data=="success"){
                setTimeout(function(){
                    window.location.href = 'userslist.php';
                 }, 1000);
            } else{
                err.style.background='green';
                err.textContent=data;
            }
            }
           
        }

    }

    let formData = new FormData(form);
    xhr.send(formData);

}
