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
        <title>Restrurent : NITs - Oxtionar</title>
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
        #Nav_right_profile{width:40px;height:40px;border-radius:4px;transition:0.4s ease;background-color:transparent;}
        #Nav_right_profile:hover{background-color:#0000ff1e;}
        #Nav_right_cart{width:46px;height:46px;border-radius:5px;transition:0.4s ease;position:relative;background-color:transparent;}
        #Nav_right_cart:hover{background-color:#0a421a13;}
        #Nav_right_cart svg{width:30px;}
        #Nav_right_cart p{padding:1px 9px 1px 9px;left:-5px;bottom:-5px;background-color:#0a421a;border-radius:50px;font-size:13px;color:#fff;position:absolute;margin:0;}
        
    </style>
    <div id="Nav">
        <div id="Nav_left">
            <a href="/NITA-Meal"><button id="Nav_left_backBtn" class="fa-solid fa-arrow-left"></button></a>
        </div>
        <div id="Nav_right">
            <button class="fa-regular fa-user" id="Nav_right_profile"></button>
            <button id="Nav_right_cart"  onclick="CartOpner()"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" /></svg><p>1</p></button>
        </div>
    </div>




    <style>
        #Restrurent_intro{width:100%;height:fit-content;display:flex;}
        #Restrurent_intro img{width:20pc;height:20pc;object-fit:cover;margin-left:8pc;border-radius:100%;border:1px solid #ddd;}
        #Restrurent_intro_info{padding:2pc 0 0 2pc;}
        #Restrurent_intro_info h1{margin:0;color:#0a421a;}
        #Restrurent_intro_info_speciality{font-size:14px;margin:0;}
        #Restrurent_intro_info_location{margin:0;height:fit-content;}
        #Restrurent_intro_info_foodType{margin:0;font-size:14px;}
        #Restrurent_intro_info_rating{margin:20px 0 0 0;display:flex;align-items:center;gap:15px;}
        #Restrurent_intro_info_rating i{margin:0;border-radius:4px;background-color:#1d9e41;color:#fff;font-size:10px;padding:6px;}
        #Restrurent_intro_info_rating p{margin:0;font-size:15px;}
        #Restrurent_intro_info_foodOption{font-size:15px;margin:2px 0 0 0;}
        #Restrurent_intro_info_discount{font-size:15px;width:fit-content;margin:2pc 0 0 0;padding:0 20px 0 20px;height:42px;border-radius:100px;background-color:#0000ff10;color:blue;display:flex;align-items:center;justify-content:center;}
        @media(max-width:840px){#Restrurent_intro{flex-direction:column;align-items:center;}#Restrurent_intro img{margin-left:0;}#Restrurent_intro_info{display:flex;flex-direction:column;align-items:center;width:100%;padding:2pc 0 0 0;}}
        @media(max-width:500px){#Restrurent_intro img{width:14pc;height:14pc;}}
        @media(max-width:400px){#Restrurent_intro img{width:10pc;height:10pc;}}
        @media(max-width:300px){#Restrurent_intro img{width:7pc;height:7pc;}}
        
        </style>
    <div id="Restrurent_intro">
        <img src="https://cdn.pixabay.com/photo/2018/11/15/08/19/surface-3816738_640.jpg" alt="">
        <div id="Restrurent_intro_info">
            <h1>Happy Meal House</h1>
            <p id="Restrurent_intro_info_speciality">Chinese - Italian foods</p>
            <p id="Restrurent_intro_info_location">Near shopping complex</p>
            <p id="Restrurent_intro_info_foodType">Both veg and non-veg</p>
            <h6 id="Restrurent_intro_info_rating"><i class="fa-solid fa-star"> 4</i><p>4.4K ratings</p></h6>
            <p id="Restrurent_intro_info_foodOption">1000+ Options</p>
            <p id="Restrurent_intro_info_foodOption">₹10 - ₹1000</p>
            <p id="Restrurent_intro_info_discount">30% Discount</p>
        </div>
    </div>
    
    
    
    <style>
        #Con_Restrurent_filter{width:100%;margin-top:4pc;height:fit-content;display:flex;align-items:center;justify-content:space-between;padding:0 14px 2pc 2pc;position:sticky;top:0;}
        #Restrurent_filter{width:100%;height:fit-content;}
        #Restrurent_filter_nav{width:100%;height:fit-content;}
        #Restrurent_filter_slider{width:100%;height:fit-content;overflow:auto;display:flex;align-items:center;gap:10px;}
        #Restrurent_filter_slider::-webkit-scrollbar{width:0;height:0;}
        #Restrurent_filter_slider button{height:42px;background-color:#eeeeeec0;flex-shrink:0;font-size:15px;padding:0 20px;border-radius:100px;}
        #Restrurent_filter_slider button:hover{filter:brightness(90%);}
        #Restrurent_filter_searchbar{width:30pc;height:42px;display:flex;align-items:center;position:relative;}
        #Restrurent_filter_searchbar input{width:100%;padding:0 15px 0 2.4pc;border-radius:100px;height:100%;background-color:transparent;border:1px solid #ddd;color:#0a421a;font-size:15px;text-overflow:ellipsis;transition:0.4s ease;}
        #Restrurent_filter_searchbar input:focus{border:1px solid #0a421a;}
        #Restrurent_filter_searchbar svg{width:20px;position:absolute;left:12px;color:#0a421a;}
        @media(max-width:800px){#Con_Restrurent_filter{flex-direction:column;gap:10px;}#Restrurent_filter_slider button{height:32px;}}
        @media(max-width:500px){#Restrurent_filter_searchbar{width:95%;}#Con_Restrurent_filter{padding:0 14px;}}
        </style>
    <div id="Con_Restrurent_filter">
        <div id="Restrurent_filter">
            <p id="Restrurent_filter_nav">Filter</p>
            <div id="Restrurent_filter_slider">
                <button><i class="fa-solid fa-leaf" style="color:#1d9e41;"></i> Veg</button>
                <button><i class="fa-solid fa-egg" style="color:orangered;"></i> Non veg</button>
                <button><i class="fa-solid fa-star" style="color:gold;"></i> Top rated</button>
                <button><i class="fa-solid fa-pepper-hot" style="color:red;"></i> Spicy</button>
            </div>
        </div>
        <div id="Restrurent_filter_searchbar">
            <input type="search" name="" placeholder="Search meals , foods">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>                  
        </div>
    </div>
    


    
    <style>
        #Restrurent{width:100%;height:fit-content;padding:20px;display:flex;gap:10px;}
        #Restrurent::-webkit-scrollbar{width:0;height:0;}
        .Restrurent_card{width:50pc;border:1px solid #ddd;cursor:pointer;height:fit-content;overflow:hidden;border-radius:15px;display:flex;transition:0.4s ease;flex-shrink:0;}
        .Restrurent_card img{width:40%;object-fit:cover;border-right:1px solid #ddd;}
        .Restrurent_card_right{width:60%;height:100%;padding:7px;display:flex;}
        .Restrurent_card_right_info{width:60%;height:100%;}
        .Restrurent_card_info_rating{margin:10px 0 0 0;display:flex;align-items:center;gap:15px;}
        .Restrurent_card_info_rating i{margin:0;flex-shrink:0;border-radius:4px;background-color:#1d9e41;color:#fff;font-size:10px;padding:6px;}
        .Restrurent_card_info_rating p{margin:0;font-size:15px;}
        .Restrurent_card_info_cost{width:100%;font-size:18px;margin:20px 0 0 0;font-weight:bold;}
        .Restrurent_card_info_ingredients{width:100%;font-size:12px;margin:20px 0 0 0;}
        .Restrurent_card_right_fea{width:40%;height:100%;}
        .Restrurent_card_right_fea button{width:120px;height:35px;flex-shrink:0;border-radius:10px;color:red;border:1px solid red;background-color:#ff00000a;position:relative;font-size:16px;}
        .Restrurent_card_right_fea button i{position:absolute;top:5px;right:5px;font-size:12px;}
        .Restrurent_card_right_fea span{width:120px;height:35px;border-radius:10px;color:red;border:1px solid red;background-color:#ff00000a;font-size:15px;margin:0;display:none;flex-shrink:0;}
        .Restrurent_card_right_fea span i,.Restrurent_card_right_fea span p{width:33.33%;height:100%;font-size:15px;margin:0;display:flex;align-items:center;justify-content:center;transition:0.4s ease;}
        .Restrurent_card_right_fea span i:hover{background-color:#ff000033;}
        .Restrurent_card_right_fea span p{font-size:16px;}
        
        @media(max-width:840px){.Restrurent_card{width:100%;}}
        @media(max-width:630px){.Restrurent_card_right_fea button,.Restrurent_card_right_fea span{width:90%;}}
        @media(max-width:500px){.Restrurent_card_info_title{font-size:16px;}.Restrurent_card_info_ingredients{margin:5px 0 0 0;}}
        @media(max-width:425px){.Restrurent_card img{height:fit-content;border-radius:10px;margin:4px;}.Restrurent_card_info_rating{width:100%;}.Restrurent_card_right_fea button,.Restrurent_card_right_fea span{height:30px;}.Restrurent_card_info_cost{margin:10px 0 0 0;}.Restrurent_card_info_rating p{font-size:12px;}}
        @media(max-width:400px){#Restrurent{padding:20px 0;}.Restrurent_card{border-radius:0;background-color:#fff;border:1px dashed #ddd;}}
        @media(max-width:360px){.Restrurent_card{position:relative;}.Restrurent_card_right{width:100%;}.Restrurent_card img{width:5pc;position:absolute;bottom:4px;right:4px;}.Restrurent_card_right_info{width:70%;}.Restrurent_card_right_fea{width:30%;}}
        </style>
    <div id="Restrurent">
            <div class="Restrurent_card">
                <img src="biriyani1.jpg" alt="Shop image"
                <div class="Restrurent_card_right">
                    <div class="Restrurent_card_right_info">
                        <h5 class="Restrurent_card_info_title">Dum Biriyani</h5>
                        <h6 class="Restrurent_card_info_rating"><i class="fa-solid fa-star"> 4</i><p>4.4k ratings</p></h6>
                        <h6 class="Restrurent_card_info_cost">₹120</h6>
                        <p class="Restrurent_card_info_ingredients">₹120</p>
                    </div>
                    <center class="Restrurent_card_right_fea">
                        <button class="Restrurent_card_addBtn" onclick="openRestrurentDetails('ADD')"><i class="fa-solid fa-plus"></i> ADD</button>
                        <span><i class="fa-solid fa-plus"></i><p>1</p><i class="fa-solid fa-minus"></i></span>
                    </center>
                </div>
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
        #Cart{width:100%;height:100vh;backdrop-filter:brightness(60%);display:none;align-items:center;justify-content:center;position:fixed;top:0;left:0;}
        #Cart_box{width:60%;height:90vh;background-color:#f5fffa;}
    </style>
    <div id="Cart">
        <div id="Cart_box">

        </div>
    </div>
    <script>

                const products = document.querySelectorAll(".Discount_resturent_slider_card");
                const discountElements = document.querySelectorAll('.Discount_resturent_slider_card_discount');

                window.addEventListener('load', () => {
                    for (let a = 0; a < discountElements.length; a++) {
                        const match = products[a].querySelector("h5");
                        const textValue = match ? match.textContent || match.innerHTML : "";
                        products[a].style.display = textValue.toUpperCase().includes(cardId) ? "" : "none";
                    }
                });


            

        const urlParams = new URLSearchParams(window.location.search);
        const cardId = urlParams.get('Name');

        document.title = cardId + '  : NITA - Meal';
        function CartOpner(){
                document.getElementById('Cart').style.display = 'flex';
            }
    </script>
    
</body>
</html>