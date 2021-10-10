let form =document.querySelector('form'),
contbtn=document.querySelector('form button'),
err=document.querySelector('.err');

form.onsubmit=(e)=>e.preventDefault();

contbtn.onclick=()=>{

    let xhr=new XMLHttpRequest();
    xhr.open("POST",'login.php',true);
    xhr.onload=()=>{
        if(xhr.readyState==XMLHttpRequest.DONE){
            if(xhr.status==200){
                let data=xhr.response; 
            if(data=="success"){
                err.classList.add('success');
                err.innerHTML = "Login successfuly"
                setTimeout(function(){
                    window.location.href = 'userslist.php';
                 }, 1000);
            } else{
                err.classList.add('error');
                err.textContent=data;
            }
            }
           
        }

    }

    let formData = new FormData(form);
    xhr.send(formData);

}
