require('./bootstrap');
const titleToSlug = require('./modules/title-to-slug')
if (document.querySelector('#title') && document.querySelector('#slug')) {
    titleToSlug();
}
