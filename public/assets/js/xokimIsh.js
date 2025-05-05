fetch('http://127.0.0.1:8000/api/')
    .then(data => data.json())
    .then(data => {
        if (data.Data.data.length) {
            document.querySelector('.not__found-xokimish').style.display = 'none'
        }

        let membersItemsXokimish = document.querySelector('.members__items-xokimish')
        membersItemsXokimish.innerHTML += `
        <div class="members__item-boshish">
            <h3 class="members__title">Хокимлик иш юритиш йўриқномаси</h3>
            <div class="members__boshish-box-ish">
                <div class="members__data">
                    <p class="members__data-date">жойланган вақти: </p>
                    <p class="members__data-size">файл ҳажми: </p>
                </div>
                <div class="members__button">
                <div class="members__button">
                    <a href="/files/vacancies/" download>
                        <button type="submit">юклаб олиш</button>
                    </a>
                </div>
                </div>
            </div>
        </div>`

    })