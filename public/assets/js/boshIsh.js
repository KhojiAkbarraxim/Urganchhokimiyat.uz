fetch('https://new.amudarya.uz/api/vacancies')
    .then(data => data.json())
    .then(data => {

        if (data.Vacancies.length > 0) {
            document.querySelector('.not__found-boshish').style.display = 'none'
        }

        let membersItemsBoshish = document.querySelector('.members__items-boshish')
        membersItemsBoshish.innerHTML += `
                <div class="members__item-boshish">
                    <h3 class="members__title">Урганч туманидаги бўш иш ўринлари</h3>
                    <div class="members__boshish-box">
                        <div class="members__data">
                            <p class="members__data-date">Жойланган вақти: ${data.Vacancies[0].created_at.slice(0, 10)}</p>
                            <p class="members__data-size">Тасниф: ${data.Vacancies[0].desc_uz}</p>
                        </div>
                        <div class="members__button">
                            <a href="/files/vacancies/${data.Vacancies[0].file_path}" download>
                                <button type="submit">юклаб олиш</button>
                            </a>
                        </div>    
                    </div>
                </div>
            `
    })