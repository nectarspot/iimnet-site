"use strict";

console.log('WORKER: executing.');

var version = 'v2::';

var offlineFundamentals = [
'index.php',
  './',
'/includes/css/bootstrap.min.css',
'/includes/css/fontawesome.css',
'/includes/css/montserrat.css',
'/includes/css/color-change-hv8-up.css',
'/includes/css/tabs.css',
'/includes/css/table.css',
'/includes/css/animate.css',
'/includes/css/header-footer-updated.css',
'/includes/css/owl.carousel.min.css',
'/includes/css/owl.theme.default.min.css',
'/includes/snippets/header-updated.php',
'/includes/snippets/footer-updated-index2.php',



];

self.addEventListener("install", function(event) {
  console.log('WORKER: install event in progress.');
  event.waitUntil(
    caches
      .open(version + 'fundamentals')
      .then(function(cache) {
          return cache.addAll(offlineFundamentals);
      })
      .then(function() {
        console.log('WORKER: install completed');
      })
  );
});

self.addEventListener("fetch", function(event) {
  console.log('WORKER: fetch event in progress.');
  if (event.request.method !== 'GET') {
       console.log('WORKER: fetch event ignored.', event.request.method, event.request.url);
    return;
  }
  event.respondWith(
    caches
          .match(event.request)
      .then(function(cached) {
        var networked = fetch(event.request)
          // We handle the network request with success and failure scenarios.
          .then(fetchedFromNetwork, unableToResolve)
          // We should catch errors on the fetchedFromNetwork handler as well.
          .catch(unableToResolve);

        console.log('WORKER: fetch event', cached ? '(cached)' : '(network)', event.request.url);
        return cached || networked;

        function fetchedFromNetwork(response) {
            var cacheCopy = response.clone();

          console.log('WORKER: fetch response from network.', event.request.url);

          caches
            // We open a cache to store the response for this request.
            .open(version + 'pages')
            .then(function add(cache) {
                   cache.put(event.request, cacheCopy);
            })
            .then(function() {
              console.log('WORKER: fetch response stored in cache.', event.request.url);
            });

          // Return the response so that the promise is settled in fulfillment.
          return response;
        }

        function unableToResolve () {

          console.log('WORKER: fetch request failed in both cache and network.');

          return new Response('<h1>Service Unavailable</h1>', {
            status: 503,
            statusText: 'Service Unavailable',
            headers: new Headers({
              'Content-Type': 'text/html'
            })
          });
        }
      })
  );
});

self.addEventListener("activate", function(event) {
  console.log('WORKER: activate event in progress.');

  event.waitUntil(
    caches
        .keys()
      .then(function (keys) {
        // We return a promise that settles when all outdated caches are deleted.
        return Promise.all(
          keys
            .filter(function (key) {
              // Filter by keys that don't start with the latest version prefix.
              return !key.startsWith(version);
            })
            .map(function (key) {
                   return caches.delete(key);
            })
        );
      })
      .then(function() {
        console.log('WORKER: activate completed.');
      })
  );
});