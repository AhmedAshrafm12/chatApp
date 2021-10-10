let userslist =document.querySelector('.userslist');
setInterval(()=>{
    let xhr=new XMLHttpRequest();
    xhr.open("POSt",'users.php',true);
    xhr.onload=()=>{
        if(xhr.readyState==XMLHttpRequest.DONE){
            if(xhr.status==200){
                let data=xhr.response; 
                userslist.innerHTML=data;

            }
           
        }
    }
    xhr.send();

},500);
