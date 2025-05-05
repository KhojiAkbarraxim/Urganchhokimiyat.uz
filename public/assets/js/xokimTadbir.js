fetch("https://new.amudarya.uz/api/events/1")
    .then(data => data.json())
    .then(data => {

        let xokimTadbir = document.querySelector(".xokim-tadbir");
        for (let i = 0; i < data.Data.data.length; i++) {
            xokimTadbir.innerHTML += `
                <div class="my-container" id="id${data.Data.data[i].id}">
                    <div class="my-card">
                        <img class="my-card-image" src="/images/news/${data.data.Data.data[i].image_path}">
                        <div style="font-size: 17px; margin: 5px 10px 0px 10px">
                            <p style="display: inline-block; color: rgb(90, 144, 245)">${data.data.Data.data[i].created_at.slice(0, 10)}</p>
                            <p style="display: inline-block; color: rgb(90, 144, 245); font-size: 10px;">${+data.data.Data.data[i].created_at.slice(11, 13) + 5}:${data.Data.data[i].created_at.slice(14, 16)}</p>
                        </div>
                        <div>
                            <h4 style="margin-inline: 10px; text-align: justify" class='more'>${data.data.Data.data[i].title}</h3>
                        </div>
                    </div>
                </div>
                `;
        }
    })
    .catch(() => {
        document.querySelector('.not__found-xokimtadbir').style.display = 'block'
    })

// rasm carusel dagi next preveus button qoshish ushun
// slide.css file dan display: none ni ochirish garak

// <li class="splide__slide">
//     <img
//         src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cgravity=auto%2Cheight=552%2Cq=85%2Cwidth=1000/wp-content/uploads/inferno-in-cs2-18.jpg">
// </li>
// <li class="splide__slide">
//     <img
//         src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=cover%2Cgravity=auto%2Cheight=551%2Cq=85%2Cwidth=1000/wp-content/uploads/inferno-in-cs2-10.jpg">
// </li> 

