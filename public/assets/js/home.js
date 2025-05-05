async function homeFetch(url) {
    try {
        return (await fetch(url)).json()
    } catch (e) {
        console.log('Error: ' + e);
    }
}

homeFetch('https://new.amudarya.uz/api/news')
    .then(data => {
        let newsContainer = document.querySelector(".news-container");
        for (let i = 0; i < 6; i++) {
            newsContainer.innerHTML += `
                <article id="newId-${data.data[i].id}" class="news-card">
                    <div>
                        <img class="my-img" src="images/news/${data.data[i].image_path}">
                        <div id='date-time' style="padding-inline: 15px; height: 30px">
                            <p id="date" style="display: inline-block; color: rgb(90, 144, 245)">${data.data[i].created_at.slice(0, 10)}</p>
                            <p style="display: inline-block; color: rgb(90, 144, 245); font-size: 10px; margin-left: 3px">${+data.data[i].created_at.slice(11, 13) + 5}:${data.data[i].created_at.slice(14, 16)}</p>
                        </div>
                        <div class="card-content">
                            <h3 class="my-title">${data.data[i].title.length > 100 ? data.data[i].title.slice(0, 60) + '...' : data.data[i].title}</h3>
                        </div>
                        <div>
                            <a class="glass-text">batafsil</a>
                        </div>
                    </div>
                </article>
                `
        };
    })
    .catch(() => {
        document.querySelector('.not__found-home').style.display = "block";
    })


setTimeout(() => {
    let newsCardArr = document.querySelectorAll('.news-card'),
        moreBtnArr = document.querySelectorAll('.glass-text')

    for (let i = 0; i < 6; i++) {
        moreBtnArr[i].addEventListener('click', () => {
            window.location.href = `https://new.amudarya.uz/news/${newsCardArr[i].id.slice(6, 8)}`
        })
    }
}, 4000);


let hero = document.querySelector('.home-section'),
    btnGetStarted = document.querySelector('.btn-get-started'),
    portNews = document.querySelector('.port-news'),
    glassText = document.querySelector('.news-container')

setTimeout(() => {

    whiteBlack.addEventListener('click', () => {
        glassText.querySelectorAll('article').forEach(el => {
            el.querySelector('div').querySelector('.glass-text').style.color = 'black'
            el.querySelector('div').querySelector('#date-time').querySelectorAll('p').forEach(el => {
                el.style.color = 'black'
            })
        })
        hero.setAttribute('id', '')
        hero.style.background = 'black'
        btnGetStarted.style.borderColor = 'white'
        glassText.style.color = 'black'
        portNews.style.color = 'black'
    })

    blackWhite.addEventListener('click', () => {
        glassText.querySelectorAll('article').forEach(el => {
            el.querySelector('div').querySelector('.glass-text').style.color = ''
            el.querySelector('div').querySelector('#date-time').querySelectorAll('p').forEach(el => {
                el.style.color = 'rgb(90, 144, 245)'
            })
        })
        hero.setAttribute('id', 'hero')
        hero.style.background = ''
        btnGetStarted.style.borderColor = ''
        glassText.style.color = ''
        portNews.style.color = ''
    })
}, 2000)