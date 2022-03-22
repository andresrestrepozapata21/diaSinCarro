var form = document.getElementById("form");
var answer = document.getElementById("answer");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log("me diste un click");

  let datos = new FormData(form);

  fetch("server/register.php", {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data === "error") {
        answer.innerHTML = `
          <div class="alert alert-danger" role="alert">
                Llena todos los campos
            </div>
          `;
      } else {
        
        answer.innerHTML = `
        <div class="alert alert-primary" role="alert">
              ${data}
          </div>
        `;
        form.reset();
      }
    });
});
