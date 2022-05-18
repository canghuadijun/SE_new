const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
let index = 0
let imgNumber = imgPosition.length
//console.log(imgPosition)
imgPosition.forEach(function(image,index) {
    image.style.left = index*100 + "%"
})
function imgSilde () {
    index++;
    if (index >= imgNumber) {
        index = 0
    }
    imgContainer.style.left = "-" + index*100 + "%"
}
setInterval(imgSilde,5000)

/* cartegory */
const itemSliderbar = document.querySelectorAll(".cartegory-left-li")
itemSliderbar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})
// Product
const bigImg = document.querySelector(".product-content-left-big-img img")
const smalImg = document.querySelectorAll(".product-content-left-small-img img")
smalImg.forEach(function(imgItem,x){
    imgItem.addEventListener("click",function(){
        bigImg.src = imgItem.src
    })
})

const chitiet = document.querySelector(".chitiet")
const gioithieu = document.querySelector(".gioithieu")
if(chitiet) {
    chitiet.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
    })
}
if(gioithieu) {
    gioithieu.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
    })
}


const butTon = document.querySelector(".product-content-right-bottom-top")
if(butTon) {
    butTon.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}
