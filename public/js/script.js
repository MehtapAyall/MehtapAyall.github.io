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
        this.quantity=1;
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
                <span class="quantity">${shopping.quantity}</span>
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
                self.updateTotal();
            })
        }
    }

    updateQuantity(){
        let btnMinus = document.getElementsByClassName("quantity-minus");
        let btnPlus = document.getElementsByClassName("quantity-plus");
        let quantity = document.getElementsByClassName("quantity");
        let price = document.getElementsByClassName("price");
        let total = document.getElementsByClassName("total-value");
        let self = this;
        for(let i = 0; i < btnMinus.length; i++ ){
            btnMinus[i].addEventListener("click",function(){
                if(quantity[i].textContent > 1){
                    quantity[i].textContent--;
                    total[i].textContent = price[i].textContent * quantity[i].textContent;
                    self.cartCount();
                    self.updateTotal();
                }
            })
        }
        for(let i = 0; i < btnPlus.length; i++ ){
            btnPlus[i].addEventListener("click",function(){
                quantity[i].textContent++;
                total[i].textContent = price[i].textContent * quantity[i].textContent;
                self.cartCount();
                self.updateTotal();
            })
        }
    }

    cartCount(){
        let cartListItem = cartList.getElementsByClassName("list-item");
        let itemCount = document.getElementById("item-count");
        itemCount.innerHTML = cartListItem.length;
    }
    

    cartToggle(){
    btnCart.addEventListener("click", function() {
        cartList.classList.toggle("d-none");
    })

}


    updateTotal(){
        let total = 0;
        let cartListItem = cartList.getElementsByClassName("list-item");
        for(let i = 0; i < cartListItem.length; i++){
            let price = parseFloat(cartListItem[i].getElementsByClassName("price")[0].textContent.replace("₺",""));
            let quantity = parseInt(cartListItem[i].getElementsByClassName("quantity")[0].textContent);
            total += price * quantity;
        }
        cardTotal.textContent = `${total.toFixed(2)}₺`;
    }
}


    for(let i=0;i<btnEkle.length;i++){
    btnEkle[i].addEventListener("click",function(){
        let image = card[i].getElementsByTagName("img")[0].src;
        let title = card[i].getElementsByClassName("card-title")[0].textContent;
        let price = card[i].getElementsByClassName("price")[0].textContent;
        let shopping = new Shopping(image,title,price);
        let ui = new UI();
        ui.addToCart(shopping);
        ui.cartCount();
        ui.cartToggle();
        ui.updateQuantity();
        ui.removeCard();
        ui.updateTotal();
    })

}
btnCart.addEventListener("click", function() {
    cartList.classList.toggle("open");
  });
