let urlId = window.location.pathname

if (urlId.search(/-/ig) != -1) {
    fetch(`https://new.amudarya.uz/api/news/${urlId.slice(6)}`)
        .then(data => data.json())
        .then(data => {
            const news = document.querySelector(".new");
            for (let i = 0; i < data.news.length; i++) {
                news.innerHTML += `
                    <div class="my-container">
                        <div class="my-card">
                            <div>
                                <h5 style="font-weight: 700;">${data.news[i].title}</h5>
                                <div style="height: 30px">
                                    <p id="date" style="display: inline-block; color: rgb(90, 144, 245);">${data.news[i].created_at.slice(0, 10)}</p>
                                    <p style="display: inline-block; color: rgb(90, 144, 245);  font-size: 10px">${+data.news[i].created_at.slice(11, 13) + 5}:${data.news[i].created_at.slice(14, 16)}</p>
                                </div>
                            </div>
                            <img class="my-card-image" src="/images/news/${data.news[i].image_path}">
                            <div>
                                <p style="text-align: justify">${data.news[i].content}</p>
                            </div>
                            <div style="text-align: right; color: rgb(90, 144, 245);">
                                <p>Muxbir: ${'Admin'}</p>
                            </div>
                        </div>
                    </div>
                    `;
            }
        })
}

fetch(`https://new.amudarya.uz/api/new/${urlId.slice(6)}`)
    .then(data => data.json())
    .then(data => {
        const news = document.querySelector(".new");
        news.innerHTML += `
            <div class="my-container">
                <div class="my-card">
                    <div>
                        <h5 style="font-weight: 700;">${data.news.title}</h5>
                        <div style="margin: 10px 0">
                            <p id="date" style="display: inline-block; color: rgb(90, 144, 245)">${data.news.created_at.slice(0, 10)}</p>
                            <p style="display: inline-block; color: rgb(90, 144, 245); font-size: 10px">${+data.news.created_at.slice(11, 13) + 5}:${data.news.created_at.slice(14, 16)}</p>
                        </div>
                    </div>
                    <img class="my-card-image" src="/images/news/${data.news.image_path}">
                    <!--<div style="position: relative; top: -100px; text-align: end; height: 3px">
                        <i style="font-size: 40px;" class="bi bi-arrow-left-square"></i>
                        <i style="font-size: 40px;" class="bi bi-arrow-right-square"></i>
                    </div>-->
                    <div style="margin-top: 10px;">
                        <p style="text-align: justify;">${data.news.content}</p>
                    </div>
                    <div style="text-align: right; color: rgb(90, 144, 245);">
                        <p>Muxbir: ${'Admin'}</p>
                    </div>
                </div>
            </div>
            `;
    })
