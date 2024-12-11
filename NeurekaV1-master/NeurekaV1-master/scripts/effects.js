function applyTransition() {
    document.body.classList.add('fade-out');
    setTimeout(() => {
      window.location.href = 'index.php';
    }, 500);
  }