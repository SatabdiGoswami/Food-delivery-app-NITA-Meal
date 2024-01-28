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
        <title>Discount : NITs - Oxtionar</title>
    <link rel="icon" href="https://cdn.pixabay.com/photo/2022/02/10/12/04/chef-7005172_640.png">
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
        #Nav{width:100%;height:5pc;display:flex;align-items:center;justify-content:space-between;padding:0 15px 0 10px;}
        #Nav_left{width:fit-content;height:100%;display:flex;align-items:center;gap:20px;}
        #Nav_left_backBtn{width:60px;height:40px;border-radius:100px;padding-right:14px;background-color:transparent;}
        #Nav_left_backBtn:hover{background-color:#0a421a13;} 
        #Nav_right{width:fit-content;height:100%;display:flex;align-items:center;gap:20px;}
        #Nav_right_cart{width:46px;height:46px;border-radius:5px;position:relative;background-color:transparent;}
        #Nav_right_cart:hover{background-color:#0a421a13;}
        #Nav_right_cart svg{width:30px;}
        #Nav_right_cart p{padding:1px 9px 1px 9px;left:-5px;bottom:-5px;background-color:#0a421a;border-radius:50px;font-size:13px;color:#fff;position:absolute;margin:0;}
        
    </style>
    <div id="Nav">
        <div id="Nav_left">
            <a href="/NITA-Meal"><button id="Nav_left_backBtn" class="fa-solid fa-arrow-left"></button></a>
            <h5 id="SearchResult">Result</h5>
        </div>
        <div id="Nav_right">
            <button id="Nav_right_cart"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" /></svg><p>1</p></button>
        </div>
    </div>

    

    <style>
        #Search_resturent{width:100%;height:fit-content;padding-top:1.7pc;}
        #Search_resturent_nav{width:100%;height:fit-content;padding-left:20px;}
        #Search_resturent_slider{width:100%;height:fit-content;padding:0 20px 20px 20px;display:flex;align-items:center;gap:10px;flex-wrap:wrap;justify-content:center;}
        #Search_resturent_slider::-webkit-scrollbar{width:0;height:0;}
        .Search_resturent_slider_card{width:48%;border:1px solid #ddd;cursor:pointer;height:14pc;overflow:hidden;border-radius:8px;display:flex;transition:0.4s ease;flex-shrink:0;position:relative;}
        .Search_resturent_slider_card:hover{box-shadow:0 5px 10px 0 gray;}
        .Search_resturent_slider_card img{width:50%;height:100%;object-fit:cover;border-right:1px solid #ddd;}
        .Search_resturent_slider_card span{width:50%;height:100%;padding:7px;}
        .Search_resturent_slider_card span h6{width:100%;font-weight:bold;color:#0a421a;font-size:20px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;margin:0;}
        .Search_resturent_slider_card span p{width:100%;font-size:15px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;margin:0;}
        .Search_resturent_slider_card_discount{color:red;font-size:14px;}
        .Restrurent_card_menu{display:none;}
        .Search_resturent_slider_card_rating{position:absolute;top:10px;left:10px;background-color:#0ee70e;color:#fff;font-size:12px;padding:2px 4px;border-radius:3px;box-shadow:0 0 5px 0 gray;}
    </style>
    <div id="Search_resturent">
        <h6 id="Search_resturent_nav">Resturents</h6>
        <div id="Search_resturent_slider">
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">10% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 10% discount Noodles</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">20% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 20% discount Cakes</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">30% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 30% discount Juice</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">40% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 10% discount Rice</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">50% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 60% discount Paratha</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">60% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 40% discount Fruits</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">10% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 10% discount Curry</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">10% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 20% discount Noodles</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">10% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 60% discount Cakes</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
            <div class="Search_resturent_slider_card" onclick="openRestrurentDetails('Happy-Meal-house')"><img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="Shop image"><span><h6>Happy Meal house</h6><p>Near gargi hostel</p><h5 class="Search_resturent_slider_card_discount">20% discounts</h5><p>100 options</p><b>₹10 - ₹1000</b><p>Veg and Non - veg both</p><h6 class="Restrurent_card_menu">Happy Meal house 50% discount Juice</h6></span><p class="Search_resturent_slider_card_rating fa-solid fa-star"> 4</p></div>
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

    <script>
 const products = document.querySelectorAll(".Search_resturent_slider_card");
const discountElements = document.querySelectorAll('.Restrurent_card_menu');

// Function to filter products based on search criteria
function filterProducts(cardId) {
    for (let a = 0; a < discountElements.length; a++) {
        const match = products[a].querySelector("h6");
        const textValue = match ? match.textContent || match.innerHTML : "";
        const SearchResult = cardId.toUpperCase();
        products[a].style.display = textValue.toUpperCase().includes(SearchResult) ? "" : "none";
    }
}

window.addEventListener('load', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const cardId = urlParams.get('For');

    document.title = cardId + ' : NITA - Meal';
    document.getElementById('SearchResult').innerHTML = cardId;

    filterProducts(cardId);
});

        function openRestrurentDetails(cardId){window.location.href =`Restrurent?Name=${cardId}`;}
    </script>
    
</body>
</html>