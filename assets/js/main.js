(function cart(){
    const mainProducts = document.querySelector('.products-main');
    const cartCount = document.querySelector('.cartImg-count');
    let count = 0;
    const cartButton = document.querySelector('.cartImg');
    const cart = document.querySelector('.cart');
    const order = document.querySelector('.order');


    function showCart(){
        cart.style.display = 'block';
        drowTable();
        changeCartCountValue();
        document.body.style.overflow = 'hidden';
    }
    function closeCart(e){
        if(e.target === cart){
            cart.style.display = 'none';
            document.body.style.overflow = 'scroll';
        }
        if (JSON.parse(localStorage.cart).length === 0 && window.location.toString() === 'http://testsite/order' ){
            window.location = 'http://testsite/';
        }
    }
    function setCount() {
        cartCount.innerHTML = +count;
    }
    function addToLOcalStorage(data){
        let content=[];
        let push = true;

        if(localStorage.cart){
            content = JSON.parse(localStorage.cart);
            for (let i = 0; i < content.length ; i++) {
                if(content[i].id === data.id){
                    content[i].count  += 1 ;
                    push = false;
                }
            }
        }
        if (push){
            content.push(data);
        }
        localStorage.cart= JSON.stringify(content);

    }
    function drowTable(){
        const table = document.querySelector('.cart-table tbody');
        const data = JSON.parse(localStorage.cart);
        let sum = 0;
        if (data){
            table.innerHTML = '';
            if (data.length) {
                for (let i = 0; i < data.length ; i++) {
                    sum += parseFloat(data[i].price * data[i].count);
                    let row = document.createElement('tr');

                    row.innerHTML = (`                       
                        <td class="cart-table-img ">
                        <a href="http://testsite/itemID/${data[i].id}"><img src="${data[i].img}" width="100" alt=""></a></td>
                        
                        <td> <a href="http://testsite/itemID/${data[i].id}"> ${data[i].title}</a></td>
                        <td class="rowCount d-flex align-items-center">
                            <button class="minus" data-itemId="${data[i].id}">-</button>
                            <div class="cart-item-count">${data[i].count}</div>
                            <button class="plus" data-itemId="${data[i].id}">+</button>
                        </td>
                         <td >${data[i].price}</td>
                        `);
                    table.appendChild(row);
                }
            }else{
                let row = document.createElement('tr');
                row.innerHTML = `<td colspan="4">You didn't choose anything</td> `;
                table.appendChild(row);

            }
            changeCartCountValue();

            let total = document.querySelector('.cart .total');
            total.innerText = sum.toFixed(2);
        }
        disableOrder();

    }
    function checkLocalStorage(){
        let res = 0;
        if (localStorage.cart){
            for (let i = 0; i <JSON.parse(localStorage.cart).length ; i++) {
                res += parseFloat(JSON.parse(localStorage.cart)[i].count);
            }
            count = res;
        }
        else{
            localStorage.cart='';
            count = 0;
        }
        setCount();
        disableOrder()
    }
    function buy(e){
        if (e.target.className === 'buy'){
            count++;
            const data={};
            setCount();
            data.id = e.target.dataset.id;
            data.img = e.path[1].children[0].children[0].src;
            data.title = e.path[1].children[1].innerText;
            data.price = e.path[1].children[2].innerText;
            data.count = 1;
            //let tr = e.path[1].children[0].children[0];
            addToLOcalStorage(data);
        }
    }
    function changeCartCountValue(){
        let cartTable = document.querySelector('.cart-table');
        const data = JSON.parse(localStorage.cart);
        const minus = document.querySelectorAll('.minus');
        const plus = document.querySelectorAll('.plus');
        cartTable.addEventListener('click',(e)=>{
            for (let i = 0; i < minus.length; i++) {
                if (e.target === minus[i]) {
                    data[i].count -= 1;
                    if (data[i].count === 0){
                        data.splice(i,1);
                    }
                    localStorage.cart = JSON.stringify(data);
                    drowTable();
                    checkLocalStorage()
                }else if(e.target === plus[i]){
                    data[i].count += 1;
                    localStorage.cart = JSON.stringify(data);
                    drowTable();
                    checkLocalStorage()
                }
            }
        })

    }
    function disableOrder(){
        order.disabled = (count === 0)
    }

    checkLocalStorage();
    cartButton.addEventListener('click',()=> {
        showCart()
    });
    cart.addEventListener('click',(e)=>{
        closeCart(e)
    });
    order.addEventListener('click',()=>{
         window.location = 'http://testsite/order'
    });
    if(window.location.toString() === 'http://testsite/') {
        mainProducts.addEventListener('click',(e)=>{
            if(e.target.className === 'buy'){
                buy(e);
                showCart();
            }

        });
    }
})();
(function search(){
    function drowTable(arg){
        let serchTable = document.querySelector('.search-table tbody');
        serchTable.innerHTML = '';
        let length = arg.length < 5 ? arg.length : 5;
        for (let i = 0; i < length; i++) {
            serchTable.innerHTML +=
                `<tr>
                    <td class="search-table-img col-1"><img src="assets/${arg[i].cloth_img}" alt=""></td>
                    <td>${arg[i].cloth_title}</td>
                </tr>`
        }
    }
    let input = document.querySelector('.header-search');
    input.addEventListener('input',()=>{
        var formData = new FormData();
        formData.append('search', input.value);
        if (input.value) {
            fetch('/search', {method:'post', body : formData})
                .then((response)=>{
                    return response.text();
                }).then((r)=>{
                drowTable(JSON.parse(r)) ;
            })
        }else  drowTable('');

    })
})();
(function makeOrder(){
    function drowTable(){
        const table = document.querySelector('.order-content-table tbody');
        const data = JSON.parse(localStorage.cart);
        let orderData = document.getElementById('orderValue');
        let sum = 0;
        if (data){
            table.innerHTML = '';
            if (data.length) {
                for (let i = 0; i < data.length ; i++) {
                    sum += parseFloat(data[i].price * data[i].count);
                    let row = document.createElement('tr');

                    row.innerHTML = (`
                        <td class="cart-table-img "><img src="${data[i].img}" width="100" alt=""></td>
                        <td>${data[i].title}</td>
                        <td >
                            <div class="cart-item-count">${data[i].count}</div>
                         </td>
                         <td >${data[i].price}</td>
                        `);
                    table.appendChild(row);
                }
            }else{
                let row = document.createElement('tr');
                row.innerHTML = `<td colspan="4">You didn't choose anything</td> `;
                table.appendChild(row);

            }
            let total = document.querySelector('.order-content-table .total');
            total.innerText = sum.toFixed(2);
            orderData.value = JSON.stringify(data);
        }
    }

    if (window.location.toString() === 'http://testsite/order'){
        drowTable();
    }
})();







