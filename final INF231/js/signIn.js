function myScriptFunction(url){
    text = url;
    if(text.trim().length === 0){
        window.alert('INCORRECT PASSWORD OR USERNAME!');
    }		
    else{
        document.location.href = "./welcome.php";
    }
}
