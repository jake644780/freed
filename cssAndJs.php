<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    color: wheat;
}   
body{
        background-image: url("images/back2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
}
.nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 15px 200px;
  background: #4a98f7;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.nav,
.nav .nav-links {
  display: flex;
  align-items: center;
}
.nav {
  justify-content: space-between;
}
a {
  color: #fff;
  text-decoration: none;
}
.nav .logo {
  font-size: 22px;
  font-weight: 500;
}
.nav .nav-links {
  column-gap: 20px;
  list-style: none;
}
.nav .nav-links a {
  transition: all 0.2s linear;
}
.nav.openSearch .nav-links a {
  opacity: 0;
  pointer-events: none;
}
.nav .navOpenBtn,
.nav .navCloseBtn {
  display: none;
}
/* responsive */
@media screen and (max-width: 1160px) {
  .nav {
    padding: 15px 100px;
  }
  .nav .search-box {
    right: 150px;
  }
}
@media screen and (max-width: 950px) {
  .nav {
    padding: 15px 50px;
  }
  .nav .search-box {
    right: 100px;
    max-width: 400px;
  }
}
@media screen and (max-width: 768px) {
  .nav .navOpenBtn,
  .nav .navCloseBtn {
    display: block;
  }
  .nav {
    padding: 15px 20px;
  }
  .nav .nav-links {
    position: fixed;
    top: 0;
    left: -100%;
    height: 100%;
    max-width: 280px;
    width: 100%;
    padding-top: 100px;
    row-gap: 30px;
    flex-direction: column;
    background-color: #11101d;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    z-index: 100;
  }
  .nav.openNav .nav-links {
    left: 0;
  }
  .nav .navOpenBtn {
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .navCloseBtn {
    position: absolute;
    top: 20px;
    right: 20px;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .search-box {
    top: calc(100% + 10px);
    max-width: calc(100% - 20px);
    right: 50%;
    transform: translateX(50%);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }
}  
</style>
<script>
        const nav = document.querySelector(".nav"),
    searchIcon = document.querySelector("#searchIcon"),
    navOpenBtn = document.querySelector(".navOpenBtn"),
    navCloseBtn = document.querySelector(".navCloseBtn");
    searchIcon.addEventListener("click", () => {
    nav.classList.toggle("openSearch");
    nav.classList.remove("openNav");
    if (nav.classList.contains("openSearch")) {
        return searchIcon.classList.replace("uil-search", "uil-times");
    }
    searchIcon.classList.replace("uil-times", "uil-search");
    });
    navOpenBtn.addEventListener("click", () => {
    nav.classList.add("openNav");
    nav.classList.remove("openSearch");
    searchIcon.classList.replace("uil-times", "uil-search");
    });
    navCloseBtn.addEventListener("click", () => {
    nav.classList.remove("openNav");
    });

</script>