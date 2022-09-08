const d = document;

const get = async (url,callback) => {
  const imgs = d.querySelectorAll(".userImg>img");
  const json = await fetch(url+imgs.length);
  const { results }= await json.json();
  callback(results,imgs);
}

const post = async(url,callback) => {

}

export {get, post}