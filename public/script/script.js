var MenuItems = document.getElementById('MenuItems');

MenuItems.style.maxHeight = '0px';

function menutoggle() {
  if (MenuItems.style.maxHeight == '0px') {
    MenuItems.style.maxHeight = '200px';
  } else {
    MenuItems.style.maxHeight = '0px';
  }
}

// ==========
$('#menu-toggle').click(function (e) {
  e.preventDefault();
  $('#wrapper').toggleClass('toggled');
});

var ProductImg = document.getElementById('ProductImg');
var SmallImg = document.getElementsByClassName('small-img');

SmallImg[0].onclick = function () {
  ProductImg.src = SmallImg[0].src;
};
SmallImg[1].onclick = function () {
  ProductImg.src = SmallImg[1].src;
};
SmallImg[2].onclick = function () {
  ProductImg.src = SmallImg[2].src;
};
SmallImg[3].onclick = function () {
  ProductImg.src = SmallImg[3].src;
};

var MenuItems = document.getElementById('MenuItems');

MenuItems.style.maxHeight = '0px';

function menutoggle() {
  if (MenuItems.style.maxHeight == '0px') {
    MenuItems.style.maxHeight = '200px';
  } else {
    MenuItems.style.maxHeight = '0px';
  }
}

//Modal edit detail vendor 
const dalmo = document.getElementById('dalmo-vendor');
const openBtn = document.querySelector('.btn-detail-edit');
const closeBtn = document.querySelector('.close-btn');

// Click events
openBtn.addEventListener('click', () => {
  dalmo.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
  dalmo.style.display = 'none';
});

function previewImg(){
  const input_gambar = document.querySelector('#input_gambar');
  const input_gambarLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.img-preview');
  
  
  input_gambarLabel.textContent = input_gambar.files[0].name;
  
  const fileInput_gambar = new FileReader();
  
  fileInput_gambar.readAsDataURL(input_gambar.files[0]);
  
  fileInput_gambar.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}

function previewImg2(){
  const input_gambar_2 = document.querySelector('#input_gambar_2');
  const input_gambar_2Label = document.querySelector('#input_gambar2');
  const imgPreview2 = document.querySelector('.img-preview2');
  
  
  input_gambar_2Label.textContent = input_gambar_2.files[0].name;
  
  const fileInput_gambar_2 = new FileReader();
  
  fileInput_gambar_2.readAsDataURL(input_gambar_2.files[0]);
  
  fileInput_gambar_2.onload = function(e) {
    imgPreview2.src = e.target.result;
  }
}

function previewImg3(){
  const input_gambar_3 = document.querySelector('#input_gambar_3');
  const input_gambar_3Label = document.querySelector('#input_gambar3');
  const imgPreview3 = document.querySelector('.img-preview3');
  
  
  input_gambar_3Label.textContent = input_gambar_3.files[0].name;
  
  const fileInput_gambar_3 = new FileReader();
  
  fileInput_gambar_3.readAsDataURL(input_gambar_3.files[0]);
  
  fileInput_gambar_3.onload = function(e) {
    imgPreview3.src = e.target.result;
  }
}

function previewImg4(){
  const input_gambar_4 = document.querySelector('#input_gambar_4');
  const input_gambar_4Label = document.querySelector('#input_gambar4');
  const imgPreview4 = document.querySelector('.img-preview4');
  
  
  input_gambar_4Label.textContent = input_gambar_4.files[0].name;
  
  const fileInput_gambar_4 = new FileReader();
  
  fileInput_gambar_4.readAsDataURL(input_gambar_4.files[0]);
  
  fileInput_gambar_4.onload = function(e) {
    imgPreview4.src = e.target.result;
  }
}