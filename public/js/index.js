const d = document;

d.addEventListener("DOMContentLoaded",async ()=>{
  const imgs = d.querySelectorAll(".userImg>img");
  const json = await fetch("https://randomuser.me/api/?results="+imgs.length);
  const { results }= await json.json();
  imgs.forEach((img,index)=>{
    img.src=results[index].picture.large;
  })
}); 