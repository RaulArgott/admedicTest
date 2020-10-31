$(document).ready(function(){
    var removeCartItemButtons = document.getElementsByClassName('btn btn-danger')
    console.log(removeCartItemButtons)
    for(var i=0; i< removeCartItemButtons.length; i++){
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for(var i=0; i< quantityInputs.length; i++){
        var input = quantityInputs[i]
        input.addEventListener('change',quanityChange)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for(var i=0; i< addToCartButtons.length; i++){
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }
})

function addToCartClicked(event){
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var item = [
        shopItem.getElementsByClassName('shop-item-title')[0].innerText,
        shopItem.getElementsByClassName('shop-item-code')[0].innerText,
        shopItem.getElementsByClassName('shop-item-category')[0].innerText,
        shopItem.getElementsByClassName('shop-item-price')[0].innerText
    ]
    addItemToCart(item)
    updateCarTotal()
}

function addItemToCart(item){
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (let index = 0; index < cartItemNames.length; index++) {
        if(cartItemNames[index].innerText == item[0]){
            alert('Este articulo ya se encuentra en el carrito')
            return
        }
    }
    var cartRowContents =  `
        <div class="cart-item cart-column">
            <span class="cart-item-title">${item[0]}</span>
        </div>
        <span class="cart-price cart-column">${item[3]}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click',removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change',quanityChange)
}

function quanityChange(event){
    var input = event.target
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1
    }
    updateCarTotal()
}

function removeCartItem(event){
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCarTotal()
}

function updateCarTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for(var i = 0; i<cartRows.length; i++){
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement  = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$',''))
        var quantity = quantityElement.value
        total = total + (price * quantity)        
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}
