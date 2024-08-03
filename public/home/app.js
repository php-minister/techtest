document.addEventListener("DOMContentLoaded", function() {
    const articlesList = document.getElementById('articles-list');

    fetch('http://localhost/TechTest/public/api/articles')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            data.forEach(article => {
                const articleElement = document.createElement('div');
                articleElement.className = 'article';
                
                articleElement.innerHTML = `
                    <h2>${article.title}</h2>
                    <p>${article.content}</p>
                `;
                
                articlesList.appendChild(articleElement);
            });
        })
        .catch(error => {
            console.error('Error fetching articles:', error);
            articlesList.innerHTML = '<p>Failed to load articles.</p>';
        });
});