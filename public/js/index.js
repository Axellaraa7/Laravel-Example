import { get } from './modules/ajax.js';

const d = document,
url = "https://randomuser.me/api/?results=";

d.addEventListener("DOMContentLoaded",async ()=>{
  switch(location.pathname){
    case "/ex":
      get(url,(results,elements) => {
        elements.forEach((element,index)=>{
          element.src=results[index].picture.large;
        })
      });
    break;
    case "/components":
      d.querySelectorAll(".card>figure>img").forEach((img)=> img.src="https://via.placeholder.com/130x129/986123/ddd?text=user+img");
      break;
    default:
      console.log(location.pathname);
    break;
  }
}); 