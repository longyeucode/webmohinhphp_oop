var arrhinh=["12.png","10.png","11.png","12.png","13.png","14.png","10.png","16.png","14.png","17.jpg"]
function loadgrally(){
    //load hình mặc định 
    document.getElementById("img").src = "img/"+ arrhinh[0];
    document.getElementById('img').alt=0;
slideshow()
var img="";
for (let i = 0;i < arrhinh.length;i++) {
    if(i>8){
        img += '<img src="../public/imgfo4/'+arrhinh[i]+'"alt="" class="anh">>';
    }
}
document.getElementById("anh").innerHTML=img

}
//load anh len
function slideshow(){
    setInterval(loadslide,1500);
    }
function loadslide(){
    let sohientai = parseInt(document.getElementById("img").alt);
        sohientai ++ ;
        if(sohientai == 10){
            sohientai = 0;
        }
        document.getElementById("img").src="../public/imgfo4/" +arrhinh[sohientai];
        document.getElementById("img").alt=sohientai;
    }




//ADD TO CARD
    var cart= JSON.parse(localStorage.getItem("cart"));
if(cart!= null){
giohang=cart;
}
else{
var giohang = [];
}

var btn = document.getElementsByTagName("button");
for (let i = 0; i < btn.length; i++) {
btn[i].addEventListener("click", function() {
    // alert('bạn đã chọn vào nút thứ' + ' ' + i);
    var hinh = btn[i].parentElement.childNodes[1].childNodes[1].src;
    var ten = btn[i].parentElement.childNodes[3].text;
    var gia =btn[i].parentElement.childNodes[7].value;
    var soluong=1;
     //alert(gia);
     var sp={"hinh": hinh, "ten": ten, "gia": gia, "soluong":soluong}
     giohang.push(sp);
     // đẩy giỏ hàng lên Localstorage
    localStorage.setItem("cart", JSON.stringify(giohang));
    // lấy về show đúng sl sp trong 
    getsoluongsp();
   
});
}
//load slide show

function loaddatahome(){
getsoluongsp();
showproductnew();
}

//cart page
function loadatacart(){
getsoluongsp();
showcart(); 
total();
}
function showcart(){
var cart= JSON.parse(localStorage.getItem("cart"));
if(cart!= null){
   var kq="";
   for (let i = 0; i < cart.length; i++) {
    var tt=parseInt(cart[i]["gia"]*cart[i]["soluong"])
    kq +=
    `<tr>
    <th><img src="`+cart[i]["hinh"]+`" height="80px"
    
    </td>
    <th> <a class="title"> `+cart[i]["ten"]+`</a></th>
    <th> <a class="title">£ `+cart[i]["gia"]+`</ a> </th>
    <th> <a class="title"> `+cart[i]["soluong"]+`</a></th>
    <th> <a class="title">£ `+ tt +`</a></th>
  
</tr> `;
    
   }
   document.getElementById("thongtingiohang").innerHTML=kq;
}
}
function total(){
var cart= JSON.parse(localStorage.getItem("cart"));
if(cart!= null){
   var total=0;
   for (let i = 0; i < cart.length; i++) {
    var tt=parseInt(cart[i]["gia"]*cart[i]["soluong"])
    total+=tt;
    
   }
   //return total;
   document.getElementById("tongdonhang").innerHTML="Tổng đơn hàng là : £ "+total;
}
}

function getsoluongsp(){
    var cart= JSON.parse(localStorage.getItem("cart"));
    if(cart!= null){
        document.getElementById("slsp").innerHTML ="(" +cart.length+")";
    }

}
function delcart(){
localStorage.removeItem("cart");
window.location="fo4.html"

}
