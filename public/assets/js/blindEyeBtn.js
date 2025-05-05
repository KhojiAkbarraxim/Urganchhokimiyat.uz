let blindEyeBtn = document.querySelector('.blind-eye-btn'),
    blindEyeOptions = document.querySelector('.blind-eye-options'),
    whiteBlack = document.querySelector('.white-black'),
    blackWhite = document.querySelector('.black-white'),
    header = document.querySelector('#header'),
    footer = document.querySelector('#footer'),
    footerNewsletter = document.querySelector('.footer-newsletter'),
    footerTop = document.querySelector('.footer-top'),
    submit = document.querySelector('[value="Юбориш"]'),
    test = document.querySelector('.test')

blindEyeBtn.addEventListener('click', () => {
    if (blindEyeOptions.style.display == '' || blindEyeOptions.style.display == 'none') {
        blindEyeOptions.style.display = 'block'
    } else {
        blindEyeOptions.style.display = 'none'
    }
})

whiteBlack.addEventListener('click', () => {
    [header, footer, footerNewsletter, footerTop, submit].forEach(el => {
        el.classList.add('blind-eye-option-background__black-white')
        test.style.color = 'black'
    })
})

blackWhite.addEventListener('click', () => {
    [header, footer, footerNewsletter, footerTop, submit].forEach(el => {
        el.classList.remove('blind-eye-option-background__black-white')
        test.style.color = '#DC3545'
    })
})