const card = document.getElementsByClassName("card");
const btnEkle = document.getElementsByClassName("btn-info");
const btnCart = document.querySelector(".btn-cart");
const cartList = document.querySelector(".shopping-cart-list");
const cardTotal = document.querySelector(".total-value");

class Shopping{
    constructor(image,title,price){
        this.image=image;
        this.title=title;
        this.price=price;
    }
}

class UI{
    addToCart(shopping){
        const listItem = document.createElement("div");
        listItem.classList = "list-item";
        
        listItem.innerHTML = 
        `
        <div class="row align-item-center text-white-50">
            <div class="col-md-3">
                <img src="${shopping.image}" alt="ürün" class="img-fluid">
            </div>
            <div class="col-md-3">
                <div class="title">${shopping.title}</div>
            </div>
            <div class="col-md-2">
                <div class="price">${shopping.price}</div>
            </div>
            <div class="col-md-2">
                <button class="quantity-minus bg" style="border: none;">
                    <i class="fas fa-minus"></i>
                </button>
                <span class="quantity">0</span>
                <button class="quantity-plus bg" style="border: none;">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <div class="col-md-2">
                <button class="btn btn-delete">
                    <i class="fas fa-trash-alt text-danger"></i>
                </button>
            </div>
        </div>
        <div class="total d-flex mt-3">
            <div class="total-title">Toplam : </div>
            <span class="total-value"> 1</span>
        </div>
        <div class="">
            <button class="btn-al btn-outline-danger p-2 rounded-pill" type="button"> Alışverişi Tamamla </button>
        </div>
        `
        cartList.appendChild(listItem);
    }

    removeCard(){
        let btnRemove = document.getElementsByClassName("btn-delete");
        let self = this; 
        for(let i = 0; i < btnRemove.length; i++ ){
            btnRemove[i].addEventListener("click",function(){
                this.closest(".list-item").remove();
                self.cartCount();
            })
        }
    }
    

    cartCount(){
        let cartListItem = cartList.getElementsByClassName("list-item");
        let itemCount = document.getElementById("item-count");
        itemCount.innerHTML = cartListItem.length;
    }

    cartToggle(){
        btnCart.addEventListener("click",function(){
            cartList.classList.toggle("d-none");
        })
    }
}

for(let i=0; i<btnEkle.length; i++){
    btnEkle[i].addEventListener("click", function(e){
        let title = card[i].querySelector(".card-title").textContent;
        let price = card[i].querySelector(".price").textContent;
        let image = card[i].querySelector(".card-img-top").src;
        btnEkle[i].classList.add("disabled");
        btnEkle[i].textContent = "Eklendi";

        let shopping = new Shopping(image,title,price);
        let ui = new UI();

        ui.addToCart(shopping);
        ui.removeCard();
        ui.cartCount();

        e.preventDefault();
    })
}


document.addEventListener("DOMContentLoaded",()=>{
    let ui = new UI();

    ui.cartToggle();
})