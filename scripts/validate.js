function validateLogin() {
    var uid = document..login.userid.value;
    var pwd = document.forms["logForm"]["pwd"].value;

    if (uid == "" || uid == null) {
    	alert('Hi');
        document.getElementById('useridin').placeholder='Empty field';
        return false;
    }
    if (pwd == "" || pwd == null) {
    	alert('Hi');
        alert("Name must be filled out");
        return false;
    }
    return true;
}