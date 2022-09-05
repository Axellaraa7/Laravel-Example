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
      resize: none;
    }
    :root{
      --main: #040A0E;
      --sec: #4380B1;
      --third: #295074;
      --fourth: #3A668B;
      --white: #ded;
      --black: #232;
      --red: #ba2345;
      --red2: #ff000033;
      --green: #23ba45;
      --green2: #00ff0033;  
    }
    body{
      padding: 1rem;
      color: var(--white);
      background-color: var(--main);
    }
    main{
      min-height: 80vh;
      align-self: stretch;
    }
    h1{
      text-align: center;
    }

    /* -- WELCOME --*/
    .card{
      height: 132px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px 1px var(--white);
      font-size: 12px;
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
    .infoUser,.bioUser{
      flex: 1 1 auto;
      width: calc(100% - 132px - .5rem);
    }
    .bioUser>p{ width: 40ch; }

    /* -- CREATE -- */

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
    } */
    .container960, .container1140{
      margin: 1rem auto;
      padding: 1rem;
    }
    .container960{ max-width: 960px; }
    .container1140{ max-width: 1140px; }
    .formGroup2>div{ 
      flex: 1 1 auto;
      padding: .5rem 1rem;
      border: 2px solid white;
    }
    .alert{
      max-width: 720px;
      flex: 1 1 auto;
      padding: .25rem .5rem;
      border-radius: 5px;
    }
    .alertDanger{
      border: 2px solid var(--red);
      color: var(--red);
      background-color: var(--red2);
    }
    .inputText,.inputArea, .inputDate{ 
      width: 250px;
      flex: 1 1 250px;
      padding: .25rem .5rem;
    }
    .btn{
      display: block;
      padding: 5px 10px;
      cursor: pointer;
      border: none;
      background-color: transparent;
      border-radius: 5px;
      transition: .15s all ease 0s;
    }
    .btn:hover{ transform: scale(1.25); }
    .btnMain{ color: var(--white); }
    .btnSec{ 
      color: var(--white); 
      border: 1px solid var(--white);
    }
    .dFlex{ display: flex; }
    .flexColumnWrap{ flex-flow: column wrap; }
    .flexColumn{ flex-flow: column nowrap; }
    .flexRowWrap{ flex-flow: row wrap; }
    .flexRow{ flex-flow: row nowrap; }
    .dGrid{ display: grid; }
    .gridCol2x1fr{ grid-template-columns: 1fr 1fr; }
    .jcCenter{ justify-content: center; }
    .jcStart{ justify-content: start; }
    .jcEvenly{ justify-content: space-evenly; }
    .jcAround{ justify-content: space-around; }
    .aiCenter{ align-items: center; }
    .aiStart{ align-items: start;}
    .gap0h{ gap: .5rem; }
    .gap1{ gap: 1rem; }
    .gap1h{ gap: 1.5rem; }
    .gap2{ gap: 2rem; }
  </style>
</head>
<body class="dFlex jcStart aiCenter flexColumn gap1">
    <nav class="dFlex gap1 aiCenter">
      <a href="{{route("exIndex")}}" class="btn btnMain">Home</a> | 
      <a href="{{route("exCreate")}}" class="btn btnMain">Create</a>
    </nav>
  </header>
  <main>
    <h1>@yield('h1')</h1>
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