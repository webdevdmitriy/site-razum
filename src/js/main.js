const anchors = document.querySelectorAll('a[href*="#"]')

anchors &&
  anchors.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault()
      let href = this.getAttribute('href').slice(1)
      const scrollTarget = document.getElementById(href)
      const topOffset = document.querySelector('header').offsetHeight
      const elementPosition = scrollTarget.getBoundingClientRect().top
      const offsetPosition = elementPosition - topOffset
      window.scrollBy({
        top: offsetPosition,
        behavior: 'smooth',
      })
    })
  })

// =======================================================================================
// Анимация секции "Внедрение"

// let images = null
const start = document.querySelector('.integration__animation .start')
const main = document.querySelector('.integration__animation .main')
const target = document.querySelector('.integration__animation')
let crossed = false
let timerIdImgMain
let timerIdImgStart

const points = {
  showAnimationStart: 0.9,
  showAnimationReverse: 0.7,
  showImg: 0.1,
}

const observer = new IntersectionObserver(
  ([entery]) => {
    if (entery.isIntersecting && entery.intersectionRatio >= points.showAnimationStart) {
      crossed = true

      start.src = '/images/integration/conveyor/start.gif'
      // target.textContent = ''
      // target.append(images.filter(item => item.name == 'start.gif')[0].image)
      // console.log(op)

      clearTimeout(timerIdImgStart)
      clearTimeout(timerIdImgMain)

      timerIdImgMain = setTimeout(function () {
        start.src = '/images/integration/conveyor/main.gif'
        // target.textContent = ''
        // target.append(images.filter(item => item.name == 'main.gif')[0].image)
      }, 3900)
    }
    if (entery.intersectionRatio <= points.showAnimationReverse && crossed) {
      crossed = false
      start.src = '/images/integration/conveyor/start-reverse.gif'
      // target.textContent = ''
      // target.append(images.filter(item => item.name == 'start-reverse.gif')[0].image)
      clearTimeout(timerIdImgStart)
      clearTimeout(timerIdImgMain)
      timerIdImgStart = setTimeout(function () {
        start.src = '/images/integration/conveyor/start-img.png'
        // target.textContent = ''
        // target.append(images.filter(item => item.name == 'start-img.png')[0].image)
      }, 3900)
    }
    if (entery.isIntersecting && entery.intersectionRatio <= points.showImg) {
      // console.log(images)
      start.src = '/images/integration/conveyor/start-img.png'
      clearTimeout(timerIdImgStart)
      clearTimeout(timerIdImgMain)
      // target.textContent = ''
      // // target.append(images.filter(item => item.name == 'start-img.png')[0].image)
    }
  },
  {
    // threshold: [0.1, 0.7, 0.9],
    threshold: [points.showImg, points.showAnimationReverse, points.showAnimationStart],
    // threshold: [points.showAnimationStart],
  }
)

// =============================================================================
// =============================================================================
// =============================================================================
// форма
const callbackForm = document.querySelector('.callback__form')
const callbackResponse = document.querySelector('.callback__response')

callbackForm.addEventListener('submit', e => {
  e.preventDefault()

  const formData = new FormData(callbackForm)

  let data = {
    name: formData.get('name'),
    email: formData.get('email'),
    tel: formData.get('tel'),
  }

  if (data.name.length < 2 || !data.email.length || data.tel.length < 2) {
    callbackResponse.textContent = 'Заполните все поля формы'
    return
  }
  if (!formData.get('check')) {
    callbackResponse.textContent = 'Подтвердите согласие на обработку данных'
    // clearCallbackResponse()
    return
  }

  async function send() {
    const request = await fetch('/../mail/send.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json;charset=utf-8',
      },
      body: JSON.stringify(data),
    })
    const json = await request.json()
    const result = json.result
    const status = json.status
    console.log(result)
    console.log(status)
    callbackResponse.className = 'callback__response'
    if (result == 'error') {
      callbackResponse.textContent = 'Произошла ошибка. Форма не отправлена'
      callbackResponse.classList.add('error')
      console.log(status)
    }
    if (result == 'success') {
      callbackResponse.textContent = 'Заявка успешно отправлена. Скоро с вами свяжемся.'
      callbackResponse.classList.add('success')
    }
    clearCallbackResponse()
  }
  send()

  function clearCallbackResponse() {
    setTimeout(() => {
      callbackResponse.textContent = ''
      callbackResponse.classList.remove('success')
      callbackResponse.classList.remove('error')
    }, 3000)
  }
})

let phone = document.querySelector('input[type="tel"]')
phone.addEventListener('input', function () {
  let matrix = '+7 (___) ___ ____',
    i = 0,
    def = matrix.replace(/\D/g, ''),
    val = this.value.replace(/\D/g, '')

  if (def.length >= val.length) val = def

  this.value = matrix.replace(/./g, function (a) {
    return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? '' : a
  })
})

