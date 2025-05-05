async function apparatFetch(url) {
    try {
        return (await fetch(url)).json()
    } catch (e) {
        console.log('Error: ' + e);
    }
}

apparatFetch('https://new.amudarya.uz/api/apparats')
    .then(data => {

        if (data[0].length === 0) {
            document.querySelector('.not__found-apparat').style.display = "block"
        }

        let membersItems = document.querySelector(".members__items");


        for (let i = 0; i < data[0].length; i++) {

            let membersItem = document.createElement("div");
            membersItem.classList.add("members__item");

            membersItem.innerHTML = `
                    <div class='members__image'>
                            <img src='/images/apparats/${data[0][i].image_path}'>
                    </div>
                    <div class='members__about'>
                        <div class='member-btns'>
                            <button class='main-btn member-btn-active'>Асосий</button>
                            <button class='majburiyat-btn'>Мажбурияти</button>
                            <button class='malumot-btn'>Биография</button>
                            <button class='qabul-vaqti'>Қабул вақти</button>
                        </div>
                        <div class='main'>
                            <h3 class='members__about-name'><strong>${data[0][i].ismi_sharifi}</strong></h3>
                            <strong>Лавозим:</strong>
                            <p class='members__about-responsibility'>${data[0][i].kasbi}</p>
                            <div class='members__about-networking'>
                                <span class='members__about-phone'>${data[0][i].tel}</span>
                                <span class='members__about-email'>${data[0][i].email}</span>
                            </div>
                        </div>
                        <div class='majburiyat'>
                            <h3 class='members__about-name'>Мажбурияти</h3>
                            <p class='requirement-member-p'>${data[0][i].majburiyati}</p>
                        </div>
                        <div class='about-member'>
                            <h3 class='members__about-name'>Ходим малумотлари</h3>
                            <p class='about-member-p'>${data[0][i].hodim_malumotlari}</p>
                        </div>
                        <div class='qabul__vaqti'>
                            <div class="day__time">
                                <span>Қабул куни: <span>${data[0][i].day}</span></span>
                                <span>Қабул соати: <span>${data[0][i].time}</span></span>
                            </div>
                            <div class="desc">
                                <h6>Тасниф:</h6>
                                <p></p>
                            </div>
                        </div>
                        
                    </div>
        `;
            membersItems.append(membersItem);
        }

        let mainBtn = document.querySelectorAll(".main-btn"),
            majburiyatBtn = document.querySelectorAll(".majburiyat-btn"),
            malumotBtn = document.querySelectorAll(".malumot-btn"),
            main = document.querySelectorAll(".main"),
            aboutMember = document.querySelectorAll(".about-member"),
            majburiyat = document.querySelectorAll('.majburiyat'),
            qabulVaqtiBtn = document.querySelectorAll('.qabul-vaqti'),
            qabulVaqti = document.querySelectorAll('.qabul__vaqti')

        for (let i = 0; i < main.length; i++) {
            mainBtn[i].addEventListener("click", () => {
                mainBtn[i].classList.add("member-btn-active");
                majburiyatBtn[i].classList.remove("member-btn-active");
                malumotBtn[i].classList.remove("member-btn-active");
                qabulVaqtiBtn[i].classList.remove('member-btn-active')
                main[i].style.display = "block";
                aboutMember[i].style.display = "none";
                majburiyat[i].style.display = "none";
                qabulVaqti[i].style.display = "none";
            })
            malumotBtn[i].addEventListener("click", () => {
                mainBtn[i].classList.remove("member-btn-active");
                majburiyatBtn[i].classList.remove("member-btn-active");
                malumotBtn[i].classList.add("member-btn-active");
                qabulVaqtiBtn[i].classList.remove('member-btn-active')
                main[i].style.display = "none";
                aboutMember[i].style.display = "block";
                majburiyat[i].style.display = "none";
                qabulVaqti[i].style.display = "none";
            })
            majburiyatBtn[i].addEventListener("click", () => {
                mainBtn[i].classList.remove("member-btn-active");
                majburiyatBtn[i].classList.add("member-btn-active");
                malumotBtn[i].classList.remove("member-btn-active");
                qabulVaqtiBtn[i].classList.remove('member-btn-active')
                main[i].style.display = "none";
                aboutMember[i].style.display = "none";
                majburiyat[i].style.display = "block";
                qabulVaqti[i].style.display = "none";
            })
            qabulVaqtiBtn[i].addEventListener("click", () => {
                mainBtn[i].classList.remove("member-btn-active");
                majburiyatBtn[i].classList.remove("member-btn-active");
                malumotBtn[i].classList.remove("member-btn-active");
                qabulVaqtiBtn[i].classList.add("member-btn-active");
                main[i].style.display = "none";
                aboutMember[i].style.display = "none";
                majburiyat[i].style.display = "none";
                qabulVaqti[i].style.display = "block";
            })
        }
    })
    .then(() => {
        setTimeout(() => {
            let membersAboutResponsibility = document.querySelectorAll(".members__about-responsibility"),
                requirementMemberP = document.querySelectorAll(".requirement-member-p"),
                aboutMemberP = document.querySelectorAll(".about-member-p")

            for (let i = 0; i < 2; i++) {
                let desc = document.querySelectorAll('.desc'),
                    p = desc[i].querySelectorAll('p')
                if (membersAboutResponsibility[i].textContent.length > 300) {
                    membersAboutResponsibility[i].classList.add("members__about-scroll");
                }
                if (requirementMemberP[i].textContent.length > 600) {
                    requirementMemberP[i].classList.add("requirement-member-scroll");
                }
                if (aboutMemberP[i].textContent.length > 600) {
                    aboutMemberP[i].classList.add("about-member-scroll");
                }
            }
        }, 3000)

    })
    .catch(() => {
        document.querySelector('.not__found-apparat').style.display = "block"
    })

apparatFetch('https://new.amudarya.uz/api/schedules')
    .then(data => {
        for (let i = 0; i < data.Schedules.length; i++) {
            let desc = document.querySelectorAll('.desc'),
                p = desc[i].querySelectorAll('p');
            p[i].textContent = data.Schedules[i].desc_uz;
            if (p[i].textContent.length > 100) {
                p[i].classList.add('p__scroll')
            }
        }
    })
