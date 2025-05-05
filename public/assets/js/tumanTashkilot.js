fetch('https://new.amudarya.uz/api/companies')
    .then(data => data.json())
    .then(data => {

        for (let i = 0; i < data.Tuman_tashkilotlari.data.length; i++) {
            document.querySelector(".kun-tbody").innerHTML += `
            <tr data-category="${data.Tuman_tashkilotlari.data[i].company_type_uz}" style="text-align: start; vertical-align: middle;">
                <td>${data.Tuman_tashkilotlari.data[i].id}</td>
                <td style="font-weight: 700;">${data.Tuman_tashkilotlari.data[i].name}</td>
                <td>${data.Tuman_tashkilotlari.data[i].director}</td>
                <td>${data.Tuman_tashkilotlari.data[i].address}<br>
                    ${data.Tuman_tashkilotlari.data[i].tel}<br>
                    ${data.Tuman_tashkilotlari.data[i].email}
                </td>
                <td style="text-align: justify">${data.Tuman_tashkilotlari.data[i].description_uz.slice(0, 120)}...<span class="more" data-bs-toggle="modal" data-bs-target="#myModal">batafsil</span></td>
                <div class="modal fade" id="myModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>${data.Tuman_tashkilotlari.data[i].description_uz}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Чиқиш</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>`
        }
    })
    .catch(() => {
        document.querySelector('.not__found-tumantashkilot').style.display = 'block';
    })

fetch('https://new.amudarya.uz/api/companies')
    .then(data => data.json())
    .then(data => {

        let tumanTashkilotDropwdown = document.querySelector('#tuman__tashkilot-dropwdown'),
            element = '',
            kunTbody = document.querySelector(".kun-tbody"),
            tr = kunTbody.querySelectorAll('tr')

        for (let i = 0; i < data.Tuman_tashkilotlari.data.length; i++) {
            tumanTashkilotDropwdown.innerHTML +=
                `<li class="dropdown-item" id="tashkilotid${i + 1}">${data.Tuman_tashkilotlari.data[0].company_type_uz}</li>`
        }

        for (let i = 0; i < 3; i++) {
            tumanTashkilotDropwdown.querySelector(`#tashkilotid${i + 1}`).addEventListener('click', (event) => {
                element = event.target
                if (element.innerText == tr[i]) {
                    tr[i].style.display = 'block'
                }
            })
        }

    })

setTimeout(() => {
    let kunTbody = document.querySelector('.kun-tbody'),
        dataCategory = kunTbody.querySelectorAll('[data-category]'),
        tumanTashkilotDropwdown = document.querySelector('#tuman__tashkilot-dropwdown')

    tumanTashkilotDropwdown.addEventListener('click', (event) => {
        let categoryBtn = event.target
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