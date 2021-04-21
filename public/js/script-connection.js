
// Cacher le mot de passe du formualire de connexion
let pass = document.querySelector('#password') 
let HidePass = document.querySelector('.hidepass') 
    
HidePass.onclick =  function(){ 
  if (pass.type === 'password') 
    {
      pass.type = 'text'; 
      HidePass.className = 'hidepass far fa-eye-slash text-secondary' 
      HidePass.title = "Masquer le mot de passe" 
    }
  else
    {
      pass.type = 'password'; 
      HidePass.className = 'hidepass far fa-eye text-secondary' 
      HidePass.title = "Afficher le mot de passe"
    }
    }

// Vérification du formulaire de connexion


$('#entry-error').hide()
let BtnValidation = document.querySelector('#btn-validation')

BtnValidation.addEventListener('click',function(event){
  let email = document.querySelector('#email').value
  let password = document.querySelector('#password').value
  
  if (email.length == 0 || password.length == 0)
    {
      event.preventDefault()
      $('#entry-error').show('slow')
    }
})


$(function(){
  $('.close').click(function(){
    $('#entry-error').fadeOut(1000)
  })
})




// Vérification formulaire d'inscription



document.querySelector('#nameErr').style.display = 'none'
document.querySelector('#prenomErr').style.display = 'none'
document.querySelector('#emailErr').style.display = 'none'
document.querySelector('#passwordErr').style.display = 'none'
document.querySelector('#passwordErr2').style.display = 'none'

let btn_inscription_post = document.querySelector('#btn-inscription-post')

btn_inscription_post.addEventListener('click',function(event){
  let name = document.querySelector('#name').value
  let prenom = document.querySelector('#prenom').value
  let inscription_email = document.querySelector('#inscription-email').value
  let inscription_password = document.querySelector('#inscription-password').value
  let inscription_password2 = document.querySelector('#inscription-password-confirm').value
  if (name.length == 0)
    {
      event.preventDefault()
      document.querySelector('#nameErr').style.display = 'block'
    }
  else if (prenom.length == 0)
    {
      event.preventDefault()
      document.querySelector('#prenomErr').style.display = 'block'
    }
  else if (inscription_email.length == 0)
    {
      event.preventDefault()
      document.querySelector('#emailErr').style.display = 'block'
    }
    else if (inscription_password.length == 0)
    {
      event.preventDefault()
      document.querySelector('#passwordErr').style.display = 'block'
    }
    else if (inscription_password2.length == 0)
    {
      event.preventDefault()
      document.querySelector('#passwordErr2').style.display = 'block'
    }
    else
    {
      document.querySelector('#nameErr').style.display = 'none'
      document.querySelector('#prenomErr').style.display = 'none'
      document.querySelector('#emailErr').style.display = 'none'
      document.querySelector('#passwordErr').style.display = 'none'
      document.querySelector('#passwordErr2').style.display = 'none'
    }
})
