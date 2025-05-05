fetch("https://new.amudarya.uz/api/schedules")
    .then(data => data.json())
    .then(data => {
        let tbody = document.querySelector('.kun-tbody')
        for (const i of data.Data) {
            tbody.innerHTML += `
            <tr>
                <th class="id" scope="row">${i.id}</th>
                <td class="hokim-vakil">${i.hokimiyat_vakili}</td>
                <td class="description">${i.description}</td>
                <td class="time">${i.begin_date}</td>
                <td class="manzil">${i.qabul_joyi_manzili}</td>
            </tr>`
        }
    })
