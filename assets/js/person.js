$(document).ready(function() {

  var pid = localStorage.getItem("selectedPersonId");
  console.log(pid);
  $.get("rest/actors/"+pid, function(person) {
    $(".person_name").text(person.FirstName + " " + person.LastName);

    $(".img img").attr("src", person.Image);

    $(".bio").text(person.Bio);
  });

  $.get("rest/actor/"+pid+"/movies", function(credits) {
    credits.forEach(function(credit) {
      var movieID = credit.MovieID;
      console.log(credit.MovieID);
      $.get("rest/movies/id/"+movieID, function(movie) {
        console.log(movie)
        var creditHtml = `
          <div class="d-flex flex-column container-card-credit align-items-center pb-5">
            <img style="width: 150px; height: 210px; object-fit: cover;" src="${movie.Image}" alt="">
            <div class="text pt-1 ps-1" style="width: 100%; background:var(--fade-black);">
              <h5>${movie.Title}</h5>
            </div>
          </div>
        `;

        $(".credit_container").append(creditHtml);
      });
    });
  });
});
