let form =document.querySelector('form'),
sendbtn=form.querySelector('button'),
input=form.querySelector('.msg'),
msgs=document.querySelector('.chmas');



form.onsubmit=(e)=>e.preventDefault();

sendbtn.onclick=()=>{
    let xhr=new XMLHttpRequest();
    xhr.open("POST",'insertchat.php',true);
    xhr.onload=()=>{
        if(xhr.readyState==XMLHttpRequest.DONE){
            if(xhr.status==200){
                let data=xhr.response; 
                console.log(input.value);
            }
           
        }

    }

    let formData = new FormData(form);
    xhr.send(formData);
    input.value='';
}

setInterval(()=>{
    let xhr=new XMLHttpRequest();
    xhr.open("POST",'getchat.php',true);
    xhr.onload=()=>{
        if(xhr.readyState==XMLHttpRequest.DONE){
            if(xhr.status==200){
                let data=xhr.response; 
                msgs.innerHTML=data;
            }
           
        }

    }
    let formData = new FormData(form);
    xhr.send(formData);
    

},500);
