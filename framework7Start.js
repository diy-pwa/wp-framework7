window.addEventListener('load', function () {
    var $ = Dom7;

    const app = new Framework7({
        el: '#app',
        theme: 'md',
        darkMode: "auto",
        clicks: {
            externalLinks: 'a',
        }

    })

    // create searchbar
    app.searchbar.create({
        el: '.searchbar',
        searchContainer: '.list-email',
        searchIn: '.item-title',
        on: {
            search(sb, query, previousQuery) {
                console.log(query, previousQuery);
            }
        }
    });
});