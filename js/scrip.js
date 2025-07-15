let currentSlide = 0
const totalSlides = 6 // Total de noticias
let slidesToShow = 3 // Número de slides visibles por defecto
let autoSlideInterval

// Función para determinar cuántos slides mostrar según el ancho de pantalla
function updateSlidesToShow() {
  const width = window.innerWidth
  if (width <= 768) {
    slidesToShow = 1
  } else if (width <= 1024) {
    slidesToShow = 2
  } else {
    slidesToShow = 3
  }
}

// Función para mover el carrusel
function moveCarousel(direction) {
  const track = document.getElementById("newsCarousel")
  const maxSlide = Math.ceil(totalSlides / slidesToShow) - 1

  currentSlide += direction

  // Controlar los límites
  if (currentSlide > maxSlide) {
    currentSlide = 0
  } else if (currentSlide < 0) {
    currentSlide = maxSlide
  }

  updateCarouselPosition()
  updateIndicators()
  resetAutoSlide()
}

// Función para ir a un slide específico
function goToSlide(slideIndex) {
  currentSlide = slideIndex
  updateCarouselPosition()
  updateIndicators()
  resetAutoSlide()
}

// Función para actualizar la posición del carrusel
function updateCarouselPosition() {
  const track = document.getElementById("newsCarousel")
  const slideWidth = 100 / slidesToShow
  const translateX = -(currentSlide * slideWidth)
  track.style.transform = `translateX(${translateX}%)`
}

// Función para actualizar los indicadores
function updateIndicators() {
  const indicators = document.querySelectorAll(".indicator")
  const maxSlide = Math.ceil(totalSlides / slidesToShow) - 1

  // Ocultar/mostrar indicadores según sea necesario
  indicators.forEach((indicator, index) => {
    if (index <= maxSlide) {
      indicator.style.display = "block"
      indicator.classList.toggle("active", index === currentSlide)
    } else {
      indicator.style.display = "none"
    }
  })
}

// Función para iniciar el auto-slide
// function startAutoSlide() {
//   autoSlideInterval = setInterval(() => {
//     moveCarousel(1)
//   }, 5000) // Cambia cada 5 segundos
// }

// Función para reiniciar el auto-slide
// function resetAutoSlide() {
//   clearInterval(autoSlideInterval)
//   startAutoSlide()
// }

// // Función para pausar el auto-slide
// function pauseAutoSlide() {
//   clearInterval(autoSlideInterval)
// }

// Función para manejar el touch/swipe en dispositivos móviles
let startX = 0
let endX = 0

function handleTouchStart(e) {
  startX = e.touches[0].clientX
}

function handleTouchMove(e) {
  endX = e.touches[0].clientX
}

function handleTouchEnd() {
  const threshold = 50 // Mínima distancia para considerar un swipe
  const diff = startX - endX

  if (Math.abs(diff) > threshold) {
    if (diff > 0) {
      onclick(1) // Swipe izquierda - siguiente
    } else {
      onclick(-1) // Swipe derecha - anterior
    }
  }
}

// Inicialización cuando el DOM esté listo
document.addEventListener("DOMContentLoaded", () => {
  updateSlidesToShow()
  updateCarouselPosition()
  updateIndicators()
  startAutoSlide()

  // Agregar event listeners para touch
  const carouselContainer = document.querySelector(".carousel-container")
  if (carouselContainer) {
    carouselContainer.addEventListener("touchstart", handleTouchStart, { passive: true })
    carouselContainer.addEventListener("touchmove", handleTouchMove, { passive: true })
    carouselContainer.addEventListener("touchend", handleTouchEnd)

    // Pausar auto-slide cuando el usuario interactúa
    carouselContainer.addEventListener("mouseenter", pauseAutoSlide)
    carouselContainer.addEventListener("mouseleave", startAutoSlide)
  }

  // Manejar cambios de tamaño de ventana
  window.addEventListener("resize", () => {
    updateSlidesToShow()
    currentSlide = 0 // Resetear a la primera slide
    updateCarouselPosition()
    updateIndicators()
  })

  // Agregar soporte para navegación con teclado
  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") {
      moveCarousel(-1)
    } else if (e.key === "ArrowRight") {
      moveCarousel(1)
    }
  })
})

// Función para toggle de secciones (mantenida del código original)
function toggleSection(sectionId) {
  const content = document.getElementById(sectionId)
  const header = content.previousElementSibling
  const icon = header.querySelector(".toggle-icon")

  if (content.style.maxHeight) {
    content.style.maxHeight = null
    icon.classList.remove("rotated")
  } else {
    content.style.maxHeight = content.scrollHeight + "px"
    icon.classList.add("rotated")
  }
}
