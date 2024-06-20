const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});

  
document.querySelector(".theme-toggle").addEventListener("click",() => {
    toggleLocalStorage();
    toggleRootClass();
});

function toggleRootClass(){
    const current = document.documentElement.getAttribute('data-bs-theme');
    const inverted = current == 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-bs-theme',inverted);
};

function toggleLocalStorage(){
    if(isLight()){
        localStorage.removeItem("light");
    }else{
        localStorage.setItem("light","set");
    }
};

function isLight(){
    return localStorage.getItem("light");
};

if(isLight()){
    toggleRootClass();
};
function confirmDelete(MaSanPham) {
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm có mã: '+ MaSanPham +' không?',)) {
        document.getElementById('deleteForm' + MaSanPham).submit(); // Gửi form nếu người dùng đồng ý
    }
}
function confirmDeletee(Id) {
    if (confirm('Bạn có chắc chắn muốn xóa khách hàng có mã: '+ Id +' không?',)) {
        document.getElementById('deleteFormm' + Id).submit(); // Gửi form nếu người dùng đồng ý
    }
}
    
function confirmDeleteee(MaHoaDon) {
    if (confirm('Bạn có chắc chắn muốn xóa Hóa Đơn có mã: '+ MaHoaDon +' không?',)) {
        document.getElementById('deleteFormmm' + MaHoaDon).submit(); // Gửi form nếu người dùng đồng ý
    }
}
    



document.getElementById("click1").onclick = function () {
    document.getElementById("main1").style.display = 'block' ;
    document.getElementById("main2").style.display = 'none';
    document.getElementById("main3").style.display = 'none';
    document.getElementById("main4").style.display = 'none';
  };
  document.getElementById("click2").onclick = function () {
    document.getElementById("main2").style.display = 'block';
    document.getElementById("main1").style.display = 'none';
    document.getElementById("main3").style.display = 'none';
    document.getElementById("main4").style.display = 'none';
  };
  document.getElementById("click3").onclick = function () {
    document.getElementById("main3").style.display = 'block';
    document.getElementById("main1").style.display = 'none';
    document.getElementById("main2").style.display = 'none';
    document.getElementById("main4").style.display = 'none';
  };