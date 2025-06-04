<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina web #7 de mi pagina</title>
</head>
<body>
    <style>
        *{
            box-sizing: border-box; 
            
        }
        :root{
            --primary-color: #add5f5;
            --secundary-color: rgb(73, 188, 255);
            --terceary-color: rgb(240, 164, 64);
            --color-cuarto: #008cff;
            --color-quinto: #e9ffac;

        }
        body{
            background-color: var(--primary-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        header{
            padding: 16px;
            display: flex;
            justify-content: flex-end;
            background-color: var(--color-quinto);
        }
        .search{
            background-color: #fff;
            border: 1.6px solid var(--terceary-color);
            border-radius: 50px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
            padding: 10px 16px;
            color: black;
        }
        .search::placeholder{
            color: black;
        }
        .search:focus{
            outline: none;
            background-color:var(--secundary-color);

        }
        main{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;

        }
        .personaje {
            width: 400px;
            margin: 15px;
            background-color: var(--primary-color);
            box-shadow: 0 5px 5px black;
            position: relative;
            overflow: hidden;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;

        }
        .personaje img{
            width: 100%;
            height: 80%;
            object-fit: contain;
        }
        .personaje-info{
            color: rgb(42, 63, 56);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4px;
            padding: 8px 15px 15px;
            letter-spacing: 8px;
        }
        .personaje-info h3{
            color: var(--primary-color);
            margin-top: 0px;

        }
        .personaje-info h1{
            color: var(--secundary-color);
            margin-top: 0px;
        }
       
        .overview{
            background-color: bisque;
            padding: 2rem;
            position: absolute;
            left: 0;
            bottom: 0;
            right: 0;
            max-height: 100%;
            transform: translateY(101%);
            overflow-y: auto;
            transition: transform 1s ease-in;
        }
        .personaje-info .overview {
            transform: translateY(0);
        }
    </style>


  
<header>
    <img src="logo.png" alt="logo" style="width: auto" height="50px">
    <form id="form">
        <input type="text" id="search" class="search" placeholder="Busca tu personaje">
    </form>
</header>
<main id="main"></main>

<script>
    const API_URL = 'https://dragonball-api.com/api/characters';
    const main = document.getElementById('main');
    const form = document.getElementById('form');
    const search = document.getElementById('search');
    const SEARCH_API = 'https://dragonball-api.com/api/characters?name=';

    getPersonajes(API_URL)

    async function getCharacters(url){
        const res = await fetch(url);
        const data = await res.json();
        showPersonajes(data.items || data);
    }
    function showCharacters(characters){
        main.innerHTML = '';

        characters.forEach((char) => {


            const {name, image, ki, maxKi, race, gender, description} = char;

            const charElements = document.createElement('div');
            charElements.classList.add('personaje');
            charElements.innerHTML = `
            <img src = "${image}" alt="${image}">
            <div class="movie-info"> 
                <h1>${id}</h1>
                <h3>${name}</h3>
               <br>
               ${race}
                    </div>
                    <div class = "overview">
                        <h3>Descripcion</h3>
                        <p><strong>ki:</strong> ${ki}</p>
                        <p><strong>max Ki::</strong> ${maxKi}</p>

                        ${description}
                    </div>`;
                main.appendChild(charElement);
        })}
      
            form.addEventListener('submit', (e) => {
                e.preventDefault()
                const searchTerm = search.value.toLowerCase();
                if(searchTerm && searchTerm !== ''){
                    getCharacters(SEARCH_API + `?name=${searchTerm}`)
                    search.value='';
                }else{window.location.reload();}

            })
</script>

</body>
</html>