// ==========================================================================================
// ==========================================================================================
// ==========================================================================================
// ==========================================================================================
// ==========================================================================================
// ==========================================================================================
// Модальное окно

const articlesBtn = document.querySelector('.articles__btn')
const modalАrticle = document.querySelector('.modal-article')
const modalАrticleInner = document.querySelector('.modal-article__inner')

articlesBtn.addEventListener('click', () => {
  modalАrticle.style.display = 'block'
  document.body.style.overflow = 'hidden'
})

modalАrticle.addEventListener('click', function (e) {
  const target = e.target

  console.log(target.closest('modal-article__inner'))
  if (!target.closest('.modal-article__inner')) {
    modalАrticle.style.display = 'none'
    document.body.style.overflow = 'auto'
  }
})

// ===============================================================
// ===============================================================
// ===============================================================
// Анимация секции "Инструменты"
const dub = document.querySelector('.tools__animation img')
const sectionTools = document.querySelector('.tools')

const observerTools = new IntersectionObserver(
  ([entery]) => {
    if (entery.isIntersecting && entery.intersectionRatio >= 0.8) {
      dub.setAttribute('src', '/video/dub.gif')
    } else {
      dub.setAttribute('src', '/images/tools/dub-img.png')
    }
  },
  {
    threshold: [0.8],
  }
)

observerTools.observe(sectionTools)

//====================================================================================
// Меню
const menuBurger = document.querySelector('.menu-burger')
const menuBurgerLine = document.querySelector('.menu-burger__line')
const menuWindow = document.querySelector('.menu-window')
let menuMobilelistItems = document.querySelectorAll('.menu-mobile__list-item')

menuBurger &&
  menuBurger.addEventListener('click', function () {
    if (menuBurgerLine.classList.contains('menu-burger__line_active')) {
      menuBurgerLine.classList.remove('menu-burger__line_active')
      menuWindow.classList.remove('menu-window_active')
      document.body.classList.remove('overflow-hidden')
    } else {
      menuBurgerLine.classList.add('menu-burger__line_active')
      menuWindow.classList.add('menu-window_active')
      document.body.classList.add('overflow-hidden')
    }
  })

menuMobilelistItems = [...menuMobilelistItems]
menuMobilelistItems.push(document.querySelector('.menu-window__logo'))

menuMobilelistItems.forEach(item => {
  item.addEventListener('click', function () {
    // menuWindow.style.display = 'none'
    menuBurgerLine.classList.remove('menu-burger__line_active')
    menuWindow.classList.remove('menu-window_active')
    document.body.classList.remove('overflow-hidden')
  })
})
// ============================================================
// ============================================================
// ============================================================
// ============================================================
// ===============================================================
// ===============================================================
// Анимация секции "Разу сейчас now"

let nowBlocks = document.querySelectorAll('.now__inner .now__block')
let showed = false
const observerNowSection = new IntersectionObserver(
  entries => {
    let firstNumber = null
    let showedBlocks = [] // блоки, которые отобразились на странице
    entries.forEach(item => {
      if (item.isIntersecting) {
        if (item.target.dataset.id == 5) {
          firstNumber = 5
        }
        console.log('entries', entries)
        item.target.classList.add('now__animation')
        showedBlocks.push(item)
      }
    })

    // Если элементов на странице больше 1, то для каждого элемента добавляется задержка в анимации

    if (showedBlocks.length >= 2 && !showed) {
      if (firstNumber == 5 && showedBlocks.length < 5) {
        console.log('да')
        showedBlocks = [...showedBlocks].reverse()
      }
      showedBlocks.forEach((item, index) => {
        console.log('index: ', index)
        let style = `
        .now__block[data-id="${item.target.dataset.id}"] {
          animation-delay: ${index + 0.5}s !important;
  
        };
        `
        const styleSheet = document.createElement('style')
        styleSheet.innerText = style
        document.head.appendChild(styleSheet)
      })
      showed = true
    }
  },
  {
    threshold: [1],
  }
)

nowBlocks.forEach(item => observerNowSection.observe(item))

// =======================================================
// =======================================================
// =======================================================
// =======================================================
// =======================================================
// Загрузка изображений
// function loadImage(url) {
//   return new Promise(resolve => {
//     const image = new Image()

//     image.addEventListener('load', () => {
//       resolve({
//         name: image.src.split('/').pop(),
//         image,
//       })
//     })

//     image.src = url
//   })
// }

// const loadImg = paths => Promise.all(paths.map(loadImage))

// let paths = [
//   '/images/integration/conveyor/start.gif',
//   '/images/integration/conveyor/start-reverse.gif',
//   '/images/integration/conveyor/main.gif',
//   '/images/integration/conveyor/start-img.png',
// ]

const preloader = document.querySelector('.modal-preloader')
window.onload = function () {
  // preloader.style.display = 'none'
  // loadImg(paths).then(data => {
  //   images = data

  // })
  preloader.classList.add('modal-preloader_hide')
  observer.observe(target)
}
