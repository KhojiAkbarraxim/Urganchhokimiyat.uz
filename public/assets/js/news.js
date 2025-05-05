let paginationUrl = window.location.search.slice(6)

fetch(`https://new.amudarya.uz/api/news?page=${paginationUrl}`)
    .then((data) => data.json())
    .then((data) => {
        let entries = document.querySelector(".news");
        for (let i = 0; i < data.data.length; i++) {
            entries.innerHTML += `
                <div class="my-container news-anim-fade" data-category='${data.data[i].category}' id="id${data.data[i].id}">
                    <div class="my-card">
                        <img class="my-card-image" src="/images/news/${data.data[i].image_path}">
                        <div style="font-size: 17px; margin: 5px 10px 0px 10px">
                            <p style="display: inline-block; color: rgb(90, 144, 245)">${data.data[i].created_at.slice(0, 10)}</p>
                            <p style="display: inline-block; color: rgb(90, 144, 245); font-size: 10px;">${+data.data[i].created_at.slice(11, 13) + 5}:${data.data[i].created_at.slice(14, 16)}</p>
                        </div>
                        <div>
                            <h4 style="margin-inline: 10px; text-align: justify" class='more'>${data.data[i].title}</h3>
                        </div>
                        <div style="text-align: end">
                            <a style="padding-inline: 10px" href="https://t.me/press_Amuwdarya/19850" target="_blank" >Telegram orqali ko'rish <i class="bi bi-arrow-up-right-square-fill"></i></a>
                        </div>
                    </div>
                </div>
                `;
        }

        const totalPagination = (data.total / 6).toFixed(),
            pageItem = document.querySelectorAll('.page-item'),
            previous = document.querySelector('#pagination-previous'),
            next = document.querySelector('#pagination-next')

        for (let i = 0; i < totalPagination; i++) {
            let li = document.createElement('li'),
                a = document.createElement('a')

            li.appendChild(a)

            li.classList.add('page-item')
            a.classList.add('page-link')

            a.setAttribute('href', `/news?page=${i + 1}`)

            a.textContent = i + 1

            pageItem[1].before(li)
        }

        previous.addEventListener('click', () => {
            if (+paginationUrl != 1) {
                window.location.href = `/news?page=${+paginationUrl - 1}`
            }
        })

        next.addEventListener('click', () => {
            if (+paginationUrl < totalPagination) {
                window.location.href = `/news?page=${+paginationUrl + 1}`
            }
            if (window.location.href.slice(22).length == 4) {
                window.location.href = `/news?page=${+paginationUrl + 2}`
            }
        })


    })
    .catch(() => {
        document.querySelector('.not__found-news').style.display = "block";
    })


setTimeout(() => {
    if (window.location.hash) {
        window.location.href = `https://new.amudarya.uz/news#id${window.location.hash.slice(3)}`
    }
}, 2000);

setTimeout(() => {
    const moreBtns = document.querySelectorAll('.more'),
        myContainer = document.querySelectorAll('.my-container')

    for (let i = 0; i < moreBtns.length; i++) {
        const element = moreBtns[i];
        element.addEventListener('click', () => {
            window.location.href = `/news/${myContainer[i].id.slice(2)}`
        })
    }
}, 2100)


setTimeout(() => {
    let news = document.querySelector('.news'),
        dataCategory = news.querySelectorAll('[data-category]'),
        categoryBtns = document.querySelector('.dropdown-category'),
        dropdownText = document.querySelector('#dropdown-text')

    categoryBtns.addEventListener('click', (event) => {
        let categoryBtn = event.target
        dropdownText.textContent = categoryBtn.textContent
        chap(categoryBtn)
    })


    function chap(categoryBtn) {
        for (let i = 0; i < dataCategory.length; i++) {
            if (categoryBtn.textContent != dataCategory[i].dataset.category) {
                dataCategory[i].style.display = 'none'
            } else if (categoryBtn.textContent == dataCategory[i].dataset.category && dataCategory[i].style.display == 'none') {
                dataCategory[i].style.display = 'block'
            }
        }
    }

}, 2000);