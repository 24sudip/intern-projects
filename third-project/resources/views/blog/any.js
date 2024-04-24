//
const icon_block = document.querySelector(".icon_block");
const link_icon = document.querySelector("#link_icon");
icon_block.addEventListener("click", function (e) {
    link_icon.textContent = e.target.value;
    console.log(e.target.class);
});
