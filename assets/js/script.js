let tglClickBox = document.getElementById("tgl_click_btn");
let tglBox = document.getElementById("toggle_box");
let main = document.getElementById("main");

    tglClickBox.addEventListener("click",()=>{
        tglBox.classList.toggle("active");
        main.addEventListener("click",()=>{tglBox.classList.remove("active")})
    })
let usr_clk = document.getElementById("usr_dlt_clk");
    usr_clk.addEventListener("click",function(e){
    e.preventDefault();
});

let phn_clk = document.getElementById("dlt_phn_clk");
    phn_clk.addEventListener("click",function(e){
    e.preventDefault();
});