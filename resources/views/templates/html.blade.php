<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="">
  <style>
    *{
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    :root{
      --main: #040A0E;
      --sec: #4380B1;
      --third: #295074;
      --fourth: #3A668B;
      --white: #ded;
      --black: #232;
    }

    body{
      display: flex;
      justify-content: flex-start;
      align-items: center;
      flex-flow: column nowrap;
      gap: 1rem;

      padding: 1rem;
      color: var(--white);
      background-color: var(--main);
    }

    .mainLink{
      display: inline-block;
      padding: 0 1rem;
      color: inherit;
      text-decoration: none;
      transition: .15s all ease 0s;
    }

    .mainLink:hover{
      transform: scale(1.25);
    }

    .secLink{
      display: inline-block;
      padding: .5rem 1rem;
      color: inherit;
      text-decoration: none;
      border: 2px solid white;
    }

    main{
      min-height: 80vh;
    }

    h1{
      text-align: center;
    }

    .cardContainer{
      max-width: 1140px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
      padding: 1rem;
    }

    .card{
      height: 132px;
      display: flex;
      flex-flow: column wrap;
      gap: .5rem;
      border-radius: 5px;
      box-shadow: 0px 0px 5px 1px var(--white);
      font-size: 10px;
    }

    .userImg{
      flex: 1 1 132px;
      border-radius: inherit;
    }

    .userImg>img{
      width: 100%;
      height: 100%;
      border-radius: inherit;
    }

    .infoUser{
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      flex: 1 1 auto;
      width: calc(100% - 132px - .5rem);
    }

    .bioUser{ 
      flex: 1 1 auto;
      width: calc(100% - 132px - .5rem );
    }

    @media screen and (max-width: 990px){
      .cardContainer{
        grid-template-columns: 1fr;
      }
    }

    @media screen and (max-width: 660px){
      .cardContainer{
        grid-template-columns: 1fr 1fr;
      }
      .card{
        height: auto;
        flex-flow: column nowrap;
      }
      .userImg{
        width: 100%;
        flex: 0 1 150px;
      }
      .infoUser,.bioUser{
        width: 100%;
      }

      .infoUser, .bioUser{
        flex: 1 1 auto;
        padding: .5rem 1rem;
      }
    }

    @media screen and (max-width: 500px){
      .cardContainer{
        grid-template-columns: 1fr;
      }
    }

    /* GRID
    .cardContainer{
      max-width: 1140px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
      padding: 1rem;
      border: 2px solid white;
    }

    .card{
      display: grid;
      grid-template-columns: 1fr 2fr;
      grid-template-rows: 1fr 2fr;
      grid-template-areas: "img info" "img bio";
      gap: .5rem;
      border-radius: 5px;
      box-shadow: 0px 0px 5px 1px var(--white);
    }

    .userImg{
      grid-area:img; 
      border: 2px solid green;
    }

    .userImg>img{
      width: 100%;
      height: 100%;
    }

    .infoUser{
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      grid-area:info;
      border: 2px solid blue;
    }

    .bioUser{ 
      grid-area:bio;
      border: 2px solid violet;
    } 
    */
  </style>
</head>
<body>
  <header>
    <nav class="nav">
      <a href={{route("exIndex")}} class="mainLink">Home</a> |
      <a href={{route("exCreate")}} class="mainLink">Create</a>
    </nav>
  </header>
  <main>
    @yield('main')
  </main>
  <footer>

  </footer>
  <script>
    const d = document;

    d.addEventListener("DOMContentLoaded",async ()=>{
      const imgs = d.querySelectorAll(".userImg>img");
      const json = await fetch("https://randomuser.me/api/?results="+imgs.length);
      const { results }= await json.json();
      console.log(results);
      imgs.forEach((img,index)=>{
        img.src=results[index].picture.large;
      })
    }); 
  </script>
</body>
</html>