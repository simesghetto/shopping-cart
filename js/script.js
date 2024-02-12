// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
  cart = [];
  
  // Constructor
  function Item(id,name,img,price,count) {
    this.id = id;
    this.name = name;
    this.img = img;
    this.price = price;
    this.count = count;
  }
  
  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }
  

  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};
  
  // Add to cart
  obj.addItemToCart = function(id,name,img,price, count) {
    for(var item in cart) {
      if(cart[item].id === id) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(id,name,img, price, count);
    cart.push(item);
    saveCart();

    console.log(item);
  }

  // Set count from item
  obj.setCountForItem = function(id,count) {
    for(var i in cart) {
      if (cart[i].id === id) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(id) {

      for(var item in cart) {
        if(cart[item].id === id) {

            cart[item].count --;
            if(cart[item].count === 0) {
              cart.splice(item, 1);

          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(id) {
    for(var item in cart) {
      if(cart[item].id === id) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var id in cart) {
      totalCount += cart[id].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart);
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  // cart : Array
  // Item : Object/Class
  // addItemToCart : Function
  // removeItemFromCart : Function
  // removeItemFromCartAll : Function
  // clearCart : Function
  // countCart : Function
  // totalCart : Function
  // listCart : Function
  // saveCart : Function
  // loadCart : Function
  return obj;
})();


// *****************************************
// Triggers / Events
// ***************************************** 
// Add item
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var id = $(this).data('id');
  var name = $(this).data('name');
  var img = $(this).data('img');
  var price = Number($(this).data('price'));
  shoppingCart.addItemToCart(id,name,img,price, 1);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});


function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"


      + "<td> <img class='card-img-top img-fluid px-1 m-0  rounded-3 ' src='img/product_img/"+ cartArray[i].img +"'   onerror=this.src='../source/not_found.jpg'          > </td>" 
      + "<td>" + cartArray[i].name + " <br/>   "+ cartArray[i].price + "  </td>" 

      + "<td width=50% >"

      + "<div class='input-group'><button class='minus-item input-group-addon btn btn-sm btn-light' data-id="+cartArray[i].id+" data-name=" + cartArray[i].name + ">-</button>"
      + "<input type='number' class='text-end item-count form-control' data-id="+cartArray[i].id+" data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
      + "<button class='plus-item btn btn-sm btn-light input-group-addon' data-id="+cartArray[i].id+" data-name=" + cartArray[i].name + ">+</button></div>"

      + "</td>"
      + "<td></td>"
      + " = " 
      + "<td class='text-end '>" + cartArray[i].total + "</td>" 
      + "<td width='1%'>  <button type='button' class='delete-item btn  btn-sm' data-id="+cartArray[i].id+" data-name=" + cartArray[i].name + " > <i class='bi bi-x-circle text-danger '></i>  </button>   </td>"

       
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}




// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var id = $(this).data('id')
  shoppingCart.removeItemFromCartAll(id);
  displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var id = $(this).data('id')
  shoppingCart.removeItemFromCart(id);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var id = $(this).data('id')
  shoppingCart.addItemToCart(id);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var id = $(this).data('id');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(id, count);
  displayCart();
});

displayCart();