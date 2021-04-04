const API_URL = "https://600bd9e138fd25001702cc08.mockapi.io/api/v1";

function callAPI(endpoint, method = "GET", body) {
    return axios({
        method: method,
        url: `${API_URL}/${endpoint}`,
        data: body,
    }).catch((err) => {
        console.log(err);
    });
}
var vt;
var listLocal_2 = function() {
        var tour_hot = [];
        var list_tour_hot = "";
        callAPI("tour_hot", "GET", null).then((res) => {
            tour_hot = res.data;
            for (var i in tour_hot) {
                list_tour_hot =
                    `<div class="main-block hotel-block">
                <div class="main-img">
                    <a href="#">
                        <img src="images/${tour_hot[i].img}" class="img-responsive" alt="hotel-img" />
                    </a>
                    <div class="main-mask">
                        <ul class="list-unstyled list-inline offer-price-1">
                            <li class="price">$${tour_hot[i].price}<span class="divider">|</span><span class="pkg">Avg/Week</span></li>
                            <li class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star lightgrey"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-info hotel-info">
                    <div class="arrow">
                        <div data-toggle="modal" data-target="#myModalHot" onclick="chitiet_hot('${tour_hot[i].id}')"><i class="fa fa-angle-right"></i></div>
                    </div>
                    <div class="main-title hotel-title">
                        <a href="#">${tour_hot[i].name}</a>
                        <p>From: ${tour_hot[i].from}</p>
                    </div>
                </div>
            </div>
           
        `;
                document.getElementById("test").setAttribute("id", "items");
                document.getElementById("items").innerHTML = list_tour_hot;
                document.getElementById("items").setAttribute("id", "item");
            }
            for (var i in tour_hot) {
                document.getElementById("item").setAttribute("class", "item");
                document.getElementById("item").setAttribute("id", "items");
            }
        });

    }
    // listLocal_2();

function chitiet_hot(id) {
    vt = id;
    console.log(vt)
    let html = "";
    let tour_hot = [];
    callAPI(`tour_hot/${id}`, "GET", null).then((res) => {
        tour_hot = res.data;
        console.log(tour_hot);
        html = `<div class="card mb-3" style="max-width: 800px;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <img src="images/${tour_hot.img}" alt="" style = "width: 350px; height: 260px;">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                            <h5 class="card-title">${tour_hot.name}</h5>
                            <p class="card-text">${tour_hot.detail}</p>
                            <p class="card-text">From: ${tour_hot.from}</p>
                            <p class="card-text"><medium class="text-muted"><b>$${tour_hot.price}</b></medium></p>
                            </div>
                        </div>
                    </div>
                </div>`;
        document.getElementById("printf_tour_hot").innerHTML = html;
    });
}
var listCart = [];

function checkCart() {
    if ("listCart" in localStorage) { listCart = getListCart() } else {
        setListCart(listCart);
    }
}

function getListCart() {
    return JSON.parse(window.localStorage.getItem("listCart"));
}

function setListCart(listCart) {
    localStorage.setItem('listCart', JSON.stringify(listCart));
}
checkCart();

function cart() {
    var listUser = [];
    check();
    listUser = getListAccounts()
    var listUser2 = [];
    checkCurrentUser();
    listUser2 = getCurrentUser()
    if (listUser2.length > 0) {
        for (var u of listUser) {
            if (u.user == listUser2[0].user) {
                u.cart.push(vt);
                for (var i in listUser) {
                    if (u.user == listUser[i].user) {
                        listUser[i] = u;
                    }
                }
                setListAccounts(listUser)
            }
            console.log(listUser);
        }
    } else {
        alert("You are not logged in !!!")
    }
}



function callAPI(endpoint, method = "GET", body) {
    return axios({
        method: method,
        url: `${API_URL}/${endpoint}`,
        data: body,
    }).catch((err) => {
        console.log(err);
    });
}

function listLocal_3() {
    var tour_offer = [];
    var list_tour_offer = "";
    callAPI("tour_offer", "GET", null).then((res) => {
        tour_offer = res.data;
        for (var i in tour_offer) {
            list_tour_offer =
                `<div class="main-block tour-block">
                    <div class="main-img">
                        <img src="images/${tour_offer[i].img}" class="img-responsive" alt="tour-img">
                    </div>
                    <div class="offer-price-2">
                        <ul class="list-unstyled">
                            <li class="price">$${tour_offer[i].price}<div class="arrow" data-toggle="modal" data-target="#myModalOffer" onclick="chitiet_offer('${tour_offer[i].id}')"><i class="fa fa-angle-right"></i></div></li>
                        </ul>
                    </div>
                    <div class="main-info tour-info">
                        <div class="main-title tour-title">
                            <a href="#">${tour_offer[i].name}</a>
                            <p>From: ${tour_offer[i].from}</p>
                            <div class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star grey"></i></span>
                            </div>
                        </div>
                    </div>
                    </div>`;
            document.getElementById("testa").setAttribute("id", "itemsa");
            document.getElementById("itemsa").innerHTML = list_tour_offer;
            document.getElementById("itemsa").setAttribute("id", "itema");
        }
        for (var i in tour_offer) {
            document.getElementById("itema").setAttribute("class", "item");
            document.getElementById("itema").setAttribute("id", "items");
        }
    });
}
// listLocal_3();

function chitiet_offer(id) {
    let html = "";
    var tour_offer = [];
    callAPI(`tour_offer/${id}`, "GET", null).then((res) => {
        tour_offer = res.data;
        console.log(tour_offer);
        html = `<div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <img src="images/${tour_offer.img}" alt="" style = "width:350px; heigth: 260px;">
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                            <h5 class="card-title">${tour_offer.name}</h5> 
                            <p class="card-text">${tour_offer.detail}</p> 
                            <p class="card-text"><medium class="text-muted"><b>${tour_offer.price}</b></medium></p>
                            </div>
                        </div>
                    </div>
                </div>`
        document.getElementById('printf_tour_offer').innerHTML = html;
    });
}