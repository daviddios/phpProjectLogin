//API-KEY NewsAPI
//Doc: https://newsapi.org/docs/get-started

// url to get apple news from 
var url = 'https://newsapi.org/v2/everything?' +
          'q=Ourense&' +
          'from=2023-02-10&' +
          'sortBy=publishedAt&' +
          'language=es&'+
          'apiKey=f2dee2d6c9df40608e0d329406f2a7cf';

var req = new Request(url);

fetch(req)
    .then(function(response) {
        console.log(response.json());
    })