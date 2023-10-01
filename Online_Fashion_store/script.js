const username = document.getElementById('username')
const password= document.getElementById('password')
const form=document.getElementById('LoginForm')
const errorElement =document.getElementById('error')

form.addEventListener('submit',(e) =>{
    let messages=[]
    if(username.value ===''|| username.value==null){
        messages.push('username is required')
    }
    if(password.value.length<=6){
        messages.push('Password must be longer than 6 charcter')

    }
    if(password.value.length>=21){
        messages.push('Password must be less than 20 charcter')

    }
    if(messages.length >0){
        e.preventDefault()
        errorElement.innerText= messages.join(',');
    }
})
