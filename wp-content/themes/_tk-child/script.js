window.onload=function(){
    
    document.querySelector('form').addEventListener('submit', function(event){
        event.preventDefault();
        
        var args = {
            action: 'signup', 
            username: document.querySelector('#username').value,
            password: document.querySelector('#password').value,
            email: document.querySelector('#email').value,
        };
    
        ajax.post(WPAS_APP.ajax_url,args,function(data){
            console.log(data.data);
        });
    });
}