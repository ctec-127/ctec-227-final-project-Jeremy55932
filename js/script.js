fetch("helper/is_logged_in.php")
  .then((res) => res.json())
  .then(function (res) {
    if (res.status == "yes") {
      const login = document.querySelector("#login");
      login.style.display = "none";
      const register = document.querySelector("#register");
      register.style.display = "none";
      const profile = document.querySelector("#profile");
      profile.style.display = "inline-block";
      const bookmark = document.querySelector("#bookmark");
      bookmark.style.display = "inline-block";
      const logout = document.querySelector("#logout");
      logout.style.display = "inline-block";

      logout.addEventListener("click", function (e) {
        e.preventDefault();
        fetch("helper/logout_ajax.php")
          .then((res) => res.json())
          .then(function (res) {
            if (res.status == "success") {
              login.style.display = "inline-block";
              logout.style.display = "none";
              document.querySelector("h1").innerText = "Welecome to our Site!";
              document.location.href = "main.php";
            }
          });
      });
    }
  });
