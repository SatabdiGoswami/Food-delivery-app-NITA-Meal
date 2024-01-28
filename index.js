function openDiscountDetails(cardId) {window.location.href =`Discounts?For=${cardId}`;} 
function openRestrurentDetails(cardId) {window.location.href =`Restrurent?Name=${cardId}`;}
function openMealDetails(cardId) {window.location.href = `Meal?Name=${cardId}`;}
function HomeRegister(){
    document.getElementById('Home_register').style.display = 'flex';
}
function Home_register_closer(){
    document.getElementById('Home_register').style.display = 'none';
}

    window.addEventListener('load',()=>{
        var Username = sessionStorage.getItem('Name'); 
        var Usercontact = sessionStorage.getItem('Contact'); 
        if(sessionStorage.getItem('Register') == 'in'){
            document.getElementById('Nav_right_signin').style.display = 'flex';
            document.getElementById('Nav_right_signout').style.display = 'none';
            document.getElementById('Nav_right_signin_profile_name').innerText = Username;
            document.getElementById('Nav_right_signin_profile_contact').innerText = Usercontact;
        }
        else{
            document.getElementById('Nav_right_signin').style.display = 'none';
            document.getElementById('Nav_right_signout').style.display = 'flex';
        }
    })