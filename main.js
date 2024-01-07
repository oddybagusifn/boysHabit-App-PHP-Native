// preoloading 

window.addEventListener("load", () =>{
  const loader = document.querySelector(".preloader");

  loader.classList.add("preloader-hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild("preloader");
  })
})

// SCROLL TRIGGER 
function scrollToPosition() {
  // Ganti nilai 500 dengan posisi scroll yang diinginkan
  window.scrollTo({
    top: 713,
    behavior: 'smooth' // Untuk efek pengguliran yang halus
  });
}


// GO BACK FUNTION

function goBack() {
  window.history.back();
}






// SHOPPING BOX

const toggleButton = document.getElementById('shopping-box');
const myDiv = document.getElementById('add-to-cart');
const closeButton = document.getElementById('close-button');

// Menambahkan event listener untuk klik pada tombol
function addCart(){
  if (myDiv.style.display === 'none') {
    myDiv.style.display = 'block'; // Jika tersembunyi, tampilkan
  } else {
    myDiv.style.display = 'none'; // Jika terlihat, sembunyikan
  }
};

  // Mengubah properti display berdasarkan keadaan saat ini
  

closeButton.addEventListener('click', function() {
  // Mengubah properti display berdasarkan keadaan saat ini
  if (myDiv.style.display === 'block') {
    myDiv.style.display = 'none'; // Jika tersembunyi, tampilkan
  } else {
    myDiv.style.display = 'none'; // Jika terlihat, sembunyikan
  }
});

