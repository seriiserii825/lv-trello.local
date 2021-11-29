function titleToSlug() {
    document.addEventListener('DOMContentLoaded', function () {
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        title.addEventListener('blur', function () {
            let result = title.value.toLowerCase();
            result =  result.replace(/ /g, '-').replace(/[^\w-]+/g, ''); // trim
            slug.value = result;
        });
    });
}

module.exports = titleToSlug;
