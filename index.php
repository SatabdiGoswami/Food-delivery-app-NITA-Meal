<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" id="Toggle-data-color-Theme" content="#0a421a">
        <meta name="description" content=""/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Kanit:wght@300&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>NITs - Oxtionar</title>
    <link rel="icon" href="https://cdn.pixabay.com/photo/2022/02/10/12/04/chef-7005172_640.png">
    <script src="index.js"></script>
</head>
<style>
    *{margin:0;padding:0;scroll-behavior:smooth;font-family:'Kanit',sans-serif;}
    body{width:100%;height:fit-content;overflow-x:hidden;overflow-y:scroll;background-color:#f8fffa;}
    a{text-decoration:none;color:inherit;}
    button,input{border:none;outline:none;}
    button:active{scale:90%;}
    @media(max-width:700px){::-webkit-scrollbar{width:0;height:0;}}
</style>
<body>
    <style>
        #Nav{width:100%;height:5pc;display:flex;align-items:center;justify-content:space-between;padding:0 15px 0 2pc;}
        #Nav_left{width:fit-content;height:100%;display:flex;align-items:center;gap:20px;}
        #Nav_left_logo{width:35px;}
        #Nav_left_searchbar{width:30pc;height:42px;display:flex;align-items:center;position:relative;}
        #Nav_left_searchbar input{width:100%;padding:0 15px 0 2.4pc;border-radius:7px;height:100%;background-color:transparent;border:1px solid #ddd;color:#0a421a;font-size:15px;text-overflow:ellipsis;transition:0.4s ease;}
        #Nav_left_searchbar input:focus{border:1px solid #0a421a;}
        #Nav_left_searchbar svg{width:20px;position:absolute;left:12px;color:#0a421a;}
        #Nav_right{width:fit-content;height:100%;display:flex;align-items:center;gap:20px;}
        #Nav_right_signout{width:fit-content;height:100%;display:flex;align-items:center;gap:10px;}
        #Nav_right_signout button{height:40px;border-radius:100px;padding:0 17px 0 17px;font-size:18px;font-family:'Dancing Script',cursive;}
        #Nav_right_signout button:nth-child(2){background-color:#0a421a;color:#fff;}
        #Nav_right_signout button:hover{filter:brightness(95%);}
        #Nav_right_signin{width:fit-content;height:100%;display:none;align-items:center;gap:25px;}
        #Nav_right_signin_profile{width:12pc;padding:2px 8px 2px 8px;cursor:pointer;border-radius:4px;height:fit-content;background-color:#0a421a13;}
        #Nav_right_signin_profile:hover{backdrop-filter:brightness(94%);}
        #Nav_right_signin_profile b{width:100%;margin:0;font-size:15px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:flex;}
        #Nav_right_signin_profile p{width:100%;margin:0;font-size:12px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:flex;}
        #Nav_right_signin_cart{width:46px;height:46px;border-radius:5px;position:relative;background-color:transparent;}
        #Nav_right_signin_cart:hover{background-color:#0a421a13;}
        #Nav_right_signin_cart svg{width:30px;}
        #Nav_right_signin_cart p{padding:1px 9px 1px 9px;left:-5px;bottom:-5px;background-color:#0a421a;border-radius:50px;font-size:13px;color:#fff;position:absolute;margin:0;}
        @media(max-width:860px){#Nav_right_signin_profile{width:8pc;}#Nav_left_searchbar{width:20pc;}}
        @media(max-width:630px){#Nav_right_signin_profile b{font-size:14px;}#Nav_right_signin_profile{max-width:8pc;width:fit-content;}#Nav_left_searchbar{width:15pc;}#Nav_right_signout button{font-size:16px;}}
        @media(max-width:540px){#Nav{padding:0 14px 0 14px;}#Nav_right_signin,#Nav_right_signout{gap:10px;}#Nav_left_searchbar{width:12pc;}}
        @media(max-width:460px){#Nav_right_signin_profile b{font-size:12px;}#Nav_right_signin_profile p{font-size:10px;}#Nav_left_searchbar input{border-radius:100px;}#Nav_left_searchbar{width:8pc;}}
        @media(max-width:375px){#Nav_right_signin_cart{width:40px;height:40px;}#Nav_right_signin_profile{max-width:5pc;}}
        @media(max-width:345px){#Nav_right_signin_profile{display:none;}}
    </style>
    <div id="Nav">
        <div id="Nav_left">
            <img src="https://cdn.pixabay.com/photo/2022/02/10/12/04/chef-7005172_640.png" id="Nav_left_logo" alt="Logo">
            <div id="Nav_left_searchbar">
                <input type="search" name="" placeholder="Search resturents , meals , foods" onkeyup="HomeSearch(event)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>                  
            </div>
        </div>
        <div id="Nav_right">
            <div id="Nav_right_signout">
                <button onclick="HomeRegister()">Login</button>
                <button onclick="HomeRegister()">SignUp</button>
            </div>
            <div id="Nav_right_signin">
                <span id="Nav_right_signin_profile"><b id="Nav_right_signin_profile_name">Souvik Goswami</b><p id="Nav_right_signin_profile_contact">7005496781</p></span>
                <button id="Nav_right_signin_cart"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" /></svg><p>1</p></button>
            </div>
        </div>
    </div>


    <style>
        #Home_discount{width:100%;height:fit-content;padding-top:1.7pc;}
        #Home_discount_nav{width:100%;height:fit-content;padding-left:20px;}
        #Home_discount_slider{width:100%;height:fit-content;padding:0 20px 20px 20px;display:flex;align-items:center;gap:10px;overflow:auto;}
        #Home_discount_slider::-webkit-scrollbar{width:0;height:0;}
        .Home_discount_slider_card{width:fit-content;border:1px solid #ddd;cursor:pointer;height:44px;border-radius:100px;display:flex;transition:0.4s ease;flex-shrink:0;margin:0;align-items:center;padding:0 15px 0 15px;font-size:15px;}
        .Home_discount_slider_card:hover{background-color:#0a421a13;}
        
    </style>
    <div id="Home_discount">
        <h6 id="Home_discount_nav">% Discounts</h6>
        <div id="Home_discount_slider">
            <span class="Home_discount_slider_card" onclick="openDiscountDetails('60%')">60% discount</span>
            <span class="Home_discount_slider_card" onclick="openDiscountDetails('50%')">50% discount</span>
            <span class="Home_discount_slider_card" onclick="openDiscountDetails('40%')">40% discount</span>
            <span class="Home_discount_slider_card" onclick="openDiscountDetails('30%')">30% discount</span>
            <span class="Home_discount_slider_card" onclick="openDiscountDetails('20%')">20% discount</span>
            <span class="Home_discount_slider_card" onclick="openDiscountDetails('10%')">10% discount</span>
        </div>
    </div>


    <style>
        #Home_resturent{width:100%;height:fit-content;padding-top:1.7pc;}
        #Home_resturent_nav{width:100%;height:fit-content;padding-left:20px;}
        #Home_resturent_slider{width:100%;height:fit-content;padding:0 20px 20px 20px;display:flex;align-items:center;gap:10px;overflow:auto;}
        #Home_resturent_slider::-webkit-scrollbar{width:0;height:0;}
        .Home_resturent_slider_card{width:fit-content;border:1px solid #ddd;cursor:pointer;height:6pc;overflow:hidden;border-radius:8px;display:flex;transition:0.4s ease;flex-shrink:0;}
        .Home_resturent_slider_card:hover{box-shadow:0 5px 10px 0 gray;}
        .Home_resturent_slider_card img{width:7pc;height:100%;object-fit:cover;border-right:1px solid #ddd;}
        .Home_resturent_slider_card span{max-width:12pc;height:100%;padding:7px;}
        .Home_resturent_slider_card span h6{width:100%;font-weight:bold;color:#0a421a;font-size:15px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;margin:0;}
        .Home_resturent_slider_card span p{width:100%;font-size:13px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;margin:0;}
        .Home_resturent_slider_card_discount{color:red;}
    </style>
    <div id="Home_resturent">
        <h6 id="Home_resturent_nav">Resturants</h6>
        <div id="Home_resturent_slider">
            <div class="Home_resturent_slider_card" onclick="openRestrurentDetails('John Restaurant')"><img src="images.jpg" alt="Shop image"><span><h6>John Restaurant</h6><p>Near gargi hostel</p><p class="Home_resturent_slider_card_discount">10% discounts</p><p>100 options</p></span></div>
            <div class="Home_resturent_slider_card" onclick="openRestrurentDetails('Green chilli')"><img src="rice1.jpg" alt="Shop image"><span><h6>Green chilli</h6><p>Near gargi hostel</p><p class="Home_resturent_slider_card_discount">10% discounts</p><p>100 options</p></span></div>
            <div class="Home_resturent_slider_card" onclick="openRestrurentDetails('Khawkchang Restaurant')"><img src="parath.jpg" alt="Shop image"><span><h6>Khawkchang Restaurant</h6><p>Near gargi hostel</p><p class="Home_resturent_slider_card_discount">10% discounts</p><p>100 options</p></span></div>
            <div class="Home_resturent_slider_card" onclick="openRestrurentDetails('Amul Gargi')"><img src="sweet.jpg" alt="Shop image"><span><h6>Amul Gargi</h6><p>Near gargi hostel</p><p class="Home_resturent_slider_card_discount">10% discounts</p><p>100 options</p></span></div>
            <div class="Home_resturent_slider_card" onclick="openRestrurentDetails('Rahul Canteen')"><img src="noo.webp" alt="Shop image"><span><h6>Rahul Canteen</h6><p>Near gargi hostel</p><p class="Home_resturent_slider_card_discount">10% discounts</p><p>100 options</p></span></div>
            <div class="Home_resturent_slider_card" onclick="openRestrurentDetails('Food Court')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Food Court</h6><p>Near gargi hostel</p><p class="Home_resturent_slider_card_discount">10% discounts</p><p>100 options</p></span></div>
        </div>
    </div>


    <style>
        #Home_foods{width:100%;height:fit-content;margin-top:2pc;}
        #Home_foods_nav{width:100%;height:fit-content;padding-left:20px;}
        #Home_foods_list{width:100%;height:fit-content;padding:20px;gap:6px;display:flex;align-items:end;justify-content:center;flex-wrap:wrap;}
        .Home_foods_list_card{width:16%;height:fit-content;border-radius:10px;display:flex;flex-direction:column;align-items:center;justify-content:center;transition:0.4s ease;cursor:pointer;padding:8px 0 8px 0;}
        .Home_foods_list_card:hover{background-color:#0a421a13;}
        .Home_foods_list_card img{width:90%;border-radius:8px;}
        .Home_foods_list_card p{font-size:15px;margin:0;}
        @media(max-width:890px){.Home_foods_list_card{width:24%;}}
        @media(max-width:530px){.Home_foods_list_card{width:30%;}}
        @media(max-width:400px){.Home_foods_list_card{width:48%;}}
    </style>
    <div id="Home_foods">
        <h6 id="Home_foods_nav">Foods & Meals</h6>
        <div id="Home_foods_list">
            <div onclick="openMealDetails('Ice Cream')"class="Home_foods_list_card"><img src="ice.jpg" alt="Food Image"><p>Ice Cream</p></div>
            <div onclick="openMealDetails('Rice')"class="Home_foods_list_card"><img src="rice1.jpg" alt="Food Image"><p>Rice</p></div>
            <div onclick="openMealDetails('Paratha')"class="Home_foods_list_card"><img src="parath.jpg" alt="Food Image"><p>Paratha</p></div>
            <div onclick="openMealDetails('Pizza')"class="Home_foods_list_card"><img src="pizza.jpg" alt="Food Image"><p>Pizza</p></div>
            <div onclick="openMealDetails('Curry')"class="Home_foods_list_card"><img src="curr.jpg" alt="Food Image"><p>Curry</p></div>
            <div onclick="openMealDetails('Roll')"class="Home_foods_list_card"><img src="img.jpg" alt="Food Image"><p>Roll</p></div>
            <div onclick="openMealDetails('Biriyani')"class="Home_foods_list_card"><img src="biriyani1.jpg" alt="Food Image"><p>Biriyani</p></div>
            <div onclick="openMealDetails('Momo')"class="Home_foods_list_card"><img src="momo1.webp" alt="Food Image"><p>Momo</p></div>
            <div onclick="openMealDetails('Sweets')"class="Home_foods_list_card"><img src="sweet.jpg" alt="Food Image"><p>Sweets</p></div>
            <div onclick="openMealDetails('Chole Bhature')"class="Home_foods_list_card"><img src="images.jpg" alt="Food Image"><p>Chole Bhature</p></div>
            <div onclick="openMealDetails('Noodles')"class="Home_foods_list_card"><img src="noo.webp" alt="Food Image"><p>Noodles</p></div>
        </div>
    </div>
    


    <style>
        #footer{margin-top:4pc;width:100%;height:fit-content;border-top:1px solid #ddd;}
        #footer span{width:100%;font-size:14px;height:fit-content;padding:8px;display:flex;align-items:center;justify-content:center;}
        #footer span:first-child{justify-content:space-between;}
        #footer span:first-child h6 b{margin:0;}
        #footer span:first-child h6 p{margin:0;font-size:12px;}
        #footer span:first-child h5{margin:0;display:flex;align-items:center;gap:10px;font-size:18px;}
    </style>
    <div id="footer">
        <span>
            <h6><b>NITA - Meals</b><p>NITA's one and only online food delivery website</p></h6>
            <h5><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-telegram"></i><i class="fa-brands fa-linkedin"></i></h5>
        </span>
        <span>All &copy; copyright are been reserved</span>
    </div>


    <style>
        #Home_register{width:100%;height:100vh;backdrop-filter:brightness(60%);position:fixed;top:0;left:0;display:none;align-items:center;justify-content:center;}
        #Home_register_box{position:relative;}
        #Home_register_box_nav p{font-size:14px;}
        #Home_register_box{width:60%;height:90%;background-color:#eaf5ed;border-radius:10px;box-shadow:0 0 10px 0 #000;padding:20px;}
        #Home_register_box_inserter input{width:26pc;height:50px;border:1px solid #ddd;position:relative;margin-bottom:10px;padding:0 15px;font-size:15px;}
        #Home_register_box_inserter input:focus{border:2px dashed #0a421a;}
        #Home_register_box_inserter button{width:150px;height:45px;border-radius:100px;background-color:#0a421a;color:#fff;margin-top:2pc;}
        #Home_register_closer{width:30px;height:30px;border-radius:100%;background-color:red;color:#fff;position:absolute;top:-10px; right:-10px}
    </style>
    <div id="Home_register">
        <center id="Home_register_box">
            <span id="Home_register_box_nav">
                <h4>Welcome to NITA-Meal</h4>
                <p>Hey there NITs , Register now to be able to order your meal</p>
            </span>
            <div id="Home_register_box_inserter">
                <input type="text" value="" placeholder="Name" id="Home_register_box_inserter_name"><br>
                <input type="number" value="" placeholder="Contact" id="Home_register_box_inserter_contact"><br>
                <button id="Home_register_box_inserter_Btn" onclick="RegsiterSubmitter()">Signin</button>
            </div>
            <button class="fa-solid fa-xmark" id="Home_register_closer" onclick="Home_register_closer()"></button>
        </center>
    </div>


    <script>
        function RegsiterSubmitter() {
        var nameInput = document.getElementById('Home_register_box_inserter_name');
        var contactInput = document.getElementById('Home_register_box_inserter_contact');

        var nameValue = nameInput.value;  // This line could throw an error if nameInput is null
        var contactValue = contactInput.value;  // This line could throw an error if contactInput is null

        sessionStorage.setItem('Name',nameValue);
        sessionStorage.setItem('Contact',contactValue);
        sessionStorage.setItem('Register','in');
        window.location.reload();
    }
    function HomeSearch(e) {
    var SearchResult = e.target.value;
    
    // Check if the Enter key was pressed
    if (e.key === "Enter" || e.keyCode === 13) {
        window.location.href =`Search?For=${encodeURIComponent(SearchResult)}`;
    }
}
    </script>

</body>
</html>