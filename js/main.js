function onLoad () {
   const 
        btnSandwitch = document.querySelector(".right_menu_sandwich"),
        menuList = document.querySelector(".menu_list"),
        menuListItems = document.querySelectorAll(".menu_list-item-a");

    btnSandwitch.addEventListener("click", () => {
        menuList.classList.toggle("menu_list--open");
    });
    

   
    // menuListItems.forEach((item) => {
    //     item.addEventListener("click", menuToggle);
    // });

    // function menuToggle(evt) {
    //     menuListItems.forEach((item) => {
    //         item.classList.remove("menu_list-item--checked");
    //     });
    //     evt.target.classList.add("menu_list-item--checked");
    // }
}