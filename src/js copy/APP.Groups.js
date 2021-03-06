var APP = APP || {};

APP.Groups = {
  setUp: function() {
    var that = this,
        group = document.querySelector('a.group'),
        section = document.querySelector('#main-section');

    $(group).on('click', function(event) {
      event.preventDefault();
      that.getData(); // call request
      section.innerHTML = " "; //empty section
      section.style.zIndex = "1";
    });
  },

  getData: function() {
    var body = document.querySelector("body");

    $.ajax({
      url: "proxyGroups.php",
      dataType: "JSON",
      beforeSend: function() {
        body.classList.add('loading');
      },

      success: function(groups) {
        body.classList.remove('loading');
        var ul = document.createElement('ul');

        $.each(groups, function(key, grupo) {
          // var grupo = groups;
          var id = grupo.id,
              nome = grupo.name,
              distancia = grupo.distance,
              horario = grupo.schedule,
              info = grupo.information,
              apoio = grupo.car,
              preco = grupo.price,
              level = grupo.level,
              latitude = grupo.lat,
              longitude = grupo.lon;

              // pegando body criando os elementos
              var section = document.querySelector("#main-section"),
                  li = document.createElement('li'),
                  h5 = document.createElement('h5'),
                  pDistancia = document.createElement('p');
                  pLevel = document.createElement('p');
                  spanPreco = document.createElement('span');
                  spanApoio = document.createElement('span');

              // adicionando classes
              ul.classList.add('grupos-list');
              ul.id = "grupos-list";
              li.classList.add('grupos-item');
              h5.classList.add('grupos-nome');
              pDistancia.classList.add('grupos-distancia');
              pLevel.classList.add('grupos-level');
              spanPreco.classList.add('grupos-preco');
              spanApoio.classList.add('grupos-apoio');

              // append
              section.appendChild(ul);
              ul.appendChild(li);
              li.appendChild(h5);
              li.appendChild(pDistancia);
              li.appendChild(pLevel);
              li.appendChild(spanPreco);
              li.appendChild(spanApoio);

              // insert data
              li.id = id;
              h5.innerHTML = nome;
              pDistancia.innerHTML = 'Aprox. ' + distancia + ' km de distância';
              pLevel.innerHTML = level + ' (~ ' + distancia +'km)';

              // check level
              if (level == 'intermediate') {
                pLevel.classList.add('intermediate');
              } else if (level == 'starter') {
                pLevel.classList.add('starter');
              } else if (level == 'advanced') {
                pLevel.classList.add('advanced');
              }

              // check price
              if (preco == '0') {
                spanPreco.classList.add('free');
              } else {
                spanPreco.classList.add('paid');
              }

              // check apoio
              if (apoio == '1') {
                spanApoio.classList.add('yes-apoio');
              } else {
                spanApoio.classList.add('no-apoio');
              }
        });

      },

      error: function() {
        body.classList.add('error');
      }
    });
  }

}