function titleToSlug(){
    document.addEventListener('DOMContentLoaded', function () {
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        title.addEventListener('blur', function(){
            slug.value = title.value.toLowerCase();
        });
    });
}
module.exports = titleToSlug;
