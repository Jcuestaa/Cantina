function validacioEmail() {
    let email = document.getElementsByName("email")[0].value;
    let domini = "@inspedralbes.cat";
    let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    if(re.test(email)){
        if(email.indexOf(domini, email.length - domini.length) !== -1){
            return true;
        } else {
            Swal.fire(
                "Error!",
                "El domini ha de ser: inspedralbes.cat!",
                'error'
            )
            return false;
        }
    } else {
        Swal.fire(
            "Error!",
            "El format de l'email és invàlid!",
            'error'
        )
        return false;
    }
}

document.getElementById("myForm").addEventListener("click", function(event){
    if(!validacioEmail()) {
        event.preventDefault();
    }
});
