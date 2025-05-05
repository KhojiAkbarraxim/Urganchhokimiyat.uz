fetch("https://new.amudarya.uz/api/receptions/0")
    .then(data => data.json())
    .then(data => {

        if (data.Data.data.length > 0) {
            document.querySelector('.not__found-sayorqabul').style.display = "none"
        }

        let firstTable = document.querySelector('.first-table'),
            tbody = firstTable.querySelector('tbody')
        for (const i of data.Data.data) {
            tbody.innerHTML += `
            <tr>
                <th class="id" scope="row">${i.id}</th>
                <td class="hokim-vakil">${i.hokimiyat_vakili}</td>
                <td class="description">${i.desc_uz}</td>
                <td class="time">${i.begin_date}</td>
                <td class="manzil">${i.qabul_joyi_manzili}</td>
            </tr>`
        }
    })

fetch("https://new.amudarya.uz/api/receptions/1")
    .then(data => data.json())
    .then((data) => {

        let firstTable = document.querySelector('.second-table'),
            tbody = firstTable.querySelector('tbody')
        for (const i of data.Data.data) {
            tbody.innerHTML += `
            <tr>
                <th scope="row">${i.id}</th>
                <td>${i.hokimiyat_vakili}</td>
                <td>${i.desc_uz}</td>
                <td>${i.begin_date}</td>
                <td>${i.qabul_joyi_manzili}</td>
              </tr>
            `
        }

    })

let fArchiveBtn = document.querySelector(".first-archiveBtn"),
    sArchiveBtn = document.querySelector(".second-archiveBtn"),
    firstTable = document.querySelector(".first-table"),
    secondTable = document.querySelector(".second-table");

fArchiveBtn.addEventListener("click", () => {
    firstTable.style.display = "table";
    secondTable.style.display = "none";
    fArchiveBtn.classList.add("active__for-table");
    sArchiveBtn.classList.remove("active__for-table");
})

sArchiveBtn.addEventListener("click", () => {
    secondTable.style.display = "table";
    firstTable.style.display = "none";
    sArchiveBtn.classList.add("active__for-table");
    fArchiveBtn.classList.remove("active__for-table");
})