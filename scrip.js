document.addEventListener("DOMContentLoaded", function() {
    fetch('posts.json')
        .then(response => response.json())
        .then(data => {
            const postList = document.getElementById('post-list');
            data.forEach(post => {
                const postCard = document.createElement('div');
                postCard.className = 'col-md-4';
                postCard.innerHTML = `
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">${post.title}</h5>
                            <p class="card-text">${post.content}</p>
                            <p class="text-muted">${post.created_at}</p>
                        </div>
                    </div>
                `;
                postList.appendChild(postCard);
            });
        })
        .catch(error => console.error('Error loading posts:', error));
});
