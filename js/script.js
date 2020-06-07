fetch("helper/is_logged_in.php")
  .then((res) => res.json())
  .then(function (res) {
    if (res.status == "yes") {
      const login = document.querySelector("#login");
      login.style.display = "none";
      const register = document.querySelector("#register");
      register.style.display = "none";
      const home = document.querySelector("#home");
      home.style.display = "none";
      const logged = document.querySelector("#logged");
      logged.style.display = "inline-block";
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
              home.style.display = "inline-block";
              logged.style.display = "none";
              document.querySelector("#message").innerHTML =
                "<p>You have been logged out</p>";
              document.querySelector("h1").innerText = "Welecome to our Site!";
            }
          });
      });
    }
  });
