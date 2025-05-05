fetch('https://new.amudarya.uz/api/obj/locations/1')
    .then(data => data.json())
    .then(data => {
        let greenArea = document.querySelector('.green__area'),
            greeAreaTBody = greenArea.querySelector('tbody'),
            treeCount = document.querySelector('.tree__count'),
            count = 0;

        for (let i = 0; i < data.Data.length; i++) {
            greeAreaTBody.innerHTML += `
                <tr>
                    <th scope="row">${data.Data[i].id}</th>
                    <td>${data.Data[i].address}</td>
                    <td>${data.Data[i].tree_count}</td>
                </tr>
                `
            count += data.MapData[i].tree_count
        }
        treeCount.textContent = count
    })