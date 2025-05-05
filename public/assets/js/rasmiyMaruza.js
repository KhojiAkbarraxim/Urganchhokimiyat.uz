fetch("https://new.amudarya.uz/api/events/2")
    .then((data) => data.json())
    .then((data) => {

        for (let i = 0; i < data.Data.data.length; i++) {
            document.querySelector(".rasmiy-maruza").innerHTML += `
            <div class="my-container" id="id${data.Data.data[i].id}">
                <div class="my-card">
                    <img class="my-card-image" src="/images/news/${data.Data.data[i].image_path}">
                    <div style="font-size: 17px; margin: 5px 10px 0px 10px">
                        <p style="display: inline-block; color: rgb(90, 144, 245)">${data.Data.data[i].created_at.slice(0, 10)}</p>
                        <p style="display: inline-block; color: rgb(90, 144, 245); font-size: 10px;">${+data.Data.data[i].created_at.slice(11, 13) + 5}:${data.Data.data[i].created_at.slice(14, 16)}</p>
                    </div>
                    <div>
                        <h4 style="margin-inline: 10px; text-align: justify" class='more'>${data.Data.data[i].title}</h3>
                    </div>
                </div>
            </div>
            `;
        }
    })
    .catch(() => {
        document.querySelector('.not__found-rasmiymaruza').style.display = 'block'
    })