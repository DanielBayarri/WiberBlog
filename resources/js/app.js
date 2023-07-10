import './bootstrap';

    const filterButtons = document.querySelectorAll('#tag');
    const posts = document.querySelectorAll('.post-card');
  
    filterButtons.forEach((button) => {
      button.addEventListener('click', function () {
        const filter = this.getAttribute('data-filter');
  
        posts.forEach((post) => {
          const postTag = post.querySelector('.tag').textContent;
          post.style.display = (filter === 'all' || postTag === filter) ? 'flex' : 'none';
        });

        filterButtons.forEach((button) => {
          button.classList.remove('active-tag');
        });
        this.classList.add('active-tag');
      });
    });
    