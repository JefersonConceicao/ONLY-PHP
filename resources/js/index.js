const submitFormAddUser = () => {
    const formElement = document.getElementById('addUser');
    formElement.addEventListener('submit', function(e){
        e.preventDefault();

        console.log("submited");
    })

}

submitFormAddUser()