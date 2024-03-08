
document.getElementById("toggleCadastra").addEventListener("click", function () {
    document.getElementById("login").style.display = "none";
    document.getElementById("cadastra").style.display = "block";
  });
  
   
  
  document.getElementById("toggleLogin").addEventListener("click", function () {
    document.getElementById("cadastra").style.display = "none";
    document.getElementById("login").style.display = "block";
  });

  var nav = true;
  function ativaNavUser() {
    if (nav) {
      document.getElementById("nav-user").classList.toggle("ativado");
      nav = false;
    }
    else {
      document.getElementById("nav-user").classList.remove("ativado");
      nav = true;
    }
  }
    var navProduct = true;
    function ativaNavProduct() {
      if (navProduct) {
        document.getElementById("nav-product").classList.toggle("ativado");
        navProduct = false;
      }
      else {
        document.getElementById("nav-product").classList.remove("ativado");
        navProduct = true;
      }
    }
      var navClient = true;
      function ativaNavClient() {
        if (navClient) {
          document.getElementById("nav-client").classList.toggle("ativado");
          navClient = false;
        }
        else {
          document.getElementById("nav-client").classList.remove("ativado");
          navClient = true;
        }
  }
  var navPerfil = true;
  function ativaPerfil() {
    if (navPerfil) {
      document.getElementById("nav-perfil").classList.toggle("ativado");
      navPerfil = false;
    }
    else {
      document.getElementById("nav-perfil").classList.remove("ativado");
      navPerfil = true;
    }
}