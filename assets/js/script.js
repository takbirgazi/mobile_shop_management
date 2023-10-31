let tglClickBox = document.getElementById("tgl_click_btn");
let tglBox = document.getElementById("toggle_box");
let main = document.getElementById("main");

    tglClickBox.addEventListener("click",()=>{
        tglBox.classList.toggle("active");
        main.addEventListener("click",()=>{tglBox.classList.remove("active")})
    })
