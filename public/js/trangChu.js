$(document).ready(function() {
    $('.banner-sliderr').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: true,
        dots: false,
        draggable: true,
        prevArrow: "<button type='button' class='slick-prev-dt slick-arroww'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next-dt slick-arroww'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    });
});

document.getElementById("slide-im").onclick = function() {
    showImage("slider-img");
};

document.getElementById("slide-imm").onclick = function() {
    showImage("slider-imgg");
};

document.getElementById("slide-immm").onclick = function() {
    showImage("slider-imggg");
};

document.getElementById("slide-immmm").onclick = function() {
    showImage("slider-imgggg");
};
document.getElementById("slide-immmmm").onclick = function() {
    showImage("slider-imggggg");
};

function showImage(imageId) {
    document.getElementById("slider-img").style.display = 'none';
    document.getElementById("slider-imgg").style.display = 'none';
    document.getElementById("slider-imggg").style.display = 'none';
    document.getElementById("slider-imgggg").style.display = 'none';
    document.getElementById("slider-imggggg").style.display = 'none';
    document.getElementById(imageId).style.display = 'block';
}


var btnPrevvt = document.querySelector('.prevv');
var btnNexttv = document.querySelector('.nextt');
// console.log(btnNext)

var cou = 1;
btnNexttv.addEventListener('click', e=>{
    
    document.getElementById('raa' + cou).checked = true;
    
    if(cou == 2){
        setTimeout("cou = 1")
        
    }else {
        cou++;
    }
})
btnPrevvt.addEventListener('click', e=>{
    document.getElementById('raa' + cou).checked = true;
    //  NẾU VỊ TRÍ INDEX CỦA ẢNH = 1 - TỨC LÀ ẢNH ĐẦU TIÊN => KHI CLICK QUAI LẠI THÌ ẢNH SẼ NHẬN GIÁ TRỊ INDEX CUỐI DANH SÁCH
    if(cou == 1){
        cou = 2
    }
    // CÒN KHÔNG THÌ GIẢM GIÁ TRỊ VỊ TRÍ INDEX
    else{
        cou--;
    }
    
})

var cou = 1;
setInterval(function(){
    document.getElementById('raa' + cou).checked = true;
    cou++;
    if(cou > 2){
        cou = 1
    }

},2000)



var btnPrevv = document.querySelector('.p');
var btnNextt = document.querySelector('.n');
// console.log(btnNext)

var coun = 5;
btnNextt.addEventListener('click', e=>{
    
    document.getElementById('ra' + coun).checked = true;
    
    if(coun == 6){
        setTimeout("coun = 5",1000)
        
    }else {
        coun++;
    }
})
btnPrevv.addEventListener('click', e=>{
    document.getElementById('ra' + coun).checked = true;
    //  NẾU VỊ TRÍ INDEX CỦA ẢNH = 1 - TỨC LÀ ẢNH ĐẦU TIÊN => KHI CLICK QUAI LẠI THÌ ẢNH SẼ NHẬN GIÁ TRỊ INDEX CUỐI DANH SÁCH
    if(coun == 5){
        coun = 6
    }
    // CÒN KHÔNG THÌ GIẢM GIÁ TRỊ VỊ TRÍ INDEX
    else{
        coun--
    }
 


})   
var coun=5;
setInterval(function(){
    document.getElementById('ra' + coun).checked = true;
    coun++;
    if(coun > 6){
        coun = 5
    }

},6000)



var btnPrevvv = document.querySelector('.prevvv');
var btnNexttt = document.querySelector('.nexttt');
// console.log(btnNext)

var co = 1;
btnNexttt.addEventListener('click', e=>{
    
    document.getElementById('raaa' + co).checked = true;
    
    if(co == 2){
        setTimeout("co = 1")
        
    }else {
        co++;
    }
})
btnPrevvv.addEventListener('click', e=>{
    document.getElementById('raaa' + co).checked = true;
    //  NẾU VỊ TRÍ INDEX CỦA ẢNH = 1 - TỨC LÀ ẢNH ĐẦU TIÊN => KHI CLICK QUAI LẠI THÌ ẢNH SẼ NHẬN GIÁ TRỊ INDEX CUỐI DANH SÁCH
    if(co== 1){
        co = 2
    }
    // CÒN KHÔNG THÌ GIẢM GIÁ TRỊ VỊ TRÍ INDEX
    else{
        co--;
    }
    
})










// Lấy ra hai khối HTML
const block1 = document.getElementById("block1");
const block2 = document.getElementById("block2");
const block3 = document.getElementById("block3");
const block4 = document.getElementById("block4");
// Định nghĩa hàm đổi màu
function changeColor(selectedBlock, otherBlock) {
  // Đổi màu nền của khối được click thành màu xanh
  selectedBlock.style.backgroundColor = "#5A4137";
  // Đổi màu nền của khối còn lại thành màu trắng
  otherBlock.style.backgroundColor = "#A03522";
  
    // Thay đổi border bottom của khối được click thành 2px solid red
 selectedBlock.style.clipPath="polygon(100% 0, 100% 85%, 55% 85%,50% 100%, 45% 85%, 0 85%, 0 0)"
 otherBlock.style.clipPath="none"

}

// Thêm sự kiện click cho khối 1
block1.addEventListener("click", function() {
  changeColor(block1, block2);
});
block1.addEventListener("click", function() {
    changeColor(block1, block3);
  });
  block1.addEventListener("click", function() {
    changeColor(block1, block4);
  });
  block2.addEventListener("click", function() {
    changeColor(block2, block1);
  });
  block2.addEventListener("click", function() {
    changeColor(block2, block3);
  });
  block2.addEventListener("click", function() {
    changeColor(block2, block4);
  });

  block3.addEventListener("click", function() {
    changeColor(block3, block1);
  });
  block3.addEventListener("click", function() {
    changeColor(block3, block2);
  });
  block3.addEventListener("click", function() {
    changeColor(block3, block4);
  });

  
  block4.addEventListener("click", function() {
    changeColor(block4, block1);
  });
  block4.addEventListener("click", function() {
    changeColor(block4, block2);
  });
  block4.addEventListener("click", function() {
    changeColor(block4, block3);
  });
  
// Thêm sự kiện click cho khối 2

document.getElementById("block1").onclick = function () {
    document.getElementById("KHUNG-SP").style.display = 'block';
    document.getElementById("KHUNG-SPP").style.display = 'none';
    document.getElementById("KHUNG-SPPP").style.display = 'none';
    document.getElementById("KHUNG-SPPPP").style.display = 'none';
  };
  document.getElementById("block2").onclick = function () {
    document.getElementById("KHUNG-SPP").style.display = 'block';
    document.getElementById("KHUNG-SP").style.display = 'none';
    document.getElementById("KHUNG-SPPP").style.display = 'none';
    document.getElementById("KHUNG-SPPPP").style.display = 'none';
  };
  document.getElementById("block3").onclick = function () {
    document.getElementById("KHUNG-SPP").style.display = 'none';
    document.getElementById("KHUNG-SP").style.display = 'none';
    document.getElementById("KHUNG-SPPP").style.display = 'block';
    document.getElementById("KHUNG-SPPPP").style.display = 'none';
  };
  document.getElementById("block4").onclick = function () {
    document.getElementById("KHUNG-SPP").style.display = 'none';
    document.getElementById("KHUNG-SP").style.display = 'none';
    document.getElementById("KHUNG-SPPP").style.display = 'none';
    document.getElementById("KHUNG-SPPPP").style.display = 'block';
  };







