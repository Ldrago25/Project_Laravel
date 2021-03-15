function viewmessage(message, id){

    var msg = document.getElementById('message');
    var cont = document.getElementById(id);

    cont.style.display = 'none';
    msg.style.display = 'flex';
    msg.style.zIndex = 100;
    msg.innerHTML = '<h5 class="msg">' + message + '</h5>';

    setInterval(() => {

        cont.style.display = 'flex';
        
        msg.style.display = 'none';     
        
    }, 2000);
}

function validate(){

    var sel1 = document.getElementById('internet');
    var sel2 = document.getElementById('cable');
    var sel3 = document.getElementById('telefonia');
    var button = document.getElementById('sub');

    if(sel1.value == '' && sel2.value == '' && sel3.value == ''){
        button.className = 'btn btn-default active disabled';
        button.disabled = true;

    }else{
        button.className = 'btn btn-default active';
        button.disabled = false;
    }
}