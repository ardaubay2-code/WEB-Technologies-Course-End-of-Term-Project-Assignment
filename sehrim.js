// Başlangıçta 1. resmi (ilk sıradakini) gösteriyoruz
let currentSlide = 1;

// Sağ ve sol oklara tıklandığında çalışacak ana fonksiyon
function changeSlide(direction) {
  // Sayfadaki "slide" class'ına sahip tüm resim kutularını bul
  let slides = document.querySelectorAll(".slide");
  
  // Önce tüm resimlerden "active" class'ını (yani görünürlük özelliğini) sil
  slides.forEach(slide => {
    slide.classList.remove("active");
  });

  // Gelen yöne göre (ileri için +1, geri için -1) sırayı güncelle
  currentSlide += direction;

  // Eğer en sonuncu resimdeyken ileri basılırsa, en başa (1. resme) dön
  if (currentSlide > slides.length) {
    currentSlide = 1;
  }
  
  // Eğer en baştaki resimdeyken geri basılırsa, en sona (sonuncu resme) git
  if (currentSlide < 1) {
    currentSlide = slides.length;
  }

  // Hesaplanan yeni sıradaki resme "active" class'ını ekleyerek görünür yap
  // (Diziler 0'dan başladığı için currentSlide - 1 yazıyoruz)
  slides[currentSlide - 1].classList.add("active");
}