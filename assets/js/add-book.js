// Make each row clickable
  document.querySelectorAll(".clickable-row").forEach(row => {
    row.addEventListener("click", () => {
      const href = row.getAttribute("data-href");
      if (href) window.location.href = href;
    });
  });