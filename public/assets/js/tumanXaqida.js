fetch('https://new.amudarya.uz/api/mfys')
    .then(data => data.json())
    .then(data => {
        document.querySelector('.mfys__count').textContent = data.count
    })